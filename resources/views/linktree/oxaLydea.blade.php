<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OxaLydea Linktree</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'SF Pro Display', Arial, sans-serif;
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
        }
        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            max-width: 500px;
            margin: 20px;
        }
        .logo {
            width: 100%;
            max-width: 300px;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-in-out;
        }
        .link {
            display: block;
            margin: 15px 0;
            padding: 15px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            transition: background 0.3s, transform 0.3s;
            font-size: 18px;
            font-weight: bold;
            max-width: 300px; /* Added max-width to make cards less wide */
            margin-left: auto; /* Center align the cards */
            margin-right: auto; /* Center align the cards */
        }
        .link:hover {
            background: #0056b3;
            transform: translateY(-5px);
        }
        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            filter: brightness(0.7);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            .link {
                font-size: 16px;
                padding: 10px;
            }
        }
        @media (max-width: 576px) {
            .container {
                padding: 15px;
            }
            .link {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <video autoplay muted loop id="video-background">
        <source src="{{ asset('assets/Background baru 2.webm') }}" type="video/webm">
    </video>
    <div class="container">
        <img src="{{ asset('assets/logo-character/Logo_Lydea_2.png') }}" alt="Logo" class="logo">
        <a href="https://facebook.com" class="link"><i class="fab fa-facebook-f"></i> Facebook</
        <a href="https://twitter.com" class="link"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="https://instagram.com" class="link"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="https://youtube.com" class="link"><i class="fab fa-youtube"></i> YouTube</a>
        <a href="https://tiktok.com" class="link"><i class="fab fa-tiktok"></i> TikTok</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
