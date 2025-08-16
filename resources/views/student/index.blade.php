@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="page-title">oyurtanuud жагсаалт</h4>
    <a href="{{route('student.create')}}" class="btn btn-primary">
        <i class="bi bi-search"></i> angi нэмэх
    </a>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-stats ">
                <div class="card-body ">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ner</th>
                                <th scope="col">zasah</th>
                                <th scope="col">delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $num = 1;
                            @endphp
                            @foreach ($oyutanuud as $oyutan)

                            <tr>
                                <td>{{$num++}}</td>
                                <td>{{$oyutan->Lastname}}</td>
                                <td><button type="button" class="btn btn-primary">
                                        <i class="bi bi-update"></i> update
                                    </button>
                                </td>
                                <td><button type="button" class="btn btn-danger">
                                        <i class="bi bi-delete"></i> delete
                                    </button>
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
