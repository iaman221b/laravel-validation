@extends('layouts.app')


@section('content')

 <h1 class="title">{{$project->title}}</h1>

 <div class="content">{{$project->Description}}</div>


          <p>
        <a href="/projects/{{$project->id}}/edit">Edit</a>
          </p>

 @if($project->tasks->count())
 <div>
     {{-- {{$project}} --}}
     @foreach ($tasks as $task)
    <div>
        <form class="box" method="POST" action="/tasks/{{$task->id}}">
            {{method_field('PATCH') }}
            {{ csrf_field() }}
        <label class="checkbox" for="completed">
        <input type="checkbox" name="completed" onchange="this.form.submit()">        
        {{$task->description}}
        </form>      
    </div>
    @endforeach
 </div>
@endif

   <form class="box" method="POST" action="/projects/{{$project->id}}/tasks">
        {{ csrf_field() }}
       <div class="field">
           <label class="label" for="description">New Task </label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task">
            </div> 
            
            <div class ="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Add Task</button>
            
    
                     </div> 
                     </div>

                     
            @include('errors')

   </form>

 
  

@endsection