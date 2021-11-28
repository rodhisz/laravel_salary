@extends('layouts.template')

@section('tab')
Edit Konten
@endsection

@section('title')
Edit Konten
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Konten
                </div>
                <div class="card-body">
                    <form action="{{route('konten.update', $konten->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="form-label">Judul konten</label>
                                <input type="text" name="judul_konten" value="{{$konten->judul_konten}}" required='required' class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Isi konten</label>
                                <textarea name="isi_konten" required='required' class="form-control" rows="5">{{$konten->isi_konten}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Penerbit</label>
                                <input type="text" name="penerbit" value="{{$konten->penerbit}}" required='required' class="form-control">
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
