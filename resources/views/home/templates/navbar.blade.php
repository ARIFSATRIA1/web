<nav class="navbar navbar-expand-lg bg-body-white p-5">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">
            <img src="/img/Logo.png" alt="Logo" class="navbar-brand">
        </a>

        <button 
            id="hamburger-menu" 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" 
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto fs-5">
                <li class="nav-item mx-3">
                    <a class="nav-link active text-primary" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active text-primary" href="#about">About</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active text-primary" href="#blog">Blog</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active text-primary" href="#contact">Contact</a>
                </li>
            </ul>
            <div class="d-flex">
                <button 
                    class="btn rounded-pill background-gradient-yellow" 
                    type="button" 
                    onclick="window.location.href='{{ route('register') }}'">
                    Sign Up
                </button>
            </div>
        </div>
    </div>
</nav>
