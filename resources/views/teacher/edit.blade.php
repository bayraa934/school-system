@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Багш засах</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="lastname">Овог</label>
            <input type="text" name="lastname" class="form-control" id="lastname"
                   value="{{ old('lastname', $teacher->lastname) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="firstname">Нэр</label>
            <input type="text" name="firstname" class="form-control" id="firstname"
                   value="{{ old('firstname', $teacher->firstname) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Имэйл</label>
            <input type="email" name="email" class="form-control" id="email"
                   value="{{ old('email', $teacher->email) }}">
        </div>

        <div class="form-group mb-4">
            <label for="phone">Утас</label>
            <input type="text" name="phone" class="form-control" id="phone"
                   value="{{ old('phone', $teacher->phone) }}">
        </div>

        <button type="submit" class="btn btn-success">Хадгалах</button>
        <a href="{{ route('teacher.index') }}" class="btn btn-secondary">Буцах</a>
    </form>
</div>
@endsection
