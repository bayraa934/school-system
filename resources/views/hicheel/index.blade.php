@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="page-title">Хичээлийн жагсаалт</h4>
    <a href="{{ route('subject.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Хичээл нэмэх
    </a>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card card-stats">
                <div class="card-body">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Нэр</th>
                                <th>Засах</th>
                                <th>Устгах</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $num = 1;
                            @endphp
                            @foreach ($subjects as $subject)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td>{{ $subject->name }}</td>
                                <td>
                                    <a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-primary">
                                        <i class="bi bi-pencil-square"></i> Засах
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('subject.destroy', $subject->id) }}" method="POST" onsubmit="return confirm('Устгахдаа итгэлтэй байна уу?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i> Устгах
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
