<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Prism:NOVA') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
            overflow-x: hidden;
        }
        #video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1000;
            background-size: cover;
        }
        .logo-container {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        .logo {
            max-width: 20%;
            position: relative;
            z-index: 1;
        }
        .logo-circle {
            position: absolute;
            width: 24%;
            height: 0;
            padding-bottom: 24%;
            border-radius: 50%;
            background-color: black;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
        }
        .characters-img {
            max-width: 110%;
            height: auto;
            margin-left: -10%;
            margin-top: -10vh;
        }
        .text-content {
            margin-top: 2rem;
        }
        .section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-button {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1000;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: 600;
            color: #fffb29;
            background-color: rgb(0, 0, 0);
            border: none;
            border-radius: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .modal-button:hover {
            background-color: #fffb29;
            color: rgb(0, 0, 0);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }
        .division-button {
            padding: 10px 20px;
            font-size: 18px;
            font-weight: 600;
            border: none;
            border-radius: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .division-button:hover {
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
            .col-md-6 {
                width: 100%;
            }
            .characters-img {
                max-width: 100%;
                margin-left: 0;
                margin-top: 0;
            }
            .logo-container {
                margin-top: 2rem;
            }
            .modal-button {
                top: 10px;
                right: 10px;
                padding: 8px 16px;
                font-size: 16px;
            }
            .division-button {
                padding: 8px 16px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <video autoplay muted loop id="video-background">
        <source src="{{ asset('assets/Background baru 2.webm') }}" type="video/webm">
    </video>

    <div style="position: relative;">
        <button type="button" class="modal-button" data-bs-toggle="modal" data-bs-target="#infoModal">
            <i class="fas fa-info-circle me-2"></i>Division
        </button>
    </div>

    <section id="home" class="section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 mb-3">
                    <img src="{{ asset('assets/Company Profile Prism Nova.png') }}" alt="Prism:NOVA Characters" class="characters-img">
                </div>
                <div class="col-md-6 text-center">
                    <div class="logo-container">
                        <div class="logo-circle"></div>
                        <img src="{{ asset('assets/LOGO PRISM NOVA-03.png') }}" alt="Prism:NOVA Logo" class="logo">
                    </div>
                    <div class="text-content">
                        <h1 class="fw-bold text-uppercase" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">Prism:NOVA</h1>
                        <p class="lead fw-semibold" style="letter-spacing: 1px;">A New Way of VTuber Entertainment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="mb-4">History and Background</h2>
                    <p>
                        Prism:NOVA dimulai sebagai dorongan untuk memberikan pengalaman dan juga visi baru untuk dunia Virtual Youtuber di Indonesia. Perusahaan ini didirikan pada 14 Februari 2023 oleh Muhammad Ghozi Ryandika (SehaCh) dan Norman Iqbal Prihartono (LenV). 
                    </p>
                    <p>
                        Dua orang yang berpengalaman di dunia Virtual Youtuber dan bercita-cita untuk menjadikan Prism:NOVA sebagai salah satu agensi Virtual Youtuber yang berpengaruh di Indonesia hingga mencapai seluruh dunia.
                    </p>
                    <p>
                        Saat ini, Prism:NOVA sendiri hadir di beberapa platform seperti YouTube, Instagram, TikTok, dan juga X. Prism:NOVA didirikan di Jakarta dan perusahaan memilih Jakarta sebagai basis operasinya karena memberikan akses optimal ke pasar global, regional, dan lokal.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="background-image: url('{{ asset('assets/backgroundputih.png') }}'); background-size: cover; background-position: center; border: none;">
                <div class="modal-header" style="border: none;">
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px;"></button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center text-black fw-bold mb-4">Pilih Divisi</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <button type="button" class="division-button w-100 d-flex align-items-center justify-content-between" style="background-color: rgba(201, 201, 0, 0.1); border: 1px solid rgb(201, 201, 0);">
                                <img src="{{ asset('assets/LOGO PRISM NOVA-03.png') }}" alt="Divisi 1" class="me-2" style="width: 30px; height: 30px;">
                                <span style="color: rgb(0, 0, 0);">Entertainment</span>
                                <i class="fas fa-chevron-right" style="color: rgb(201, 201, 0);"></i>
                            </button>
                        </div>
                        <div class="col-md-4 mb-3">
                            <button type="button" class="division-button w-100 d-flex align-items-center justify-content-between" style="background-color: rgba(255, 50, 50, 0.1); border: 1px solid rgb(255, 50, 50);">
                                <img src="{{ asset('assets/LOGO PRISM NOVA Lingkarya.png') }}" alt="Divisi 2" class="me-2" style="width: 30px; height: 30px;">
                                <span style="color: rgb(0, 0, 0);">Lingkarya</span>
                                <i class="fas fa-chevron-right" style="color: rgb(255, 50, 50);"></i>
                            </button>
                        </div>
                        <div class="col-md-4 mb-3">
                            <button type="button" class="division-button w-100 d-flex align-items-center justify-content-between" style="background-color: rgba(0, 145, 255, 0.1); border: 1px solid rgb(0, 145, 255);">
                                <img src="{{ asset('assets/LOGO PRISM NOVA Production.png') }}" alt="Divisi 3" class="me-2" style="width: 30px; height: 30px;">
                                <span style="color: rgb(0, 0, 0);">Production</span>
                                <i class="fas fa-chevron-right" style="color: rgb(0, 145, 255);"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
