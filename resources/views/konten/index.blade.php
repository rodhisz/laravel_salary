@extends('layouts.template')

@section('tab')
Halaman Konten
@endsection

@section('title')
Halaman Konten
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
                                <th>Judul Konten</th>
                                <th>Penerbit</th>
                                <th>Tanggal Terbit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($konten as $row)
                            <tr class="text-center">
                                <td>{{$loop->iteration + ($konten->perpage() * ($konten->currentpage() -1)) }}</td>
                                <td>{{$row->judul_konten}}</td>
                                <td>{{($row->penerbit)}}</td>
                                <td>{{($row->tanggal_terbit)}}</td>
                                <td>
                                    <form action="{{route('konten.destroy', $row->id)}}" onsubmit="return confirm('Hapus konten {{$row->judul_konten}} ?')" method="post">
                                    @csrf
                                    @method('delete')
                                        <a href="{{route('konten.show', $row->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i> Detail</a>
                                        <a href="{{route('konten.edit', $row->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$konten->appends(Request::all())->links()}}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Tambah konten</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('konten.store')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="form-label">Judul konten</label>
                                            <input type="text" name="judul_konten" value="{{old('judul_konten')}}" required='required' class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Isi konten</label>
                                            <textarea name="isi_konten" required='required' class="form-control" rows="5">{{old('isi_konten')}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Penerbit</label>
                                            <input type="text" name="penerbit" value="{{old('penerbit')}}" required='required' class="form-control">
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
