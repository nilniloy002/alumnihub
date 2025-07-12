<x-admin>
    @section('title', 'Create Teacher')
    <form action="{{ route('admin.teacher.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <!-- Personal Information -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" name="employee_id" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="employee_photo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Teacher Name</label>
                        <input type="text" name="teacher_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Institution</label>
                        <select name="institution_id" class="form-control" required>
                            <option value="">Select Institution</option>
                            @foreach($institutions as $institution)
                            <option value="{{ $institution->id }}">{{ $institution->institution_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Faculty</label>
                        <select name="faculty_id" class="form-control" required>
                            <option value="">Select Faculty</option>
                            @foreach($faculties as $faculty)
                            <option value="{{ $faculty->id }}">{{ $faculty->faculty_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" name="department_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="mobile" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nationality</label>
                        <input type="text" name="nationality" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Joining Date</label>
                        <input type="date" name="joining_date" class="form-control" required>
                    </div>

                </div>
            </div>

            <!-- Academic Information -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="form-group">
                        <label>Academic Background</label>
                        <textarea name="academic_background" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Research Interest</label>
                        <textarea name="research_interest" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Research & Publications</label>
                        <textarea name="research_and_publications" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Supervision</label>
                        <textarea name="supervision" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Achievements</label>
                        <textarea name="achievements" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="on">On</option>
                            <option value="off">Off</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
</x-admin>