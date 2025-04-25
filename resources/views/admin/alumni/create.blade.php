<x-admin>
    @section('title', 'Create Alumni')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Create Alumnus</h3>
                        <a href="{{ route('admin.alumni.index') }}" class="btn btn-info btn-sm">Back</a>
                    </div>
                    <form class="needs-validation" novalidate action="{{ route('admin.alumni.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                <!-- Institution -->
                <div class="col-lg-4 form-group">
                    <label for="institution_id">Institution</label>
                    <select name="institution_id" id="institution_id" class="form-control" required>
                        <option value="" disabled selected>Select Institution</option>
                        @foreach($institutions as $inst)
                            <option value="{{ $inst->id }}">{{ $inst->institution_name }}</option>
                        @endforeach
                    </select>
                    <x-error>institution_id</x-error>
                </div>

                <!-- Degree -->
                <div class="col-lg-4 form-group">
                    <label for="degree_id">Degree</label>
                    <select name="degree_id" id="degree_id" class="form-control" required>
                        <option value="" disabled selected>Select Degree</option>
                    </select>
                    <x-error>degree_id</x-error>
                </div>

                <!-- Program -->
                <div class="col-lg-4 form-group">
                    <label for="program_id">Program</label>
                    <select name="program_id" id="program_id" class="form-control" required>
                        <option value="" disabled selected>Select Program</option>
                    </select>
                    <x-error>program_id</x-error>
                </div>

                                <!-- Name of Student -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name_of_student">Name of Student</label>
                                        <input type="text" name="name_of_student" id="name_of_student" 
                                               value="{{ old('name_of_student') }}" 
                                               class="form-control" required>
                                        <x-error>name_of_student</x-error>
                                    </div>
                                </div>

                                <!-- Father Name -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="father_name">Father's Name</label>
                                        <input type="text" name="father_name" id="father_name" 
                                               value="{{ old('father_name') }}" 
                                               class="form-control" required>
                                        <x-error>father_name</x-error>
                                    </div>
                                </div>

                                <!-- Mobile -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" name="mobile" id="mobile" 
                                               value="{{ old('mobile') }}" 
                                               class="form-control" required>
                                        <x-error>mobile</x-error>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" 
                                               value="{{ old('email') }}" 
                                               class="form-control" required>
                                        <x-error>email</x-error>
                                    </div>
                                </div>

                                <!-- Batch -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="batch">Batch</label>
                                        <input type="text" name="batch" id="batch" 
                                               value="{{ old('batch') }}" 
                                               class="form-control" required>
                                        <x-error>batch</x-error>
                                    </div>
                                </div>

                                <!-- Student ID -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="student_id">Student ID</label>
                                        <input type="text" name="student_id" id="student_id" 
                                               value="{{ old('student_id') }}" 
                                               class="form-control" required>
                                        <x-error>student_id</x-error>
                                    </div>
                                </div>

                                <!-- Passing Year -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="passing_year">Passing Year</label>
                                        <input type="number" name="passing_year" id="passing_year" 
                                               value="{{ old('passing_year') }}" 
                                               class="form-control" required>
                                        <x-error>passing_year</x-error>
                                    </div>
                                </div>

                                <!-- Result -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="result">Result (GPA)</label>
                                        <input type="number" step="0.01" name="result" id="result" 
                                               value="{{ old('result') }}" 
                                               class="form-control" required>
                                        <x-error>result</x-error>
                                    </div>
                                </div>

                                <!-- Nationality -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="nationality">Nationality</label>
                                        <input type="text" name="nationality" id="nationality" 
                                               value="{{ old('nationality') }}" 
                                               class="form-control" required>
                                        <x-error>nationality</x-error>
                                    </div>
                                </div>

                                <!-- Religion -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <select name="religion" id="religion" class="form-control" required>
                                            <option value="" disabled selected>Select Religion</option>
                                            <option value="Muslim" {{ old('religion')=='Muslim'?'selected':'' }}>Muslim</option>
                                            <option value="Hindu" {{ old('religion')=='Hindu'?'selected':'' }}>Hindu</option>
                                            <option value="Buddhist" {{ old('religion')=='Buddhist'?'selected':'' }}>Buddhist</option>
                                            <option value="Christian" {{ old('religion')=='Christian'?'selected':'' }}>Christian</option>
                                        </select>
                                        <x-error>religion</x-error>
                                    </div>
                                </div>

                                <!-- Gender -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="" disabled selected>Select Gender</option>
                                            <option value="Male" {{ old('gender')=='Male'?'selected':'' }}>Male</option>
                                            <option value="Female" {{ old('gender')=='Female'?'selected':'' }}>Female</option>
                                            <option value="Others" {{ old('gender')=='Others'?'selected':'' }}>Others</option>
                                        </select>
                                        <x-error>gender</x-error>
                                    </div>
                                </div>

                                <!-- Marital Status -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="marital_status">Marital Status</label>
                                        <select name="marital_status" id="marital_status" class="form-control" required>
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="Married" {{ old('marital_status')=='Married'?'selected':'' }}>Married</option>
                                            <option value="Unmarried" {{ old('marital_status')=='Unmarried'?'selected':'' }}>Unmarried</option>
                                        </select>
                                        <x-error>marital_status</x-error>
                                    </div>
                                </div>

                                <!-- Current Occupation -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="current_occupation">Current Occupation</label>
                                        <textarea name="current_occupation" id="current_occupation" class="form-control" required>{{ old('current_occupation') }}</textarea>
                                        <x-error>current_occupation</x-error>
                                    </div>
                                </div>

                                <!-- Current Occupation Address -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="current_occupation_address">Occupation Address</label>
                                        <input type="text" name="current_occupation_address" id="current_occupation_address" 
                                               value="{{ old('current_occupation_address') }}" 
                                               class="form-control" required>
                                        <x-error>current_occupation_address</x-error>
                                    </div>
                                </div>

                                <!-- Permanent Address -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="permanent_address">Permanent Address</label>
                                        <textarea name="permanent_address" id="permanent_address" class="form-control" required>{{ old('permanent_address') }}</textarea>
                                        <x-error>permanent_address</x-error>
                                    </div>
                                </div>

                                <!-- Student Photo -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="student_photo">Student Photo</label>
                                        <input type="file" name="student_photo" id="student_photo" class="form-control">
                                        <x-error>student_photo</x-error>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control" required>
                                            <option value="on" {{ old('status')=='on'?'selected':'' }}>On</option>
                                            <option value="off" {{ old('status')=='off'?'selected':'' }}>Off</option>
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
            $('#institution_id').change(function() {
                let inst = $(this).val();
                $('#submit').prop('disabled', true).text('Loading Degrees...');
                // Fetch degrees for selected institution
                $.ajax({
                    url: '/get-degrees/' + inst,
                    type: 'GET',
                    success: function(html) {
                        $('#degree_id').html(html);
                        $('#program_id').html('<option value="" disabled selected>Select Program</option>');
                    },
                    error: function() {
                        alert('Failed to load degrees.');
                    },
                    complete: function() {
                        $('#submit').prop('disabled', false).text('Save');
                    }
                });
            });

            $('#degree_id').change(function() {
                let deg = $(this).val();
                $('#submit').prop('disabled', true).text('Loading Programs...');
                // Fetch programs for selected degree
                $.ajax({
                    url: '/get-programs/' + deg,
                    type: 'GET',
                    success: function(html) {
                        $('#program_id').html(html);
                    },
                    error: function() {
                        alert('Failed to load programs.');
                    },
                    complete: function() {
                        $('#submit').prop('disabled', false).text('Save');
                    }
                });
            });
        });
    </script>
    @endsection
</x-admin>