@extends('layouts.app')
@section('content')
<h1>Create a new Project</h1>
<form  method= "POST" action="/projects">
     {{ csrf_field() }}
    <div>
    <input type="text" name="title" placeholder="Project Title"  class = "input  {{$errors->has('title') ? 'isDanger' : ''}}" value="{{old('title')}}" >
    </div>
        <div>
            <textarea name="Description" placeholder="Project Description" {{old('Description')}}></textarea>
        </div>
            <div>
                <button type="submit">Create Project</button>
            </div>

            @if ($errors->any())
            <div class = "notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

</form>
   
@endsection