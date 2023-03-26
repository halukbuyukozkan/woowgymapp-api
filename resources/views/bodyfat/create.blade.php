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
                <h2>New Body Fat Entry:</h2>
            </div>
        </div>
        <div class="card">
            <form action="{{ route('users.bodyfat.store',$user->id) }}" method="POST">
                @csrf
                <div class="p-4">
                    <div class="mb-3">
                        <label for="chronic_illness" class="form-label">Chest size:</label>
                        <input type="text" class="form-control" id="chronic_illness" name="chest" required>
                    </div>
                    <div class="mb-3">
                        <label for="tension" class="form-label">Abdominal size:</label>
                        <input type="text" class="form-control" id="tension" name="abdominal" required>
                    </div>
                    <div class="mb-3">
                        <label for="cardiovascular" class="form-label">Thigh size:</label>
                        <input type="text" class="form-control" id="cardiovascular" name="thigh" required>
                    </div>
                    <div class="mb-3">
                        <label for="chest_pain" class="form-label">Biceps size:</label>
                        <input type="text" class="form-control" id="chest_pain" name="biceps" required>
                    </div>
                    <div class="mb-3">
                        <label for="spinal_cord_discomfort" class="form-label">Triceps size:</label>
                        <input type="text" class="form-control" id="spinal_cord_discomfort" name="triceps" required>
                    </div>
                    <div class="mb-3">
                        <label for="anatomical_discomfort" class="form-label">Subscapular size:</label>
                        <input type="text" class="form-control" id="anatomical_discomfort" name="subscapular" required>
                    </div>
                    <div class="mb-3">
                        <label for="anatomical_discomfort" class="form-label">Suprailiac size:</label>
                        <input type="text" class="form-control" id="anatomical_discomfort" name="suprailiac" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Bodyfat</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
