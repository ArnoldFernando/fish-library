<x-app-layout>
    @can('admin-access')



        @section('content')
            <div class="container mt-4">
                <h1 class="text-primary">Messages</h1>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-bordered table-striped mt-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date Submitted</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($submissions as $submission)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $submission->name }}</td>
                                <td>{{ $submission->mobile }}</td>
                                <td>{{ $submission->email }}</td>
                                <td>{{ $submission->message }}</td>
                                <td>{{ $submission->created_at->format('M d, Y h:i A') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No submissions found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        @endsection

    @endcan
</x-app-layout>
