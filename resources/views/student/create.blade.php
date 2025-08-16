@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="page-title">shine oyutan nemeh</h4>
    <div class="row">
        <div class="col-md-9">
            <div class="card card-stats ">
                <div class="card-body ">
                    <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
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
                            <input type="date" name="birthday" class="form-control" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="gander">Huis</label>
                           <select name="" id="">
                            <option value="Ergtei">Eregtei</option>
                            <option value="Emegtei">Emegtei</option>
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="gender">Angi</label>
                           <select name="angi_id" id="">
                            @foreach ($angiud as $angi )
                            <option value="{{$angi->id}}">{{$angi->name}}</option>
                            @endforeach
                            <option value="Ergtei"></option>
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="title">utas</label>
                            <input type="text" name="phone" class="form-control" id="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="title">zurag</label>
                            <input type="file" name="image" class="form-control">
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
