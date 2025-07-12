<x-admin>
    @section('title', 'Teacher Details')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Teacher Details</h3>
            <a href="{{ route('admin.teacher.index') }}" class="btn btn-sm btn-info float-right">Back to List</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('storage/'.$teacher->employee_photo) }}" 
                         alt="{{ $teacher->teacher_name }}" 
                         class="img-fluid rounded-circle mb-3"
                         style="max-height: 200px;">
                    <h3>{{ $teacher->teacher_name }}</h3>
                    <h5 class="text-muted">{{ $teacher->designation }}</h5>
                </div>
                <div class="col-md-8">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Employee ID:</strong> {{ $teacher->employee_id }}
                        </div>
                        <div class="col-md-6">
                            <strong>Status:</strong> {{ ucfirst($teacher->status) }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Institution:</strong> {{ $teacher->institution->institution_name ?? 'N/A' }}
                        </div>
                        <div class="col-md-6">
                            <strong>Faculty:</strong> {{ $teacher->faculty->faculty_name ?? 'N/A' }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Department:</strong> {{ $teacher->department_name }}
                        </div>
                        <div class="col-md-6">
                            <strong>Joining Date:</strong> 
                            @if($teacher->joining_date)
                                {{ \Carbon\Carbon::parse($teacher->joining_date)->format('d M Y') }}
                            @else
                                N/A
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Email:</strong> {{ $teacher->email }}
                        </div>
                        <div class="col-md-6">
                            <strong>Mobile:</strong> {{ $teacher->mobile }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Date of Birth:</strong> 
                            @if($teacher->dob)
                                {{ \Carbon\Carbon::parse($teacher->dob)->format('d M Y') }}
                            @else
                                N/A
                            @endif
                        </div>
                        <div class="col-md-6">
                            <strong>Nationality:</strong> {{ $teacher->nationality }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <strong>Academic Background:</strong>
                        <div class="border p-2 rounded">{!! nl2br(e($teacher->academic_background)) !!}</div>
                    </div>
                    <div class="mb-3">
                        <strong>Research Interest:</strong>
                        <div class="border p-2 rounded">{!! nl2br(e($teacher->research_interest)) !!}</div>
                    </div>
                    <div class="mb-3">
                        <strong>Research and Publications:</strong>
                        <div class="border p-2 rounded">{!! nl2br(e($teacher->research_and_publications)) !!}</div>
                    </div>
                    <div class="mb-3">
                        <strong>Supervision:</strong>
                        <div class="border p-2 rounded">{!! nl2br(e($teacher->supervision)) !!}</div>
                    </div>
                    <div class="mb-3">
                        <strong>Achievements:</strong>
                        <div class="border p-2 rounded">{!! nl2br(e($teacher->achievements)) !!}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</x-admin>