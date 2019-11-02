@extends('layouts.app')


@section('content')
    <div class="container mt-5">
        <div class="banner-data">
            <img src="{{ asset($study->image) }}" class="w-100" style="max-height:400px; width:100%; object-fit:cover" alt="">
        </div>
        <div class="data-text mt-4">
            <h3 class="text-left font-weight-bold">{{ $study->title }}</h3>
            <p class="text-secondary">{{ $study->created_at->format('y/m/d H:i') }}</p>
        </div>
        <div class="main-data py-5">
            {!! $study->description !!}
        </div>
    </div>
    <div class="container mt-4">
        
        <div class="row">
            @foreach($random as $data) 
            <div class="col-md-4 mt-3">
                    <a href="{{ route('study.review', $data->id) }}" class="text-decoration-none text-dark">
                            <div class="card border-0 card-hover shadow pb-3 px-0">
                                    <div class="card-body shadow-none pt-0 px-0">
                                        <img src="{{ asset($data->image) }}" class="w-100" alt="">
                                       <div class="w-100 p-3">
                                            <h4 class="text-left font-weight-bold">{{ $data->title }}</h4>
                                            <p class="mt-3 text-secondary">{{ Str::limit($data->description, 100) }}</p>
                                       </div>
                                    </div>
                                </div>  
                        </a> 
                </div>
            @endforeach
        </div>
    </div>
@endsection