@extends('menu.master')

@section('contentmenu')

<div class="timeline mt-3 ml-2">
    <div>
        <div class="timeline-item pt-1 pb-1">
            <span class="time"><i class="fas fa-clock"></i> 19:00</span>
            <h3 class="timeline-header ml-1"><a href="#">Nama User</a> menambahkan pertanyaan baru</h3>

            <div class="timeline-body ml-1">
                Ini akan menjadi isi dari Pertanyaan <br>
                bisa memuat pertanyaan berbaris-baris
            </div>
            <div class="timeline-footer ml-1">
                <a class="btn btn-secondary btn-sm">Add Comment</a>
                <a class="btn btn-success btn-sm ml-3">Up Vote</a>
                <a class="btn btn-danger btn-sm">Down Vote</a>
            </div>
        </div>
    </div>
</div>

@endsection
