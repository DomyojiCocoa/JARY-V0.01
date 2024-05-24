<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<x-app-layout>

        <div class="bg-[#0F172A] h-full py-10 px-5 md:px-20 ">
            <h1 class="text-center text-3xl sm:text-3xl md:text-4xl pb-5 text-[#fcb815]">Recomendaciones para ti</h1>
            <h2 class="text-center text-lg md:text-2xl pb-2 text-white">Esperamos que te guste :)</h2>

            <div id="default-carousel" class="relative w-92 max-w-4xl mx-auto" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-72  md:h-96 overflow-hidden rounded-lg">
                    @foreach ($sites as $site)
                    <form action="{{ route('rev.show', $site->id) }}" method="get">
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <button type="submit">
                                <img src="{{ $site->url_img }}" class="absolute block w-full h-full object-cover" alt="{{ $site->name_site }}">
                                <h1 class="absolute bottom-4 left-4 text-4xl sm:text-7xl md:text-7xl lg:text-4xl text-black">{{ $site->name_site }}</h1>

                            </button>
                        </div>
                    </form>
                    @endforeach
                </div>

                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>


</x-app-layout>


<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
{{-- <h1>aaaa</h1>
@foreach ($sites as $site)
    <h1>{{ $site->name_site }}</h1>
@endforeach


<div id="controls-carousel" class="relative w-full" data-carousel="static">
<!-- Carousel wrapper -->
<div class="relative h-56 overflow-hidden rounded-lg md:h-96">
    <!-- Item 1 -->
    @foreach ($sites as $site)
        <h1>{{ $site->name_site }}</h1>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ $site->url_img }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <h1>{{ $site->name_site}}</h1>
        </div>
    @endforeach

</div>
<!-- Slider controls -->
<button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
        </svg>
        <span class="sr-only">Previous</span>
    </span>
</button>
<button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <span class="sr-only">Next</span>
    </span>
</button>
</div> --}}
