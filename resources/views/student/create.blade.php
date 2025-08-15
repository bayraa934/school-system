@extends('layouts.master')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-bold fs-5">
                    Шинэ багш нэмэх
                </div>
                <div class="card-body">
                    <form action="{{ route('teacher.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Нэр</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Жишээ: Бат Эрдэнэ" required>
                        </div>

                        {{-- Хэрвээ нэмэлт талбар байвал энд нэмээрэй --}}
                        {{-- 
                        <div class="mb-3">
                            <label for="email" class="form-label">И-мэйл</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="example@mail.com">
                        </div>
                        --}}

                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-plus-circle"></i> Нэмэх
                        </button>
                        <a href="{{ route('student.index') }}" class="btn btn-outline-secondary">
                            Буцах
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
