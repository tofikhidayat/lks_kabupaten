@extends('layouts.teacher',['page'=>'index'])

@section('content')
    <div class="row">
            @foreach($study as $data)
            <div class="col-md-4 mt-3">
                <a href="{{ route('teacher.study.make', $data->id) }}" class="text-decoration-none text-dark">
                        <div class="card border-0 card-hover shadow py-3">
                                <div class="card-body shadow-none">
                                    <h4 class="text-center">{{ $data->title }}</h4>
                                    <p class="mt-3 text-secondary">{{ Str::limit($data->description, 100) }}</p>
                                </div>
                            </div>  
                    </a> 
            </div>
            @endforeach
        </div>
    </div>
@endsection