@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')


	<div class="task-list">


        <h2>
            {{ $task->title }}
        </h2>

            <p>
                {{ $task->description }}
            </p>

            <p>
                {{ \Carbon\Carbon::parse($task->created_at)->format('05/06/2020')}}
            </p>

	</div>

@endsection



