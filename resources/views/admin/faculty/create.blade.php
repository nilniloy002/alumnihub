<x-admin>
    @section('title', 'Create Faculty')
    <form action="{{ route('admin.faculty.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Faculty Name</label>
                <input type="text" name="faculty_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="on">On</option>
                    <option value="off">Off</option>
                </select>
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
</x-admin>
