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
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__('Dashboard')}}
				<!--begin::Separator-->
				<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
				<!--end::Separator-->
				<!--begin::Description-->
				<small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small>
				<!--end::Description--></h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
    <div class="container">
        <div class="row">
            <div class="card shadow-sm col-md-4 m-4">
                <canvas id="myChart2"></canvas>
            </div>
            <div class="card shadow-sm col-md-7 m-4">
                <canvas id="strengths"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="card shadow-sm col-md-7 m-4">
                <div class="card-header">
                    <h3 class="card-title">{{__('lungcapacities')}}</h3>
                    <div class="card-toolbar">
                        <a href="{{ route('users.lungcapacities.index',$user) }}" type="button" class="btn btn-sm btn-light">
                            {{__('See all')}}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

var dates= @json($lungCapacityDates);
var fev1= @json($user->lungcapacities->pluck('fev1')->toArray());
var fev = @json($user->lungcapacities->pluck('fev')->toArray());
var pef = @json($user->lungcapacities->pluck('pef')->toArray());

const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar',
    data: {
    labels: dates,
    datasets: [{
        label: 'Fev1',
        data: fev1,
        borderWidth: 1
    },
    {
        label: 'Fev',
        data: fev,
        borderWidth: 1
    },
    {
        label: 'Pef',
        data: pef,
        borderWidth: 1
    }]
    },
    options: {
    scales: {
        y: {
        beginAtZero: true
        }
    }
    }
});
</script>

<!-- STRENGTH START -->
<script>
    var dates= @json($strengthDates);
    var claw_grip_strength_right_hand= @json($user->strengths->pluck('claw_grip_strength_right_hand')->toArray());
    var claw_grip_strength_left_hand= @json($user->strengths->pluck('claw_grip_strength_left_hand')->toArray());
    var push_up_tests = @json($user->strengths->pluck('push_up_test')->toArray());
    var wall_squat = @json($user->strengths->pluck('wall_squat')->toArray());

    console.log(claw_grip_strength_right_hand);

    const ctx3 = document.getElementById('strengths');

    new Chart(ctx3, {
        type: 'line',
        data: {
        labels: dates,
        datasets: [{
            label: 'Claw grip strength right hand',
            data: claw_grip_strength_right_hand,
            borderWidth: 1
        },
        {
            label: 'Claw grip strength left hand',
            data: claw_grip_strength_left_hand,
            borderWidth: 1
        },
        {
            label: 'Push up test',
            data: push_up_tests,
            borderWidth: 1
        },
        {
            label: 'Wall squat',
            data: wall_squat,
            borderWidth: 1
        }
        ]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });
</script>
<!-- STRENGTH END -->

<script>
    var bloodPressure= @json($user->bloodpressures->last()->score ??null);
    var fastingBloodSugar = @json($user->fastingbloodsugars->last()->score ??null);
    var lungcapacities = @json($user->lungcapacities->last()->score ??null);
    var strength = @json($user->strengths->last()->score ??null);
    var maxvo2 = @json($user->maxvo2s->last()->score ??null);
    const ctx2 = document.getElementById('myChart2'??null);

    new Chart(ctx2, {
        type: 'polarArea',
        data: {
        labels: ['Blood Pressure', 'Fasting Blood Sugar', 'Lung Capacity', 'Strength', 'Max-VO2'],
        datasets: [{
            label: 'My First Dataset',
            data: [bloodPressure, fastingBloodSugar, lungcapacities, strength, maxvo2],
            backgroundColor: [
              'rgb(255, 99, 132)',
              'rgb(75, 192, 192)',
              'rgb(255, 205, 86)',
              'rgb(201, 203, 207)',
              'rgb(54, 162, 235)'
            ]
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });

</script>


@endsection
