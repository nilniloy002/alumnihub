<x-admin>
    @section('title', 'Edit Institution')
    <div class="card">
        <div class="card-header">Edit Institution</div>
        <div class="card-body">
            <form action="{{ route('admin.institution.update', $institution) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="institution_name" class="form-control" value="{{ $institution->institution_name }}" required>
                </div>
                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" name="institution_logo" class="form-control">
                    <small>Current: <img src="{{ asset('storage/' . $institution->institution_logo) }}" height="40"></small>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="on" {{ $institution->status === 'on' ? 'selected' : '' }}>On</option>
                        <option value="off" {{ $institution->status === 'off' ? 'selected' : '' }}>Off</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</x-admin>
