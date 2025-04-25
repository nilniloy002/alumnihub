<x-admin>
    @section('title', 'Edit Degree')
    <form method="POST" action="{{ route('admin.degree.update', $degree->id) }}">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>Institution</label>
                <select name="institution_id" class="form-control" required>
                    @foreach($institutions as $institution)
                        <option value="{{ $institution->id }}" {{ $degree->institution_id == $institution->id ? 'selected' : '' }}>
                            {{ $institution->institution_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Degree Name</label>
                <input type="text" name="degree_name" value="{{ old('degree_name', $degree->degree_name) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="on" {{ $degree->status == 'on' ? 'selected' : '' }}>On</option>
                    <option value="off" {{ $degree->status == 'off' ? 'selected' : '' }}>Off</option>
                </select>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Update</button>
        </div>
    </form>
</x-admin>
