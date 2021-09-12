@extends('layouts.app')

@section('content')

<h1>Add New Customer</h1>
<form method="POST" action="/customers">
    @csrf
    <label for="name">Fullname</label>
    <input type="text" name="name">

    <label for="contact">Contact</label>
    <input type="text" name="contact">

    <label for="address">Address</label>
    <input type="text" name="address">

    <label for="email">Email</label>
    <input type="text" name="email">

    <input type="submit" value="Add Customer">
    <input type="reset" value="Reset Form">
</form>
@endsection
