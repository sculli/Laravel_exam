@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')
	<div class="task-list">
          <h2>{{ $task->title }}</h2>
            <p>{{ $task->description }}</p>
            <p>{{ $task->created_at }}</p>
	</div>
@endsection



