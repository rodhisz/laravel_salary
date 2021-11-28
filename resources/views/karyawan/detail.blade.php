@extends('layouts.template')

@section('tab')
Detail Karyawan
@endsection

@section('title')
Detail Karyawan
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Karyawan
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Nama Karyawan</th>
                            <th>: {{$karyawan->nama_karyawan}}</th>
                        </tr>
                        <tr>
                            <th>Jabatan</th>
                            <th>: {{$karyawan->jabatan->nama_jabatan}}</th>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <th>: Karyawan {{($karyawan->status)}}</th>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <th>: {{($karyawan->tanggal_masuk)}}</th>
                        </tr>
                        <tr>
                            <th>Nomor Handphone</th>
                            <th>: {{($karyawan->nomor_hp)}}</th>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <th>: {{($karyawan->username)}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
