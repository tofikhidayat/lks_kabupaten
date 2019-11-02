@extends('layouts.teacher',['page'=>'index'])

@section('content')
    <div class="container">
            <div class="card">
                    <div class="card-header"><h5>Buat data nilai</h5></div>
                    <div class="card-body">
                        <form action="{{ route('teacher.value.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="user" class="col-form-label">Murid</label>
                                <select name="user" id="user" class="form-control">
                                    @foreach($user as $data) 
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('user')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <label for="user" class="col-form-label">Pelajaran</label>
                                    <select name="study" id="study" class="form-control">
                                        @foreach($study as $data) 
                                            <option value="{{ $data->id }}">{{ $data->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <label for="value" class="col-form-label">Nilai</label>
                                <input type="number" max="100" min="0" class="form-control" name="value" value="{{ old('value') }}" id="value">
                                @error('value')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-100c clearfix">
                                <button class="btn btn-info float-right text-white" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
@endsection