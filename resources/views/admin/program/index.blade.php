<x-admin>
    @section('title','Programs')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Program Table</h3>
            <div class="card-tools">
                <a href="{{ route('admin.program.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body">
        <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Institution</th>
                        <th>Degree</th>
                        <th>Program Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $program)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $program->institution->institution_name }}</td>
                            <td>{{ $program->degree->degree_name }}</td>
                            <td>{{ $program->program_name }}</td>
                            <td><span class="badge badge-{{ $program->status == 'on' ? 'success' : 'secondary' }}">{{ $program->status }}</span></td>
                            <td>
                                <a href="{{ route('admin.program.edit', $program->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
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
    <!-- @section('js')
        <script>
            $(function() {
                $('#programTable').DataTable();
            });
        </script>
    @endsection -->
</x-admin>
