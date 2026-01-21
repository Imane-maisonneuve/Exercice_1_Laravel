    @extends('master')
    @section('title', 'Projects - Resume')
    @section('content')
    <!-- Projects Section-->
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">EcoShop</h2>
                                    <p>Developed a responsive e-commerce website for a local retail business. Implemented custom product pages, shopping cart functionality, and integrated secure payment gateways, resulting in a 40% increase in online sales.</p>
                                </div>
                                <img class="img-fluid" src="/assets/EcoShop.jpg" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">TaskMaster</h2>
                                    <p>Created a dynamic web application for project management, featuring real-time collaboration, task tracking, and notifications. Optimized for performance and accessibility, improving team productivity and user satisfaction.</p>
                                </div>
                                <img class="img-fluid" src="/assets/TaskMaster.jpg" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact">Contact me</a>
            </div>
        </div>
    </section>
    </main>
    @endsection