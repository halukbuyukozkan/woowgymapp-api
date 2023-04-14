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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__('Details')}}
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
        @if($general != null)
        <!-- Tabs start  -->
        <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#parq">{{ __('Parq')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#bodyfats">{{ __('Bodyfats') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#bloodpressures">{{ __('Bloodpressures')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#bloodsugars">{{ __('Fasting blood sugars')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#lungcapacities">{{ __('Lung capacities')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#mobility">{{ __('Mobility')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#strength">{{ __('Strength')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#maxvo2">{{ __('Max-VO2')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#flexibility">{{ __('Flexibility')}}</a>
            </li>
        </ul>
        <!-- Tabs end  -->
        @endif
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="parq" role="tabpanel">
                <!-- PARQ START -->
                @if($general != null)
                <div class="card shadow-sm my-2">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('user_details', ['name' => $user['name']]) }}</h3>
                        <div class="card-toolbar">
                            @if($parq == null)
                            <a href="{{route('users.parqs.create',['user' => $user->id])}}" class="btn btn-primary">{{__('Create a new Par-q Test')}}</a>
                            @else
                            <a href="{{route('users.parqs.edit',['user' => $user->id , 'parq' => $parq->id])}}" class="btn btn-primary">{{__('Update Par-q Test')}}</a>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive align-middle text-center">
                            <table class="table table-bordered">
                                @if(isset($parq))
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>{{__('Questions')}}</th>
                                        <th>{{__('Answers')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>{{__('Do you have a chronic illness?')}}?</td>
                                    <td>{{ $parq->chronic_illness }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Have you ever had a blood pressure problem before?')}}</td>
                                    <td>{{ $parq->tension }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Have you ever had a cardiovascular (heart disease, vascular disease etc.) condition before?')}}</td>
                                    <td>{{ $parq->cardiovascular }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Have you felt pain in your chest while walking or climbing stairs in the past month?')}}</td>
                                    <td>{{ $parq->chest_pain }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Have you ever had a spinal cord (hernia, slipped disc, scoliosis etc.) disorder?')}}</td>
                                    <td>{{ $parq->spinal_cord_discomfort }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Have you ever had an anatomical disorder (fracture,fiber breakage etc.) before?')}}</td>
                                    <td>{{ $parq->anatomical_discomfort }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Have you ever had a surgical intervention (surgery etc.) before?')}}</td>
                                    <td>{{ $parq->operation }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Do you have type 1 or type 2 diabetes?')}}</td>
                                    <td>{{ $parq->diabetes }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Do you have a medication that you use regularly?')}}</td>
                                    <td>{{ $parq->medicine }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Do you have a supplement (vitamins, protein powders etc.) that you use regularly?')}}</td>
                                    <td>{{ $parq->supplements }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Do you smoke?')}}</td>
                                    <td>{{ $parq->smoke }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Do you have an addiction to drugs, alcohol etc.? If yes, have you had any treatment related to them?')}}</td>
                                    <td>{{ $parq->addiction }}</td>
                                </tbody>
                                <tbody>
                                    <td>{{__('Do you have any food sensitivities or allergies?')}}</td>
                                    <td>{{ $parq->allergy }}</td>
                                </tbody>
                                @else
                                <tbody>
                                    <td colspan="2">{{__('No data found')}}</td>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                @endif
                <!-- PARQ END -->
                <!-- GENERAL START -->
                <div class="card shadow-sm my-2">
                    <div class="card-header">
                        <h3 class="card-title">{{__('General İnformations')}}</h3>
                        <div class="card-toolbar">
                            @if($general != null)
                            <a href="{{route('users.generals.index',['user' => $user->id])}}" class="btn btn-primary mx-2"><span class="svg-icon svg-icon-1">
                            {{ __('See All') }}
                            </a>
                            @else
                            <a href="{{route('users.generals.create',['user' => $user->id])}}" class="btn btn-primary mx-2"><span class="svg-icon svg-icon-1">
                            {{ __('Create a new General Information') }}
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive align-middle text-center">
                            <table class="table table-bordered">
                                @if(isset($general))
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>{{__('Weight')}}</th>
                                        <th>{{__('Height')}}</th>
                                        <th>{{__('Gender')}}</th>
                                        <th>{{__('Job')}}</th>
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
                                    <td colspan="2">{{__('No data found')}}</td>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <!-- GENERAL END -->
                <!-- SCORE Start -->
                @if($general != null)
                @if($general->physical_performance_score != null)
                <div class="card my-4">
                    <div class="table-responsive px-4">
                        <table class="table table-bordered align-middle text-center">
                            <thead>
                                <th></th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <td style="width: 40%"><b>{{ __('PHSICAL PERFORMANCE SCORE') }}</b></td>
                                <td style="width: 20%">{{ __('AVARAGE') }}</td>
                                <td>@if($general != null){{ $general->physical_performance_score }}@endif</td>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
                @endif
                <!-- SCORE End -->
            </div>

            <div class="tab-pane fade" id="bodyfats" role="tabpanel">
                <!-- BODYFAT START -->
                <div class="card shadow-sm my-2">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Bodyfats')}}</h3>
                        <div class="card-toolbar">
                            <a href="{{route('users.bodyfats.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                                <span class="svg-icon svg-icon-1">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                                    </svg>
                                </span>{{__('See All')}}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive align-middle text-center">
                            <table class="table table-bordered">
                                @if($user->bodyfats->count() > 0)
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>{{__('Physical Fitness Unit')}}</th>
                                        <th>{{__('Result')}}</th>
                                        <th>{{__('Score')}}</th>
                                        <th>{{__('Physical Condition')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>{{__('Anthropometric')}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tbody>
                                @else
                                <tbody>
                                    <td colspan="6">{{__('No data found')}}</td>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <!-- BODYFAT END -->
            </div>

            <div class="tab-pane fade" id="bloodpressures" role="tabpanel">
                <!-- BLOOD PRESSURE START -->
                <div class="card shadow-sm my-2">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Bloodpressures')}}</h3>
                        <div class="card-toolbar">
                            <a href="{{route('users.bloodpressures.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                                <span class="svg-icon svg-icon-1">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                                    </svg>
                                </span>{{__('See All')}}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive align-middle text-center">
                            <table class="table table-bordered">
                                @if($user->bloodpressures->count() > 0)
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>{{__('Physical Fitness Unit')}}</th>
                                        <th>{{__('Result')}}</th>
                                        <th>{{__('Score')}}</th>
                                        <th>{{__('Physical Condition')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>{{__('Systolic')}}</td>
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
                                    <td>{{__('Diastolic')}}</td>
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
                                    <td colspan="6">{{__('No data found')}}</td>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <!-- BLOOD PRESSURE END -->
            </div>

            <div class="tab-pane fade" id="bloodsugars" role="tabpanel">
                <!-- FASTING BLOOD SUGAR START -->
                <div class="card shadow-sm my-2">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Fasting blood sugars')}}</h3>
                        <div class="card-toolbar">
                            <a href="{{route('users.fastingbloodsugars.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                                <span class="svg-icon svg-icon-1">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                                    </svg>
                                </span>{{__('See All')}}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive align-middle text-center">
                            <table class="table table-bordered">
                                @if($user->fastingbloodsugars->count() > 0)
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>{{__('Physical Fitness Unit')}}</th>
                                        <th>{{__('Result')}}</th>
                                        <th>{{__('Score')}}</th>
                                        <th>{{__('Physical Condition')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>{{__('Glucose')}}</td>
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
                                    <td colspan="6">{{__('No data found')}}</td>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <!-- FASTING BLOOD SUGAR END -->
            </div>

            <div class="tab-pane fade" id="lungcapacities" role="tabpanel">
                <!-- LUNG CAPACITIES START -->
                <div class="card shadow-sm my-2">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Lung capacities')}}</h3>
                        <div class="card-toolbar">
                            <a href="{{route('users.lungcapacities.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                                <span class="svg-icon svg-icon-1">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                                    </svg>
                                </span>{{__('See All')}}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive align-middle text-center">
                            <table class="table table-bordered">
                                @if($user->lungcapacities->count() > 0)
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>{{__('Physical Fitness Unit')}}</th>
                                        <th>{{__('Result')}}</th>
                                        <th>{{__('Score')}}</th>
                                        <th>{{__('Physical Condition')}}</th>
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
                                    <td colspan="6">{{__('No data found')}}</td>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <!-- LUNG CAPACITIES END -->
            </div>

            <div class="tab-pane fade" id="mobility" role="tabpanel">
                <!-- Mobility Start -->
                <div class="card my-4">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Mobility')}}</h3>
                        <div class="card-toolbar">
                            <a href="{{route('users.mobilities.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                                <span class="svg-icon svg-icon-1">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                                    </svg>
                                </span>{{__('See All')}}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive px-4">
                            <table class="table table-bordered align-middle text-center">
                                @if($user->mobilities->count() > 0)
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>{{__('Physical Fitness Unit')}}</th>
                                        <th>{{__('Result')}}</th>
                                        <th>{{__('Score')}}</th>
                                        <th>{{__('Physical Condition')}}</th>
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
                                    <td>{{__('Shoulder Mobility')}}</td>
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
                                    <td colspan="6">{{__('No data found')}}</td>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Mobility End -->
            </div>

            <div class="tab-pane fade" id="strength" role="tabpanel">
                <!-- Strength Start -->
                <div class="card my-4">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Strength')}}</h3>
                        <div class="card-toolbar">
                            <a href="{{route('users.strengths.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                                <span class="svg-icon svg-icon-1">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                                    </svg>
                                </span>{{__('See All')}}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive px-4">
                            <table class="table table-bordered align-middle text-center">
                                @if($user->strengths->count() > 0)
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th><b>{{__('Physical Fitness Unit')}}</b></th>
                                        <th><b>{{__('Result')}}</b></th>
                                        <th><b>Score</b></th>
                                        <th><b>{{__('Physical Condition')}}</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>{{__('Claw Grip Strength, Right Hand')}}</td>
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
                                    <td>{{__('Claw Grip Strength, Left Hand')}}</td>
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
                                    <td colspan="6">{{__('No data found')}}</td>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Strength End -->
            </div>

            <div class="tab-pane fade" id="maxvo2" role="tabpanel">
                <!-- MAXVO2 START -->
                <div class="card shadow-sm my-2">
                    <div class="card-header">
                        <h3 class="card-title">Max-VO2</h3>
                        <div class="card-toolbar">
                            <a href="{{route('users.maxvo2s.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                                <span class="svg-icon svg-icon-1">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                                    </svg>
                                </span>{{__('See All')}}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive align-middle text-center">
                            <table class="table table-bordered">
                                @if($user->maxvo2s->count() > 0)
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>{{__('Physical Fitness Unit')}}</th>
                                        <th>{{__('Result')}}</th>
                                        <th>{{__('Score')}}</th>
                                        <th>{{__('Physical Condition')}}</th>
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
                                    <td colspan="6">{{__('No data found')}}</td>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <!-- MAXVO2 END -->
            </div>

            <div class="tab-pane fade" id="flexibility" role="tabpanel">
                <!-- FLEXİBİLİTY START -->
                <div class="card shadow-sm my-2">
                    <div class="card-header">
                        <h3 class="card-title">{{__('Flexibility')}}</h3>
                        <div class="card-toolbar">
                            <a href="{{route('users.flexibilities.index',['user' => $user->id])}}" class="btn btn-primary mx-2">
                                <span class="svg-icon svg-icon-1">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"/>
                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor"/>
                                    </svg>
                                </span>{{__('See All')}}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive align-middle text-center">
                            <table class="table table-bordered">
                                @if($user->flexibilities->count() > 0)
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th>{{__('Physical Fitness Unit')}}</th>
                                        <th>{{__('Result')}}</th>
                                        <th>{{__('Score')}}</th>
                                        <th>{{__('Physical Condition')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>{{__('Flexibility')}}</td>
                                    <td>
                                        @if(!empty($user->flexibilities->last()))
                                        {{ $user->flexibilities->last()->flexibility }}
                                        @endif
                                    </td>
                                    <td></td>
                                    <td>
                                        @if(!empty($user->flexibilities->last()))
                                        {{ $user->flexibilities->last()->score }}
                                        @endif
                                    </td>
                                </tbody>
                                @else
                                <tbody>
                                    <td colspan="6">{{__('No data found')}}</td>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <!-- FLEXİBİLİTY END -->
            </div>
        </div>
        <!-- Tabs end -->

    </div>

</div>

@endsection
