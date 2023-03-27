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
                <h2>Update Par-q Test</h2>
            </div>
        </div>
        <div class="card">
            <form action="{{ route('users.parqs.update', ['user' => $user->id , 'parq' => $parq->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="p-4">
                    <div class="mb-3">
                        <label class="form-label">Do you have a chronic illness?</label>
                        <input value="{{$parq->tension}}" type="text" class="form-control" id="chronic_illness" name="chronic_illness" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Have you ever had a blood pressure problem before?</label>
                        <input value="{{$parq->tension}}" type="text" class="form-control" id="tension" name="tension" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Have you ever had a cardiovascular (heart disease, vascular disease etc.) condition before?</label>
                        <input value="{{$parq->cardiovascular}}" type="text" class="form-control" id="cardiovascular" name="cardiovascular" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Have you felt pain in your chest while walking or climbing stairs in the past month?</label>
                        <input value="{{$parq->chest_pain}}" type="text" class="form-control" id="chest_pain" name="chest_pain" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Have you ever had a spinal cord (hernia, slipped disc, scoliosis etc.) disorder?</label>
                        <input value="{{$parq->spinal_cord_discomfort}}" type="text" class="form-control" id="spinal_cord_discomfort" name="spinal_cord_discomfort" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Have you ever had an anatomical disorder (fracture,fiber breakage etc.) before?</label>
                        <input value="{{$parq->anatomical_discomfort}}" type="text" class="form-control" id="anatomical_discomfort" name="anatomical_discomfort" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Have you ever had a surgical intervention (surgery etc.) before?</label>
                        <input value="{{$parq->operation}}" type="text" class="form-control" id="operation" name="operation" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Do you have type 1 or type 2 diabetes?</label>
                        <input value="{{$parq->diabetes}}" type="text" class="form-control" id="diabetes" name="diabetes" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Do you have a medication that you use regularly?</label>
                        <input value="{{$parq->medicine}}" type="text" class="form-control" id="medicine" name="medicine" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Do you have a supplement (vitamins, protein powders etc.) that you use regularly?</label>
                        <input value="{{$parq->supplements}}" type="text" class="form-control" id="supplements" name="supplements" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Do you smoke?</label>
                        <input value="{{$parq->smoke}}" type="text" class="form-control" id="smoke" name="smoke" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Do you have an addiction to drugs, alcohol etc.? If yes, have you had any treatment related to them?</label>
                        <input value="{{$parq->addiction}}" type="text" class="form-control" id="addiction" name="addiction" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Do you have any food sensitivities or allergies?</label>
                        <input value="{{$parq->allergy}}" type="text" class="form-control" id="allergy" name="allergy" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Par-q</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
