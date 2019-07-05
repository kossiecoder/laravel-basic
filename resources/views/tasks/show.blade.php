@extends('layouts.app')

@section('title', 'Task detail')

@section('content')
	<div class="px-64 mt-4">
		<div class="flex">
			<h1 class="font-bold text-3xl flex-1">Task</h1>
			<div class="flex-initial">
				<a href="/tasks/{{ $task->id }}/edit">
					<button class="bg-green-500 text-white hover:bg-green-600 px-4 py-1">Edit</button>
				</a>
				<form method="POST" action="/tasks/{{ $task->id }}" class="float-right ml-2">
					@method('DELETE')
					@csrf
					<button class="bg-red-500 text-white hover:bg-red-600 px-4 py-1">Delete</button>
				</form>
			</div>
		</div>
		
		Title: {{ $task->title }} <small class="float-right">Created at {{ $task->created_at }}</small> <br>
		<small class="float-right">Updated at {{ $task->updated_at }}</small>
		<br>
		Body
		<div class="border p-3">{{ $task->body }}</div>
	</div>
@endsection