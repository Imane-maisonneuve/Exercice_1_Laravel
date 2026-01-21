    @extends('master')
    @section('title', 'Home - Resume')
    @section('content')
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                            <div class="text-uppercase">Strategy &middot; Innovation &middot; Growth</div>
                        </div>
                        <div class="fs-3 fw-light text-muted">I help businesses </div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Build their Digital Presence and Scale quickly.</span></h1>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <!-- Header profile picture-->
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <div class="profile bg-gradient-primary-to-secondary">
                            <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                            <!-- Watch a tutorial on how to do this on YouTube (link)-->
                            <img class="profile-img" src="assets/profile.png" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About Section-->
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                        <p class="lead fw-light mb-4">My name is Imane E. and I help businesses build their digital presence and scale fast.</p>
                        <p class="text-muted">specialize in strategy, innovation, and growth, turning ideas into engaging websites, apps, and marketing solutions. My goal is to help brands succeed online and reach their full potential.</p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    @endsection