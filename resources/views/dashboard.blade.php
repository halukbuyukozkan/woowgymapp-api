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
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard
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
                <canvas id="bodyfats"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="card shadow-sm col-md-7 m-4">
                <div class="card-header">
                    <h3 class="card-title">Registered Users</h3>
                    <div class="card-toolbar">
                        <a href="{{ route('users.index') }}" type="button" class="btn btn-sm btn-light">
                            Users
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

{{--  <script>

var dates= @json($dates);
var counts= @json($counts);

const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar',
    data: {
    labels: dates,
    datasets: [{
        label: 'Users',
        data: counts,
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

<script>

    var bodyfatrates= @json($bodyfatrates);
    var bodyfatdates= @json($bodyfatdates);

    const ctx3 = document.getElementById('bodyfats');

    new Chart(ctx3, {
        type: 'line',
        data: {
        labels: bodyfatdates,
        datasets: [{
            label: 'Bodyfats',
            data: bodyfatrates,
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

<script>
    const ctx2 = document.getElementById('myChart2');

    new Chart(ctx2, {
        type: 'polarArea',
        data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'My First Dataset',
            data: [11, 16, 7, 3, 14],
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

</script>  --}}


@endsection
