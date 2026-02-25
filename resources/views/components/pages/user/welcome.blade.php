<?php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        return view('components.pages.user.welcome')->layout('components.layouts.user-layout');
    }
};
?>

<div class="h-screen relative">
    <div x-data="{
        images: [
            '{{ asset('images/long-road.jpg') }}',
            '{{ asset('images/Ratenggaro-1.jpg') }}',
            '{{ asset('images/Ratenggaro-2.jpg') }}',
            '{{ asset('images/kubur-batu.jpg') }}',
            '{{ asset('images/weekuri.jpg') }}',
        ],
        activeImage: 0,
        init() {
            setInterval(() => {
                this.activeImage = (this.activeImage + 1) % this.images.length
            }, 5000)
        }
    }" class="relative w-full min-h-screen">
        {{-- 1. BACKGROUND SLIDESHOW (ABSOLUTE agar ikut ke-scroll) --}}
        <div class="absolute inset-0 z-0">
            <template x-for="(img, index) in images" :key="index">
                <div x-show="activeImage === index" x-transition:enter="transition opacity duration-1000"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition opacity duration-1000" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" {{-- Hapus bg-fixed agar gambar tidak 'melayang' secara aneh saat
                    di-scroll --}}
                    class="absolute inset-0 bg-neutral-900/70 bg-blend-multiply bg-cover bg-center"
                    :style="'background-image: url(' + img + ');'">
                </div>
            </template>
        </div>



        {{-- 2. CONTENT (RELATIVE agar berada di atas background) --}}
        <div class="relative z-10 ">
            @include('components.partials.user.navbar')

            {{-- welcome --}}
            <section class=" h-dvh relative text-5xl flex pt-10 sm:pt-36">
                <div class="container mx-auto padingX space-y-7">
                    <h1 class="text-white text-6xl font-bold">Expert Sumba <br> Travel Tips</h1>
                    <p class="text-xl text-white">Discover comprehensive travel insights from local experts
                        to make your
                        Sumba
                        Island <br class="hidden sm:block">journey
                        unforgettable and hassle-free.</p>
                    <button
                        class="h-14 px-10 rounded-lg flex items-center justify-center border-3 text-xl font-bold border-white text-white">
                        Explore Sumba Now
                    </button>
                    {{-- 2. INDIKATOR TITIK (PAGINATION) --}}
                    <div class="z-20 flex space-x-2">
                        <template x-for="(img, index) in images" :key="index">
                            <button @click="activeImage = index"
                                :class="activeImage === index ? 'bg-white h-3 w-8' : 'bg-white/40 h-3 w-3'"
                                class="rounded-full transition-all duration-700 border border-white/50 shadow-sm">
                            </button>
                        </template>
                    </div>
                </div>

                {{-- dividers --}}
                <div>
                    <x-svg.divider class="text-light w-full absolute bottom-0 left-0" />
                </div>
            </section>


            {{-- Discover --}}
            <section class="bg-light">
                <div class="container mx-auto padingX">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio doloribus ratione voluptatum adipisci
                    corporis temporibus inventore unde repellat sint perferendis provident, aliquid voluptate soluta
                    esse officia nobis qui deleniti quo?
                </div>
            </section>
        </div>
    </div>
</div>
