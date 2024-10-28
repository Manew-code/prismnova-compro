<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxa Lydea</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/LOGO PRISM NOVA-03.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
        }
        .container {
            text-align: center;
            background: #94b4f8;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            max-width: 500px;
            margin: 20px;
            position: absolute;
            right: 200px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }
        .logo {
            width: 100%;
            max-width: 300px;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-in-out;
        }
        .character-img {
            width: 100%;
            max-width: 750px;
            margin-bottom: 0;
            position: fixed;
            bottom: 0;
            left: 30%;
            transform: translateX(-50%);
            animation: fadeIn 1s ease-in-out;
            z-index: 1;
            cursor: pointer;
        }
        .card {
            margin-bottom: 15px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-body {
            display: flex;
            align-items: center;
            padding: 15px;
        }
        .card-icon {
            font-size: 24px;
            margin-right: 15px;
        }
        .card-title {
            margin: 0;
            flex-grow: 1;
            text-align: center;
        }
        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }
        #video-filter {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(66, 63, 89, 0.7);
            z-index: -1;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .chat-balloon {
            display: none;
            position: fixed;
            top:200px;
            left: 10%;
            transform: translateX(-50%);
            background-color: white;
            border-radius: 20px;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 300px;
            z-index: 10;
            font-weight: 300;
        }
        .chat-balloon:after {
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 0;
            border: 20px solid transparent;
            border-top-color: white;
            border-bottom: 0;
            margin-left: -20px;
            margin-bottom: -20px;
        }
        .click-me {
            position: absolute;
            bottom: 100px;
            left: 30%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
            animation: pulse 2s infinite;
            z-index: 2;
        }
        @keyframes pulse {
            0% { transform: translateX(-50%) scale(1); }
            50% { transform: translateX(-50%) scale(1.1); }
            100% { transform: translateX(-50%) scale(1); }
        }
        @media (max-width: 768px) {
            body {
                display: block;
                overflow: hidden;
            }
            .container {
                padding: 20px;
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 90%;
                max-width: none;
            }
            .character-img, .chat-balloon, .click-me {
                display: none;
            }
            .card-body {
                padding: 10px;
            }
        }
        @media (max-width: 576px) {
            .container {
                padding: 15px;
            }
            .card-body {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <video autoplay muted loop id="video-background">
        <source src="{{ asset('assets/Background baru 2.webm') }}" type="video/webm">
    </video>
    <div id="video-filter"></div>
    <img src="{{ asset('assets/logo-character/Oxa_Lydea_pose1.png') }}" alt="Character" class="character-img" id="character">
    <div class="chat-balloon" id="chatBalloon">
        Hello! I'm Oxa Lydea. Welcome to my Linktree!
    </div>
    <div class="click-me" id="clickMe">Click me!</div>
    <div class="container">
        <img src="{{ asset('assets/logo-character/Logo_Lydea_2.png') }}" alt="Logo" class="logo">
        <div class="card">
            <a href="https://facebook.com/OxaLydea" class="card-body text-decoration-none text-dark" target="_blank">
                <i class="fab fa-facebook-f card-icon text-primary"></i>
                <h5 class="card-title">Facebook</h5>
            </a>
        </div>
        <div class="card">
            <a href="https://x.com/OxaLydea" class="card-body text-decoration-none text-dark" target="_blank">
                <i class="fab fa-twitter card-icon text-info"></i>
                <h5 class="card-title">Twitter</h5>
            </a>
        </div>
        <div class="card">
            <a href="https://instagram.com/OxaLydea" class="card-body text-decoration-none text-dark" target="_blank">
                <i class="fab fa-instagram card-icon text-danger"></i>
                <h5 class="card-title">Instagram</h5>
            </a>
        </div>
        <div class="card">
            <a href="https://youtube.com/@oxalydea" class="card-body text-decoration-none text-dark" target="_blank">
                <i class="fab fa-youtube card-icon text-danger"></i>
                <h5 class="card-title">YouTube</h5>
            </a>
        </div>
        <div class="card">
            <a href="https://tiktok.com/@OxaLydea" class="card-body text-decoration-none text-dark" target="_blank">
                <i class="fab fa-tiktok card-icon text-dark"></i>
                <h5 class="card-title">TikTok</h5>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var $character = $('#character');
            var $chatBalloon = $('#chatBalloon');
            var $clickMe = $('#clickMe');
            
            const messages = [
                "Hello! Aku Oxa Lydea!",
                "Hayoo kamu lupa ngerjain PR yahh. Sekarang bawa bukunya dan kerjain didepan, jangan tanya temen kamu loh yaa",
            ];
            
            let currentMessageIndex = 0;

            function showRandomMessage() {
                let newIndex;
                do {
                    newIndex = Math.floor(Math.random() * messages.length);
                } while (newIndex === currentMessageIndex);
                
                currentMessageIndex = newIndex;
                $chatBalloon.fadeOut(200, function() {
                    $(this).text(messages[currentMessageIndex]).fadeIn(200);
                });
            }

            if ($character.length && $chatBalloon.length && $clickMe.length) {
                $character.on('click', function() {
                    if (!$chatBalloon.is(':visible')) {
                        showRandomMessage();
                        $clickMe.fadeOut();
                    } else {
                        showRandomMessage();
                    }
                });

                $clickMe.on('click', function() {
                    showRandomMessage();
                    $clickMe.fadeOut();
                });

                $chatBalloon.on('click', function() {
                    showRandomMessage();
                });
            } else {
                console.error('One or more elements not found');
            }
        });
    </script>
</body>
</html>
