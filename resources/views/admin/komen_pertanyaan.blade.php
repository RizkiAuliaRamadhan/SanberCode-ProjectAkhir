@foreach($komentar as $k)
<div class="timeline-body ml-1">
    <hr>
    <p>Coment : {{$k -> isi}}</p>
</div>
@endforeach