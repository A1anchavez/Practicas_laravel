<x-layouts.app title="Register">
    <h1>Register</h1>

    <form action=" {{ route('register') }}" method="POST"> 
        @csrf
        
        <label>
            Name <br>
            <input name="name" type="text">
            @error('name')
                <br>
                <small style="color:darkred">{{$message}}</small>
            @enderror
        </label>
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
            Password Confirmation<br>
            <input name="password_confirmation" type="password">
            @error('password_confirmation')
                <br>
                <small style="color:darkred">{{$message}}</small>
            @enderror
        </label> <br>

        <button type="submit">Register</button>
    </form>
    <a href="<?= route('login') ?>">Login</a>
</x-layouts.app>