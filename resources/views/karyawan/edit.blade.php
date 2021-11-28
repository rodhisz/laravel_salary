@extends('layouts.template')

@section('tab')
Edit Karyawan
@endsection

@section('title')
Edit Karyawan
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Karyawan
                </div>
                <div class="card-body">
                    <form action="{{route('karyawan.update', $karyawan->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="form-label">Nama karyawan</label>
                                <input type="text" name="nama_karyawan" value="{{$karyawan->nama_karyawan}}" required='required' class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jabatan</label>
                                <select name="id_jabatan" required="required" class="form-control">
                                    <option value="{{$karyawan->id_jabatan}}">{{$karyawan->jabatan->nama_jabatan}}</option>
                                    @foreach ($jabatan as $row)
                                        <option value="{{$row->id}}">{{$row->nama_jabatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="status" required="required" class="form-control">
                                    <option value="{{$karyawan->status}}">Karyawan {{$karyawan->status}}</option>
                                    <option value="tetap">Karyawan Tetap</option>
                                    <option value="kontrak">Karyawan Kontrak</option>
                                    <option value="magang">Karyawan Magang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nomor Handphone</label>
                                <input type="number" name="nomor_hp" value="{{$karyawan->nomor_hp}}" required='required' class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" value="{{$karyawan->username}}" required='required' class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
