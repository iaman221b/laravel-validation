@extends('layouts.app')
@section('content')


<html>
    <body>
        <h1>Project Controller</h1>
        {{-- {{$Projects}} --}}
        @foreach ($projects as $project)
       <li> 
            <a href="/projects/{{$project->id}}">
           {{$project->title}}
            </a>
        </li>
       <li> 
                <a href="/projects/{{$project->id}}">   
                {{$project->Description}} 
        </li>
                 </a>
                
                
     @endforeach
       
    </body>
</html>

@endsection