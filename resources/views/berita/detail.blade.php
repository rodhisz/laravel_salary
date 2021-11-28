@extends('layouts.template')

@section('tab')
Detail Berita
@endsection

@section('title')
Detail Berita
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Berita
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Judul Berita</th>
                            <th>: {{$berita->judul_berita}}</th>
                        </tr>
                        <tr>
                            <th>Isi Berita</th>
                            <th>: {{($berita->isi_berita)}}</th>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <th>: {{($berita->penerbit)}}</th>
                        </tr>
                        <tr>
                            <th>Tanggal Terbit</th>
                            <th>: {{($berita->tanggal_terbit)}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
