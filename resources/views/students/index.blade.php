@extends('layouts.app')

@section('content')
@if (Auth::guest())
<p> NOt login </p>
@else
{{ Auth::user() }} 
@endif
<div class="container">
    <div class="row">
<table border="3">
<tr>
<th>Id</th>
<th>Name</th>
<th>Images</th>
<th>ACtion</th>
</tr>
@foreach( $students as $student)
<tr>
<td>{{$student->id}}</td>
<td>{{$student->name}}</td>
<td><img style="width:40px;" src="{{URL($student->img)}}"></td>
<td>
<a href="/student/show/{{$student->id}}">Show</a>
<a href="/student/edit/{{$student->id}}">Edit</a>
<a href="/student/delete/{{$student->id}}">DEL</a>
</td>
</tr>
@endforeach
</table>
</div></div>
@endsection