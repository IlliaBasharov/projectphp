@extends('layouts.app')
@section('content')
    <div class="container">
        <ul>
        @foreach ($cities as $city)
            <li>{{ $city->name }} ({{ $city->old_name }})</li>
        @endforeach
        </ul>
    </div>
@endsection
