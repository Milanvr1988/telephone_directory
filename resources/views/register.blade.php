@extends('master')
@section('title')
    Register
@endsection
@section('main-content')
    
    <div class="container">
        <div class="row">
            <h1>User Register</h1>
            <form action=" {{ Route('RegUser') }} " method="post">
                @csrf
                <input type="text" name="reg_name" placeholder="name" value=" {{ old('reg_name') }} "><br><br>
                <span class="text red"> @error('reg_name') {{ $message }}  @enderror </span>
                <input type="email" name="reg_email" placeholder="email" value=" {{ old('reg_email') }} "><br><br>
                <span class="text red"> @error('reg_email') {{ $message }}  @enderror </span>
                <input type="password" name="reg_password" placeholder="insert password" value=" {{ old('reg_password') }} "><br><br>                
                <span class="text red"> @error('reg_password') {{ $message }}  @enderror </span>
                <button type="Reg_submit">Save</button>
            </form>
        
        </div>
    </div>

@endsection