@extends('layouts.app')
@section('content')
    <div class="app">
        <ul>
            @foreach($teachers as $teacher)
                {
                <li class="{{$teacher->id}}">
                    <span class="name">{{$teacher->name}}</span>
                    <span class="surname">{{$teacher->surname}}</span>
                </li>
                }

            @endforeach
        </ul>
    </div>
@endsection
