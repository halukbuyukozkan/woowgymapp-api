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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__('General Informations')}}
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
                <h2>{{__('New General Information Entry')}}</h2>
            </div>
        </div>
        <div class="card">
            <form action="{{ route('users.generals.store',$user) }}" method="POST">
                @csrf
                <div class="p-4">
                    <div class="mb-3">
                        <label for="weight" class="form-label">{{__('Weight')}}</label>
                        <input type="text" class="form-control" id="weight" name="weight" required>
                    </div>
                    <div class="mb-3">
                        <label for="height" class="form-label">{{__('Height')}}</label>
                        <input type="text" class="form-control" id="height" name="height" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">{{__('Gender')}}</label>
                        <input type="text" class="form-control" id="gender" name="gender" required>
                    </div>
                    <div class="mb-3">
                        <label for="job" class="form-label">{{__('Job')}}</label>
                        <input type="text" class="form-control" id="job" name="job" required>
                    </div>

                    <button type="submit" class="btn btn-primary">{{__('Create')}}</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
