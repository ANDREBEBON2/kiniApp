<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="w-full padingX z-50">
    <div class="padingX container bg-transparent py-5 mx-auto h-full flex items-center flex-1">
        <div class="">
            <img class="xl:size-36 md:size-32 size-28" src="{{ asset('images/Logo.png') }}" alt="Logo">
        </div>

        <div class="w-full items-center justify-end xl:flex hidden">
            <ul class="flex items-center gap-14">
                <li><a href="#"
                        class="text-white text-lg font-semibold hover:text-accent transition-colors duration-150">Home</a>
                </li>

                {{-- Travel Tips --}}
                <li x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @click.away="open = false"
                        class="text-white  py-1 px-1  text-lg font-semibold hover:text-accent transition-colors duration-150 group">
                        <span>Travel Tips</span>
                        <x-svg.arrowdown
                            class="size-4 inline-block ml-1 transition-all duration-150 text-white group-hover:text-accent "
                            ::class="open ? 'rotate-180' : 'rotate-0'" />
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50"
                        style="display: none;">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Budget Tips</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Travel With
                            Agent</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Bagpacker</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Group Trip</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Solo Trip</a>
                    </div>
                </li>

                {{-- Accommodation Tips --}}
                <li class="relative" x-data="{open:false}">
                    <button @click="open = !open" @click.away="open = false"
                        class="text-white py-1 px-1 text-lg font-semibold hover:text-accent transition-colors duration-150 group">
                        <span>Accommodation Tips</span>
                        <x-svg.arrowdown
                            class="size-4 inline-block ml-1 transition-all duration-150 text-white group-hover:text-accent "
                            ::class="open ? 'rotate-180' : 'rotate-0'" />
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50" x-show="open"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        style="display: none;">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Hotel &
                            Resort Recommendations</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Camping Area
                            Recommendations</a>
                    </div>
                </li>


                {{-- Transportation Tips --}}
                {{-- <li class="relative" x-data="{open:false}">
                    <button @click="open = !open" @click.away="open = false"
                        class="text-white py-1 px-1 text-lg font-semibold hover:text-accent transition-colors duration-150 group">
                        <span>Transportation Tips</span>
                        <x-svg.arrowdown
                            class="size-4 inline-block ml-1 transition-all duration-150 text-white group-hover:text-accent "
                            ::class="open ? 'rotate-180' : 'rotate-0'" />
                    </button>

                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50" x-show="open"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        style="display: none;">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Destinasi
                            Populer</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Tips Hemat</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Panduan Visa</a>
                    </div>
                </li> --}}

                {{-- More Tips --}}
                <li class="relative" x-data="{open:false}">
                    <button @click="open = !open" @click.away="open = false"
                        class="text-white py-1 px-1 text-lg font-semibold hover:text-accent transition-colors duration-150 group">
                        <span>More Tips</span>
                        <x-svg.arrowdown
                            class="size-4 inline-block ml-1 transition-all duration-150 text-white group-hover:text-accent "
                            ::class="open ? 'rotate-180' : 'rotate-0'" />
                    </button>

                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-50" x-show="open"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        style="display: none;">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Flight Tips</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Visa Tips</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Restaurant
                            Tips</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100">Transportation
                            Tips</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="w-full h-full justify-end items-center xl:hidden flex">
            <button id="menu-toggle"
                class="bg-transparent hover:bg-accent hover:text-dark transition-colors duration-150 ease-in p-2 rounded-md text-white flex items-center justify-center">
                <x-svg.menu class="size-7" />
            </button>
        </div>
    </div>
</div>