<x-layouts.app title="Home">
    <h1>Welcome</h1>
    @auth
        <pre>{{ Auth::user()->name}}</pre>
    @endauth
</x-layouts.app>