@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center font-weight-bold mt-5">Pelajaran {{ $study->title }}</h1>
    <div class="row mt-5">
        @foreach($child as $data) 
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
    <div class="w-100 mt-5 d-flex justify-content-center">
        {{ $child->links() }}
    </div>
</div>
@endsection