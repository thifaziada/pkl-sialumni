<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        @vite(['resources/css/app.css','resources/js/app.js'])
        body {
            background-image: url('/path/to/your/image.jpg');
            background-size: cover;
            height: 641px;
            width: 1440px;
            margin: 0;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        @media screen and (max-width: 600px) {
            nav a {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                box-sizing: border-box;
            }
        }
    </style>
</head>
<body>
    <nav>
        <a href="#">Beranda</a>
        <a href="#">Tentang Kami</a>
        <a href="#">Agenda</a>
        <a href="#">Alumni</a>
        <a href="#">Login</a>
    </nav>


</body>
</html>