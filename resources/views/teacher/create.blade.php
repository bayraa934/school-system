@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="page-title">shine bagsh nemeh</h4>
    <div class="row">
        <div class="col-md-9">
            <div class="card card-stats ">
                <div class="card-body ">
                    <form action="{{route('teacher.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">owog</label>
                            <input type="text" name="lastname"   class="form-control" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="title">Ner</label>
                            <input type="text"  name="firstname"  class="form-control" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="title">email</label>
                            <input type="text"  name="email" class="form-control" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="title">phone</label>
                            <input type="text" name="phone" class="form-control" id="title" placeholder="Enter title">
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-search"></i> bagsh nemeh
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
