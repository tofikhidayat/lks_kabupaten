@extends('layouts.admin', ['page'=>'teacher'])

@section('content')

@if(Session::has('success'))

    <div class="alert alert-info">
        {{ Session::get('success') }}
    </div>
@endif


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Data Guru</h5>
                <div class="float-right">
                    <a href="{{ route('admin.teacher.create') }}" class="btn btn-primary">Buat Data baru</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-resposive">
                        <table class="table table-striped table-bordered">
                                <thead>
                                    <td>No</td>
                                    <td>Nuptk</td>
                                    <td>Email</td>
                                    <td>Nama</td>
                                    <td>Alamat</td>
                                    <td>Aksi</td>
                                </thead>
                                <tbody>
                                    @foreach ($teacher as $key => $data )
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $data->nuptk }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->address }}</td>
                                                <td >
                                                    <a href="{{ route('admin.teacher.edit',$data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="{{ route('admin.teacher.delete',$data->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                                </td>
                                            </tr>
                                    @endforeach
                                </tbody>
                </div>

                </table>
                <div class="w-100 d-flex justify-content-center mt-3">
                    {{ $teacher->links() }}
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection