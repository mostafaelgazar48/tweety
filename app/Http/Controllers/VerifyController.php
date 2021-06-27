<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    //
    public function index(){
        if(request('id') && request('resourcePath')){
            $paymentStatus =$this->getPaymentStatus(request('id'),request('resourcePath'));
            if(isset($paymentStatus['id'])){
                return redirect('verify')->with('success','verfied');
            }else{
                return redirect('verify')->with('fail','fail to verify');

            }
        }
        return view('verify');
    }

    public function getCheckoutId(){
        $verifyPrice= 100;
        $url = "https://test.oppwa.com/v1/checkouts";
        $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
                    "&amount=".$verifyPrice .
                    "&currency=EUR" .
                    "&paymentType=DB";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                       'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $res= json_decode($responseData,true);

        $view = view('ajax.form')->with(['res' =>$res])->renderSections();
        return response()->json([
            'status' =>true,
            'content' => $view['main']
        ]);
    }

    private function getPaymentStatus($id,$resourcePath){
        $url = "https://test.oppwa.com/";
        $url .=$resourcePath;
	    $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                   'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$responseData = curl_exec($ch);
	if(curl_errno($ch)) {
		return curl_error($ch);
	}
	curl_close($ch);
	 $res =json_decode($responseData,true);
     return $res;
    }
}
