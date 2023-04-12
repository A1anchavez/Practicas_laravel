<x-layouts.app :title="$post->title">
    <h1>Edit form</h1>

    <form action=" {{ route('posts.update', $post) }}" method="POST"> 
        @csrf @method('PATCH')

        @include('posts.form-fields')

        <button type="submit">Send</button>
    </form>


    <a href="<?= route('posts.index') ?>">Regresar</a>
</x-layouts.app>