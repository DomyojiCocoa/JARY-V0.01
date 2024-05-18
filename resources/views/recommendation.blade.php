<div>
    <x-app-layout>
        <h1>aaaa</h1>
        @foreach ($sites as $site)
            <h1>{{ $site->name_site }}</h1>
        @endforeach
        <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->

    </x-app-layout>
</div>
