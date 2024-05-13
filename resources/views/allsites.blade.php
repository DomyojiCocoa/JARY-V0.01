@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div class="flex justify-around pt-4 ">
        @foreach ($sites as $site)
            <form action="{{ route('rev.show',$site->id) }}" method="get">
                <div class="border-orange-500 border-2 bg-black" >
                    <button type="submit">
                        <figure>
                            <img src="{{$site -> url_img}}" alt="" class="w-56 h-52">
                        </figure>
                        <h1 class="text-white hover:text-orange-500">{{ $site->name_site }}</h1>
                    </button>

                </div>
            </form>
        @endforeach
        <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    </div>

</x-app-layout>
