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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__('General İnformations')}}
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
            <div class="col-md-5">
                <h2>{{ __('user_general', ['name' => $user['name']]) }}</h2>
            </div>
            <div class="col-md-7 d-flex justify-content-end pr-4">
                <a href="{{route('users.generals.create',['user' => $user->id])}}" class="btn btn-primary mx-2">{{__('Create new general information')}}</a>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive px-4">
                <table class="table table-bordered">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th>{{__('Weight')}}</th>
                            <th>{{__('Height')}}</th>
                            <th>{{__('Gender')}}</th>
                            <th>{{__('Job')}}</th>
                            <th>{{__('Actions')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($generals as $general)
                        <tr>
                            <td>{{ $general->weight }}</td>
                            <td>{{ $general->height }}</td>
                            <td>{{ $general->gender }}</td>
                            <td>{{ $general->job }}</td>
                            <td style="width: 30%">
                                <a href="{{route('users.generals.edit',['user' => $user->id , 'general' => $general->id])}}" class="btn btn-primary">
                                    {{__('Edit')}}
                                </a>
                                <form action="{{route('users.generals.destroy',['user' => $user->id , 'general' => $general->id])}}" style="display: inline-block;" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{__('Delete')}}</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>

@endsection
