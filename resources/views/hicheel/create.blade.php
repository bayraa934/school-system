@extends('layouts.master')
@section('content')
<div class="container">
    <h4 class="page-title">Хичээл нэмэх</h4>
    <form action="{{ route('subject.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Хичээлийн нэр:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button class="btn btn-success mt-2">Нэмэх</button>
    </form>
</div>
@endsection
