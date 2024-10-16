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
            scroll-behavior: smooth;
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
        footer {
            background-color: #000;
            color: #fff;
            padding: 2rem 0;
        }
        .section {
            height: 100vh;
            scroll-snap-align: start;
            opacity: 0;
            transition: opacity 0.5s ease-out;
        }
        .scroll-container {
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            height: 100vh;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        .scroll-container::-webkit-scrollbar { 
            width: 0;
            height: 0;
        }
        /* Animation styles */
        .section.active {
            opacity: 1;
        }
        /* Navigation dots styles */
        .nav-dots {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
        }
        .nav-dot {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: #c6c6c6;
            margin: 10px 0;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #000;
            font-weight: bold;
            font-size: 12px;
        }
        .nav-dot.active {
            background-color: #f6f218;
            transform: scale(1.3);
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

    <div class="nav-dots">
        <div class="nav-dot" data-section="home">1</div>
        <div class="nav-dot" data-section="about-us">2</div>
        <div class="nav-dot" data-section="sub-unit">3</div>
    </div>

    <div class="scroll-container">
        <section id="home" class="section d-flex align-items-center">
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

        <section id="about-us" class="section d-flex align-items-center position-relative overflow-hidden">
            <div class="container-fluid position-relative p-0">
                <div class="position-absolute top-0 start-0" style="transform: translate(-0%, -120%);">
                    <img src="{{ asset('assets/About Us Kuning.png') }}" alt="Top Left Decoration" class="img-fluid" style="max-width: 600px; height: 200px;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <h1 class="fw-bold text-black display-3 text-start">About Us</h1>
                    </div>
                </div>
                <div class="row mx-0q" style="background-color: rgba(255, 255, 255, 0.789);">
                    <div class="col-12 px-4">
                        <h3 class="mb-3 ms-3 text-start fw-bold">History and Background</h3>
                        <p class="ms-3">
                            Prism:NOVA dimulai sebagai dorongan untuk memberikan pengalaman dan juga visi baru untuk dunia Virtual Youtuber di Indonesia. Perusahaan ini didirikan pada 14 Februari 2023 oleh Muhammad Ghozi Ryandika (SehaCh) dan Norman Iqbal Prihartono (LenV).
                        </p>
                        <p class="ms-3">
                            Dua orang yang berpengalaman di dunia Virtual Youtuber dan bercita-cita untuk menjadikan Prism:NOVA sebagai salah satu agensi Virtual Youtuber yang berpengaruh di Indonesia hingga mencapai seluruh dunia.
                        </p>
                        <p class="ms-3">
                            Saat ini, Prism:NOVA sendiri hadir di beberapa platform seperti YouTube, Instagram, TikTok, dan juga X. Prism:NOVA didirikan di Jakarta dan perusahaan memilih Jakarta sebagai basis operasinya karena memberikan akses optimal ke pasar global, regional, dan lokal.
                        </p>
                    </div>
                </div>
                <div class="position-absolute bottom-0 start-0 w-100" style="transform: translateY(110%);">
                    <img src="{{ asset('assets/About us hitam.png') }}" alt="Bottom Left Decoration" class="img-fluid" style="width: 1570px; height: 230px;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white px-3 px-md-5">
                        <div class="row w-100 mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <h3 class="fw-bold">Vision</h3>
                            </div>
                            <div class="col-md-6">
                                <h3 class="fw-bold">Mission</h3>
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="col-md-6 text-start pe-md-4 mb-3 mb-md-0">
                                <p style="text-align: justify;">
                                    Prism:NOVA mempunyai visi untuk menciptakan agency Vtuber yang tidak hanya memberikan hiburan semata mata tetapi mempunyai ingin menciptakan sebuah dunia virtual youtuber environment dengan menonjolkan roleplaying dan world building serta sebagai alternatif wajah baru dunia virtual youtuber di Indonesia.
                                </p>
                            </div>
                            <div class="col-md-6 text-start">
                                <p style="text-align: justify;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At placeat aperiam cum labore qui fuga unde itaque omnis commodi iste alias tenetur, repellat consequatur quidem? Repudiandae distinctio aspernatur nisi dicta.                      
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sub-unit" class="section d-flex flex-column justify-content-end" style="background: linear-gradient(to bottom, #ffffff 15%, #000000 15%);">
            <div class="container mb-4">
                <div class="row justify-content-center">
                    <h1 class="text-white text-center mb-5">Sub Unit</h1>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="{{ url('/entertainment/rierlam') }}" class="btn w-100 d-flex flex-column justify-content-between p-3 h-100" style="background-color: rgba(241, 230, 13, 0.28); border: 5px solid #C9C900; border-radius: 30px; transition: all 0.3s ease;">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/LOGO PRISM NOVA-03.png') }}" alt="Entertainment" class="me-3" style="width: 50px; height: 35px;">
                                <h3 class="text-white fw-bold mb-0">Entertainment</h3>
                            </div>
                            <p class="text-white small mb-3" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iusto exercitationem iure tempora laborum provident nulla debitis at corporis temporibus accusamus nisi amet dolor obcaecati, fugiat consequatur dicta atque ipsum!</p>
                            <div class="text-end">
                                <i class="fa-solid fa-arrow-right" style="color: #C9C900;"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" class="btn w-100 d-flex flex-column justify-content-between p-3 h-100" style="background-color: rgba(228, 9, 45, 0.31); border: 5px solid #FF3232; border-radius: 30px; transition: all 0.3s ease;">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/LOGO PRISM NOVA Lingkarya.png') }}" alt="Lingkarya" class="me-3" style="width: 50px; height: 35px;">
                                <h3 class="text-white fw-bold mb-0">Lingkarya</h3>
                            </div>
                            <p class="text-white small mb-3" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iusto exercitationem iure tempora laborum provident nulla debitis at corporis temporibus</p>
                            <div class="text-end">
                                <i class="fa-solid fa-arrow-right text-white"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="#" class="btn w-100 d-flex flex-column justify-content-between p-3 h-100" style="background-color: rgba(66, 137, 200, 0.41); border: 5px solid #0091FF; border-radius: 30px; transition: all 0.3s ease;">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/LOGO PRISM NOVA Production.png') }}" alt="Production" class="me-3" style="width: 50px; height: 35px;">
                                <h3 class="text-white fw-bold mb-0">Production</h3>
                            </div>
                            <p class="text-white small mb-3" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iusto exercitationem iure tempora laborum provident nulla debitis at corporis temporibus accusamus nisi amet dolor obcaecati, fugiat consequatur dicta atque ipsum!</p>
                            <div class="text-end">
                                <i class="fa-solid fa-arrow-right text-white"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <style>
                    .btn:hover {
                        transform: scale(1.05);
                        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
                    }
                </style>
            </div>
            <div class="container">
                <hr class="bg-white border-white mb-4">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/LOGO PRISM NOVA-03.png') }}" alt="Prism:NOVA Logo" class="logo mb-3">
                        <h5 class="text-white mb-2">About Prism:NOVA</h5>
                        <p class="text-white mb-0">A New Way of VTuber Entertainment</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-white">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#home" class="text-white">Home</a></li>
                            <li><a href="#about-us" class="text-white">About Us</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#infoModal" class="text-white">Divisions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-white">Connect With Us</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-youtube"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-tiktok"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr class="bg-white">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-white">&copy; 2023 Prism:NOVA. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

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
                            <a href="{{ url('/entertainment/rierlam') }}" class="division-button w-100 d-flex align-items-center justify-content-between text-decoration-none" style="background-color: rgba(201, 201, 0, 0.1); border: 1px solid rgb(201, 201, 0);">
                                <img src="{{ asset('assets/LOGO PRISM NOVA-03.png') }}" alt="Divisi 1" class="me-2" style="width: 30px; height: 30px;">
                                <span style="color: rgb(0, 0, 0);">Entertainment</span>
                                <i class="fas fa-chevron-right" style="color: rgb(201, 201, 0);"></i>
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="#" class="division-button w-100 d-flex align-items-center justify-content-between text-decoration-none" style="background-color: rgba(255, 50, 50, 0.1); border: 1px solid rgb(255, 50, 50);">
                                <img src="{{ asset('assets/LOGO PRISM NOVA Lingkarya.png') }}" alt="Divisi 2" class="me-2" style="width: 30px; height: 30px;">
                                <span style="color: rgb(0, 0, 0);">Lingkarya</span>
                                <i class="fas fa-chevron-right" style="color: rgb(255, 50, 50);"></i>
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="#" class="division-button w-100 d-flex align-items-center justify-content-between text-decoration-none" style="background-color: rgba(0, 145, 255, 0.1); border: 1px solid rgb(0, 145, 255);">
                                <img src="{{ asset('assets/LOGO PRISM NOVA Production.png') }}" alt="Divisi 3" class="me-2" style="width: 30px; height: 30px;">
                                <span style="color: rgb(0, 0, 0);">Production</span>
                                <i class="fas fa-chevron-right" style="color: rgb(0, 145, 255);"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.section');
            const navDots = document.querySelectorAll('.nav-dot');
            
            // Intersection Observer for section transitions
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        updateNavDots(entry.target.id);
                    } else {
                        entry.target.classList.remove('active');
                    }
                });
            }, { threshold: 0.5 });

            sections.forEach(section => {
                observer.observe(section);
            });

            // Update navigation dots
            function updateNavDots(activeSection) {
                navDots.forEach(dot => {
                    if (dot.dataset.section === activeSection) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            }

            // Smooth scroll to section when clicking on nav dots
            navDots.forEach(dot => {
                dot.addEventListener('click', () => {
                    const targetSection = document.getElementById(dot.dataset.section);
                    targetSection.scrollIntoView({ behavior: 'smooth' });
                });
            });
        });
    </script>
</body>
</html>
