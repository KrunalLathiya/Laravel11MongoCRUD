@extends('layout')

@section('content')
<h2>Create Car Details</h2>
<form method="post" action="{{ route('cars.store') }}">
    @csrf
    <div class="mb-3 row justify-content-center">
        <div class="col-md-4">
            <label for="Carcompany" class="form-label">Car Company:</label>
            <input type="text" class="form-control" name="carcompany" id="Carcompany">
        </div>
    </div>
    <div class="mb-3 row justify-content-center">
        <div class="col-md-4">
            <label for="Model" class="form-label">Model:</label>
            <input type="text" class="form-control" name="model" id="Model">
        </div>
    </div>
    <div class="mb-3 row justify-content-center">
        <div class="col-md-4">
            <label for="Price" class="form-label">Price:</label>
            <input type="text" class="form-control" name="price" id="Price">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 text-center">
            <button type="submit" class="btn btn-info">Add Car</button>
        </div>
    </div>
</form>
@endsection
