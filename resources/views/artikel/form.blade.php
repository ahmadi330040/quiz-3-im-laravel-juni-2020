@extends('layouts.master')

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tulis Artikel</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="/artikel" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Judul Artikel</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Tulis Judul">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tulis Isi Artikel</label>
            <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="Enter ..."></textarea>
          </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Post</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

  @endsection