<x-admin>
    @section('title', 'Edit Teacher')
    <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row">
                <!-- Personal Information -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" name="employee_id" class="form-control" value="{{ old('employee_id', $teacher->employee_id) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <div class="flex items-center">
                            <img src="{{ asset('storage/'.$teacher->employee_photo) }}" 
                                 alt="{{ $teacher->teacher_name }}" 
                                 height="100"
                                 class="h-16 w-16 rounded-full object-cover mr-4">
                            <input type="file" name="employee_photo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Teacher Name</label>
                        <input type="text" name="teacher_name" class="form-control" value="{{ old('teacher_name', $teacher->teacher_name) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control" value="{{ old('designation', $teacher->designation) }}" required>
                    </div>

                      <div class="form-group">
                        <label>Institution</label>
                        <select name="institution_id" class="form-control" required>
                            <option value="">Select Institution</option>
                            @foreach($institutions as $institution)
                            <option value="{{ $institution->id }}" {{ $teacher->institution_id == $institution->id ? 'selected' : '' }}>
                                {{ $institution->institution_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Faculty</label>
                        <select name="faculty_id" class="form-control" required>
                            <option value="">Select Faculty</option>
                            @foreach($faculties as $faculty)
                            <option value="{{ $faculty->id }}" {{ $teacher->faculty_id == $faculty->id ? 'selected' : '' }}>
                                {{ $faculty->faculty_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" name="department_name" class="form-control" value="{{ old('department_name', $teacher->department_name) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="mobile" class="form-control" value="{{ old('mobile', $teacher->mobile) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $teacher->email) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Nationality</label>
                        <input type="text" name="nationality" class="form-control" value="{{ old('nationality', $teacher->nationality) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" value="{{ old('dob', $teacher->dob) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Joining Date</label>
                        <input type="date" name="joining_date" class="form-control" value="{{ old('joining_date', $teacher->joining_date) }}" required>
                    </div>
                </div>
            </div>

            <!-- Academic Information -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="form-group">
                        <label>Academic Background</label>
                        <textarea name="academic_background" class="form-control" rows="3" required>{{ old('academic_background', $teacher->academic_background) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Research Interest</label>
                        <textarea name="research_interest" class="form-control" rows="3" required>{{ old('research_interest', $teacher->research_interest) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Research & Publications</label>
                        <textarea name="research_and_publications" class="form-control" rows="5" required>{{ old('research_and_publications', $teacher->research_and_publications) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Supervision</label>
                        <textarea name="supervision" class="form-control" rows="5" required>{{ old('supervision', $teacher->supervision) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Achievements</label>
                        <textarea name="achievements" class="form-control" rows="5" required>{{ old('achievements', $teacher->achievements) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="on" {{ $teacher->status == 'on' ? 'selected' : '' }}>On</option>
                            <option value="off" {{ $teacher->status == 'off' ? 'selected' : '' }}>Off</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</x-admin>