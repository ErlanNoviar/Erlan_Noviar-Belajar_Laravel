@extends('layouts.main')

@section('konten')
<ol>
    @foreach($mahasiswa as $m)
    <li> {{ $m ['nama']}}</li>
    <li> {{ $m ['nim']}}</li>
    @endforeach
</ol> 

@if ($hitung >=1)
    Saya Punya Data
    @else
        Saya Tidak Punya Data
    
@endif
@endsection
