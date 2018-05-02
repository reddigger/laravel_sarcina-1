@extends('layouts.main_layout')

@section('content')
<div style="margin: 100px 0 0 200px" class="col-md-4">
<form method="post" action="{{URL::to('add-country')}}">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="examplename">Country Name:</label>
    <input type="text" class="form-control" name="name" id="examplename" aria-describedby="Nume" placeholder="Country Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Codul tarii</label>
    <input type="text" name="code" class="form-control" id="exampleInputPassword1" placeholder="Code">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword12">Capitala tarii</label>
    <input type="text" name="capital" class="form-control" id="exampleInputPassword12" placeholder="Capital">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1346">Populatia</label>
    <input type="number" name="population" class="form-control" id="exampleInputPassword1346" placeholder="Populatia">
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