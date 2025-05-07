<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        @role('admin')
            <li class="nav-item">
                <a href="{{ route('admin.institution.index') }}"
                    class="nav-link {{ Route::is('admin.institution.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-school"></i>
                    <p>Institutions
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.degree.index') }}"
                    class="nav-link {{ Route::is('admin.degree.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-graduation-cap"></i>
                    <p>Degrees
                    </p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin.program.index') }}"
                    class="nav-link {{ Route::is('admin.program.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Programs</p>
                </a>
            </li>

            <!-- @php $alumniCount = \App\Models\Alumni::count(); @endphp
            <li class="nav-item">
                <a href="{{ route('admin.alumni.index') }}"
                class="nav-link {{ Route::is('admin.alumni.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>
                        Alumni
                        <span class="badge badge-info right">{{ $alumniCount }}</span>
                    </p>
                </a>
            </li> -->

            @php 
                $alumniCount = \App\Models\Alumni::count();
                $isAlumniActive = Route::is('admin.alumni.*');
                $isImportActive = Route::is('admin.alumni.import*');
            @endphp

            <li class="nav-item {{ $isAlumniActive ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $isAlumniActive ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>
                        Alumni
                        <!-- <span class="badge badge-info right">{{ $alumniCount }}</span> -->
                        <i class="right fas fa-angle-down"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.alumni.index') }}" 
                        class="nav-link {{ Route::is('admin.alumni.index') ? 'active' : '' }}">
                            <!-- <i class="far fa-circle nav-icon"></i> -->
                            <p>All Alumni</p>
                            <span class="badge badge-info right">{{ $alumniCount }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.alumni.importForm') }}" 
                        class="nav-link {{ $isImportActive ? 'active' : '' }}">
                            <!-- <i class="far fa-circle nav-icon"></i> -->
                            <p>Import Alumni</p>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}"
                    class="nav-link {{ Route::is('admin.user.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Users
                        <span class="badge badge-info right">{{ $userCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.role.index') }}"
                    class="nav-link {{ Route::is('admin.role.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Role
                        <span class="badge badge-success right">{{ $RoleCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.permission.index') }}"
                    class="nav-link {{ Route::is('admin.permission.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-hat-cowboy"></i>
                    <p>Permission
                        <span class="badge badge-danger right">{{ $PermissionCount }}</span>
                    </p>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="{{ route('admin.category.index') }}"
                    class="nav-link {{ Route::is('admin.category.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>Category
                        <span class="badge badge-warning right">{{ $CategoryCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.subcategory.index') }}"
                    class="nav-link {{ Route::is('admin.subcategory.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Sub Category
                        <span class="badge badge-secondary right">{{ $SubCategoryCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.collection.index') }}"
                    class="nav-link {{ Route::is('admin.collection.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-pdf"></i>
                    <p>Collection
                        <span class="badge badge-primary right">{{ $CollectionCount }}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.product.index') }}"
                    class="nav-link {{ Route::is('admin.product.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Products
                        <span class="badge badge-warning right">{{ $ProductCount }}</span>
                    </p>
                </a>
            </li> -->
        @endrole
        <li class="nav-item">
            <a href="{{ route('admin.profile.edit') }}"
                class="nav-link {{ Route::is('admin.profile.edit') ? 'active' : '' }}">
                <i class="nav-icon fas fa-id-card"></i>
                <p>Profile</p>
            </a>
        </li>

    </ul>
</nav>
