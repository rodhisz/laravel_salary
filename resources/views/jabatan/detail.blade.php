@extends('layouts.template')

@section('tab')
Detail Jabatan
@endsection

@section('title')
Detail Jabatan
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Jabatan
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Nama Jabatan</th>
                            <th>{{$jabatan->nama_jabatan}}</th>
                        </tr>
                        <tr>
                            <th>Gaji Pokok</th>
                            <th>Rp. {{number_format($jabatan->gaji_pokok)}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
