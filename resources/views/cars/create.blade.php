@extends('layouts.app')

@section('content')
<div class="container car-container-create">
    <h3 class="title">New Paint Jobs</h3>
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('success'))
                <div class="alert alert-success">
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif
            <div class="card-body">
                <div class="cars">
                    <img id="current" src="{{ asset('/storage/cars/default.png') }}">
                    <img height="60" width="60" class="arrow" src="{{ asset('/storage/cars/arrow.png') }}">
                    <img id="target" src="{{ asset('/storage/cars/default.png') }}">
                </div>

                <form method="POST" action="{{ route('store') }}">
                    @csrf
                    <table>
                        <thead>
                            <th style="width: 150px;">
                                <h5>Car Details</h5>
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Plate No.</td>
                                <td><input type="text" class="form-control" name="plate_no" required></td>
                            </tr>
                            <tr>
                                <td>Current Color</td>
                                <td>
                                    <select id="current_color" name="current_color" class="form-control" required>
                                        <option value=""></option>
                                        <option value="Blue">Blue</option>
                                        <option value="Red">Red</option>
                                        <option value="Green">Green</option>
                                    </select>
                                </td >
                            </tr>
                            <tr >
                                <td>Target Color</td>
                                <td>
                                    <select id="target_color" name="target_color" class="form-control" required>
                                        <option value=""></option>
                                        <option value="Blue">Blue</option>
                                        <option value="Red">Red</option>
                                        <option value="Green">Green</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('index') }}" class="btn btn-primary">Cancel</a>
                    <button class="btn btn-pink">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
