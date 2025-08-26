@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="page-title">Хичээл засах</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('subject.update', $subject->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Хичээлийн нэр</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $subject->name) }}" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Хадгалах</button>
        <a href="{{ route('subject.index') }}" class="btn btn-secondary mt-3">Буцах</a>
    </form>
</div>
@endsection
