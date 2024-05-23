@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div class="bg-[#0F172A] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 pl-5 ">
        {{-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 pt-4 bg-[#0F172A] pl-20 "> --}}
        @foreach ($sites as $site)
            <form action="{{ route('rev.show',$site->id) }}" method="get">
                <div class="max-w-sm bg-white border border-[#fbbf24] rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <button type="submit">
                        <img class="rounded-t-lg" src="{{ $site->url_img }}" alt="" />
                    </button>
                    <div class="p-5">
                        <button type="submit">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $site->name_site  }}</h5>
                        </button>
                    </div>
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






