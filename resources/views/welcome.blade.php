@extends('layouts.Users.app')
@section('content')
    <style>
        .card {
            margin-bottom: 20px;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-weight: bold;
        }

        .footer {
            background-color: #3cb371;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        
    </style>

    <main class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 >Our Vision</h2>
                <p>To be the leading online platform for agricultural guidance, empowering farmers and
                    enthusiasts with knowledge and resources to cultivate sustainable and prosperous
                    agricultural practices.</p>
            </div>
            <div class="col-lg-6">
                <h2 class="text-center">Our Mission</h2>
                <p>Our mission is to provide comprehensive and reliable agricultural guidance through our
                    website,
                    offering a wealth of information, resources, and tools to support farmers and individuals
                    interested in agriculture.
                    We aim to foster a community of knowledge sharing, connecting experts, and enthusiasts to
                    facilitate the exchange of ideas and best practices.
                    By promoting sustainable and innovative farming techniques,
                    we strive to contribute to the growth and development of the agricultural industry,
                    ensuring food security and environmental stewardship for future generations.</p>
            </div>
        </div>
    </main>




    <!--### Contact Starts Here ####-->

    <div class="container-fluid big-padding pt-3">
        <div class="container-xl">
            <div class="row px-5">
                <div class="col-lg-6">
                    <h1 class="text-primary text-uppercase">Contact Us</h1>
                    <h2 class="fw-bolder">We Are Here <br> to Help You </h2>
                    <p></p>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 align-self-centr pt-3">
                            <i class="bi text-primary fs-3 bi-telephone-outbound"></i>
                        </div>
                        <div class="flex-grow-1 pt-4 ms-3">
                            <span>Phone</span>
                            <h6 class="fw-bolder">+63 123456789</h6>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 align-self-centr pt-3">
                            <i class="bi bi-envelope-at fs-3 text-primary"></i>
                        </div>
                        <div class="flex-grow-1 pt-4 ms-3">
                            <span>Email</span>
                            <h6 class="fw-bolder">MunicipalAgricultureOffice@email.com </h6>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="bg-agri p-5">

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="mb-0">
                                    <label for="exampleFormControlInput1" class="form-label">Full
                                        Name</label>
                                    <input type="email" class="form-control bg-white rounded-0 form-control-lg"
                                        id="exampleFormControlInput1" placeholder="Enter Name">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-0">
                                    <label for="exampleFormControlInput1" class="form-label">Mobile
                                        Number</label>
                                    <input type="email" class="form-control bg-white rounded-0 form-control-lg"
                                        id="exampleFormControlInput1" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Enter
                                        Message</label>
                                    <textarea placeholder="Enter Message" name="" id="" cols="30" rows="5"
                                        class="form-control bg-white rounded-0"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <button class="btn btn-primary w-100 btn-lg">Send Message</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h1>Map of Aparri, Cagayan</h1>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.334269319007!2d121.64135751542382!3d18.356319687531936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338fd773a35a6e1f%3A0xe14c83c06a162180!2sAparri%2C%20Cagayan!5e0!3m2!1sen!2sph!4v1234567890123" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    <!--### Iframe Starts Here ####-->

    <div class="container-fluid big-padding pt-3">
        <div class="container-xl">
            <div class="row px-5">
                <div class="col-md-12">
                    <iframe style="width:100%"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"
                        height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!--###  Reaching US ####-->

    <div class="about-content container-fluid">
        <div class="container-xl px-0 px-md-5">
            <div class="row mb-5">
                <div class="col-md-7 text-center mx-auto">
                    <h1 class="fw-bolder">Thanks for Reaching Out</h1>

                </div>
            </div>
        </div>
    </div>
@endsection
