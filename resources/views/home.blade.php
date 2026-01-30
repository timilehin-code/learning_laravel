@include('layouts.sideBar')
@extends('layouts.main')

@section('header')
<h3>This is the header</h3>
@endsection

@section('main')

<h1>Welcome to the Home Page</h1>
<form action="{{ route('submit_form') }}" method="post">
    @csrf
    <label for="fullName">Full name:</label>
    <input type="text" id="fullName" name="fullName" placeholder="Type your full name" required> <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Type your email" required> <br>
    <button type="submit">Submit</button>
</form>
@endsection

@section('footer')

<h3>This is the footer</h3>

@endsection