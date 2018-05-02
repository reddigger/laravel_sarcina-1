@extends('layouts.main_layout')

@section('content')

<div class="col-md-8">
<table class="table table-striped table-dark table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codul</th>
      <th scope="col">Denumirea</th>
      <th scope="col">Populatia</th>
      <th scope="col">Capitala</th>
    </tr>
  </thead>
  <tbody>
@foreach ($countries as $country)
    <tr>
      <th scope="row">1</th>
      <td>{{ $country->code }}</td>
      <td>{{ $country->name }}</td>
      <td>{{ $country->population }}</td>
      <td>{{ $country->capital }}</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>

@endsection