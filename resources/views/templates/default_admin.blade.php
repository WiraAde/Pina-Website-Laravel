<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    @include('templates.partials_admin.head')
</head>

<body>
    <script src="{{ asset('./dist/js/demo-theme.min.js?1684106062"') }}"></script>
    <div class="page">
        <!-- Navbar -->
        @include('templates.partials_admin.navbar')
        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
            <!-- Page footer -->
            @include('templates.partials_admin.footer')
        </div>
    </div>
    @include('templates.script')

</body>

</html>
