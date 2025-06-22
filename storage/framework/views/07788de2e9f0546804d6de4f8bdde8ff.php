<div>
   <?php echo e(auth()->check() ? $this->redirectRoute('dashboard') : $this->redirectRoute('login')); ?>

</div><?php /**PATH /var/www/gkgpack.su/public_html/resources/views/welcome.blade.php ENDPATH**/ ?>