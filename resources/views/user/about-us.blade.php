@extends('templates.default_user')
@section('content')
    @php
        $title = 'About Us - User';
    @endphp

    <main>
        <div class="intro d-print-none">
            <h1>TENTANG KAMI</h1>
        </div>
        <section class="fdb-block border py-5">
            <div class="container py-5" style="background-image: url();">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-9 col-xl-6">
                        <div class="fdb-box">
                            <div class="row">
                                <div class="col-8 col-sm-6 col-md-4 col-xl-3 ml-auto mr-auto">
                                </div>


                                <div class="col-md-8 mt-4 mt-md-0">
                                    <p class="lead">
                                    <h3> Design By Yourself </h3> <br> PIW adalah usaha online yang bergerak di bidang
                                    pembuatan
                                    website di Sumbawa, Nusa Tenggara Barat, Indonesia. <br> Kami siap memberikan pelayanan
                                    terbaik untuk anda. Hubungi kami untuk order website secara online.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="fdb-block team-2">
            <div class="">
                <div class="row text-center justify-content-center">
                    <div class="col-8">
                        <h1>Tim Kami</h1>
                        <hr class="hr-edit2 mg mg-btm ">
                    </div>
                </div>

                <div class="row-50"></div>

                <div class="row text-center justify-content-center">
                    <div class="col-sm-3 m-sm-auto">
                        <img alt="image" class="img-fluid rounded-circle mg-sm-btm mg-sm-top"
                            src="{{ asset('img/samir1.png') }}">

                        <h4>samir</h4>
                        <p></p>
                    </div>

                    <div class="col-sm-3 m-sm-auto">
                        <img alt="image" class="img-fluid rounded-circle mg-sm-btm mg-sm-top"
                            src="{{ asset('img/supriadi.png') }}">

                        <h4>supriadi</h4>
                        <p></p>
                    </div>

                    <div class="col-sm-3 m-sm-auto">
                        <img alt="image" class="img-fluid rounded-circle mg-sm-btm mg-sm-top"
                            src="{{ asset('img/wira1.jpeg') }}">

                        <h4>wira</h4>
                        <p></p>
                    </div>

                    <div class="col-sm-3 m-sm-auto">
                        <img alt="image" class="img-fluid rounded-circle mg-sm-btm mg-sm-top"
                            src="{{ asset('img/winda1.png') }}">

                        <h4>winda</h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
