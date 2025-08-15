@extends('layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Багш нарын жагсаалт</h4>
        <a href="{{ route('teacher.create') }}" class="btn btn-success">
            <i class="bi bi-person-plus-fill"></i> Шинэ багш нэмэх
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Нэр</th>
                        <th scope="col" class="text-center">Засах</th>
                        <th scope="col" class="text-center">Устгах</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Жишээ өгөгдөл --}}
                    @foreach($teachers as $index => $teacher)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square"></i> Засах
                            </a>
                        </td>
                        <td class="text-center">
                            <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" onsubmit="return confirm('Устгахдаа итгэлтэй байна уу?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash-fill"></i> Устгах
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    {{-- Хоосон үед --}}
                    @if($teachers->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center text-muted">Одоогоор бүртгэлтэй багш алга байна.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
