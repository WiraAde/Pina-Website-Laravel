@extends('templates.default_user')

@section('content')
    <p>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </p>
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Halo {{ Auth::user()->name }}, Selamat Datang di Beranda User
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="page-body">
        <div class="container-xl ">
            <div class="row row-deck row-cards ">
                @foreach ($listings as $listing)
                    <div class="col-sm-4 col-lg-4 gap-3">
                        <div class="card card-sm">
                            <a href="#" class="d-block">
                                <img src="/storage/{{ $listing->logo }}" class="card-img-top"
                                    style="width:500px; height:250px;"></a>
                            <div class="card-body">
                                <div>
                                    <div>
                                        <div>{{ $listing->title }}</div>
                                        <div><b>Harga= Rp.{{ $listing->location }}</b></div>
                                    </div>
                                </div>
                                <div class="page-header d-print-none">
                                    <div class="container-xl">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto ms-auto d-print-none">
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="text-muted" style="margin-right: 10px">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                            <path
                                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                                            </path>
                                                        </svg>
                                                        {{ $listing->views }}
                                                    </a>
                                                    <span class="d-none d-sm-inline">
                                                        <a href="{{ route('user.detail', $listing->id) }}" class="btn">
                                                            <u>Detail</u>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
