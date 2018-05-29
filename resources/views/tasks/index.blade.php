@extends('layouts.app')

@section('content')

  <h1>課題一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li><li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li></li>
            @endforeach
        </ul>
    @endif
<!-- Write content for each page here -->
 {!! link_to_route('tasks.create', '新規タスクの投稿') !!}
@endsection