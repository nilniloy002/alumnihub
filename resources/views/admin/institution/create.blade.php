<x-admin>
    @section('title', 'Create Institution')
    <div class="card">
        <div class="card-header">Create Institution</div>
        <div class="card-body">
            <form action="{{ route('admin.institution.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="institution_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" name="institution_logo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="on">On</option>
                        <option value="off">Off</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</x-admin>
