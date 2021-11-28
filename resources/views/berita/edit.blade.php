@extends('layouts.template')

@section('tab')
Edit Berita
@endsection

@section('title')
Edit Berita
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Berita
                </div>
                <div class="card-body">
                    <form action="{{route('berita.update', $berita->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="form-label">Judul berita</label>
                                <input type="text" name="judul_berita" value="{{$berita->judul_berita}}" required='required' class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Isi Berita</label>
                                <textarea name="isi_berita" required='required' class="form-control" rows="5">{{$berita->isi_berita}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Penerbit</label>
                                <input type="text" name="penerbit" value="{{$berita->penerbit}}" required='required' class="form-control">
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
