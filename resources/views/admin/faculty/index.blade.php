<x-admin>
    @section('title', 'Faculty List')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Faculty Table</h3>
            <a href="{{ route('admin.faculty.create') }}" class="btn btn-sm btn-info float-right">New</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Faculty Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->faculty_name }}</td>
                        <td>{{ ucfirst($row->status) }}</td>
                        <td>
                            <a href="{{ route('admin.faculty.edit', $row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.faculty.destroy', $row->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this faculty?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>