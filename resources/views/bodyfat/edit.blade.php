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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__('Users')}}
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
                <h2>{{__('Update Body Fat Entry:')}}</h2>
            </div>
        </div>
        <div class="card">
            <form action="{{ route('users.bodyfat.update', ['user' => $user->id , 'bodyfat' => $bodyfat->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="p-4">
                    @if($user->generals->last()->gender == 'male')
                    <div class="mb-3">
                        <label for="chest" class="form-label">{{__('Chest size:')}}</label>
                        <input value="{{$bodyfat->chest}}" type="text" class="form-control" id="chest" name="chest" required>
                    </div>
                    <div class="mb-3">
                        <label for="abdominal" class="form-label">{{__('Abdominal size:')}}</label>
                        <input value="{{$bodyfat->abdominal}}" type="text" class="form-control" id="abdominal" name="abdominal" required>
                    </div>
                    <div class="mb-3">
                        <label for="thigh" class="form-label">{{__('Thigh size:')}}</label>
                        <input value="{{$bodyfat->thigh}}" type="text" class="form-control" id="thigh" name="thigh" required>
                    </div>
                    @else
                    <div class="mb-3">
                        <label for="biceps" class="form-label">{{__('Biceps size:')}}</label>
                        <input value="{{$bodyfat->biceps}}" type="text" class="form-control" id="biceps" name="biceps" required>
                    </div>
                    <div class="mb-3">
                        <label for="triceps" class="form-label">{{__('Triceps size:')}}</label>
                        <input value="{{$bodyfat->triceps}}" type="text" class="form-control" id="triceps" name="triceps" required>
                    </div>
                    <div class="mb-3">
                        <label for="subscapular" class="form-label">{{__('Subscapular size:')}}</label>
                        <input value="{{$bodyfat->subscapular}}" type="text" class="form-control" id="subscapular" name="subscapular" required>
                    </div>
                    <div class="mb-3">
                        <label for="suprailiac" class="form-label">{{__('Suprailiac size:')}}</label>
                        <input value="{{$bodyfat->suprailiac}}" type="text" class="form-control" id="suprailiac" name="suprailiac" required>
                    </div>
                    @endif
                    <button type="submit" class="btn btn-primary">{{__('Update Bodyfat')}}</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
