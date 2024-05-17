@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div>
        @foreach ($sites as $site)
            <h1>{{ $site->name_site }}</h1>
        @endforeach
        <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    </div>
</x-app-layout>
