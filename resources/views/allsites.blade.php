@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 pt-4 bg-[#0F172A] pl-20 ">
        @foreach ($sites as $site)
            <form action="{{ route('rev.show',$site->id) }}" method="get">
                <div class="border-[#fbbf24] border-2 bg-[#0F172A] rounded-lg w-72" >
                    <button type="submit">
                        <figure >
                            <img src="{{$site -> url_img}}" alt="" class="w-auto h-60 object-cover rounded-lg">
                        </figure>
                        <h1 class="text-[#fbbf24] hover:text-[#f59e0b]">{{ $site->name_site }}</h1>
                    </button>
                </div>
            </form>
        @endforeach
    </div>
</x-app-layout>






