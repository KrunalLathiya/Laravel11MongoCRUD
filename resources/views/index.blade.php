@extends('layout')

@section('content')
    <h2>Car Listing</h2>
    <a href="{{route('cars.create')}}" class="btn btn-success">Add Car</a></td>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div>
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Company</th>
        <th>Model</th>
        <th>Price</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($cars as $car)
      <tr>
        <td>{{$car->id}}</td>
        <td>{{$car->carcompany}}</td>
        <td>{{$car->model}}</td>
        <td>{{$car->price}}</td>
        <td><a href="{{route('cars.edit', $car->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{route('cars.destroy', $car->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection