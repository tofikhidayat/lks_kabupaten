@extends('layouts.admin', ['page'=>'student'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h5>Edit data murid </h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.student.update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="form-group">
                    <label for="name" class="col-form-label">Nama</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{ $user->name }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" id="email" class="form-control" name="email" value="{{ $user->email }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label for="nis" class="col-form-label">Nis</label>
                    <input type="text" id="nis" class="form-control" name="nis" value="{{ $user->nis }}">
                    @error('nis')
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
                    <textarea name="address" id="address" cols="30" rows="5" class="form-control">{{ $user->address }}</textarea>
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-100">
                    <div class="float-right">
                        <a class="btn btn-secondary" href="{{ route('admin.student') }}" >Batal</a>
                        <button class="btn btn-info text-white" type="submit">Simpan</button>
                    </div>
                </div>

        </form>
        </div>
    </div>
@endsection