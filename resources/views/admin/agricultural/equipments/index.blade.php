<x-app-layout>
    @can('admin-access')


        @section('content')
            <style>
                .card-group {
                    position: relative;
                    overflow: hidden;
                }

                .card-group .card {
                    width: 500px;
                }

                .card-img-top {
                    transition: all 0.3s ease-in-out;
                    width: 500px;
                }

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

                .modal-content img {
                    width: 80%;
                    height: auto;
                }
            </style>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">


                            <div class="row">


                                <div class="col">
                                    <h3 class="text-center">List of All Farmers Equipment</h3>
                                    <div class="row">
                                        @foreach ($farmers as $farmers)
                                            <div class="col-2 mb-3 " style="width: 200px;">
                                                <div class="card-group">
                                                    <div class="card p-0">
                                                        <img src="{{ $farmers->image ? asset('list_of_equipment/' . $farmers->image) : asset('assets/img/offices/default.jpg') }}"
                                                            class="card-img-top" alt="Image of {{ $farmers->name }}"
                                                            style="object-fit:cover;">
                                                        <div class="text-center mt-1">
                                                            <h6 class="fw-semibold">{{ $farmers->name }}</h6>
                                                        </div>

                                                        <button href="" class="btn btn-primary mt-2"
                                                            data-bs-toggle="modal">Edit</a>
                                                            <button href="#" class="btn btn-success mt-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#farmersModal-{{ $farmers->id }}">Read More</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="farmersModal-{{ $farmers->id }}" tabindex="-1"
                                                aria-labelledby="farmersModalLabel-{{ $farmers->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="farmersModalLabel-{{ $farmers->id }}">
                                                                {{ $farmers->name }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-6"> <img
                                                                        src="{{ $farmers->image ? asset('list_of_equipment/' . $farmers->image) : asset('assets/img/offices/default.jpg') }}"
                                                                        alt="Image of {{ $farmers->name }}">
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5>Description</h5>
                                                                    <p class="mt-3">{{ $farmers->description }}</p>
                                                                </div>
                                                                <!-- Add more farmer details here if needed -->
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
