<?php $__env->startSection('content'); ?>

   <div class="flex-column mb-2">
       <div class="d-flex justify-content-center mb-3">
           <h3 class="text-muted"> People You May Know</h3>
       </div>

       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="row" style="margin-bottom: 20px">
               <div class="col-md-2">
                   <a href=" <?php echo e(route('profile',$user->username)); ?>">
                       <img src="<?php echo e(asset('storage/avatars/'.'RyCjKkjiTb18VULobXig7wsNPhqCjGFZQy7IqbUx.jpg')); ?>" class="rounded-lg" height="50">
                   </a>
               </div>

               <div class="col-md-8 float-left">
                   <h4 style="margin-bottom: 1px" class="d-inline"> <?php echo e($user->name); ?></h4>
               <?php if($user->is_following(auth()->user())): ?>
                       <span class="badge badge-secondary">Follows you</span>

                   <?php endif; ?>
                   <br>
                   <small class="text-muted"><?php echo e('@'.$user->username); ?></small>
               </div>
               <div class="col-md-2">
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
               </div>
           </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <div class="d-flex justify-content-center">
           <?php echo e($users->links()); ?>


       </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/tweety/resources/views/explore.blade.php ENDPATH**/ ?>