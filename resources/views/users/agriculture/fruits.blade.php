@extends('layouts.Users.app')

@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

    .modal-dialog {
        max-width: 80%;
        margin: 30px auto;
    }


    .modal-body {
    max-height: 60vh;  
    overflow-y: auto;  
}


   
    .modal-body img {
        width: 100%;  
        height: auto; 
    }
</style>

<section id="features" class="hero">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                @foreach ($fruit as $data)
                    <div class="col-lg-4">
                        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                            <div style="width: 100%; position: relative; padding-top: 100%; overflow: hidden;">
                                <img class="card-img-top"
                                    src="{{ $data->image ? asset('list_of_fruits/' . $data->image) : asset('assets/img/offices/default.jpg') }}"
                                    alt="Image of {{ $data->name }}"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="card-body" style="padding: 15px; text-align: center;">
                                <h5 class="card-title">{{ $data->name }}</h5>
                                <button class="btn btn-success mt-2"
                                    data-bs-toggle="modal" data-bs-target="#fruitsModal-{{ $data->id }}">Read More</button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="fruitsModal-{{ $data->id }}" tabindex="-1"
                        aria-labelledby="fruitsModalLabel-{{ $data->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="fruitsModalLabel-{{ $data->id }}">{{ $data->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="{{ $data->image ? asset('list_of_fruits/' . $data->image) : asset('assets/img/offices/default.jpg') }}"
                                                alt="Image of {{ $data->name }}" class="img-fluid mb-3">
                                        </div>
                                        <div class="col-12">
                                            <h5>Description</h5>
                                            <p class="mt-3">{{ $data->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            </div>
        </div>
    </div>
</section>

@endsection
