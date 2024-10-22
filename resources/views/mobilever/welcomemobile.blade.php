<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prism:NOVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }
        .logo-circle {
            width: 30vw;
            height: 30vw;
            max-width: 120px;
            max-height: 120px;
            background-color: black;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .logo {
            width: 80%;
            height: 80%;
            object-fit: contain;
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
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <video autoplay muted loop id="video-background">
        <source src="{{ asset('assets/Background baru 2.webm') }}" type="video/webm">
    </video>

    <!-- Character Image Section -->
    <div class="container-fluid">
        <section id="character-and-logo" class="section min-vh-100 d-flex flex-column align-items-center justify-content-start">
            <img src="{{ asset("assets/Company Profile Prism Nova.png") }}" alt="Character" class="img-fluid fade-in" style="max-width: 100%; height: auto;">
            <div class="logo-container">
                <div class="logo-circle mt-3 fade-in">
                    <img src="{{ asset('assets/LOGO PRISM NOVA-03.png') }}" alt="Prism:NOVA Logo" class="logo">
                </div>
            </div>
            <div class="text-content">
                <h1 class="text-center mt-3 fade-in" style="font-size: calc(20px + 2vw); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; color: #333; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">Prism:NOVA</h1>
                <p class="text-center mt-3 fade-in" style="font-size: calc(14px + 1vw); font-weight: 500; font-style: italic; color: #666; letter-spacing: 1px;">A New Way of VTuber Entertainment</p>
            </div>
        </section>
    </div>

    <!-- Vision Section -->
    <div class="container-fluid p-0 mb-5 mt-5">
        <section id="history-vision-mission" class="section min-vh-100 d-flex flex-column align-items-center justify-content-center position-relative overflow-hidden">
            <div class="position-relative w-100 mb-4 about-us-rounded fade-in" style="background-color: #E6DE3F; padding: 1rem">
                <h1 class="text-center fw-bold" style="font-size: clamp(2rem, 6vw, 3.5rem); color: #333;">About Us</h1>
            </div>
            <div class="row mx-0 w-100 fade-in" style="background-color: #f8f9fa91; padding: 2rem;">
                <div class="col-12 px-3" style="max-width: 100%; margin: 0 auto;">
                    <h2 class="mb-4 ms-3 text-start fw-bold" style="font-size: clamp(1.2rem, 3vw, 2rem); color: #333;">History and Background</h2>
                    <p class="ms-3 fs-5" style="text-align: justify; font-size: clamp(0.8rem, 2vw, 1.2rem); line-height: 1.4; color: #555;">
                        Prism:NOVA dimulai sebagai dorongan untuk memberikan pengalaman dan juga visi baru untuk dunia Virtual Youtuber di Indonesia. Perusahaan ini didirikan pada 14 Februari 2023 oleh Muhammad Ghozi Ryandika (SehaCh) dan Norman Iqbal Prihartono (LenV).
                    </p>
                    <p class="ms-3 fs-5" style="text-align: justify; font-size: clamp(0.8rem, 2vw, 1.2rem); line-height: 1.4; color: #555;">
                        Dua orang yang berpengalaman di dunia Virtual Youtuber dan bercita-cita untuk menjadikan Prism:NOVA sebagai salah satu agensi Virtual Youtuber yang berpengaruh di Indonesia hingga mencapai seluruh dunia.
                    </p>
                </div>
            </div>
            <div class="row mx-0 w-100 mt-4 vision-mission-rounded fade-in" style="background-color: black; padding: 2rem;">
                <div class="col-12 px-3" style="max-width: 100%; margin: 0 auto;">
                    <h2 class="mb-3 text-start fw-bold text-white" style="font-size: clamp(1.2rem, 3vw, 2rem);">Vision</h2>
                    <p class="text-white vision-text" style="text-align: justify; font-size: clamp(0.8rem, 2vw, 1.2rem); line-height: 1.4;">
                        Prism:NOVA mempunyai visi untuk menciptakan agency Vtuber yang tidak hanya memberikan hiburan semata mata tetapi mempunyai ingin menciptakan sebuah dunia virtual youtuber environment dengan menonjolkan roleplaying dan world building serta sebagai alternatif wajah baru dunia virtual youtuber di Indonesia.
                    </p>
                    <h2 class="mb-3 text-start fw-bold mt-4 text-white" style="font-size: clamp(1.2rem, 3vw, 2rem);">Mission</h2>
                    <p class="text-white mb-3 mission-text" style="text-align: justify; font-size: clamp(0.8rem, 2vw, 1.2rem); line-height: 1.4;">
                        Prism:NOVA juga mempunyai 3 misi dalam mencapai sebuah environment dunia virtual youtuber yaitu:
                    </p>
                    <ol class="text-white ps-4 mb-0 mission-list" style="text-align: justify; font-size: clamp(0.8rem, 2vw, 1.2rem); line-height: 1.4;">
                        <li>Mendorong kontribusi untuk mengembangkan elemen dunia virtual youtuber menjadi sesuatu yang lebih luas.</li>
                        <li>Menjadi wadah content creator untuk menyalurkan dan mengembangkan potensi bakat, dan karya kepada khalayak umum.</li>
                        <li>Menunjukkan eksplorasi karakter dan narasi yang mendalam, membedakan diri sebagai alternatif berfokus pada kualitas dan substansi.</li>
                    </ol>
                </div>
            </div>
            <style>
                @media (min-width: 320px) {
                    .container-fluid.p-0.mb-5.mt-5 {
                        margin-top: -15rem !important;
                    }
                    #history-vision-mission h2 {
                        font-size: 1rem !important;
                    }
                    #history-vision-mission p, #history-vision-mission ol {
                        font-size: 0.8rem !important;
                    }
                }
                @media (min-width: 375px) {
                    .vision-mission-rounded {
                        border-top-right-radius: 200px;
                        border-bottom-right-radius: 200px;
                    }
                    .about-us-rounded {
                        border-top-right-radius: 300px;
                        border-bottom-right-radius: 300px;
                        margin-right: 100px
                    }
                    .vision-text, .mission-text, .mission-list {
                        padding-right: 20%;
                    }
                    .container-fluid.p-0.mb-5.mt-5 {
                        margin-top: -10rem !important;
                    }
                }
                @media (min-width: 425px) {
                    .container-fluid.p-0.mb-5.mt-5 {
                        margin-top: -5rem !important;
                    }
                }
                @media (min-width: 768px) {
                    .container-fluid.p-0.mb-5.mt-5 {
                        margin-top: 0rem !important;
                    }
                }
            </style>
        </section>
    </div>

    <!-- Footer Section -->
    <div class="container-fluid p-0">
        <footer id="footer" class="section bg-dark text-white py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 mb-4">
                        <h5 class="text-white text-center mb-3 fade-in">Sub Unit</h5>
                        <div class="d-flex flex-column align-items-center">
                            <a href="#" class="btn w-75 mb-3 d-flex justify-content-between align-items-center p-3 sub-unit-btn fade-in" style="background-color: rgba(241, 230, 13, 0.28); border: 3px solid #C9C900; border-radius: 30px; transition: all 0.3s ease;">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/LOGO PRISM NOVA-03.png') }}" alt="Entertainment" class="me-3" style="width: 30px; height: 21px;">
                                    <span class="text-white fw-bold">Entertainment</span>
                                </div>
                                <i class="fa-solid fa-arrow-right" style="color: #C9C900;"></i>
                            </a>
                            <a href="#" class="btn w-75 mb-3 d-flex justify-content-between align-items-center p-3 sub-unit-btn fade-in" style="background-color: rgba(228, 9, 45, 0.31); border: 3px solid #FF3232; border-radius: 30px; transition: all 0.3s ease;">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/LOGO PRISM NOVA Lingkarya.png') }}" alt="Lingkarya" class="me-3" style="width: 30px; height: 21px;">
                                    <span class="text-white fw-bold">Lingkarya</span>
                                </div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                            </a>
                            <a href="#" class="btn w-75 mb-3 d-flex justify-content-between align-items-center p-3 sub-unit-btn fade-in" style="background-color: rgba(66, 137, 200, 0.41); border: 3px solid #0091FF; border-radius: 30px; transition: all 0.3s ease;">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/LOGO PRISM NOVA Production.png') }}" alt="Production" class="me-3" style="width: 30px; height: 21px;">
                                    <span class="text-white fw-bold">Production</span>
                                </div>
                                <i class="fa-solid fa-arrow-right text-white"></i>
                            </a>
                        </div>
                        <style>
                            .sub-unit-btn:hover, .sub-unit-btn:active {
                                transform: scale(1.05);
                                box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
                            }
                        </style>
                    </div>
                    <div class="col-12 mb-4 text-center">
                        <img src="{{ asset('assets/LOGO PRISM NOVA-03.png') }}" alt="Prism:NOVA Logo" class="logo mb-2 fade-in" style="max-width: 100px;">
                    </div>
                    <div class="col-12 mb-3 text-center">
                        <h5 class="text-white mb-3 fade-in">Connect With Us</h5>
                        <ul class="list-inline fade-in">
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-tiktok fa-lg"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr class="bg-white">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-white mb-0 fade-in">&copy; 2023 Prism:NOVA. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.section');
            
            const fadeElements = document.querySelectorAll('.fade-in');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            fadeElements.forEach(element => {
                observer.observe(element);
            });

            // Intersection Observer for section transitions
            const sectionObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // You can add any section-specific logic here if needed
                    }
                });
            }, { threshold: 0.5 });

            sections.forEach(section => {
                sectionObserver.observe(section);
            });
        });
    </script>
</body>
</html>