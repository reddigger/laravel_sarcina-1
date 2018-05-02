@extends('layouts.main_layout')

@section('content')

<div class="col-md-8">
<table class="table table-striped table-dark table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Denumire</th>
      <th scope="col">Tara</th>
      <th scope="col">Populatia</th>
    </tr>
  </thead>
  <tbody>
@foreach ($cities as $city)
    <tr>
      <th scope="row">1</th>
      <td>{{ $city->name }}</td>
      <td>{{ $city->country_name }}</td>
      <td>{{ $city->population }}</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>

@endsection