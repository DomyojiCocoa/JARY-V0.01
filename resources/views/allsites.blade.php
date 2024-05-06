@vite(['resources/css/app.css', 'resources/js/app.js'])
<div>
    @foreach ($sites as $site)
        <form action="{{ route('rev.show',$site->id) }}" method="get">
            <button type="submit">
                <h1>{{ $site->name_site }}</h1>
            </button>
        </form>
    @endforeach
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>
