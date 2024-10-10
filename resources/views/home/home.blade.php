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

        <section id="dbAcademyOffer" class="background-content mt-5" style="position: relative; display:inherit">
            <h1 class="text-center pt-5">DB Academy <span class="text-warning">Tawarkan</span></h1>
                <div class="container pt-5 pb-5">
                    <div class="row d-flex align-items-center">
                
                        <div class="col-6 col-sm-6 col-md-6 mb-2 d-flex align-items-center justify-content-center">
                            <div class="d-flex flex-row bg-transparent" style="border: none;">
                                <img src="/img/icon_kelas.png" class="rounded-circle " style="width:6rem; height:6rem;" alt="...">
                                <div class="text-white">
                                    <h5 class="bg-light text-primary w-100 rounded-2 text-center mx-2" style="display: inline;">Internship Program</h5>
                                    <p class="mx-2">
                                        Program magang dengan real <br>
                                         project <br>
                                        yang bisa mengasah
                                    </p>
                                </div>
                            </div>
                        </div>
                  
                        <div class="col-6 col-sm-6 col-md-6 mb-2 d-flex align-items-center justify-content-center">
                            <div class="d-flex flex-row bg-transparent" style="border: none;">
                                <img src="/img/icon_kelas.png" class="rounded-circle" style="width:6rem; height:6rem;" alt="...">
                                <div class="text-white">
                                    <h5 class="bg-light text-primary w-100 rounded-2 text-center mx-2" style="display: inline;">Group Project</h5>
                                    <p class="mx-2">
                                        Internship group project berbagai role <br>
                                        position bisa dipilih melalui program </p>
                                    </p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-6 col-sm-6 col-md-6 d-flex align-items-center justify-content-center">
                            <div class="d-flex flex-row bg-transparent" style="border: none;">
                                <img src="/img/icon_kelas.png" class="rounded-circle" style="width:6rem; height:6rem;" alt="...">
                                <div class="text-white">
                                    <h5 class="bg-light text-primary w-100 rounded-2 text-center mx-2" style="display: inline;">Kelas Coding</h5>
                                    <p class="mx-2">
                                        Program coding yang dibentuk <br>
                                        untuk anak usia dini melalui <br>
                                        program DB EDU <br>
                                    </p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-6 col-sm-6 col-md-6  d-flex align-items-center justify-content-center">
                            <div class="d-flex flex-row bg-transparent" style="border: none;">
                                <img src="/img/icon_kelas.png" class="rounded-circle" style="width:6rem; height:6rem;" alt="...">
                                <div class="text-white">
                                    <h5 class="bg-light text-primary w-100 rounded-2 text-center mx-2" style="display: inline;">Bootcamp</h5>
                                    <p class="mx-2">
                                        Program kelas online dengan mentor <br>
                                        dari DB Academy dan luar yang <br>
                                        sudah expert di bidangnya
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>   
        </section>

        <section>
            <div class="container d-flex flex-column align-items-center mt-5">
                <div class="background-container rounded-5  d-flex align-items-center mb-5">
                    <h3 class="py-2 pr-3 text-center">
                        <span class="background-content p-5 rounded-circle text-warning">Skill</span>
                        <span class="text-primary px-2">yang didapat</span>
                    </h3>
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach([
                        'dm' => 'DIGITAL MARKETING', 
                        'cc' => 'CONTENT CREATOR', 
                        'prog' => 'PROGRAMMING',
                        'ui' => 'UI UX DESIGN', 
                        'edtcontent' => 'EDITING CONTENT', 
                        'journalist' => 'JOURNALIST & COPYWRITING', 
                        'leadership' => 'LEADERSHIP', 
                        'teamwork' => 'TEAMWORK',
                        'strategic' => 'STRATEGIC THINKING', 
                        'communication' => 'COMMUNICATION'] as $key => $skill)
                        <div class="col-6 col-md-2 mb-3">
                            <div class="card d-flex flex-column img-fluid pb-2 background-card-{{ $key }}" style="min-height: 16rem; background-size: cover; background-position: center;">
                                <h4 class="card-title text-center mt-auto mb-1 text-warning">{{ $skill }}</h4>
                                <p class="card-text bg-white text-center rounded-5 mx-auto" style="color: black; display: inline-block; padding: 0.1rem 1rem;">Skill</p>
                            </div>
                        </div>

                        @if (($loop->iteration % 5=== 0) && !$loop->last)
                            <div class="w-100 d-none d-md-block"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>


        <section class="my-5">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-5">
                        <img src="/img/Bintang.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 align-items-center">
                        <div class="d-flex flex-column"></div>
                        <p class="background-gradient-yellow py-3 mt-3 rounded-3 px-3 mr-5 text-left fs-5" style="color:blue; position: relative; display: flex; max-width:95%"> 
                            <span>Koneksi Indsutri dengan bekerja  <br>
                                sama dengan stakeholder terkait<br></span>
                        </p> 
                        <p class="background-gradient-yellow py-3 mt-3 rounded-3 px-3 mr-5 text-left fs-5" style="color:blue; position: relative; display: flex; max-width:95%">
                            Fokus pada praktik dengan belajar <br>
                            sambil melakukan proyek nyata<br>
                        </p> 
                        <p class="background-gradient-yellow py-3 mt-3 rounded-3 px-3 mr-5 text-left fs-5" style="color:blue; position: relative; display: flex; max-width:95%">
                            Materi selalu diperbarui mengikuti <br>
                            perkembangan teknologi terkini <br>
                        </p> 
                        <p class="background-gradient-yellow py-3 mt-3 rounded-3 px-3 mr-5 text-left fs-5" style="color:blue; position: relative; display: flex; max-width:95%">
                            Real program untuk mengasah soft <br>
                            skill, hard skill dan support skill <br>
                        </p> 
                    </div>
                </div>
            </div>
        </section>


    </main>

    <section class="mt-5">
        @include('home.templates.footer')
    </section>

    
@endsection
