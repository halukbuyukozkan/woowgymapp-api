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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__('Lung Capacities')}}
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
                <h2>{{__('New lung capacity entry:')}}</h2>
            </div>
        </div>
        <div class="card">
            <form action="{{ route('users.lungcapacities.store',$user->id) }}" method="POST">
                @csrf
                <div class="p-4">
                    <div class="mb-3">
                        <label for="fev1" class="form-label">fev1:</label>
                        <input type="text" class="form-control" id="fev1" name="fev1" required>
                    </div>
                    <div class="mb-3">
                        <label for="fev" class="form-label">fev:</label>
                        <input type="text" class="form-control" id="fev" name="fev" required>
                    </div>
                    <div class="mb-3">
                        <label for="pef" class="form-label">pef:</label>
                        <input type="text" class="form-control" id="pef" name="pef" required>
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('Create')}}</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
