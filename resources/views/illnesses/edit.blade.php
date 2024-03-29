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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{ __('Illness') }}
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
                    <h2>{{ __('Edit Illness') }}</h2>
                </div>
            </div>
            <div class="card">
                <form action="{{ route('illnesses.update', $illness) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-4">
                        <div class="mb-3">
                            <label for="illness" class="form-label">{{ __('Enter illness name:') }}</label>
                            <input type="text" class="form-control" id="illness" name="name"
                                value="{{ old('name', $illness->name) }}" required>
                        </div><br>
                        <div class="mb-3">
                            <select class="form-select" data-control="select2" data-placeholder="Hastalık tipi seçiniz"
                                name="illness_type_id">
                                <option value="">{{ __('Select Illness Type') }}</option>
                                @foreach ($illnessTypes as $illnessType)
                                    <option value="{{ $illnessType->id }}"
                                        @if (old('illness_type_id', $illness->illness_type_id) == $illnessType->id) selected @endif>{{ __($illnessType->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">{{ __('Create') }}</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
