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
                <h2>{{$user['name']}}'s Blood pressure</h2>
            </div>
            <div class="col-md-9 d-flex justify-content-end pr-4">
                <a href="{{route('users.bloodpressure.create',['user' => $user->id])}}" class="btn btn-primary">Create a New Blood Pressure Entry</a>
            </div>
            <div class="card my-2">
                <div class="table-responsive px-4">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Date</th>
                                <th>Systolic</th>
                                <th>Diastolic</th>
                            </tr>
                        </thead>
                        @if(isset($bloodpressures))
                            @foreach ($bloodpressures as $bloodpressure)
                                <tbody>
                                    <td class="align-middle">{{ $bloodpressure->created_at->format('d-m-Y') }}</td>
                                    <td class="align-middle">{{$bloodpressure->systolic}}</td>
                                    <td class="align-middle">{{$bloodpressure->diastolic}}</td>
                                    <td class="align-middle">
                                </tbody>
                            @endforeach
                        @else

                            <td colspan="2">No data found</td>
                        @endif
                    </table>
                </div>
            </div><br><br>
        </div>
    </div>
</div>

@endsection
