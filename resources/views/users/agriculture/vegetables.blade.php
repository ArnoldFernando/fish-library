@extends('layouts.Users.app')

@section('content')
    <section id="features" class="hero">
        <div class="container-fluid">
            <div class="container">
                <div class="row p-4">
                    @foreach ($vegetable as $vegetables)
                        <div class="col-lg-3 p-4">
                            <div class="card"
                                style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; text-align: center;">
                                <div style="width: 100%; position: relative; padding-top: 100%; overflow: hidden;">
                                    <img class="card-img-top"
                                        src="{{ $vegetables->image ? asset('list_of_vegetables/' . $vegetables->image) : asset('assets/img/offices/default.jpg') }}"
                                        alt="Vegetables"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="card-body" style="padding: 15px;">
                                    <h5 class="card-title">{{ $vegetables->name }}</h5>

                                    <button class="btn btn-success mt-2"
                                    data-bs-toggle="modal" data-bs-target="#fruitsModal-{{ $vegetables->id }}">Read More</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
