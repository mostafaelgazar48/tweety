<?php $__env->startSection('main'); ?>
<script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId=<?php echo e($res['id']); ?>"></script>
<form action="<?php echo e(route('verify')); ?>" class="paymentWidgets" data-brands="VISA MASTER MADA"></form>
<?php $__env->stopSection(); ?>
<?php /**PATH /opt/lampp/htdocs/tweety/resources/views/ajax/form.blade.php ENDPATH**/ ?>