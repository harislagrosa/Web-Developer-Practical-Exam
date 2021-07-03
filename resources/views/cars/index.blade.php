@extends('layouts.app')

@section('content')
<div class="container car-container">
    <h3 class="title">Paint Jobs</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">

                <div class="cars">
                    <h6 class="heading">Paint Jobs in Progress</h6>
                    <table class="table table-bordered">
                        <thead>
                            <th>Plate No.</th>
                            <th>Current Color</th>
                            <th>Target Color</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <td>{{ $car->plate_no }}</td>
                                    <td>{{ $car->current_color }}</td>
                                    <td>{{ $car->target_color }}</td>
                                    @if ($car->status == 0)
                                        <td>
                                            On going
                                            <button value="{{ $car->id }}" class="btn btn-sm btn-pink complete-status">Complete</button>
                                        </td>
                                    @else
                                        <td class="complete">Mark as Complete</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-body">

                <div class="information">
                    <table class="table">
                        <thead>
                            <th colspan="2">Shop Performance</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cars Painted</td>
                                <td>{{ $cars->where('status', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Breakdown:</td>
                            </tr>
                            <tr>
                                <td class="indent">Blue</td>
                                <td>{{ $cars->where('status', 1)->where('target_color', 'Blue')->count() }}</td>
                            </tr>
                            <tr>
                                <td class="indent">Red</td>
                                <td>{{ $cars->where('status', 1)->where('target_color', 'Red')->count() }}</td>
                            </tr>
                            <tr>
                                <td class="indent">Green</td>
                                <td>{{ $cars->where('status', 1)->where('target_color', 'Green')->count() }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-8">
            <div class="card-body">

                <div class="cars">
                    <h6 class="heading">Paint Queue</h6>
                    <table class="table table-bordered">
                        <thead>
                            <th>Plate No.</th>
                            <th>Current Color</th>
                            <th>Target Color</th>
                        </thead>
                        <tbody>
                            @foreach ($inProgress as $car)
                                <tr>
                                    <td>{{ $car->plate_no }}</td>
                                    <td>{{ $car->current_color }}</td>
                                    <td>{{ $car->target_color }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('create') }}" class="btn btn-pink">New Paint Job</a>
            </div>
        </div>
    </div>
</div>
@endsection
