@extends('layouts.app')

@section('content')
    

<H1>
    this is Employees
</H1>
<a href="employees/create">Add New</a>
<table>
@foreach ($employees as $employee)
<tr>
    <td>{{$employee->id}}  </td>
    <td>{{$employee->firstname.' '.$employee->middlename.' '.$employee->lastname}}</td>
    <td>{{$employee->email}}  </td>
    <td><a href="employees/{{ $employee->id }}/edit">Edit</a></td>
    <td> <form class="pt-3" action="/employees/{{ $employee->id }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete </button>
    </form></td>
</tr>
@endforeach
</table>

@endsection



