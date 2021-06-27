<div class=" border-bottom">
    <form method="POST" action="<?php echo e(route('tweet')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">

            <textarea class="bg-light form-control rounded-lg mb-2" name="tweet" id="" cols="30" rows="5" placeholder="What`s On Your Mind..."></textarea>
            <hr>
            <div class="col-md-2  col-sm-2 d-inline mt-2">
                <img src="<?php echo e(asset('storage/'.auth()->user()->avatar)); ?>" alt="user" class="profile-photo-lg rounded-circle " height="30px">
            </div>

            <button class=" btn btn-primary float-right"> Tweet</button>
        </div>

    </form>
    <?php $__errorArgs = ['tweet'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p class="text-center text-danger"> <?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH /opt/lampp/htdocs/tweety/resources/views/tweet_form.blade.php ENDPATH**/ ?>