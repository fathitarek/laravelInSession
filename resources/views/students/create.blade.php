<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
@if ($errors->any())
 <div class="alert alert-danger">
 <ul>
    @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
    @endforeach 
</ul> 
</div> 
@endif


    <!-- <form method="post" action="/student/store">
<input type="text" name="name" >
       {{ csrf_field() }} 

<input type="submit">
    </form> -->

    {!!Form::open(array('action' => 'StudentController@store','files'=>true))!!}

    {!! Form::label('name', 'Name:') !!}
 {!! Form::text('name', null, ['class' => 'form-control']) !!}
 {{ Form::label('image','image',array('id'=>'','class'=>'')) }}
 {{ Form::file('image','',array('id'=>'','class'=>'')) }} 

 {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

 {{ Form::close() }}
</body>
</html>