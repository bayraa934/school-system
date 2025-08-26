@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="page-title">Оюутны мэдээлэл засах</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="Firstname">Нэр</label>
            <input type="text" name="firstname" id="Firstname" class="form-control" value="{{ old('firstname', $student->Firstname) }}" required>
        </div>

        <div class="form-group mt-2">
            <label for="Lastname">Овог</label>
            <input type="text" name="lastname" id="Lastname" class="form-control" value="{{ old('lastname', $student->Lastname) }}" required>
        </div>

        <div class="form-group mt-2">
            <label for="birthday">Төрсөн огноо</label>
            <input type="date" name="birthday" id="birthday" class="form-control" value="{{ old('birthday', $student->birthday) }}" required>
        </div>

        <div class="form-group mt-2">
            <label for="gander">Хүйс</label>
            <select name="gander" id="gander" class="form-control" required>
                <option value="male" {{ old('gander', $student->gander) == 'male' ? 'selected' : '' }}>Эрэгтэй</option>
                <option value="female" {{ old('gander', $student->gander) == 'female' ? 'selected' : '' }}>Эмэгтэй</option>
            </select>
        </div>

        <div class="form-group mt-2">
            <label for="angi_id">Анги</label>
            <select name="angi_id" id="angi_id" class="form-control" required>
                @foreach ($angiud as $angi)
                    <option value="{{ $angi->id }}" {{ old('angi_id', $student->angi_id) == $angi->id ? 'selected' : '' }}>
                        {{ $angi->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-2">
            <label for="phone">Утасны дугаар</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $student->phone) }}">
        </div>

        <div class="form-group mt-2">
            <label for="image">Зураг (шинээр оруулах бол)</label>
            <input type="file" name="image" id="image" class="form-control">

            @if($student->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $student->image) }}" alt="Оюутны зураг" style="max-width: 200px;">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success mt-3">Хадгалах</button>
        <a href="{{ route('student.index') }}" class="btn btn-secondary mt-3">Буцах</a>
    </form>
</div>
@endsection
