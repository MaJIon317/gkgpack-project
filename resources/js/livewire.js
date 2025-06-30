Livewire.on('toast', (options) => {
    toast(options['message'], options['type'] ?? 'success')
})

if (window.Echo && window.Laravel?.user?.id) {
    const userId = window.Laravel.user.id;

    window.Echo.private(`notifications.${userId}`)
        .listen('NewNotificationCreated', (e) => {
            toast(e.message, e.type ?? 'success');
        });
}
