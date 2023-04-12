<x-layouts.app title="Login">
    <h1>Login</h1>

    <form action=" {{ route('login') }}" method="POST"> 
        @csrf
        
        <label> <br>
            Email <br>
            <input name="email" type="email">
            @error('email')
                <br>
                <small style="color:darkred">{{$message}}</small>
            @enderror
        </label> <br>
        <label>
            Password <br>
            <input name="password" type="password">
            @error('password')
                <br>
                <small style="color:darkred">{{$message}}</small>
            @enderror
        </label> <br>
        <label>
            Recuerdame
            <input name="remember" type="checkbox">
        </label> <br>
        <button type="submit">Login</button>
    </form>
    
    <a href="<?= route('register') ?>">Register</a>
</x-layouts.app>