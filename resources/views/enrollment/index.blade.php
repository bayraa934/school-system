@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="page-title">Сонгосон хичээлүүд</h4>
        <a href="{{ route('enrollment.create') }}" class="btn btn-success">
            Хичээл сонгох
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Оюутан</th>
                <th>Хичээл</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enrollments as $enrollment)
                <tr>
                    <td>
                        @if($enrollment->student)
                            {{ $enrollment->student->Lastname }} {{ $enrollment->student->Firstname }}
                        @else
                            <span class="text-danger">Оюутан олдсонгүй</span>
                        @endif
                    </td>
                    <td>
                        @if($enrollment->subject)
                            {{ $enrollment->subject->name }}
                        @else
                            <span class="text-danger">Хичээл олдсонгүй</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
