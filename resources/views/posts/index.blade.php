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
<!-- <th>Images</th> -->
<th>ACtion</th>
</tr>
@foreach( $posts as $post)
<tr>
<td>{{$post->id}}</td>
<td>{{ $post->post}}</td>

<td>
 @foreach($post->comments as $c)
 {{$c->comment}}


@endforeach
</td>
<td>

</td>
</tr>
@endforeach
</table>
{{$posts->render()}}
</div></div>
<input type="text" id="post" >
<button  id="btn_click" class="btn btn-primary">click hena </button>


<script>
$(function(){

    $('#btn_click').click(function(){

        $.ajax({

            type:"POST",
            data:{"post":$('#post').val(),
            "_token":"{{ csrf_token() }}"

            
            },
            url: "{{ URL('posts/store') }}",
            success: function (msg) {
            alert("shtorrrr");
            },
            error: function (msg) {
                alert("7ywaan");
            },

        });

    });
});

</script>
@endsection


