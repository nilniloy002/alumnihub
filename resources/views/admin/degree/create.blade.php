<x-admin>
    @section('title', 'Create Degree')
    <form method="POST" action="{{ route('admin.degree.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Institution</label>
                <select name="institution_id" class="form-control" required>
                    <option value="" disabled selected>Select Institution</option>
                    @foreach($institutions as $institution)
                        <option value="{{ $institution->id }}">{{ $institution->institution_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Degree Name</label>
                <input type="text" name="degree_name" value="{{ old('degree_name') }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="on" {{ old('status') == 'on' ? 'selected' : '' }}>On</option>
                    <option value="off" {{ old('status') == 'off' ? 'selected' : '' }}>Off</option>
                </select>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Save</button>
        </div>
    </form>
</x-admin>
