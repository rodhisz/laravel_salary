@extends('layouts.template')

@section('tab')
Riwayat Penggajian
@endsection

@section('title')
Riwayat Penggajian
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Riwayat Penggajian
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
                    </table>
                </div>
                <div class="card-header">
                    Riwayat Penggajian
                </div>
                <div class="card-header">
                    <table class="table table-hover">
                        <tr>
                            <th>Periode Gaji</th>
                            <th>Gaji pokok</th>
                            <th>Jumlah Tunjangan</th>
                            <th>Jumlah Potongan</th>
                            <th>Total Gaji</th>
                        </tr>
                        @foreach ($penggajian as $row)
                            <tr>
                                <td>{{$row->bulan_gajian}} / {{$row->tahun_gajian}}</td>
                                <td>Rp. {{number_format($karyawan->jabatan->gaji_pokok)}}</td>
                                <td>Rp. {{number_format($row->total_tunjangan)}}</td>
                                <td>Rp. {{number_format($row->potongan)}}</td>
                                <td><b>Rp. {{number_format($row->total_gaji)}}</b></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
