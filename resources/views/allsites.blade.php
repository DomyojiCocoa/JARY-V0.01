@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4 pt-4">
        @foreach ($sites as $site)
            <form action="{{ route('rev.show',$site->id) }}" method="get">
                <div class="border-orange-500 border-2 bg-black" >
                    <button type="submit">
                        <figure >
                            <img src="{{$site -> url_img}}" alt="" class="w-auto h-72 object-cover">
                        </figure>
                        <h1 class="text-white hover:text-orange-500">{{ $site->name_site }}</h1>
                    </button>
                </div>
            </form>
        @endforeach
    </div>
</x-app-layout>






