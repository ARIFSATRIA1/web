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
    </main>
@endsection
