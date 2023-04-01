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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Mobility
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
                <h2>New mobility entry:</h2>
            </div>
        </div>
        <div class="card">
            <form action="{{ route('users.mobilities.store',$user->id) }}" method="POST">
                @csrf
                <div class="p-4">
                    <div class="mb-3">
                        <label for="overhead_squat" class="form-label">Overhead Squat:</label>
                        <input type="text" class="form-control" id="overhead_squat" name="overhead_squat" required>
                    </div>
                    <div class="mb-3">
                        <label for="shoulder_mobility" class="form-label">Shoulder Mobility:</label>
                        <input type="text" class="form-control" id="shoulder_mobility" name="shoulder_mobility" required>
                    </div>
                    <div class="mb-3">
                        <label for="hurdle_step" class="form-label">Hurdle Step:</label>
                        <input type="text" class="form-control" id="hurdle_step" name="hurdle_step" required>
                    </div>
                    <div class="mb-3">
                        <label for="in_line_lunge" class="form-label">In Line Lunge:</label>
                        <input type="text" class="form-control" id="in_line_lunge" name="in_line_lunge" required>
                    </div>
                    <div>
                        <label for="active_straight_leg_raise" class="form-label">Active Straight Leg Raise:</label>
                        <input type="text" class="form-control" id="active_straight_leg_raise" name="active_straight_leg_raise" required>
                    </div>
                    <div>
                        <label for="trunk_stability_push_up" class="form-label">Trunk Stability Push Up:</label>
                        <input type="text" class="form-control" id="trunk_stability_push_up" name="trunk_stability_push_up" required>
                    </div>
                    <div>
                        <label for="rotary_stability" class="form-label">Rotary Stability:</label>
                        <input type="text" class="form-control" id="rotary_stability" name="rotary_stability" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create mobility entry</button>
                </div>
            </form>
        </div>
    </div>



</div>

@endsection
