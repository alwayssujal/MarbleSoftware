
@extends('layouts.app')

@section('content')
    
<h1> This is edit page</h1>
<Form method="POST" action="/employees/{{  $employee->id}}">
    @csrf
    @method('PUT')
    <input type="text" name="firstname" value="{{ $employee->firstname }}">
    <input type="text" name="middlename" value="{{ $employee->middlename }}">
    <input type="text" name="lastname" value="{{ $employee->lastname }}">
    <input type="text" name="email" value="{{ $employee->email }}">
    <input type="text" name="hired_date" value="{{ $employee->hired_date}}">
    <input type="text" name="address" value="{{ $employee->address}}">
    <input type="text" name="phone_number" value="{{ $employee->phone_number}}">
    <input type="checkbox" name="isEnabled" value="{{ $employee->isEnabled}}">
    <input type="text" name="pan_number" value="{{ $employee->pan_number}}">
    <input type="text" name="citizenship_number" value="{{ $employee->citizenship_number}}">
    <input type="date" name="dob" value="{{ $employee->dob}}">
    <input type="number" name="salary" value="{{ $employee->salary}}">


    <button> submit </button>


</Form>
@endsection