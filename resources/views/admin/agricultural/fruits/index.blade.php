<x-app-layout>
    @can('admin-access')
        @section('content')
            <style>
                /* Test with a direct URL */
                body {
                    background: url("/bg/bg1.jpeg") no-repeat center center fixed;
                    background-size: cover;
                    height: 100vh;
                }

                /* Transparent card styles */
                .card-group .card {
                    background-color: rgba(255, 255, 255, 0.7); /* Transparent background */
                    border: 1px solid rgba(0, 0, 0, 0.1); /* Light border for visibility */
                    box-shadow: none;
                }

                .card-group .card:hover {
                    background-color: rgba(255, 255, 255, 0.9); /* Slightly more opaque on hover */
                }

                /* Card image transitions */
                .card-img-top {
                    transition: all 0.3s ease-in-out;
                    width: 100%;
                    height: 200px;
                    object-fit: cover;
                }

                /* Read more button */
                .read-more {
                    position: absolute;
                    bottom: 10px;
                    left: 50%;
                    transform: translateX(-50%);
                    background-color: rgba(0, 0, 0, 0.5);
                    color: #fff;
                    padding: 5px 10px;
                    border-radius: 5px;
                    text-decoration: none;
                    opacity: 0;
                    transition: opacity 0.3s ease-in-out;
                }

                .card-group:hover .read-more {
                    opacity: 1;
                }

                /* Modal image styling */
                .modal-content img {
                    width: 80%;
                    height: auto;
                }

                /* Responsive card layout */
                @media (max-width: 1200px) {
                    .col-md-2 {
                        width: 25%;
                    }
                }

                @media (max-width: 992px) {
                    .col-md-2 {
                        width: 33.33%;
                    }
                }

                @media (max-width: 768px) {
                    .col-md-2 {
                        width: 50%;
                    }
                }

                @media (max-width: 576px) {
                    .col-md-2 {
                        width: 100%;
                    }
                }
            </style>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <div class="row">
                                <div class="col">
                                    <h3 class="text-center">List of All Fruits</h3>
                                    <div class="row">
                                        @foreach ($fruit as $fruits)
                                            <div class="col-md-2 mb-3">
                                                <div class="card-group">
                                                    <div class="card p-0">
                                                        <img src="{{ $fruits->image ? asset('list_of_fruits/' . $fruits->image) : asset('assets/img/offices/default.jpg') }}"
                                                            class="card-img-top" alt="Image of {{ $fruits->name }}">
                                                        <div class="text-center mt-1">
                                                            <h6 class="fw-semibold">{{ $fruits->name }}</h6>
                                                        </div>
                                                        <button class="btn btn-primary mt-2"
                                                            data-bs-toggle="modal">Edit</button>
                                                        <button class="btn btn-success mt-2"
                                                            data-bs-toggle="modal" data-bs-target="#fruitsModal-{{ $fruits->id }}">Read More</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="fruitsModal-{{ $fruits->id }}" tabindex="-1"
                                                aria-labelledby="fruitsModalLabel-{{ $fruits->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="fruitsModalLabel-{{ $fruits->id }}">
                                                                {{ $fruits->name }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img
                                                                        src="{{ $fruits->image ? asset('list_of_fruits/' . $fruits->image) : asset('assets/img/offices/default.jpg') }}"
                                                                        alt="Image of {{ $fruits->name }}">
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5>Description</h5>
                                                                    <p class="mt-3">{{ $fruits->description }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    @endcan
</x-app-layout>
