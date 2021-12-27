@extends('master')
@section('title')
    Insert number
@endsection
@section('main-content')
    
<div class="container">
    <div class="row">
        <h1>Add Phone number</h1>
            <div class="col s8 offset-s2">
                <form action="/insert_phone_number" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="mob_number" id="mob" class="{{ $errors->has("mob_number") ?  "red" : "" }}" value=" {{ old("mob)3.017") }} " >
                            <label for="mob"> Mob number </label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="home_number" id="home" class="{{ $errors->has("home_number") ?  "red" : "" }}">
                            <label for="home"> Home number </label>
                        </div>
                        <button class="waves-effect waves-light btn submit"> Save </button>
                    </div>
                </form>
                @if ($errors->any())
                    <p class="red-text"> There was an error, try again fill fields. </p>
                @endif
            </div>
    </div>
</div>


@endsection