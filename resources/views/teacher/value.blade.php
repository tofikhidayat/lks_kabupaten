@extends('layouts.teacher',['page'=>'value'])

@section('content')
<div class="container clearfix">
    
<div class="w-100 clearfix d-block">
        <a href="{{ route('teacher.value.create') }}" class="btn btn-info float-right mb-3">Masukan nilai baru</a>
</div>
<div class="card">
        <div class="card-header"><h5>Data nilai murid</h5></div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
               <thead>
                   <td>No</td>
                   <td>Tanggal</td>
                   <td>Murid</td>
                   <td>Pelajaran</td>
                   <td>Nilai</td>
                   <td>Aksi</td>
               </thead>
               <tbody>
                    @foreach($value as $key => $data)
                        <tr>
                            <td>{{ $key ++ }}</td>
                            <td>{{ $data->created_at->format('y/m/d') }}</td>
                            <td>{{ $data->user->name }}</td>
                            <td>{{ $data->study->title }}</td>
                            <td>{{ $data->value }}</td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection