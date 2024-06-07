<!-- resources/views/tasks/create.blade.php -->

@extends('layout.app')

@section('content')
<div class="container">
<h1>Добавить задачу</h1>
<form method="POST" action="/tasks">
@csrf
<div class="form-group">
<label for="title">Название задачи:</label>
<input type="text" class="form-control" name="title" id="title" required>
</div>
<div class="form-group">
<label for="description">Описание задачи:</label>
<textarea class="form-control" name="description" id="description"></textarea>
</div>
<button type="submit" class="btn btn-success">Добавить</button>
</form>
</div>
@endsection