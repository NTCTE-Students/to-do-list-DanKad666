<!-- resources/views/tasks/index.blade.php -->

@extends('layout.app')

@section('content')
<div class="container">
<h1>Список задач</h1>
<a href="/tasks/create" class="btn btn-primary">Добавить новую задачу</a>
<ul class="list-group mt-3">
[club65537571|$tasks as $task]
<li class="list-group-item">
<div class="d-flex justify-content-between">
<div>
<h3>{{ $task->title }}</h3>
<p>{{ $task->description }}</p>
</div>
<div class="d-flex align-items-center">
<a href="/tasks/{{ $task->id }}/edit" class="btn btn-warning mr-2">Редактировать</a>
<form method="POST" action="/tasks/{{ $task->id }}">
@csrf
'DELETE'
<button type="submit" class="btn btn-danger">Удалить</button>
</form>
</div>
</div>
</li>
@endforeach
</ul>
</div>
@endsection
