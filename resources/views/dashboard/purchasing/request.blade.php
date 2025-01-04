<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<title>Request Purchasing - Dashboard</title>
</head>
<body>

<div class="container">
	 
<div class="row mt-3 mb-3">
	
	<div class="col-md-8 col-12">

	<div class="card">

	<div class="card-body">
			
    <h1>Formulir Request Purchasing - DWP 2025</h1>

    <p><b>dari:</b> {{Auth::user()->role->name}} </p>
		
    <form action="/dashboard/purchasing/postrequest" method="POST">

    	@csrf
    	
    	<div class="mb-3">
    		<label for="Category">
    			Category
    		</label>
    		<select class="form-control" name="category" id="category">
    			<option selected disabled>Pilih Kategori</option>
    			@foreach($category as $c)
    			<option value="{{ $c->id }}">{{ $c->name }}</option>
    			@endforeach
    		</select>
    	</div>

    	<div class="mb-3">
    		<label for="description">
    			Description
    		</label> 
    		<textarea class="form-control" name="description" id=""></textarea>  		
    	</div>

    	<div class="mb-3">
    		<label for="Vendor">
    			Vendor
    		</label>
    		<select class="form-control" name="vendor" id="vendor">
    			<option selected disabled>Pilih Vendor</option>
    			@foreach($vendor as $v)
    			<option value="{{ $v->id }}">{{ $v->name }} , {{ $v->address }}</option>
    			@endforeach
    		</select>
    	</div>

    	<div class="mb-3">
    		<input type="submit" name="requests" class="btn btn-md btn-success" value="Requests Purchasing">
    		<a href="/dashboard/purchasing" class="btn btn-md btn-danger">
    			Back
    		</a>
    	</div>

        </form>

		</div>
	</div>

	</div>

</div> 

</div>	 	 	 	 	 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
</body>
</html>