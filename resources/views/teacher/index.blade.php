@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="page-title">Teacher жагсаалт</h4>
    <a href="{{route('teacher.create')}}" class="btn btn-primary mb-3">
        <i class="bi bi-plus"></i> Шинэ багш нэмэх
    </a>

    <div class="row">
        <div class="col-md-8">
            <!-- Багшийн жагсаалт -->
            <div class="card card-stats">
                <div class="card-body">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Овог</th>
                                <th>Нэр</th>
                                <th>Email</th>
                                <th>Утас</th>
                                <th>Засах</th>
                                <th>Устгах</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $num = 1; @endphp
                            @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td>{{ $teacher->lastname }}</td>
                                <td>{{ $teacher->firstname }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->phone }}</td>
                                <td>
                                    <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-primary btn-sm">
                                        Засах
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" onsubmit="return confirm('Устгахдаа итгэлтэй байна уу?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Устгах</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

 
@endsection
