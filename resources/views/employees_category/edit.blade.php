
@extends('layouts.app')

@section('content')
    
<h1> This is edit page</h1>
<Form method="POST" action="/employees_category/{{  $employees_category->id}}">
    @csrf
    @method('PUT')
    <label for="name">Name</label> 
    <input type="text" name="name" value="{{ $employees_category->name }}"><br>
     
    <label for="description">description</label>
     <textarea name="description"  cols="30" rows="4">{{ $employees_category->description }}</textarea>
     <br>
     <label for="isEnabled">Enable</label>
    <input type="checkbox" name="isEnabled" value="{{ $employees_category->isEnabled }}">
   <br>
    <button type="submit"> submit </button>
    <button type="reset"> reset</button>


</Form>
@endsection