@extends('layouts.admin',['page'=>'index'])

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header"><h5>Data Guru</h5></div>
            <div class="card-body">
                    <table class="table-striped table table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Nuptk</th>    
                                <th>Email</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                            </thead>
                            <tbody>
                                @foreach($teacher as $key => $data)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $data->nuptk }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->address }}</td>                                        
                                    </tr>
                                @endforeach
                            </tbody>   
                        </table>
            </div>
        </div>
    </div>

    <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header"><h5>Data Murid</h5></div>
                <div class="card-body">
                        <table class="table-striped table table-bordered">
                                <thead>
                                    <th>No</th>
                                    <th>Nis</th>    
                                    <th>Email</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                </thead>
                                <tbody>
                                    @foreach($user as $key => $data)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $data->nis }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->address }}</td>                                        
                                        </tr>
                                    @endforeach
                                </tbody>   
                            </table>
                </div>
            </div>
        </div>
</div>


@endsection