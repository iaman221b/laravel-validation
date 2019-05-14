@extends('layouts.app')


@section('content')
     <h1 class="title">Edit Project</h1>

     <form method="POST" action="/projects/{{$project->id}}" margin-bottom: 20>
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
         <div class ="field">
            <label class="label" for="title">Title</label>

             <div class="control">
             <input type = "text"  class = "input"  name = "title" placeholder="Title" value="{{$project->title}}">
            
            </div> 
                </div> 

                <div class ="field">
                        <label class="label" for="Description">Description</label>
            
                         <div class="control">
                         <textarea name="Description" class = "textarea">{{$project->Description}}</textarea>
                        
                        </div> 
                            </div> 

                            <div class ="field">
                            <div class="control">
                                <button type="submit" class="button is-link">Update Project</button>
                    
            
                             </div> 
                             </div> 

             
     </form>


     <form method="POST" action="/projects/{{$project ->id}}">
         
                @method('DELETE')
                @csrf

        {{-- {{ method_field('DELETE') }}
        {{ csrf_field() }} --}}
            <div class ="field">
                    <div class="control">
                        <button type="submit" class="button">Delete Project</button>


     </form>

@endsection