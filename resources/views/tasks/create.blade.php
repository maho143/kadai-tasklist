@extends('layouts.app')

@section('content')
@if (Auth::check())
 <h1>Add New Task</h1>
 
 
 <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
 {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
               
                    
                <div class="form-group">
                    {!! Form::label('content', 'task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('status', 'status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('Post', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
                  </div>
    </div>
<!-- Write content for each page here -->
@else
 {{print "No Autorization!" }}
@endif
    
@endsection