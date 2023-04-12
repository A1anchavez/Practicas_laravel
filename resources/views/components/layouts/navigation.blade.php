<nav>
    <ul>
        <li><a href="<?= route('home') ?>">Home</a></li>
        <li><a href="<?= route('posts.index') ?>">Blog</a></li>
        <li><a href="<?= route('about') ?>">About</a></li>
        <li><a href="<?= route('contact') ?>">Contact</a></li>
        @guest
            <li><a href="<?= route('register') ?>">Register</a></li>
            <li><a href="<?= route('login') ?>">Login</a></li>
        @endguest
        @auth
        <li>
            <form action="{{ route('logout')}}" method="POST">
            @csrf
            <a href="#" onclick="this.closest('form').submit()">Logout</a>
            </form>    
        </li>
        @endauth
    </ul>
</nav>
