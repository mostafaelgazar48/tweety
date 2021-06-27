<form action="<?php echo e(route('follow',$user->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <button class="float-right btn btn-primary mr-2">

        <?php if(auth()->user()->is_following($user)): ?>
            <i class="fas fa-user-minus"></i>
        <?php else: ?>
            <i class="fas fa-user-plus"></i>
        <?php endif; ?>

    </button>

</form>
<?php /**PATH /opt/lampp/htdocs/tweety/resources/views/components/follow-button.blade.php ENDPATH**/ ?>