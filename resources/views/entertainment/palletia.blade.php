<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entertainment - Palletia</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <style>
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
    </style>
</head>
<body>
    <video autoplay muted loop id="video-background">
        <source src="{{ asset('assets/Background baru 2.webm') }}" type="video/webm">
    </video>

    <section class="vh-100 d-flex align-items-center">
        <div class="container-fluid">
                <div class="row">
                <div class="col-8 p-0">
                    <div class="d-flex vh-100 align-items-center">
                        <div class="row g-0">
                            <div class="col-3">
                                <img src="{{ asset('assets/frame 1 pale.png') }}" alt="Image 1" class="img-fluid" style="max-height: 100vh; width: auto;">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/frame 2 pale.png') }}" alt="Image 2" class="img-fluid" style="max-height: 100vh; width: auto;">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/frame 3 pale.png') }}" alt="Image 3" class="img-fluid" style="max-height: 100vh; width: auto;">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/frame 4 pale.png') }}" alt="Image 4" class="img-fluid" style="max-height: 100vh; width: auto;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex flex-column justify-content-center align-items-center" style="margin-left: -125px;">
                    <div class="mb-4" style="margin-left: 105px; margin-top: -110px;">
                        <img src="{{ asset('assets/Logo Entertainment wiith shadow.png') }}" alt="New Image" class="img-fluid" style="width: 100%; height: auto; max-width: 350px;">
                        <img src="{{ asset('assets/Group 19.png') }}" alt="Logo" class="img-fluid" style="width: 100%; height: auto; max-width: 300px;">
                    </div>
                    <div class="d-flex justify-content-center position-absolute bottom-0" style="margin-left: -20px;">
                        <div class="icon-container">
                            <a href="{{ url('/entertainment/palletia') }}" class="btn p-0 border-0 bg-transparent">
                                <img src="{{ asset('assets/Group 17.png') }}" alt="Icon 1" class="img-fluid active-icon" style="width: 100px; height: 100px;">
                            </a>
                        </div>
                        <div class="icon-container">
                            <a href="{{ url('/entertainment/rierlam') }}" class="btn p-0 border-0 bg-transparent">
                                <img src="{{ asset('assets/Group 18.png') }}" alt="Icon 2" class="img-fluid" style="width: 100px; height: 100px;">
                            </a>
                        </div>
                    </div>
                </div>
                <style>
                    .icon-container {
                        margin: 0 2.5rem;
                    }
                    .active-icon {
                        transform: translateY(-25px) scale(1.5);
                        transition: transform 0.3s ease-in-out;
                    }
                </style>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
