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
                <h2>{{$user['name']}}s details</h2>
            </div>
            @if($parq == null)
            <div class="col-md-9 d-flex justify-content-end pr-4">
                <a href="{{route('users.parqs.create',['user' => $user->id])}}" class="btn btn-primary">Create a new Par-q Test</a>
            </div>
            @else
            <div class="col-md-9 d-flex justify-content-end pr-4">
                <a href="{{route('users.parqs.edit',['user' => $user->id , 'parq' => $parq->id])}}" class="btn btn-primary">Update Par-q Test</a>
            </div>
            @endif
        </div>
        <div class="card">
            <div class="table-responsive px-4">
                <table class="table table-bordered">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th>Questions</th>
                            <th>Answers</th>
                        </tr>
                    </thead>
                    @if(isset($parq))
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
        </div><br><br>

        <!-- GENERAL START -->
        <div class="row mb-3">
            <div class="col-md-3">
                <h3>General İnformations</h3>
            </div>
            <div class="col-md-9 d-flex justify-content-end pr-4">
                <a href="{{route('users.generals.index',['user' => $user->id])}}" class="btn btn-primary mx-2">See All</a>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive px-4">
                <table class="table table-bordered">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th>Weight</th>
                            <th>Height</th>
                            <th>Gender</th>
                            <th>Job</th>
                        </tr>
                    </thead>
                    @if(isset($general))
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
        </div><br><br>
        <!-- GENERAL END -->

        <div class="card">
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
                        <td><b>Bodyfat Percentage</b></td>
                        <td>Anthropometric</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{route('users.bodyfat.index',['user' => $user->id])}}" class="btn btn-icon btn-primary">
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
                        <td><b>Blood Pressure</b></td>
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
                        <td>
                            <a href="{{route('users.bloodpressure.index',['user'=> $user->id])}}" class="btn btn-icon btn-primary">
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
                        <td><b>Blood Pressure</b></td>
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
                        <td>
                            <a href="{{route('users.bloodpressure.index',['user'=> $user->id])}}" class="btn btn-icon btn-primary">
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
                        <td><b>Fasting Blood Sugar</b></td>
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
                        <td>
                            <a href="{{route('users.fastingbloodsugar.index',['user'=> $user->id])}}" class="btn btn-icon btn-primary">
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
                        <td><b>Lung Capacities</b></td>
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
                        <td>
                            <a href="{{route('users.lungcapacities.index',['user'=> $user->id])}}" class="btn btn-icon btn-primary">
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
                        <td><b>Lung Capacities</b></td>
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
                        <td><b>Lung Capacities</b></td>
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
                        <td><b>Overhead Squat</b></td>
                        <td>Mobility</td>
                        <td>
                            @if(!empty($user->mobilities->last()))
                            {{ $user->mobilities->last()->overhead_squat }}
                            @endif
                        </td>
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
                        <td><b>Shoulder Mobility</b></td>
                        <td>Mobility</td>
                        <td>
                            @if(!empty($user->mobilities->last()))
                            {{ $user->mobilities->last()->shoulder_mobility }}
                            @endif
                        </td>
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
                        <td><b>Hurdle Step</b></td>
                        <td>Mobility</td>
                        <td>
                            @if(!empty($user->mobilities->last()))
                            {{ $user->mobilities->last()->hurdle_step }}
                            @endif
                        </td>
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
                        <td><b>In Line Lunge</b></td>
                        <td>Mobility</td>
                        <td>
                            @if(!empty($user->mobilities->last()))
                            {{ $user->mobilities->last()->in_line_lunge }}
                            @endif
                        </td>
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
                        <td><b>Active Straight Leg Raise</b></td>
                        <td>Mobility</td>
                        <td>
                            @if(!empty($user->mobilities->last()))
                            {{ $user->mobilities->last()->active_straight_leg_raise }}
                            @endif
                        </td>
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
                        <td><b>Trunk Stability Push-up</b></td>
                        <td>Mobility</td>
                        <td>
                            @if(!empty($user->mobilities->last()))
                            {{ $user->mobilities->last()->trunk_stability_push_up }}
                            @endif
                        </td>
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
                        <td><b>Rotary Stability</b></td>
                        <td>Mobility</td>
                        <td>
                            @if(!empty($user->mobilities->last()))
                            {{ $user->mobilities->last()->rotary_stability }}
                            @endif
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{ route('users.mobilities.create',['user'=> $user->id]) }}" class="btn btn-icon btn-primary">
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
                        <td><b>Claw Grip Strength, Right Hand</b></td>
                        <td>Upper extremity Muscle Strength</td>
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
                        <td><b>Claw Grip Strength, Left Hand</b></td>
                        <td>Upper extremity Muscle Strength</td>
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
                        <td><b>Push-up Test</b></td>
                        <td>Upper extremity Muscle Strength</td>
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
                        <td><b>Wall Squat</b></td>
                        <td>Lower extremity Muscle Strength</td>
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
                        <td><b>Sit-up Test</b></td>
                        <td>Core Region Strength</td>
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
                        <td><b>Plank Test</b></td>
                        <td>Core Region Strength</td>
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
                        <td><b>MAX-VO2</b></td>
                        <td>Cardiovascular Capacity</td>
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
                        <td>{{ $user->generals->last()->physical_performance_score }}</td>
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
    </div>



</div>

@endsection
