@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="page-title">Хичээл сонголт</h4>
    <div class="row">
        <div class="col-md-9">
            <div class="card card-stats">
                <div class="card-body">
                    <form action="{{ route('enrollment.index') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Хичээл сонгох</label>
                            <select name="subject_id" class="form-control">
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Оюутан сонгох</label>
                            <select name="student_id" class="form-control">
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">
                                        {{ $student->Lastname }} {{ $student->Firstname }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Сонгох
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
