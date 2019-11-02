@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
               <div class="card p-5">
                    <h3 class="text-center font-weight-bold">Data Murid</h3>
                    <div class="w-100 py-3">
                        <div class="row pb-3">
                              <div class="col-3"> <p class="mb-0 fl">Nama: </p></div>
                              <div class="col-9"><h6 class="text-dark">{{ $user->name }}</h6></div>
                        </div>
                        <div class="row pb-3">
                                <div class="col-3"> <p class="mb-0 fl">Nis: </p></div>
                                <div class="col-9"><h6 class="text-dark">{{ $user->nis }}</h6></div>
                          </div>
                          <div class="row pb-3">
                                <div class="col-3"> <p class="mb-0 fl">Email: </p></div>
                                <div class="col-9"><h6 class="text-dark">{{ $user->email }}</h6></div>
                          </div>
                          <div class="row pb-3">
                                <div class="col-3"> <p class="mb-0 fl">Alamat: </p></div>
                                <div class="col-9"><h6 class="text-dark">{{ $user->address }}</h6></div>
                          </div>
                    </div>
               </div>
            </div>
        </div>
    </div>

@endsection