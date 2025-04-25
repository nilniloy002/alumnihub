<x-admin>
    @section('title', 'Create Program')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Create Program</h3>
                        <a href="{{ route('admin.program.index') }}" class="btn btn-info btn-sm">Back</a>
                    </div>
                    <form class="needs-validation" novalidate action="{{ route('admin.program.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                {{-- Institution --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="institution_id">Institution</label>
                                        <select name="institution_id" id="institution_id" class="form-control" required>
                                            <option value="" disabled selected>Select Institution</option>
                                            @foreach($institutions as $inst)
                                                <option value="{{ $inst->id }}">{{ $inst->institution_name }}</option>
                                            @endforeach
                                        </select>
                                        <x-error>institution_id</x-error>
                                    </div>
                                </div>

                                {{-- Degree --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="degree_id">Degree</label>
                                        <select name="degree_id" id="degree_id" class="form-control" required>
                                            <option value="" disabled selected>Select Degree</option>
                                        </select>
                                        <x-error>degree_id</x-error>
                                    </div>
                                </div>

                                {{-- Program Name --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="program_name">Program Name</label>
                                        <input type="text" name="program_name"
                                               value="{{ old('program_name') }}"
                                               class="form-control" required>
                                        <x-error>program_name</x-error>
                                    </div>
                                </div>

                                {{-- Status --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control" required>
                                            <option value="on"  {{ old('status') == 'on'  ? 'selected' : '' }}>On</option>
                                            <option value="off" {{ old('status') == 'off' ? 'selected' : '' }}>Off</option>
                                        </select>
                                        <x-error>status</x-error>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" id="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(function() {
        $('#institution_id').on('change', function() {
            let institutionID = $(this).val();
            let btn = $('#submit').attr('disabled', true).text('Please wait');
            $.ajax({
                url: `/get-degrees/${institutionID}`,
                type: 'GET',
                success: function(optionsHtml) {
                    $('#degree_id').html(optionsHtml);
                },
                error: function() {
                    alert('Failed to load degrees.');
                },
                complete: function() {
                    btn.attr('disabled', false).text('Save');
                }
            });
        });
    });
    </script>
    @endsection
</x-admin>
