@extends('admin/admin')
@section('content')
@foreach($pertanyaan as $p)
<div class="timeline mt-3 ml-2">
    <div>
        <div class="timeline-item pt-1 pb-1">
            <span class="time"><i class="fas fa-clock"></i> {{$p -> created_at}}</span>
            <h3 class="timeline-header ml-1"><a href="#">{{ Auth::user()->name}}</a> menambahkan pertanyaan baru 
                <a href="/pertanyaan/edit/{{$p -> id}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/pertanyaan/hapus/{{$p -> id}}" class="btn btn-danger btn-sm">Hapus</a></h3>

            <div class="timeline-body ml-1">
               <h5>Judul : {{$p->judul}}</h5>  <br>
                {{$p->isi}}
            </div>
            @include('admin/komen_pertanyaan')
            <div class="timeline-footer ml-1">
                {{$p -> tag}}
                <a href="/buat_komentar" class="btn btn-secondary btn-sm">Add Comment</a>
                <a class="btn btn-success btn-sm ml-3">Up Vote</a>
                <a class="btn btn-danger btn-sm">Down Vote</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection