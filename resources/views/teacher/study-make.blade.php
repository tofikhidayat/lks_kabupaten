@extends('layouts.teacher',['page'=>'index'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h5>Buat data pelajaran baru</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('teacher.study.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="study_id" value="{{ $study->id }}">

                <div class="form-group">
                    <label for="image" class="col-form-label">Gambar</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                        <label for="title" class="col-form-label">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="form-group">
                        <label for="description" class="col-form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                        @error('mesage')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                <div class="w-100 clearfix">
                    <button class="btn btn-info float-right text-white">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection