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
        <div class="card shadow-sm my-2">
            <div class="card-header">
                <h3 class="card-title">{{$user['name']}}s details</h3>
                <div class="card-toolbar">
                    @if($parq == null)
                    <a href="{{route('users.parqs.create',['user' => $user->id])}}" class="btn btn-primary">Create a new Par-q Test</a>
                    @else
                    <a href="{{route('users.parqs.edit',['user' => $user->id , 'parq' => $parq->id])}}" class="btn btn-primary">Update Par-q Test</a>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive align-middle text-center">
                    <table class="table table-bordered">
                        @if(isset($parq))
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Questions</th>
                                <th>Answers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>Do you have a chronic illness?</td>
                            <td>{{ $parq->chronic_illness }}</td>
                        </tbody>
                        <tbody>
                            <td>Have you ever had a blood pressure problem before?</td>
                            <td>{{ $parq->tension }}</td>
                        </tbody>
                        <tbody>
                            <td>Have you ever had a cardiovascular (heart disease, vascular disease etc.) condition before?</td>
                            <td>{{ $parq->cardiovascular }}</td>
                        </tbody>
                        <tbody>
                            <td>Have you felt pain in your chest while walking or climbing stairs in the past month?</td>
                            <td>{{ $parq->chest_pain }}</td>
                        </tbody>
                        <tbody>
                            <td>Have you ever had a spinal cord (hernia, slipped disc, scoliosis etc.) disorder?</td>
                            <td>{{ $parq->spinal_cord_discomfort }}</td>
                        </tbody>
                        <tbody>
                            <td>Have you ever had an anatomical disorder (fracture,fiber breakage etc.) before?</td>
                            <td>{{ $parq->anatomical_discomfort }}</td>
                        </tbody>
                        <tbody>
                            <td>Have you ever had a surgical intervention (surgery etc.) before?</td>
                            <td>{{ $parq->operation }}</td>
                        </tbody>
                        <tbody>
                            <td>Do you have type 1 or type 2 diabetes?</td>
                            <td>{{ $parq->diabetes }}</td>
                        </tbody>
                        <tbody>
                            <td>Do you have a medication that you use regularly?</td>
                            <td>{{ $parq->medicine }}</td>
                        </tbody>
                        <tbody>
                            <td>Do you have a supplement (vitamins, protein powders etc.) that you use regularly?</td>
                            <td>{{ $parq->supplements }}</td>
                        </tbody>
                        <tbody>
                            <td>Do you smoke?</td>
                            <td>{{ $parq->smoke }}</td>
                        </tbody>
                        <tbody>
                            <td>Do you have an addiction to drugs, alcohol etc.? If yes, have you had any treatment related to them?</td>
                            <td>{{ $parq->addiction }}</td>
                        </tbody>
                        <tbody>
                            <td>Do you have any food sensitivities or allergies?</td>
                            <td>{{ $parq->allergy }}</td>
                        </tbody>
                        @else
                        <tbody>
                            <td colspan="2">No data found</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>

        @if(isset($parq))
        @if(isset($general))

        <!-- GENERAL START -->
        <div class="card shadow-sm my-2">
            <div class="card-header">
                <h3 class="card-title">General İnformations</h3>
                <div class="card-toolbar">
                    <a href="{{route('users.generals.index',['user' => $user->id])}}" class="btn btn-primary mx-2"><span class="svg-icon svg-icon-1">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                            <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                            <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                        </svg>
                    </span>See All
                </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive align-middle text-center">
                    <table class="table table-bordered">
                        @if(isset($general))
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Weight</th>
                                <th>Height</th>
                                <th>Gender</th>
                                <th>Job</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{ $general->weight }}</td>
                            <td>{{ $general->height }}</td>
                            <td>{{ $general->gender }}</td>
                            <td>{{ $general->job }}</td>
                        </tbody>
                        @else
                        <tbody>
                            <td colspan="2">No data found</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <!-- GENERAL END -->

        @endif

        <!-- BODYFAT START -->
        <div class="card shadow-sm my-2">
            <div class="card-header">
                <h3 class="card-title">Bodyfats</h3>
                <div class="card-toolbar">
                    <a href="{{route('users.bodyfats.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                        <span class="svg-icon svg-icon-1">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                            </svg>
                        </span>See All
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive align-middle text-center">
                    <table class="table table-bordered">
                        @if($user->bodyfats->count() > 0)
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Physical Fitness Unit</th>
                                <th>Result</th>
                                <th>Score</th>
                                <th>Physical Condition</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>Anthropometric</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tbody>
                        @else
                        <tbody>
                            <td colspan="6">No data found</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <!-- BODYFAT END -->

        <!-- BLOOD PRESSURE START -->
        <div class="card shadow-sm my-2">
            <div class="card-header">
                <h3 class="card-title">Bloodpressures</h3>
                <div class="card-toolbar">
                    <a href="{{route('users.bloodpressures.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                        <span class="svg-icon svg-icon-1">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                            </svg>
                        </span>See All
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive align-middle text-center">
                    <table class="table table-bordered">
                        @if($user->bloodpressures->count() > 0)
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Physical Fitness Unit</th>
                                <th>Result</th>
                                <th>Score</th>
                                <th>Physical Condition</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>Systolic</td>
                            <td>
                                @if(!empty($user->bloodpressures->last()))
                                {{ $user->bloodpressures->last()->systolic }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->bloodpressures->last()))
                                {{ $user->bloodpressures->last()->systolic_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Diastolic</td>
                            <td>
                                @if(!empty($user->bloodpressures->last()))
                                {{ $user->bloodpressures->last()->diastolic }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->bloodpressures->last()))
                                {{ $user->bloodpressures->last()->diastolic_score }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->bloodpressures->last()))
                                {{ $user->bloodpressures->last()->score }}
                                @endif
                            </td>
                        </tbody>
                        @else
                        <tbody>
                            <td colspan="6">No data found</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <!-- BLOOD PRESSURE END -->

        <!-- FASTING BLOOD SUGAR START -->
        <div class="card shadow-sm my-2">
            <div class="card-header">
                <h3 class="card-title">Fasting blood sugars</h3>
                <div class="card-toolbar">
                    <a href="{{route('users.fastingbloodsugars.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                        <span class="svg-icon svg-icon-1">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                            </svg>
                        </span>See All
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive align-middle text-center">
                    <table class="table table-bordered">
                        @if($user->fastingbloodsugars->count() > 0)
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Physical Fitness Unit</th>
                                <th>Result</th>
                                <th>Score</th>
                                <th>Physical Condition</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>Glucose</td>
                            <td>
                                @if(!empty($user->fastingbloodsugars->last()))
                                {{ $user->fastingbloodsugars->last()->glucose }}
                                @endif
                            </td>
                            <td></td>
                            <td>
                                @if(!empty($user->fastingbloodsugars->last()))
                                {{ $user->fastingbloodsugars->last()->score }}
                                @endif
                            </td>
                        </tbody>
                        @else
                        <tbody>
                            <td colspan="6">No data found</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <!-- FASTING BLOOD SUGAR END -->

        <!-- LUNG CAPACITIES START -->
        <div class="card shadow-sm my-2">
            <div class="card-header">
                <h3 class="card-title">Lung capacities</h3>
                <div class="card-toolbar">
                    <a href="{{route('users.lungcapacities.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                        <span class="svg-icon svg-icon-1">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                            </svg>
                        </span>See All
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive align-middle text-center">
                    <table class="table table-bordered">
                        @if($user->lungcapacities->count() > 0)
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Physical Fitness Unit</th>
                                <th>Result</th>
                                <th>Score</th>
                                <th>Physical Condition</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>FEV</td>
                            <td>
                                @if(!empty($user->lungcapacities->last()))
                                {{ $user->lungcapacities->last()->fev }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->lungcapacities->last()))
                                {{ $user->lungcapacities->last()->fev_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>FEV1</td>
                            <td>
                                @if(!empty($user->lungcapacities->last()))
                                {{ $user->lungcapacities->last()->fev1 }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->lungcapacities->last()))
                                {{ $user->lungcapacities->last()->fev1_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>PEF</td>
                            <td>
                                @if(!empty($user->lungcapacities->last()))
                                {{ $user->lungcapacities->last()->pef }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->lungcapacities->last()))
                                {{ $user->lungcapacities->last()->pef_score }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->lungcapacities->last()))
                                {{ $user->lungcapacities->last()->score }}
                                @endif
                            </td>
                        </tbody>
                        @else
                        <tbody>
                            <td colspan="6">No data found</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <!-- LUNG CAPACITIES END -->

        <!-- Mobility Start -->
        <div class="card my-4">
            <div class="card-header">
                <h3 class="card-title">Mobility</h3>
                <div class="card-toolbar">
                    <a href="{{route('users.mobilities.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                        <span class="svg-icon svg-icon-1">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                            </svg>
                        </span>See All
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive px-4">
                    <table class="table table-bordered align-middle text-center">
                        @if($user->mobilities->count() > 0)
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Physical Fitness Unit</th>
                                <th>Result</th>
                                <th>Score</th>
                                <th>Physical Condition</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>Overhead Squat</td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->overhead_squat }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->overhead_squat_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Shoulder Mobility</td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->shoulder_mobility }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->shoulder_mobility_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Hurdle Step</td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->hurdle_step }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->hurdle_step_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>In Line Lunge</td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->in_line_lunge }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->in_line_lunge_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Active Straight Leg Raise</td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->active_straight_leg_raise }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->active_straight_leg_raise_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Trunk Stability Push-up</td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->trunk_stability_push_up }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->trunk_stability_push_up_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Rotary Stability</td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->rotary_stability }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->rotary_stability_score }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->mobilities->last()))
                                {{ $user->mobilities->last()->score }}
                                @endif
                            </td>
                        </tbody>
                        @else
                        <tbody>
                            <td colspan="6">No data found</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <!-- Mobility End -->

        <!-- Strength Start -->
        <div class="card my-4">
            <div class="card-header">
                <h3 class="card-title">Strength</h3>
                <div class="card-toolbar">
                    <a href="{{route('users.strengths.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                        <span class="svg-icon svg-icon-1">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                            </svg>
                        </span>See All
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive px-4">
                    <table class="table table-bordered align-middle text-center">
                        @if($user->strengths->count() > 0)
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th><b>Physical Fitness Unit</b></th>
                                <th><b>Result</b></th>
                                <th><b>Score</b></th>
                                <th><b>Physical Condition</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>Claw Grip Strength, Right Hand</td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->claw_grip_strength_right_hand }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->claw_grip_strength_right_hand_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Claw Grip Strength, Left Hand</td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->claw_grip_strength_left_hand }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->claw_grip_strength_left_hand_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Push-up Test</td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->push_up_test }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->push_up_test_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Wall Squat</td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->wall_squat }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->wall_squat_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Sit-up Test</td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->sit_up_test }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->sit_up_test_score }}
                                @endif
                            </td>
                            <td></td>
                        </tbody>
                        <tbody>
                            <td>Plank Test</td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->plank_test }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->plank_test_score }}
                                @endif
                            </td>
                            <td>
                                @if(!empty($user->strengths->last()))
                                {{ $user->strengths->last()->score }}
                                @endif
                            </td>
                        </tbody>
                        @else
                        <tbody>
                            <td colspan="6">No data found</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <!-- Strength End -->

        <!-- MAXVO2 START -->
        <div class="card shadow-sm my-2">
            <div class="card-header">
                <h3 class="card-title">Max vo2 entries</h3>
                <div class="card-toolbar">
                    <a href="{{route('users.maxvo2s.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                        <span class="svg-icon svg-icon-1">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                            </svg>
                        </span>See All
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive align-middle text-center">
                    <table class="table table-bordered">
                        @if($user->maxvo2s->count() > 0)
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>Physical Fitness Unit</th>
                                <th>Result</th>
                                <th>Score</th>
                                <th>Physical Condition</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>Max-vo2</td>
                            <td>
                                @if(!empty($user->maxvo2s->last()))
                                {{ $user->maxvo2s->last()->max_vo2 }}
                                @endif
                            </td>
                            <td></td>
                            <td>
                                @if(!empty($user->maxvo2s->last()))
                                {{ $user->maxvo2s->last()->score }}
                                @endif
                            </td>
                        </tbody>
                        @else
                        <tbody>
                            <td colspan="6">No data found</td>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <!-- MAXVO2 END -->


        <!-- Others Start -->
        <div class="card my-4">
            <div class="table-responsive px-4">
                <table class="table table-bordered align-middle text-center">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th>Test Name</th>
                            <th>Physical Fitness Unit</th>
                            <th>Result</th>
                            <th>Score</th>
                            <th>Physical Condition</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td><b>Flexibility</b></td>
                        <td>Flexibility</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-icon btn-primary">
                                <span class="svg-icon svg-icon-1">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                                    </svg>
                                </span>
                            </a>
                        </td>
                    </tbody>
                    <tbody>
                        <td><b>PHSICAL PERFORMANCE SCORE</b></td>
                        <td>AVARAGE</td>
                        <td></td>
                        <td></td>
                        <td>@if(!empty($user->generals->last())){{ $user->generals->last()->physical_performance_score }}@endif</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-primary">
                                <span class="svg-icon svg-icon-1">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                                    </svg>
                                </span>
                            </a>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Others End -->

        @endif
    
    </div>

</div>

@endsection
