<x-app-layout>
    @can('admin-access')

        <style>
            .jumbotron {
                background-image: url('rice.jpg');
                background-size: cover;
                color: #fff;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            }

            .navbar {
                background-color: #3cb371;
            }

            .navbar-brand {
                color: #fff;
            }

            .nav-link {
                color: #fff;
            }

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
        @section('content')
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-green overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                           
                                </ul>
                        </div>
                        </nav>
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container text-center">
                                <h1 class="display-4 "style="color:black;">Welcome to aquAPARRIculture</h1>
                                <p class="lead" style="color:black;"> "Agpapada iti pagbiagan, agpaay ti masakbayan"</p>
                                <p class="lead" style="color:black;"> "Equalizing livelihoods, paving the way for the future."</p>   </p>
                            </div>
                        </div>
                        </header>


                        <main class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <img src="images/vegtable.jpg.jpg" class="card-img-top" alt="Vegetables">
                                        <div class="card-body">
                                            <h5 class="card-title">Vegetables Corner</h5>
                                            <p class="card-text">All about Vegetables are here.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="card">
                                        <img src="images/fruits.jpg.jpg" class="card-img-top" alt="Fruits">
                                        <div class="card-body">
                                            <h5 class="card-title">Fruits Corner</h5>
                                            <p class="card-text">All about Fruits are here.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="card">
                                        <img src="images/farmers.jpg.jpg" class="card-img-top" alt="Farmers">
                                        <div class="card-body">
                                            <h5 class="card-title">Farmers Corner</h5>
                                            <p class="card-text">All about farmers are Here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <img src="images/vegtable.jpg.jpg" class="card-img-top" alt="Fish">
                                        <div class="card-body">
                                            <h5 class="card-title">Fish Corner</h5>
                                            <p class="card-text">All about Fish are here.</p>
                                        </div>
                                    </div>
                                </div>


                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="images/fruits.jpg.jpg" class="card-img-top" alt="Aqua-Equipments">
                                    <div class="card-body">
                                        <h5 class="card-title">Aqua-Equipments Corner</h5>
                                        <p class="card-text">All about Aqua-Equipments  are here.</p>
                                    </div>
                                </div>
                            </div>

                        <style>
                            .jumbotron {
                                background-image: url('farm.jpg');
                                background-size: cover;
                                color: #fff;
                                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
                            }

                            .navbar {
                                background-color: #3cb371;
                            }

                            .navbar-brand {
                                color: #fff;
                            }

                            .nav-link {
                                color: #fff;
                            }

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
                        </head>

                        <body>
                            <header>
                                <nav class="navbar navbar-expand-lg navbar-dark">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active">
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container text-center">
                                        <h1 class="display-4 "style="color:black;" class="display-4">About Us</h1>
                                        <p class="lead" style="color:black;">Learn more About Agriculture</p>
                                    </div>
                                </div>
                            </header>
                            <main class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h2>Our Vision</h2>
                                        <p>To be a leading innovator in aquaparriculture,
                                             integrating sustainable aquatic farming practices with precision agriculture to ensure food security, 
                                             protect aquatic ecosystems, and empower global communities.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h2>Our Mission</h2>
                                        <p>Our mission is to provide comprehensive and reliable agricultural guidance
                                            through
                                            our website,
                                            offering a wealth of information, resources, and tools to support farmers and
                                            individuals interested in agriculture.
                                            We aim to foster a community of knowledge sharing, connecting experts, and
                                            enthusiasts to facilitate the exchange of ideas and best practices.
                                            By promoting sustainable and innovative farming techniques,
                                            we strive to contribute to the growth and development of the agricultural
                                            industry,
                                            ensuring food security and environmental stewardship for future generations.</p>
                                    </div>
                                </div>
                            </main>



                    </div>
                </div>
            </div>
        @endsection
    @endcan
</x-app-layout>
