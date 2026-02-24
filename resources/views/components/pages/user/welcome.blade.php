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
    @include('components.partials.user.navbar')


    {{-- <img class="absolute bottom-0 left-0 w-full" src="{{ asset('svg/divider-kiri.svg') }}" alt=""> --}}
</div>