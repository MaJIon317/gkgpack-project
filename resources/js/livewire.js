Livewire.on('toast', (options) => {
    toast(options['message'], options['type'] ?? 'success')
})