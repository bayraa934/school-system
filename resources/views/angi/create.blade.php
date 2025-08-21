@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="page-title">shine angi nemeh</h4>
    <div class="row">
        <div class="col-md-9">
            <div class="card card-stats ">
                <div class="card-body ">
                    <form action="{{route('angi.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">angi nemeh</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter title">
                        </div>


                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-search"></i> angi nemeh
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
