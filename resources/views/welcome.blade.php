@extends('layouts.app')

@section('content')

    <section class="banner d-flex align-items-center flex-column justify-content-center">
        <div class="w-100">
            <h1 class="text-center font-weight-bold text-white">Smkn 1 Cibadak</h1>
            <h3 class="text-center text-white">Jalan almuwahidin karang tengah</h3>
        </div>
    </section>

    <section class="about mt-5 pt-5 clearfix">
        <h2 class="text-center title font-weight-bold">TENTANG</h2>

        <div class="container mt-5 pt-5">

            <div class="about-space float-left">
                <img src="{{ asset('images/about.jpg') }}" alt="">
            </div>
            <div class="about-content float-left">
                    <div class="card border-0 shadow p-5">
                            <p class="text-secondary lm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet autem temporibus adipisci quibusdam aliquam nobis eum sunt nam fugiat. Quae unde ipsam sapiente repellat? Suscipit temporibus eligendi laborum repellendus incidunt.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet autem temporibus adipisci quibusdam aliquam nobis eum sunt nam fugiat. Quae unde ipsam sapiente repellat? Suscipit temporibus eligendi laborum repellendus incidunt.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet autem temporibus adipisci quibusdam aliquam nobis eum sunt nam fugiat. Quae unde ipsam sapiente repellat? Suscipit temporibus eligendi laborum repellendus incidunt.
                                </p>
                    </div>
                </div>
        </div>

    </section>

    <section class="studies mt-5  pt-5 clearfix">
            <h2 class="text-center title font-weight-bold">PELAJARAN FAVORIT</h2>
            <div class="container py-5">
                <div class="row d-flex">
                    @foreach($study as $data)
                    <div class="col-md-4 mt-3">
                        <a href="{{ route('study.view', $data->id) }}" class="text-decoration-none text-dark">
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
    </section>

@endsection