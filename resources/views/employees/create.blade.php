@extends('layouts.app')

@section('content')

<h1> This is create page</h1>
<form method="POST" action="/employees">
    @csrf
    <input type="text" name="firstname" >
    <input type="text" name="middlename">
    <input type="text" name="lastname">
    <input type="text" name="email" >
    <input type="text" name="hired_date">
    <input type="text" name="address">
    <input type="text" name="phone_number">
    <input type="checkbox" name="isEnabled">
    <input type="text" name="pan_number">
    <input type="text" name="citizenship_number">
    <input type="date" name="dob">
    <input type="number" name="salary">
    <button> submit </button>
</form>
@endsection
