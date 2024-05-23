@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div class="   bg-[#0F172A] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 pl-20 pt-5">
        {{-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 pt-4 bg-[#0F172A] pl-20 "> --}}
        @foreach ($sites as $site)
            <form action="{{ route('rev.show',$site->id) }}" method="get">


                <div class="max-w-sm w-60 h- dark:bg-gray-800 border-[#fbbf24] rounded-lg shadow ">
                    <button type="submit" class="w-full h-full">
                        <div class="relative w-full h-32 overflow-hidden rounded-t-lg">
                            <img class="object-cover w-full h-full" src="{{ $site->url_img }}" alt="" />
                        </div>
                        <h5 class="mb-2 dark:bg-gray-800 dark:border-gray-700 text-2xl font-bold tracking-tight text-gray-900 dark:text-white w-full">{{ $site->name_site }}</h5>
                    </button>
                </div>

{{--
                    <button type="submit">
                        <figure >
                            <img src="{{$site -> url_img}}" alt="" class="w-auto h-60 object-cover rounded-lg">
                        </figure>
                        <h1 class="text-[#fbbf24] hover:text-[#f59e0b]">{{ $site->name_site }}</h1>
                    </button> --}}
            </form>
        @endforeach
    </div>
</x-app-layout>






