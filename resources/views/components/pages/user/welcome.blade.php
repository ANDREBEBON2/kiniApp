<?php

use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return view('components.pages.user.welcome')->layout('components.layouts.user-layout');
    }
};
?>

<div class="h-screen bg-neutral-400 relative">
    <h1 class="text-2xl font-bold relative">Welcome</h1>
    <p class="mt-2 text-gray-600">This is your dashboard where you can manage your account and view your activities.</p>

    <img class="absolute bottom-0 left-0 w-full" src="{{ asset('svg/divider-kiri.svg') }}" alt="">
</div>