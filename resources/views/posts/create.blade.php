<x-layouts.app :title="619">
    <h1>Create post</h1>

    <form action=" {{ route('posts.store') }}" method="POST"> 
        @csrf
        
        @include('posts.form-fields')

        <button type="submit">Send</button>
    </form>

    <a href="<?= route('posts.index') ?>">Regresar</a>
</x-layouts.app>