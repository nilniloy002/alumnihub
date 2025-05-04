<x-admin>
    @section('title', 'Institutions')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Institution List</h3>
            <div class="card-tools">
                <a href="{{ route('admin.institution.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $institution)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('/storage/' . $institution->institution_logo) }}" alt="" height="40"></td>
                            <td>{{ $institution->institution_name }}</td>
                            <td>{{ ucfirst($institution->status) }}</td>
                            <td>
                                <a href="{{ route('admin.institution.edit', $institution) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.institution.destroy', $institution) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>
