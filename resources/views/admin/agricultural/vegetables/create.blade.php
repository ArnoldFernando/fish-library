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
                                    <h1 class="text-center">Add Vegetables</h1>
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{ route('admin.vegetables.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="">Add Image</label>
                                                        <input type="file" class="form-control" name="image"
                                                            accept="image/*" id="">
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <label for="">Name of Vegetable</label>
                                                        <input type="text" class="form-control" name="name"
                                                            id="">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="">Duration of Vegetable</label>
                                                        <input type="text" class="form-control" name="duration"
                                                            id="">
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <label for="">Best time to Plant</label>
                                                        <input type="text" class="form-control" name="best_time_to_plant"
                                                            id="">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="">Best time to harvest</label>
                                                        <input type="text" class="form-control" name="best_time_to_harvest"
                                                            id="">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label for="">Description</label>
                                                    <textarea name="description" class="form-control" id=""></textarea>
                                                </div>
                                                <div class="text-end">
                                                    <input type="submit" class="btn btn-primary mt-3" value="Add Vegetable">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

                        </div>
                    </div>
                </div>
            </div>
            <script>
                @if (session('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: '{{ session('success') }}',
                        showConfirmButton: false,
                        timer: 2000
                    });
                @endif
            </script>
        @endsection
    @endcan
</x-app-layout>
