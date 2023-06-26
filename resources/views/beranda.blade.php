<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage - PIW</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>
    <header class="header">
        <a href="#" class="logo">PIW</a>
        <nav class="nav-items">
            <a href="{{ route('login.form-login') }}">Masuk</a>
            <a href="{{ route('register.form-register') }}">Daftar</a>

        </nav>
    </header>
    <main>
        <div class="intro">
            <h1>Jasa Pembuatan Website untuk Segala Kebutuhan Anda!</h1>
            <p>Ingin wujudkan website impian tanpa ribet? Kami siap membantu Anda! Tersedia layanan jasa pembuatan
                website murah dan berkualitas dengan pelayanan yang baik!</p>

        </div>
        <section id="content">
            <div class="content">
                <h2>Proses Pembuatan Website</h2>
                <p>Tanpa perlu coding dan ribet dengan masalah teknis!
                    Kini, Anda bisa bangun website berkualitas hanya dengan 3 langkah!</p>
            </div>
            <div class="achievements">
                <div class="work">
                    <p class="work-heading">Pilih Paket Jasa</p>
                    <p class="work-text">Klik Menu “Order Website” dan temukan paket jasa website sesuai kebutuhan Anda.
                    </p>
                </div>
                <div class="work">
                    <p class="work-heading">Konsultasi Website</p>
                    <p class="work-text">Konsultasikan terlebih dahulu fitur-fitur untuk website anda secara langsung
                        pada operator.</p>
                </div>
                <div class="work">
                    <p class="work-heading">Melakukan Order Jasa</p>
                    <p class="work-text">Setelah melakukan konsultasi, silakan lakukan order dan selesaikan pembayaran..
                    </p>
                </div>
            </div>

        </section>

    </main>
    <footer class="footer">
        <div class="copy">&copy; 2023 Pina Website. All rights reserved.</div>
        </div>
    </footer>
</body>

</html>
