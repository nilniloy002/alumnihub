{{-- resources/views/admin/alumni/view.blade.php --}}
<x-admin>
    @section('title', 'Alumni Details')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Alumni Details</h3>
                        <a href="{{ route('admin.alumni.index') }}" class="btn btn-info btn-sm">Back</a>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            {{-- Photo --}}
                            <div class="col-md-4 text-center mb-3">
                                @if($Alumni->student_photo)
                                    <img src="{{ asset('storage/'. $Alumni->	student_photo) }}" class="img-thumbnail" width="200" alt="Photo">
                                    
                                    
                                @else
                                    <img src="{{ asset('admin/favicon/dummy.jpg') }}" class="img-thumbnail" width="200" alt="No Photo">
                                @endif
                            </div>

                            <div class="col-md-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name of Student</th>
                                        <td>{{ $Alumni->name_of_student }}</td>
                                    </tr>
                                    <tr>
                                        <th>Father's Name</th>
                                        <td>{{ $Alumni->father_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Institution</th>
                                        <td>{{ $Alumni->institution->institution_name ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Degree</th>
                                        <td>{{ $Alumni->degree->degree_name ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Program</th>
                                        <td>{{ $Alumni->program->program_name ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Batch</th>
                                        <td>{{ $Alumni->batch }}</td>
                                    </tr>
                                    <tr>
                                        <th>Student ID</th>
                                        <td>{{ $Alumni->student_id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Passing Year</th>
                                        <td>{{ $Alumni->passing_year }}</td>
                                    </tr>
                                    <tr>
                                        <th>Result (GPA)</th>
                                        <td>{{ $Alumni->result }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mobile</th>
                                        <td>{{ $Alumni->mobile }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $Alumni->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nationality</th>
                                        <td>{{ $Alumni->nationality }}</td>
                                    </tr>
                                    <tr>
                                        <th>Religion</th>
                                        <td>{{ $Alumni->religion }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>{{ $Alumni->gender }}</td>
                                    </tr>

                                     <tr>
                                        <th>Special Training/Course/Certification</th>
                                        <td>{{ $Alumni->special_training ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Social Media (LinkedIn)</th>
                                        <td>
                                            @if($Alumni->social_link)
                                                <a href="{{ $Alumni->social_link }}" target="_blank">{{ $Alumni->social_link }}</a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            <span class="badge badge-{{ $Alumni->status == 'on' ? 'success' : 'secondary' }}">
                                                {{ ucfirst($Alumni->status) }}
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('admin.alumni.edit', $Alumni->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.alumni.destroy', $Alumni->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this Alumni?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-admin>
