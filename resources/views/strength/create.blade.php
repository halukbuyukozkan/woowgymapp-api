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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Strength
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
                <h2>New strength entry:</h2>
            </div>
        </div>
        <div class="card">
            <form action="{{ route('users.strengths.store',$user->id) }}" method="POST">
                @csrf
                <div class="p-4">
                    <div class="mb-3">
                        <label for="claw_grip_strength_right_hand" class="form-label">Claw Grip Strength, Right Hand</label>
                        <input type="text" class="form-control" id="claw_grip_strength_right_hand" name="claw_grip_strength_right_hand" required>
                    </div>
                    <div class="mb-3">
                        <label for="claw_grip_strength_left_hand" class="form-label">Claw Grip Strength, Left Hand	</label>
                        <input type="text" class="form-control" id="claw_grip_strength_left_hand" name="claw_grip_strength_left_hand" required>
                    </div>
                    <div class="mb-3">
                        <label for="push_up_test" class="form-label">Push-up</label>
                        <input type="text" class="form-control" id="push_up_test" name="push_up_test" required>
                    </div>
                    <div class="mb-3">
                        <label for="wall_squat" class="form-label">Wall Squat</label>
                        <input type="text" class="form-control" id="wall_squat" name="wall_squat" required>
                    </div>
                    <div>
                        <label for="sit_up_test" class="form-label">Sit-up Test</label>
                        <input type="text" class="form-control" id="sit_up_test" name="sit_up_test" required>
                    </div>
                    <div>
                        <label for="plank_test" class="form-label">Plank Test</label>
                        <input type="text" class="form-control" id="plank_test" name="plank_test" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
