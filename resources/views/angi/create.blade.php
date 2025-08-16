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
                            <label for="title">Owog</label>
                            <input type="text" name="firstname" class="form-control" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="title">Ner</label>
                            <input type="text" name="lastname" class="form-control" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="title">torson ondor</label>
                            <input type="text" name="birthday" class="form-control" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="gender">Huis</label>
                           <select name="" id="">
                            <option value="Ergtei">Eregtei</option>
                            <option value="Emegtei">Emegtei</option>
                           </select>
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
