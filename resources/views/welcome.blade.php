@extends('master')
@section('title')
    Home page
@endsection
@section('main-content')
{{-- {{ $posts }}  --}}
<div class="container">
    <div class="row">
        <div class="col s-12">
            <h1> Telephone directory </h1>
        </div>
    </div>
</div>
@foreach ($posts as $post)

<div class="container">
    <div class="row cyan lighten-5">
        {{-- <div class="col s12"><p class="center-align">   </p></div> --}}
        <div class="col s12 m4 l2 cyan lighten-5"><p><a href="insert_phone_number"><button>Add another number</button></a></p></div>
        <div class="col s12 m4 l8"><p>
            <table>
                <thead>
                  <tr>
                      <th>First name</th>
                      <th>Last name</th>
                      <th>Phone number</th>
                      <th>Home number</th>
                  </tr>
                </thead>
        
                <tbody>
                  <tr>
                    <td> {{ $post->first_name }} </td>
                    <td> {{ $post->last_name }} </td>
                    <td> {{ $post->mob_number }}</td>
                    <td> {{ $post->home_number }} <a href="/{{ $post->id }}/delete"><button> Remove </button></a>   <a href="/{{ $post->id }}/edit"><button> Edit </button></a> </td>
                  </tr>
                </tbody>
              </table>

        </p></div>
        <div class="col s12 m4 l2 cyan lighten-5"><p>  </p></div>
      </div>
</div>
@endforeach

@endsection