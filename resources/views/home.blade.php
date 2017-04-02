  @extends('layouts.master')

  @section('content')
        <div class="jumbotron">
            <h1>NoteBook</h1>

            <p>An easy way to add, edit and delete notes using the app</p>
           
            <p>
                <a class="btn btn-lg btn-primary" href="{{route('notebooks.index')}}" role="button">Your NoteBooks</a>
            </p>
        </div>
    @endsection