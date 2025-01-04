<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<title>Purchasing - Dashboard</title>
</head>
<body>

<div class="container-fluid">

	<div class="mb-3 mt-3">
		<a href="/dashboard/purchasing/request" class="btn btn-md btn-secondary"></a>
	</div>

       <table id="requests" class="table table-dark table-striped">
			    <thead>
			        <tr>
			            <th scope="col">No</th>
			            <th scope="col">Deskripsi</th>
			            <th scope="col">Kategori</th>
			            @if(Auth::user()->role_id == 1 && Auth::user()->role_id == 3 )
			            <th scope="col">Action</th>
			            @else
			            @endif
			        </tr>
			    </thead>
			    <tbody>
			        @php
			            $no = 1;
			        @endphp
			        	@if(Auth::user()->role_id == 1 && Auth::user()->role_id == 3)
			                @foreach($ar as $ra)
			                    <tr>
			                        <td>{{ $no++ }}</td>
			                        <td>{{ $ra->description }}</td>
			                        <td>{{ $ra->category->name }}</td>
			                        <td>
			                        	<a href="/dashboard/purchasing/approve/{{ $ra->id }}" class="btn btn-sm text-white btn-success">Approve</a>
			                        	<a href="/dashboard/purchasing/reject/{{ $ra->id }}" class="btn btn-sm text-white btn-danger">Reject</a>
			                        </td>
			                    </tr>
			                @endforeach
			              @else
			                @foreach($ns as $sn)
			                    <tr>
			                        <td>{{ $no++ }}</td>
			                        <td>{{ $ra->description }}</td>
			                        <td>{{ $ra->category->name }}</td>
			                    </tr>
			                @endforeach
			    </tbody>
			</table>	

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
</body>
</html>