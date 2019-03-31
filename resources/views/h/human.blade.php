<style>
p{color:red}
</style>

@if(count($this))
    @foreach($h as $arr)
    <p>{{$arr->name}}</p>

    @endforeach
  @else
  <p>noty found</p>  
@endif    