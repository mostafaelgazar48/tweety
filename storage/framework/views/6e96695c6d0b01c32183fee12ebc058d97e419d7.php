
<div class="rounded-lg" style="background-color:#efefef">

    <h3 class="text-muted j">Following</h3>

    <?php $__empty_1 = true; $__currentLoopData = auth()->user()->following; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="row">
    <div class="col-md-4 col-sm-2 pull-left pb-3">
        <a href="<?php echo e(route('profile',$user)); ?>">

        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
             alt="user"
             class="profile-photo-lg rounded-circle "
             height="50px"></a>
    </div>
    <div class="float-right col-md-8">
        <h6><a href="#" class="profile-link"><?php echo e($user->name); ?></a></h6>

        <small>Software Engineer</small>
    </div>

</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-muted "> No Friends Yet </p>

    <?php endif; ?>
</div>
<?php /**PATH /opt/lampp/htdocs/tweety/resources/views/friends.blade.php ENDPATH**/ ?>