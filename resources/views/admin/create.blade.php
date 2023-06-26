@extends('templates.default_admin')
@section('content')
    @php
        $title = 'Create Data - Admin';
    @endphp

    <div class="mb-4" style="margin-top: 20px">
        <h1 class="text-2xl font-medium text-black title-font">
            Tambahkan Website
        </h1>
    </div>
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
                    <form action="{{ route('admin.simpan') }}" id="payment_form" method="post" enctype="multipart/form-data"
                        class="card">
                        @csrf
                        <div class="card-body">
                            <form class="card">
                                <div class="card-body">
                                    <div class="row row-cards">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Jenis Website</label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 mb-0">
                                                <label class="form-label">Keterangan</label>
                                                <textarea rows="5" class="form-control" id="company" name="company" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Harga</label>
                                                <input type="text" class="form-control" id="location" name="location"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-label">Masukkan Gambar</div>
                                            <input type="file" class="form-control" id="logo" name="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" id="form_submit" class="btn btn-primary">Posting</button>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
