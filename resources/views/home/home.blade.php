@extends('home.templates.header')
@section('content')

    <section>
        @include('home.templates.navbar')
    </section>

    <main>
        <section>
            <div class="d-flex align-items-center justify-content-center">
                <img src="/img/Banner.png" class="img-fluid" alt="">
            </div>
            <div class="d-flex justify-content-evenly flex-row pt-5 img-fluid container">
                <div class="row">
                    <div class="col col-lg-5">
                        <img src="/img/group2.png" class="rounded-5 img-fluid mt-5" alt="">
                    </div>
                    <div class="d-flex justify-content-center flex-column pl-5 col">
                        <h1 class="text-start text-secondary">Tentang Kami</h1>
                        <img src="/img/main-content.png" style="max-width: 100%; max-height:100%;" class="rounded-5" alt="">
                        <div class="bg-warning rounded-5 d-flex flex-column justify-content-start text-left mt-3 pt-5 pb-2 pr-5">
                            <div class="text-start">
                                <pre class="text-start" style="color: #0113A4">
    Program yang dibentuk oleh DB Klik, Perusahaan IT Indonesia. Kami 
    berkomitmen untuk berkontribusi dalam dunia pendidikan di Indonesia

    Kami memberikan fasilitas seperti program, kelas, dan forum yang 
    ditawarkan agar generasi muda Indonesia memiliki bekal dengan 
    keterampilan yang relevan di dunia industry saat ini
                                  </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5" style="background-color: #0113A5; background-size: cover; background-position: center; height:60vh; background-repeat: no-repeat; position: relative;">
            <div class="overlay"></div>
            <h1 class="text-center text-white pt-5">DB Academy Tawarkan</h1>
            <div class="d-flex align-justify-content-center">
                <div class="container pt-5 d-flex align-items-center">
                    <div class="row">
                
                        <div class="col d-flex justify-content-center">
                            <div class="card d-flex flex-row bg-transparent w-50 h-50" style="border: none;">
                                <img src="/img/icon_intern.png" class="rounded-circle" alt="...">
                                <div class="card-body text-white">
                                    <h5 class="card-title bg-light text-primary w-100 rounded-2 text-center">Internship Program</h5>
                                    <p class="card-text">Program magang dengan real project yang bisa mengasah kemampuan Anda.</p>
                                </div>
                            </div>
                        </div>
            
                  
                        <div class="col bg-transparent d-flex justify-content-center">
                            <div class="card d-flex flex-row bg-transparent w-50 h-50" style="border: none;">
                                <img src="/img/icon_kelas.png" class="rounded-circle" alt="...">
                                <div class="card-body text-white">
                                    <h5 class="card-title bg-light text-primary w-100 rounded-2 text-center">Group Project</h5>
                                    <p class="card-text">
                                        Internship group project berbagai role 
                                        position bisa dipilih melalui program </p>
                                </div>
                            </div>
                        </div>
            
               
                        <div class="w-100"></div>
            
                        <div class="col d-flex justify-content-center">
                            <div class="card d-flex flex-row bg-transparent w-50 h-50" style="border: none;">
                                <img src="/img/icon_kelas.png" class="rounded-circle" alt="...">
                                <div class="card-body text-white">
                                    <h5 class="card-title bg-light text-primary w-100 rounded-2 text-center">Kelas Coding</h5>
                                    <p class="card-text">
                                        Program coding yang dibentuk 
                                        untuk anak usia dini melalui 
                                        program DB EDU
                                    </p>
                                </div>
                            </div>
                        </div>
            
                        
                        <div class="col d-flex justify-content-center">
                            <div class="card d-flex flex-row bg-transparent w-50 h-50" style="border: none;">
                                <img src="/img/icon_bootcamp.png" class="rounded-circle" alt="...">
                                <div class="card-body text-white">
                                    <h5 class="card-title bg-light text-primary w-100 rounded-2 text-center">Bootcamp</h5>
                                    <p class="card-text">
                                        Program kelas online dengan mentor 
                                        dari DB Academy dan luar yang 
                                        sudah expert di bidangnya
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                
        </section>        
    </main>

    <section>
        @include('home.templates.footer')
    </section>
@endsection
