<!-- resources/views/tasks/edit.blade.php -->

@extends('layout.app')

@section('content')
<div class="container">
<h1>Редактировать задачу</h1>
<form method="POST" action="/tasks/{{ $task->id }}">
@csrf
'PUT'
<div class="form-group">
<label for="title">Название задачи:</label>
<input type="text" class="form-control" name="title" id="title" value="{{ $task->title }}" required>
</div>
<div class="form-group">
<label for="description">Описание задачи:</label>
<textarea class="form-control" name="description" id="description">{{ $task->description }}</textarea>
</div>
<button type="submit" class="btn btn-success">Обновить</button>
</form>
</div>
@endsection