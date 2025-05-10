<x-admin>
    @section('title','Alumni')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Alumni List</h3>
            <a href="{{ route('admin.alumni.create') }}" class="btn btn-sm btn-info float-right">New</a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="alumniTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Institution</th>
                        <th>Degree</th>
                        <th>Program</th>
                        <th>Batch</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $al)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ $al->student_photo ? asset('storage/' . $al->student_photo) : asset('admin/favicon/dummy.jpg') }}" 
                                alt="Student Photo" 
                                height="40"
                                class="rounded-full border border-gray-200">
                        </td>
                        <td>{{ $al->name_of_student }}</td>
                        <td>{{ $al->institution->institution_name }}</td>
                        <td>{{ $al->degree->degree_name }}</td>
                        <td>{{ $al->program->program_name }}</td>
                        <td>{{ $al->batch }}</td>
                        <td>
                            <a href="{{ route('admin.alumni.show', $al->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('admin.alumni.edit', $al->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.alumni.destroy', $al->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this alumnus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @section('js')
    <script>$('#alumniTable').DataTable();</script>
    @endsection
</x-admin>