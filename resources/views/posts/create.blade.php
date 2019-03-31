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


    {!!Form::open(array('action' => 'PostController@store','files'=>true))!!}

    {!! Form::label('post', 'POST:') !!}
 {!! Form::text('post', null, ['class' => 'form-control']) !!}
 
 {{ csrf_field() }}

 {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

 {{ Form::close() }}
</body>
</html>