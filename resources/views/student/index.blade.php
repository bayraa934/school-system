@extends('layouts.master')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Оюутнуудын жагсаалт</h3>
        <a href="{{ route('student.create') }}" class="btn btn-outline-success">
            <i class="bi bi-person-plus"></i> Оюутан нэмэх
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <table class="table table-borderless table-hover mb-0">
                <thead class="table-light">
                    <tr class="align-middle text-uppercase text-muted small">
                        <th style="width: 5%;">#</th>
                        <th>Нэр</th>
                        <th style="width: 15%;" class="text-center">Засах</th>
                        <th style="width: 15%;" class="text-center">Устгах</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($students as $index => $student)
                        <tr class="align-middle">
                            <td>{{ $index + 1 }}</td>
                            <td class="fw-semibold">{{ $student->name }}</td>
                            <td class="text-center">
                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i> Засах
                                </a>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('student.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Устгахдаа итгэлтэй байна уу?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i> Устгах
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">Оюутны бүртгэл олдсонгүй.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
