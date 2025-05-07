<x-admin>
    @section('title','Import Alumni')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Import Alumni</h3>
            <a href="{{ route('admin.alumni.index') }}" class="btn btn-sm btn-secondary float-right">Back</a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.alumni.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="import_file">Upload Excel or CSV File <span class="text-danger">*</span></label>
                    <input type="file" name="import_file" class="form-control" accept=".csv,.xls,.xlsx" required>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Import Alumni</button>
            </form>
        </div>
    </div>
</x-admin>
