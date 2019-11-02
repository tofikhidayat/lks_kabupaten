@extends('layouts.user',['page'=>'value'])


@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Daftar nilai</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striper table-bordered">
                    <thead>
                        <td>No</td>
                        <td>Tanggal</td>
                        <td>pelajaran</td>
                        <td>Nilai</td>
                    </thead>
                    <tbody>
                        @foreach($value as $key=> $data)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $data->created_at->format('Y/m/d') }}</td>
                            <td>{{ $data->study->title }}</td>
                            <td>{{ $data->value }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection