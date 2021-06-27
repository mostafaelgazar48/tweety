
    <div class="card" style="<?php echo e(session('theme' )=='darkly'?'color:white;background:black':'color:black;background-color:white'); ?>">
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
            <div class="d-flex">
                    <form action="/tweety/public/tweets/<?php echo e($tweet->id); ?>/like" method="POST">
<?php echo csrf_field(); ?>
                        <div class="d-inline">
                            <button class="btn btn-secondary far fa-thumbs-up"></button>
                            <span> <?php echo e($tweet->likes ?:0); ?></span>
                        </div>

                    </form>
                    <form action="/tweety/public/tweets/<?php echo e($tweet->id); ?>/like" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <div class="d-inline ml-5">
                            <button class="btn btn-secondary far fa-thumbs-down"></button>
                            <span> <?php echo e($tweet->dislikes?:0); ?></span>
                        </div>
                     </form>
            </div>
        </div>
    </div>
<?php /**PATH /opt/lampp/htdocs/tweety/resources/views/tweets.blade.php ENDPATH**/ ?>