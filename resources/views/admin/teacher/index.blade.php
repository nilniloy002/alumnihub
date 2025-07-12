<x-admin>
    @section('title', 'Teacher List')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Teacher Table</h3>
            <a href="{{ route('admin.teacher.create') }}" class="btn btn-sm btn-info float-right">New</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Institution</th>
                        <th>Faculty</th>
                        <th>Dept.</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$teacher->employee_photo) }}" 
                                 alt="{{ $teacher->teacher_name }}" 
                                 height="40"
                                 class="h-10 w-10 rounded-full object-cover">
                        </td>
                        <td>{{ $teacher->employee_id }}</td>
                        <td>{{ $teacher->teacher_name }}</td>
                        <td>{{ $teacher->institution->institution_name ?? 'N/A' }}</td>
                        <td>{{ $teacher->faculty->faculty_name ?? 'N/A' }}</td>
                        <td>{{ $teacher->department_name}}</td>
                        <td>{{ ucfirst($teacher->status) }}</td>
                        <td class="d-flex">
                            <a href="{{ route('admin.teacher.show', $teacher->id) }}" 
                               class="btn btn-sm btn-success mr-1">View</a>
                            <a href="{{ route('admin.teacher.edit', $teacher->id) }}" 
                               class="btn btn-sm btn-primary mr-1">Edit</a>
                            <form action="{{ route('admin.teacher.destroy', $teacher->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this teacher?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>