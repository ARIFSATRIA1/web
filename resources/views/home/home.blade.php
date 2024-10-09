@extends('home.templates.header')
@section('content')

    <section>
        @include('home.templates.navbar')
    </section>

    <main>
        <section>
            <div class="d-flex align-items-center justify-content-center flex-column">
                <img src="/img/Banner.png" class="img-fluid" style="min-height: 15rem" alt="">    
            </div>
        </section>      

        <section>
            <div class="container-fluid mt-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 d-flex justify-content-end">
                        <img src="/img/group2.png" class="img-fluid rounded-3" alt="">
                    </div>
                    <div class="col-md-6 ">
                        <h1 class="text-secondary">Tentang Kami</h1>
                        <img src="/img/main-content.png" style="min-width: 95%" class="img-fluid rounded-3" alt="">
                        <p class="bg-warning py-3 mt-3 rounded-3 px-3 mr-5 text-left fs-5" style="color:blue; position: relative; display: block; max-width:95%">
                            Program yang dibentuk oleh DB Klik, Perusahaan IT Indonesia. Kami <br>
                            berkomitmen untuk berkontribusi dalam dunia pendidikan di Indonesia <br>
                            <br>
                            Kami memberikan fasilitas seperti program, kelas, dan forum yang <br>
                            ditawarkan agar generasi muda Indonesia memiliki bekal dengan <br>
                            keterampilan yang relevan di dunia industry saat ini <br>
                        </p>                        
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary mt-5" style="background-size: cover; position: relative; display:inherit">
            <h1 class="text-center pt-5">DB Academy Tawarkan</h1>
                <div class="container pt-5 pb-5">
                    <div class="row d-flex justify-content-center align-items-center">
                
                        <div class="col d-flex justify-content-center">
                            <div class="card d-flex flex-row bg-transparent" style="border: none;">
                                <img src="/img/icon_intern.png" class="rounded-circle" style="max-block-size: 50%;" alt="...">
                                <div class="card-body text-white">
                                    <h5 class="card-title bg-light text-primary w-100 rounded-2 text-center" style="display: inline">Internship Program</h5>
                                    <p class="card-text">Program magang dengan real <br>project yang bisa <br> mengasah</p>
                                </div>
                            </div>
                        </div>
            
                  
                        <div class="col bg-transparent d-flex justify-content-center">
                            <div class="card d-flex flex-row bg-transparent" style="border: none;">
                                <img src="/img/icon_kelas.png" class="rounded-circle" style="max-block-size: 50%;" alt="...">
                                <div class="card-body text-white">
                                    <h5 class="card-title bg-light text-primary w-100 rounded-2 text-center" style="display: inline;">Group Project</h5>
                                    <p class="card-text">
                                        Internship group project berbagai role <br>
                                        position bisa dipilih melalui program </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
            
                        <div class="col d-flex justify-content-center">
                            <div class="card d-flex flex-row bg-transparent" style="border: none;">
                                <img src="/img/icon_kelas.png" class="rounded-circle" style="max-block-size: 50%;" alt="...">
                                <div class="card-body text-white">
                                    <h5 class="card-title bg-light text-primary w-100 rounded-2 text-center" style="display: inline;">Kelas Coding</h5>
                                    <p class="card-text">
                                        Program coding yang dibentuk <br>
                                        untuk anak usia dini melalui <br>
                                        program DB EDU <br>
                                    </p>
                                </div>
                            </div>
                        </div>
            
                        
                        <div class="col d-flex justify-content-center">
                            <div class="card d-flex flex-row bg-transparent" style="border: none;">
                                <img src="/img/icon_bootcamp.png" class="rounded-circle" style="max-block-size: 50%;" alt="...">
                                <div class="card-body text-white">
                                    <h5 class="card-title bg-light text-primary w-100 rounded-2 text-center" style="display: inline;">Bootcamp</h5>
                                    <p class="card-text">
                                        Program kelas online dengan mentor <br>
                                        dari DB Academy dan luar yang <br>
                                        sudah expert di bidangnya <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
        </section>
    </main>

@endsection