<div class="row">
    @role('admin')
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $user }}</h3>
                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{ route('admin.user.index') }}" class="small-box-footer">View <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $institution }}</h3>
                    <p>Total Institutions</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list-alt"></i>
                </div>
                <a href="{{ route('admin.institution.index') }}" class="small-box-footer">View <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $alumni }}</h3>
                    <p>Total Alumni</p>
                </div>
                <div class="icon">
                    <i class="fas fas fa-th"></i>
                </div>
                <a href="{{ route('admin.alumni.index') }}" class="small-box-footer">View <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{ $collection }}</h3>
                    <p>Total Collections</p>
                </div>
                <div class="icon">
                    <i class="fas fas fa-file-pdf"></i>
                </div>
                <a href="{{ route('admin.collection.index') }}" class="small-box-footer">View <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div> -->
    @endrole
</div>
