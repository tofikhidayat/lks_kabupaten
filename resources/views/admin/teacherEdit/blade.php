@extends('layouts.admin', ['page'=>'teacher'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h5>Buat Data guru baru</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.teacher.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="name" class="col-form-label">Nama</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label for="nuptk" class="col-form-label">Nuptk</label>
                    <input type="text" id="nuptk" class="form-control" name="nuptk" value="{{ old('nuptk') }}">
                    @error('nuptk')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label for="password" class="col-form-label">Password</label>
                    <input type="text" id="password" class="form-control" name="password" value="secret">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label for="name" class="col-form-label">Alamat</label>
                    <textarea name="address" id="address" cols="30" rows="5" class="form-control">{{ old('address') }}</textarea>
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-100">
                    <div class="float-right">
                        <a class="btn btn-secondary" href="{{ route('admin.teacher') }}" >Batal</a>
                        <button class="btn btn-info text-white" type="submit">Simpan</button>
                    </div>
                </div>

        </form>
        </div>
    </div>
@endsection