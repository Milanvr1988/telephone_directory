@extends('master')
@section('title')
    Login
@endsection
@section('main-content')
    
    
    <div class="container">
        <div class="row">
            <h1>User Login</h1>
            <form action="{{ Route('LogUser') }} " method="post">
                @csrf
                <input type="email" name="log_email" placeholder="Insert email" value="{{ old('log_email') }}"><br><br>
                <span class="text red"> @error('log_email') {{ $message }}  @enderror </span>

                <input type="password" name="log_password" placeholder="insert password" value=" {{ old('log_password') }} ">
                <span class="text red"> @error('log_password') {{ $message }}  @enderror </span><br><br>

                <button type="submit">Save</button><br><br>

            </form>
        
        </div>
    </div>


@endsection