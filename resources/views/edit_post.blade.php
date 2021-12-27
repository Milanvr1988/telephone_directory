@extends('master')
@section('title')
    Insert contact
@endsection
@section('main-content')
    
    <div class="container">
        <div class="row">
            <h1>Edit Contact</h1>
                <div class="col s8 offset-s2">
                    <form action="/{{$post->id}}/edit" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" name="first_name" id="name" class="{{ $errors->has("first_name") ?  "red" : "" }}" value=" {{ $post->first_name }} ">
                                <label for="name">First name</label>
                            </div>
                            <div class="input-field col s12">
                                <input type="text" name="last_name" id="last"  class="{{ $errors->has("last_name") ?  "red" : "" }}" value=" {{ $post->last_name }} ">
                                <label for="last">Last name</label>
                            </div>
                            <div class="input-field col s12">
                                <input type="text" name="mob_number" id="mob" class="{{ $errors->has("mob_number") ?  "red" : "" }}" value=" {{ $post->mob_number }} " >
                                <label for="mob"> Mob number </label>
                            </div>
                            <div class="input-field col s12">
                                <input type="text" name="home_number" id="home" class="{{ $errors->has("home_number") ?  "red" : "" }}" value=" {{ $post->home_number }} ">
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