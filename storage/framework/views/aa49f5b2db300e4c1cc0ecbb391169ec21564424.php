<?php $__env->startSection('content'); ?>

    <h3 class="d-flex justify-content-center"> About Verified Accounts</h3>
   <h5> Verfiying your account costs You  100$ </h5>
   <hr>
    <p> The blue verified badge on Twitter lets people know that an account of public interest is authentic. To receive the
        blue badge, your account must be authentic, notable, and active.</p>



        <h4>Notable</h4>
    <p>


        Your account must represent or otherwise be associated with a prominently recognized individual or brand, in line
        with the notability criteria described below. In addition to confirming the identity of the controller of the
        account, Twitter will verify the following types of accounts based on the criteria described. In all categories,
        Twitter may independently confirm qualifying affiliation through business partnerships or direct outreach:
    </p>
    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
            Successsfully verified
        </div>
    <?php endif; ?>

    <?php if(session('fail')): ?>
        <div class="alert alert-danger" role="alert">
            failed to verify
        </div>
    <?php endif; ?>
    <div id="showPayForm"></div>
    <a id="checkout" class="d-flex justify-content-center btn btn-primary" href="<?php echo e(route('checkout')); ?>">
        Verify Now
    </a>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

    <script>
        $(document).on('click', '#checkout', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'get',
                url: "<?php echo e(route('checkout')); ?>",
                success: function(data) {
                    if (data.status == true) {
                        $('#showPayForm').empty().html(data.content);
                    } else {}
                },
                error: function(reject) {}
            });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/tweety/resources/views/verify.blade.php ENDPATH**/ ?>