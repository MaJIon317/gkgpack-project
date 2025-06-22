<x-button
    color="a"
    message="{{ __('Edit') }}"
    wire:click="$dispatch('openModal', {{ $json }})"
/>