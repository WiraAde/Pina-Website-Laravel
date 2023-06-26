@extends('templates.default_user')

@section('content')
    @php
        $title = 'Detail';
    @endphp
    <p>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </p>
    <div>
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Detail Website
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-200 text-red-800">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ $listing->id }}" id="payment_form" method="get" enctype="multipart/form-data"
                        class="card">
                        <div class="col-sm-15 col-lg-13 gap-3">
                            <div class="card card-sm">
                                <a href="#" class="d-block">
                                    <img src="/storage/{{ $listing->logo }}" class="card-img-top"></a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div>
                                        <div><b>{{ $listing->title }}</b></div>
                                        <div>{{ $listing->company }}</div>
                                        <div><b>Harga= Rp.{{ $listing->location }}</b></div>

                                    </div>
                                </div>
                                <div class="page-header d-print-none">
                                    <div class="container-xl">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto ms-auto d-print-none">
                                                <div class="btn-list">
                                                    <a href="https://api.whatsapp.com/send?phone=+6285238595915&text=Empowering Website Chat"
                                                        class="btn btn-success w-10 d-none d-sm-inline-block"
                                                        target="_blank">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-brand-whatsapp"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                                            <path
                                                                d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1">
                                                            </path>
                                                        </svg>
                                                        Order
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
