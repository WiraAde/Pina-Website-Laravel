@extends('templates.default_admin')

@section('content')
    @php
        $title = 'List data - Admin';
    @endphp

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-1 align-items-center">
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('admin.create') }}" class="btn btn-primary d-none d-sm-inline">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Tambahkan Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <div class="row row-cards">
                <div class="col-lg-13">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Website</th>
                                        <th>Keterangan</th>
                                        <th>Harga</th>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($listings as $listing)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $listing->title }}</td>
                                            <td class="text-muted">{{ $listing->company }}</td>
                                            <td class="text-muted">Rp.{{ $listing->location }}</td>
                                            <td>
                                                <a href="{{ route('admin.edit', $listing->id) }}">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.hapus', $listing->id) }}"
                                                    onclick="return confirm('Apakah Anda Ingin Mehapus Data ini?');">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
