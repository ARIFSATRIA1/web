@extends('home.templates.header')
@section('content')

    <section>
        @include('home.templates.navbar')
    </section>

    <main>
        <section>
            <div class="d-flex align-items-center justify-content-center">
                <div>
                    <div class="d-flex justify-content-center flex-column">
                        <div class="d-flex flex-row px-5">
                            <img class="px-1" src="/img/instagram.png" alt="">
                            <img class="px-1" src="/img/tiktok.png" alt="">
                            <p class="text-primary px-1 text-align-center position-relative">dbacademy.id</p>
                        </div>
                        <div>
                            <div class="position-relative" style="width: 100%; height: auto;">
                                <!-- Positioning the text inside the image -->
                                <img src="/img/bg-main.png" class="bg-primary rounded-5 w-100" style="background-size: cover;" alt="">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h1 class="text-white">Transform</h1>
                                    <h2 class="text-white">Your Potential Into Reality With Us</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
