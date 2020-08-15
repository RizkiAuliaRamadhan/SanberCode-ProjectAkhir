@extends('user.master')

@section('contentuser')

    <div class="container mt-4 mb-4">
    <div class="row justify-content-md-center">
      <div class="col-md-12 col-lg-8">
        <h1 class="h2 mb-4">Form Komentar</h1><br>
        <form action="/user/komentar" method="POST">   
            {{ csrf_field() }}
            <input type="hidden" name="id">
            <label>Isi Komentar</label>
            <div class="form-group">
            <textarea id="editor" name="isi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Comment</button>
        </form>
      </div>
    </div>
</div>

@endsection