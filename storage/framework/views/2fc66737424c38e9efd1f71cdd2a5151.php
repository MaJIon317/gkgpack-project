<div>
   <?php echo e(auth()->check() ? $this->redirectRoute('dashboard') : $this->redirectRoute('login')); ?>

</div><?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/welcome.blade.php ENDPATH**/ ?>