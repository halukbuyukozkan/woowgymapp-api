@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Users
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                <!--end::Separator-->
                <!--end::Title-->
			</div>
			<!--end::Page title-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-3">
                <h2>Users Table</h2>
            </div>
            <div class="col-md-9 d-flex justify-content-end pr-4">
                <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive px-4">
                <table class="table table-bordered">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Weight</th>
                            <th>Height</th>
                            <th>Gender</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            @php
                                // dd($user->generals->first());
                            @endphp
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>@if($user->generals->count() > 0){{ $user->generals->first()->weight }}@endif</td>
                            <td>@if($user->generals->count() > 0){{ $user->generals->first()->height }}@endif</td>
                            <td>@if($user->generals->count() > 0){{ $user->generals->first()->gender }}@endif</td>
                            <td> <a href="{{ route('users.show',['user' => $user['id']]) }}" type="button" class="btn btn-sm btn-light">
                                Details
                            </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>

@endsection
