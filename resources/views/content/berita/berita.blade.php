@extends('layout.content.main')
@section('container')
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta blog">
        {{-- <div class="d-flex justify-content-center" data-aos="zoom-out">
            <img style="height: 40vh" width="100%"
                src="{{ asset('images\image\dance_of_lights_by_ellysiumn_ddanutv-350t.jpg') }}" alt="">
        </div> --}}
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-8 mt-3" data-aos="zoom-out">
                    <div class="d-flex justify-content-center" data-aos="zoom-out">
                        <img style="height: 40vh" width="100%" src="{{ asset('images\image\dance_of_lights_by_ellysiumn_ddanutv-350t.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-9 text-center text-lg-start mt-3 mb-3" style="margin-left: 30px">
                        <h3>Call To Action</h3>
                        <p style="text-align: justify"> Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <p style="text-align: justify"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <p style="text-align: justify"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <p style="text-align: justify"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <p style="text-align: justify"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <p style="text-align: justify"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <p style="text-align: justify"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <p style="text-align: justify"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>
                @include('layout.content.sidebar')
            </div>


        </div>
    </section><!-- End Cta Section -->
@endsection
