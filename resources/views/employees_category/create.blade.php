@extends('layouts.app')

@section('content')

<h1> This is create page</h1>
<form method="POST" action="/employees_category">
    @csrf
    <label for="name">Name</label> 
    <input type="text" name="name" ><br>
     
    <label for="description">description</label>
     <textarea name="description"  cols="30" rows="4"></textarea>
     <br>
     <label for="isEnabled">Enable</label>
    <input type="checkbox" name="isEnabled">
   <br>
    <button type="submit"> submit </button>
    <button type="reset"> reset</button>
</form>
@endsection
