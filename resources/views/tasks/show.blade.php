@extends('layouts.app')

@section('content')
    @if (Auth::user()->id == $task->user_id)
<h1>id = {{ $task->id }} Details</h1>

       <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
       
        <tr>
            <th>task</th>
            <td>{{ $task->content }}</td>
        </tr>
        
         <tr>
            <th>status</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
<!-- Write content for each page here -->

{!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
 {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@else
 {{print "No Autorization!" }}
@endif
    
@endsection