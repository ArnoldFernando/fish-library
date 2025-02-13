@extends('layouts.Users.app')

@section('title', 'About Us')

@section('content')
    <section id="features" class="hero">
        <div class="container-fluid">
            <div class="container text-center">
                <h1 class="display-4">About Us</h1>
                <p class="lead">Learn more About Agriculture</p>
                <br>
                <br>
                <br>
                <div class="container-fluid">
                    <div class="container text-center">
                        <h1 class="display-4">What is aquAPARRIculture?</h1>
                        <p class="lead">Aquaparriculture is a sustainable agricultural practice that integrates aquaculture (the farming of aquatic organisms like fish, shellfish, and algae) with terrestrial agriculture, creating a synergistic system. This innovative approach aims to optimize resource use, improve food security, and promote environmental sustainability by combining aquatic and agricultural production in a single ecosystem.</p>
                        <br>
                        <br>
                        <br>
                <main class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Our Vision</h2>
                            <p>To be the leading online platform for agricultural guidance, empowering farmers and
                                enthusiasts
                                with
                                knowledge and resources to cultivate sustainable and prosperous agricultural practices.</p>
                        </div>
                        <div class="col-lg-6">
                            <h2>Our Mission</h2>
                            <p>Our mission is to provide comprehensive and reliable agricultural guidance through our
                                website,
                                offering
                                a wealth of information, resources, and tools to support farmers and individuals interested
                                in
                                agriculture...</p>
                       
                        </div>
                    </div>
                </main>
            </div>
        </div>
           {{-- <img src="mao google map dito "> --}}
       
           <div class="container-fluid">
            <div class="container text-center">
               <p class="lead"><h1>Map of Aparri, Cagayan</h1>
               <iframe 
                   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.334269319007!2d121.64135751542382!3d18.356319687531936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338fd773a35a6e1f%3A0xe14c83c06a162180!2s1%20De%20Carreon%20St%2C%20Aparri%2C%203515%20Cagayan!5e0!3m2!1sen!2sph!4v1234567890123"           width="600" 
                   height="450" 
                   style="border:0;" 
                   allowfullscreen="" 
                   loading="fast" 
          referrerpolicy="no-referrer-when-downgrade">
   </iframe>
     
    </section>



@endsection
