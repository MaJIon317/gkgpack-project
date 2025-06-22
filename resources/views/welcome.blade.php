<div>
   {{ auth()->check() ? $this->redirectRoute('dashboard') : $this->redirectRoute('login') }}
</div>