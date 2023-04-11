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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Par-q
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
        <div class="card">
            <form action="{{ route('users.parqs.store',$user->id) }}" method="POST">
                @csrf
                <div class="p-4">
                    <div class="mb-3">
                        <label for="chronic_illness" class="form-label">{{__('Do you have a chronic illness?')}}</label>
                        <input type="text" class="form-control" id="chronic_illness" name="chronic_illness" required>
                    </div>
                    <div class="mb-3">
                        <label for="tension" class="form-label">{{__('Have you ever had a blood pressure problem before?')}}</label>
                        <input type="text" class="form-control" id="tension" name="tension" required>
                    </div>
                    <div class="mb-3">
                        <label for="cardiovascular" class="form-label">{{__('Have you ever had a cardiovascular (heart disease, vascular disease etc.) condition before?')}}</label>
                        <input type="text" class="form-control" id="cardiovascular" name="cardiovascular" required>
                    </div>
                    <div class="mb-3">
                        <label for="chest_pain" class="form-label">{{__('Have you felt pain in your chest while walking or climbing stairs in the past month?')}}</label>
                        <input type="text" class="form-control" id="chest_pain" name="chest_pain" required>
                    </div>
                    <div class="mb-3">
                        <label for="spinal_cord_discomfort" class="form-label">{{__('Have you ever had a spinal cord (hernia, slipped disc, scoliosis etc.) disorder?')}}</label>
                        <input type="text" class="form-control" id="spinal_cord_discomfort" name="spinal_cord_discomfort" required>
                    </div>
                    <div class="mb-3">
                        <label for="anatomical_discomfort" class="form-label">{{__('Have you ever had an anatomical disorder (fracture,fiber breakage etc.) before?')}}</label>
                        <input type="text" class="form-control" id="anatomical_discomfort" name="anatomical_discomfort" required>
                    </div>
                    <div class="mb-3">
                        <label for="operation" class="form-label">{{__('Have you ever had a surgical intervention (surgery etc.) before?')}}</label>
                        <input type="text" class="form-control" id="operation" name="operation" required>
                    </div>
                    <div class="mb-3">
                        <label for="diabetes" class="form-label">{{__('Do you have type 1 or type 2 diabetes?')}}</label>
                        <input type="text" class="form-control" id="diabetes" name="diabetes" required>
                    </div>
                    <div class="mb-3">
                        <label for="medicine" class="form-label">{{__('Do you have a medication that you use regularly?')}}</label>
                        <input type="text" class="form-control" id="medicine" name="medicine" required>
                    </div>
                    <div class="mb-3">
                        <label for="supplements" class="form-label">{{__('Do you have a supplement (vitamins, protein powders etc.) that you use regularly?')}}</label>
                        <input type="text" class="form-control" id="supplements" name="supplements" required>
                    </div>
                    <div class="mb-3">
                        <label for="smoke" class="form-label">{{__('Do you smoke?')}}</label>
                        <input type="text" class="form-control" id="smoke" name="smoke" required>
                    </div>
                    <div class="mb-3">
                        <label for="addiction" class="form-label">{{__('Do you have an addiction to drugs, alcohol etc.? If yes, have you had any treatment related to them?')}}</label>
                        <input type="text" class="form-control" id="addiction" name="addiction" required>
                    </div>
                    <div class="mb-3">
                        <label for="allergy" class="form-label">{{__('Do you have any food sensitivities or allergies?')}}</label>
                        <input type="text" class="form-control" id="allergy" name="allergy" required>
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('Create')}}</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
