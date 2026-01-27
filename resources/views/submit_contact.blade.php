    @extends('master')
    @section('title', 'Contact - Resume')
    @section('content')
    <!-- Page content-->
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        @isset($data)
                        <p><strong>Name:</strong> {{ $data->full_name }}</p>
                        <p><strong>Email:</strong> {{ $data->email }}</p>
                        <p><strong>Phone:</strong> {{ $data->phone }}</p>
                        <p><strong>Message:</strong> {{ $data->message }}</p>
                        <p>Thank you for contacting us!
                            Your message has been sent successfully. Our team will get back to you very shortly.</p>
                        @endisset
                        <a href="/home" class="d-block text-center text-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    @endsection