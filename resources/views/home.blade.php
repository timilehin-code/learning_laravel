@include('layouts.sideBar')
@extends('layouts.main')

@section('header')
<h3>This is the header</h3>
@endsection

@section('main')

<h1>{{ $greeting }}</h1>
@foreach ($ninjas as $ninja)
    <li>ID--{{ $ninja['id'] }} Name--{{ $ninja['Name'] }} Skill--{{ $ninja['skill'] }}</li> 
@endforeach
@endsection

@section('footer')

<h3>This is the footer</h3>

@endsection