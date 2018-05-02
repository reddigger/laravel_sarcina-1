@extends('layouts.main_layout')

@section('content')
<div style="margin: 100px 0 0 200px" class="col-md-4">
<form method="post" action="{{URL::to('add-city')}}">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="examplename">Denumirea orasului:</label>
    <input type="text" class="form-control" name="name" id="examplename" aria-describedby="Nume" placeholder="Denumire">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1346">Populatia</label>
    <input type="number" name="population" class="form-control" id="exampleInputPassword1346" placeholder="Populatia">
  </div>
<div class="form-group">
  <label for="sel1">Select list:</label>
  <select name="country" class="form-control" id="sel1">
    @foreach ($countries as $country)
    <option value="{{$country->id}}">{{$country->name}}</option>
    @endforeach
  </select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script type="text/javascript">
/*	
	$("button").click(function(e){
		e.preventDefault();

		console.log();

		$data = {
			name: $('input[name=name]').val(),

		}

	    $.ajax({
	    	method: 'POST',
	    	data:'_token = <?php echo csrf_token() ?>',
	    	url: 'http://world.cc/add-country',
	    	success: function(result){
	        	$("#div1").html(result);
	    	}});
	});*/

</script>
@endsection