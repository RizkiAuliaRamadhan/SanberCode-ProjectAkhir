@extends('user.master')

@section('contentuser')

    <div class="container mt-4 mb-4">
    <div class="row justify-content-md-center">
      <div class="col-md-12 col-lg-8">
        <h1 class="h2 mb-4">Form Pertanyaan</h1><br>
        <form action="/user/pertanyaan" method="POST">   
            {{ csrf_field() }}
            <input type="hidden" name="id">
            <label>Judul</label>
            <input class="form-control" type="text" name="judul" required="required"> <br/>
            <label>Isi Pertanyaan</label>
            <div class="form-group">
            <textarea id="editor" name="isi"></textarea>
            </div>
            <label>Tag</label>
            <select class="custom-select" name="tag">
                <option selected>Tag</option>
                <option value="html">html</option>
                <option value="css">css</option>
                <option value="php">php</option>
            </select>           
            <label>profil_id</label>
            <input class="form-control" type="number" name="profil_id" required="required"> <br/>
            <button type="submit" class="btn btn-primary">Add Question</button>
        </form>
      </div>
    </div>
</div>

@endsection