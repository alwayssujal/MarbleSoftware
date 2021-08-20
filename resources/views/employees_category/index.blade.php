@extends('layouts.app')

@section('content')
    

<H1>
    this is Employees_category
</H1>
<a href="employees_category/create">Add New</a>
<table>
@foreach ($employees_categories as $employee_category)
<tr>
    <td>{{$employee_category->id}}  </td>
    <td>{{$employee_category->name}}</td>
    <td>{{$employee_category->description}} </td>
    <td>{{$employee_category->isEnabled }}</td>
    <td><a href="employees_category/{{ $employee_category->id }}/edit">Edit</a></td>
    <td> <form class="pt-3" action="/employees_category/{{ $employee_category->id }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete </button>
    </form></td>
</tr>
@endforeach
</table>

@endsection



