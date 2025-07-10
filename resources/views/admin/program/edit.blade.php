<x-admin>
    @section('title', 'Edit Program')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Edit Program</h3>
                        <a href="{{ route('admin.program.index') }}" class="btn btn-info btn-sm">Back</a>
                    </div>
                    <form class="needs-validation" novalidate
                          action="{{ route('admin.program.update', $program->id) }}"
                          method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                {{-- Institution --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="institution_id">Institution</label>
                                        <select name="institution_id" id="institution_id" class="form-control" required>
                                            <option value="" disabled>Select Institution</option>
                                            @foreach($institutions as $inst)
                                                <option value="{{ $inst->id }}"
                                                    {{ $program->institution_id == $inst->id ? 'selected' : '' }}>
                                                    {{ $inst->institution_name }}
                                                </option>
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
                                            {{-- will be populated via AJAX --}}
                                        </select>
                                        <x-error>degree_id</x-error>
                                    </div>
                                </div>


                            <!-- resources/views/admin/program/edit.blade.php -->

                                <!-- After Degree Field -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="faculty_id">Faculty</label>
                                        <select name="faculty_id" id="faculty_id" class="form-control" required>
                                            <option value="" disabled>Select Faculty</option>
                                            @foreach($faculties as $faculty)
                                                <option value="{{ $faculty->id }}" 
                                                    {{ $program->faculty_id == $faculty->id ? 'selected' : '' }}
                                                    {{ old('faculty_id') == $faculty->id ? 'selected' : '' }}>
                                                    {{ $faculty->faculty_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-error>faculty_id</x-error>
                                    </div>
                                </div>

                                {{-- Program Name --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="program_name">Program Name</label>
                                        <input type="text" name="program_name"
                                               value="{{ old('program_name', $program->program_name) }}"
                                               class="form-control" required>
                                        <x-error>program_name</x-error>
                                    </div>
                                </div>

                                {{-- Status --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control" required>
                                            <option value="on"  {{ $program->status == 'on'  ? 'selected' : '' }}>On</option>
                                            <option value="off" {{ $program->status == 'off' ? 'selected' : '' }}>Off</option>
                                        </select>
                                        <x-error>status</x-error>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" id="submit" class="btn btn-primary">Update</button>
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
        function loadDegrees(instId, selectedDegree) {
            $.ajax({
                url: `/get-degrees/${instId}`,
                type: 'GET',
                success: function(optionsHtml) {
                    $('#degree_id').html(optionsHtml)
                                    .val(selectedDegree);
                },
                error: function() {
                    alert('Failed to load degrees.');
                }
            });
        }

        // On page load, populate degrees for current institution
        loadDegrees({{ $program->institution_id }}, {{ $program->degree_id }});

        // On change of institution
        $('#institution_id').on('change', function() {
            $('#submit').attr('disabled', true).text('Please wait');
            loadDegrees($(this).val(), null);
            $('#submit').attr('disabled', false).text('Update');
        });
    });
    </script>
    @endsection
</x-admin>
