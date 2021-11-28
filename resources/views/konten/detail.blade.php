@extends('layouts.template')

@section('tab')
Detail Konten
@endsection

@section('title')
Detail Konten
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Konten
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Judul Konten</th>
                            <th>: {{$konten->judul_konten}}</th>
                        </tr>
                        <tr>
                            <th>Isi Konten</th>
                            <th>: {{($konten->isi_konten)}}</th>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <th>: {{($konten->penerbit)}}</th>
                        </tr>
                        <tr>
                            <th>Tanggal Terbit</th>
                            <th>: {{($konten->tanggal_terbit)}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
