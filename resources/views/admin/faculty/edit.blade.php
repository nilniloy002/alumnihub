<x-admin>
    @section('title', 'Edit Faculty')
    <form action="{{ route('admin.faculty.update', $faculty->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>Faculty Name</label>
                <input type="text" name="faculty_name" class="form-control" value="{{ old('faculty_name', $faculty->faculty_name) }}" required>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="on" {{ $faculty->status == 'on' ? 'selected' : '' }}>On</option>
                    <option value="off" {{ $faculty->status == 'off' ? 'selected' : '' }}>Off</option>
                </select>
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</x-admin>
