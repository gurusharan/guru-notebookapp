@extends('layouts.master')

@section('content')

<div class="container">
<h1> Edit Note </h1>
<form action="{{route('notes.update',$note->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
     <div class="form-group">
          <label for="title">Note Title</label>
          <input class="form-control" type="text" name="title"> </input>
     </div>

     <div class="form-group">
          <label for="body">Note Body</label>
          <input class="form-control" type="text" name="body"> </input>
     </div>

         <input class="btn btn-primary" type="submit" value="Add"></input>
    </form>
</div>
@endsection