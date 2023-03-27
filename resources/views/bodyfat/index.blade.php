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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Details
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
                <h2>{{$user['name']}}'s body fat</h2>
            </div>
            @if($bodyfat == null)
            <div class="col-md-9 d-flex justify-content-end pr-4">
                <a href="{{route('users.bodyfat.create',['user' => $user->id])}}" class="btn btn-primary">Create a New Body Fat Entry</a>
            </div>
            @else
            <div class="col-md-9 d-flex justify-content-end pr-4">
                <a href="{{route('users.bodyfat.edit',['user' => $user->id , 'bodyfat' => $bodyfat->id])}}" class="btn btn-primary">Update Body Fat Entry</a>
            </div>
            @endif
            <div class="card my-2">
                <div class="table-responsive px-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Body part</th>
                                <th>Size</th>
                            </tr>
                        </thead>
                        @if(isset($bodyfat))
                            @if($user->generals->last()->gender == 'male')
                            <tbody>
                                <td>Chest size</td>
                                <td>{{ $bodyfat->chest }}</td>
                            </tbody>
                            <tbody>
                                <td>Abdominal size</td>
                                <td>{{ $bodyfat->abdominal }}</td>
                            </tbody>
                            <tbody>
                                <td>Thigh size</td>
                                <td>{{ $bodyfat->thigh }}</td>
                            </tbody>
                            @else
                            <tbody>
                                <td>Biceps size</td>
                                <td>{{ $bodyfat->biceps }}</td>
                            </tbody>
                            <tbody>
                                <td>Triceps size</td>
                                <td>{{ $bodyfat->triceps }}</td>
                            </tbody>
                            <tbody>
                                <td>Subscapular size</td>
                                <td>{{ $bodyfat->subscapular }}</td>
                            </tbody>
                            <tbody>
                                <td>Suprailiac size</td>
                                <td>{{ $bodyfat->suprailiac }}</td>
                            </tbody>
                            @endif
                        @else
                        <tbody>
                            <td colspan="2">No data found</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div><br><br>
        </div>
    </div>
</div>

@endsection
