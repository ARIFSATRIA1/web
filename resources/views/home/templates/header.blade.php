<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Smooch&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        .roboto-thin {
            font-family: "Roboto", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .roboto-light {
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .roboto-regular {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .roboto-medium {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .roboto-bold {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .roboto-black {
            font-family: "Roboto", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .roboto-thin-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .roboto-light-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .roboto-regular-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .roboto-medium-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .roboto-bold-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .roboto-black-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 900;
            font-style: italic;
        }

        .smooch-regular {
            font-family: "Smooch", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .sectionstyles {
            background-image: url("/img/bg-main.png");
            position: relative;
            color: #ffff;
        }

        .introduction {
            font-family: "Great Vibes";
            margin-top: 10rem;

        }

        @media (max-width: 450px) {
            html {
                font-size: 55%;
            }

            
            }

        ::placeholder {
            color: white !important;
            opacity: 1;
        }
        .sotk-text {
            font-size: 24px !important;
            color: #424242;
            margin: 0 280px 0 280px !important;
        }

        .skill-highlight {
            background: linear-gradient(160deg, rgba(37,133,243,1) 35%, rgba(1,19,165,1) 100%);
            color: #ffd700;
            padding: 0.5rem 1rem;
            font-weight: bold;
        }

        .background-span {
            color: #0055ff;
            font-weight: bold;
        }

        .background-container {
            display: inline-flex;
            align-items: center;
            overflow: hidden; 
            background: linear-gradient(160deg, rgba(249,232,28,1) 35%, rgba(243,185,23,1) 100%);
            position: relative;
             display: inline-flex;
        }

        .background-content {
            background: linear-gradient(160deg, rgba(37,133,243,1) 35%, rgba(1,19,165,1) 100%);
        }

        .background-gradient-yellow {
            background: linear-gradient(160deg, rgba(249,232,28,1) 35%, rgba(243,185,23,1) 100%);
        }
        .background-card-dm {
            background-image: 
            linear-gradient(180deg, rgba(37,133,243,0) 0%, rgba(33,119,234,0.020045518207282953) 6%, rgba(6,36,177,0.4682247899159664) 84%, rgba(1,19,165,1) 100%), 
                url('/img/digital_mkt.png');
        }

        .background-card-dm:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .background-card-cc {
            background-image:
                linear-gradient(180deg, rgba(37,133,243,0) 0%, rgba(33,119,234,0.020045518207282953) 6%, rgba(6,36,177,0.4682247899159664) 84%, rgba(1,19,165,1) 100%), 
                url('/img/content_creator.png');
        }

        .background-card-cc:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .background-card-prog {
            background-image:
                linear-gradient(180deg, rgba(37,133,243,0) 0%, rgba(33,119,234,0.020045518207282953) 6%, rgba(6,36,177,0.4682247899159664) 84%, rgba(1,19,165,1) 100%), 
                url('/img/programming.png');
        }

        .background-card-prog:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .background-card-ui {
            background-image:
                linear-gradient(180deg, rgba(37,133,243,0) 0%, rgba(33,119,234,0.020045518207282953) 6%, rgba(6,36,177,0.4682247899159664) 84%, rgba(1,19,165,1) 100%), 
                url('/img/ui-ux.png');
        }

        .background-card-ui:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .background-card-edtcontent {
            background-image:
                linear-gradient(180deg, rgba(37,133,243,0) 0%, rgba(33,119,234,0.020045518207282953) 6%, rgba(6,36,177,0.4682247899159664) 84%, rgba(1,19,165,1) 100%), 
                url('/img/editing_content.png');
        }

        .background-card-edtcontent:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .background-card-journalist {
            background-image:
                linear-gradient(180deg, rgba(37,133,243,0) 0%, rgba(33,119,234,0.020045518207282953) 6%, rgba(6,36,177,0.4682247899159664) 84%, rgba(1,19,165,1) 100%), 
                url('/img/journalist.png');
        }

        .background-card-journalist:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .background-card-leadership {
            background-image:
                linear-gradient(180deg, rgba(37,133,243,0) 0%, rgba(33,119,234,0.020045518207282953) 6%, rgba(6,36,177,0.4682247899159664) 84%, rgba(1,19,165,1) 100%), 
                url('/img/leadership.png');
        }

        .background-card-leadership:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .background-card-teamwork {
            background-image:
                linear-gradient(180deg, rgba(37,133,243,0) 0%, rgba(33,119,234,0.020045518207282953) 6%, rgba(6,36,177,0.4682247899159664) 84%, rgba(1,19,165,1) 100%), 
                url('/img/teamwork.png');
        }

        .background-card-teamwork:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .background-card-strategic {
            background-image:
                linear-gradient(180deg, rgba(37,133,243,0) 0%, rgba(33,119,234,0.020045518207282953) 6%, rgba(6,36,177,0.4682247899159664) 84%, rgba(1,19,165,1) 100%), 
                url('/img/strategic_thinking.png');
        }

        .background-card-strategic:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .background-card-communication {
            background-image:
                linear-gradient(180deg, rgba(37,133,243,0) 0%, rgba(33,119,234,0.020045518207282953) 6%, rgba(6,36,177,0.4682247899159664) 84%, rgba(1,19,165,1) 100%), 
                url('/img/communication.png');
        }
        .background-card-communication:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        
        .navbar-nav.active {
            display: inline-block;
            justify-content: center;
            align-items: center
        }   
    
    </style>
</head>

<body class="roboto-regular fw-semibold">
    @yield('content')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-oBqDVmMz4fnFO9gybNSeRl2R7q/8P5w5NH8g/t8WjTBTk07izN5WgJ5nB3lXwW5a" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navbarNav = document.querySelector("#navbarNav");
            const hamburger = document.querySelector("#hamburger-menu");

            hamburger.addEventListener("click", function () {
                navbarNav.classList.toggle("show");
            });
        
        });
        
        document.addEventListener("click", function (e) {
                if (!hamburger.contains(e.target) && !navbarNav.contains(e.target))
                    navbarNav.classList.remove("active");
            });
    </script>
<footer>
@yield('footer')
</footer>

</html>