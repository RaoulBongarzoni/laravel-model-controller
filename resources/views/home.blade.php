@extends('layouts.app')

@section('content')

<h1>
    films
</h1>
<ul>

    @foreach ($films as $film)
    <li>
        <h1>{{$film->title}}</h1>




    </li>
    @endforeach


</ul>
@endsection