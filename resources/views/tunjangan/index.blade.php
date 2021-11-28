@extends('layouts.template')

@section('tab')
Halaman Tunjangan
@endsection

@section('title')
Halaman Tunjangan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#addModal" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Tunjangan</th>
                                <th>Nominal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tunjangan as $row)
                            <tr class="text-center">
                                <td>{{$loop->iteration + ($tunjangan->perpage() * ($tunjangan->currentpage() -1)) }}</td>
                                <td>{{$row->nama_tunjangan}}</td>
                                <td>Rp. {{number_format($row->nominal)}}</td>
                                <td>
                                    <form action="{{route('tunjangan.destroy', $row->id)}}" onsubmit="return confirm('Hapus {{$row->nama_tunjangan}}?')" method="post">
                                    @csrf
                                    @method('delete')
                                        <a href="{{route('tunjangan.show', $row->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i> Detail</a>
                                        <a href="{{route('tunjangan.edit', $row->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$tunjangan->appends(Request::all())->links()}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Tambah Tunjangan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('tunjangan.store')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="form-label">Nama Tunjangan</label>
                                            <input type="text" name="nama_tunjangan" value="{{old('nama_tunjangan')}}" required='required' class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nominal</label>
                                            <input type="number" name="nominal" value="{{old('nominal')}}" required='required' class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-primary">Tambah</button>
                                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
@endsection
