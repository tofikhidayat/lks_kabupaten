<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Guru</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @include('layouts.header')
    
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 ">
                <div class="card">
                    <ul class="list-group list-unstyled">
                        <li class="list-group-item {{ isset($page) && $page == 'index' ? 'active' : ''  }}"">
                            <a href="{{ route('teacher.index') }}">Branda</a>
                        </li>
                        <li class="list-group-item {{ isset($page) && $page == 'student' ? 'active' : ''  }}">
                            <a href="{{ route('teacher.student') }}">Data Murid</a>
                        </li>
                        <li class="list-group-item {{ isset($page) && $page == 'study' ? 'active' : ''  }}"">
                            <a href="{{ route('teacher.study') }}">Mata pelajaran</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('teacher.value.index') }}">Data Nilai</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                @yield('content')
            </div>
        </div>
    </div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>