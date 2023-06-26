@extends('templates.default_admin')

@section('content')
    @php
        $title = 'Edit Data - Admin';
    @endphp
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
                    <form action="{{ route('admin.update', $listingdata->id) }}" id="payment_form" method="POST"
                        enctype="multipart/form-data" class="card">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">Form Edit</h4>
                        </div>
                        <div class="card-body">
                            <form class="card">
                                <div class="card-body">
                                    <div class="row row-cards">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Jenis Website</label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                    value="{{ $listingdata->title }}" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 mb-0">
                                                <label class="form-label">Keterangan</label>
                                                <textarea rows="5" class="form-control" id="company" name="company"required>{{ $listingdata->company }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Harga</label>
                                                <input type="text" class="form-control" id="location" name="location"
                                                    value="{{ $listingdata->location }}" required />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-label">Masukkan Gambar</div>
                                            <input type="file" class="form-control" id="logo"
                                                value="{{ $listingdata->logo }}" name="logo" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-primary" id="form_submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
