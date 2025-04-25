<x-admin>
    @section('title','Degrees')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Degree Table</h3>
            <div class="card-tools">
                <a href="{{ route('admin.degree.create') }}" class="btn btn-info btn-sm">New</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Degree Name</th>
                        <th>Institution</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->degree_name }}</td>
                            <td>{{ $row->institution->institution_name }}</td>
                            <td>{{ ucfirst($row->status) }}</td>
                            <td>
                                <a href="{{ route('admin.degree.edit', $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('admin.degree.destroy', $row->id) }}" method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this degree?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>
