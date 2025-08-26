@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="page-title">Хичээл сонголт</h4>

    <!-- Алдаанууд -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-9">
            <div class="card card-stats">
                <div class="card-body">
                    <form action="{{ route('enrollment.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Хичээл сонгох</label>
                            <select name="subject_id" class="form-control" required>
                                <option value="" disabled selected>Хичээлээ сонгоно уу</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Оюутан сонгох</label>
                            <select name="student_id" class="form-control" required>
                                <option value="" disabled selected>Оюутнаа сонгоно уу</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->Lastname }} {{ $student->Firstname }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Сонгох</button>
                        <a href="{{ route('enrollment.index') }}" class="btn btn-secondary">Буцах</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    