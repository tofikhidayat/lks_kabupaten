@extends('layouts.teacher',['page'=>'study'])


@section('content')


@if(Session::has('success'))

    <div class="alert alert-info">
        {{ Session::get('success') }}
    </div>
@endif


<div class="w-100 clearfix mb-3">
<a href="{{ route('teacher.study.create') }}" class="float-right btn btn-info text-white">Buat Data baru</a>
</div>

    <div class="card">
        <div class="card-header">
            <h5>Data pelajaran</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered table-stripped">
                            <thead>
                                <th>No</th>
                                <th>Title</th>
                                <th>Pelajaran</th>
                                <th>Image</th>
                                <th>deskripsi</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($study as $key=> $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ Str::limit($data->title, 20) }}</td>
                                        <td>{{ $data->study->title }}</td>
                                        <td><img src="{{  asset($data->image) }}" height="50" width="50" style="object-fit:cover" alt=""></td>
                                        <td>{{ Str::limit($data->description, 30) }}</td>
                                        <td>
                                                <a href="" class="btn btn-sm btn-info">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Hapus</a>  
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
            </div>
            <div class="w-100 d-flex justify-content-center">
                    {{  $study->links() }}
            </div>
        </div>
    </div>
@endsection