@extends('layouts.app')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{ __('Illness Types') }}
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
                    <h2></h2>
                </div>
                <div class="col-md-9 d-flex justify-content-end pr-4">
                    <a href="{{ route('illnessTypes.create') }}"
                        class="btn btn-primary btn-sm">{{ __('Create a New Illness Type') }}</a>
                </div>
                <div class="card my-2">
                    <div class="table-responsive px-4">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th>{{ __('Illness Type') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            @if (isset($illnessTypes))
                                @foreach ($illnessTypes as $illnessType)
                                    <tbody>
                                        <td class="align-middle">{{ __($illnessType->name) }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('illnessTypes.edit', $illnessType) }}"
                                                    class="btn btn-primary btn-sm py-2 px-4">{{ __('Edit') }}</a>
                                                <form action="{{ route('illnessTypes.destroy', $illnessType) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm py-2 px-4 rounded-start-0">{{ __('Delete') }}</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tbody>
                                @endforeach
                            @else
                                <tbody>
                                    <td colspan="2">{{ __('No data found') }}</td>
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div><br><br>
            </div>
        </div>
    </div>

@endsection
