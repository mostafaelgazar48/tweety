<?php $__env->startSection('content'); ?>

<div class="">
    <div class="position-relative mb-0">
        <img class="img-fluid rounded-lg " src="http://localhost:81/tweety/public/images/header.jpg" alt="">

        <img src="<?php echo e(asset('storage/'.$user->avatar)); ?>"
             alt="user" class="profile-photo-lg rounded-circle border-2 border-secondary
                    " height="60px" style="position: relative;bottom: 36px;left: 43%">

    </div>


</div >
<div>
    <div  class="float-left ">
        <h4> <?php echo e($user->name); ?></h4>
      <span class="text-muted"><p>@ <?php echo e($user->username); ?></p></span>
        <span class="text-success">Joined at : </span> <span><?php echo e(($user->created_at)?$user->created_at->diffForHumans():''); ?></span>

    </div>
    <?php if(auth()->user()->id === $user->id): ?>

    <a href="<?php echo e(route('editprofile',$user->id)); ?>" class="float-right btn btn-warning">Edit Profile</a>
    <a href="<?php echo e(route('verify')); ?>" class="float-right mr-2 btn btn-success">Verify Profile</a>

    <?php endif; ?>
    <?php if(auth()->user()->id != $user->id): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.follow-button','data' => ['user' => $user]]); ?>
<?php $component->withName('follow-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php endif; ?>
</div>


<div class="clearfix mb-0"></div>

<span class="font-weight-bold text-muted"> Bio :</span>
<p class="text-sm-left font-weight-lighter">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae commodi cumque dolore eum ex fuga iste iure necessitatibus odio
    , possimus quibusdam, quos saepe similique sunt ullam velit, veritatis voluptatum?
</p>


<hr>
<?php $__currentLoopData = $user->tweets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tweet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card">
        <div class="card-header Featured bg-light ">
            <a href="<?php echo e(route('profile',$tweet->user)); ?>">
                <img src="<?php echo e(asset('storage/'.$tweet->user->avatar)); ?>"
                     alt="user" class="profile-photo-lg rounded-circle float-left
                    " height="30px">
            </a>
            <p class=" ml-5"><?php echo e($tweet->user->name); ?></p>
        </div>
        <div class="card-body">
            <p class="card-text"><?php echo e($tweet->body); ?></p>
            <hr>
            <a href="#" class="btn btn-primary">Like</a>
            <i class="far fa-thumbs-up"></i>
        </div>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/tweety/resources/views/tweets/profile.blade.php ENDPATH**/ ?>