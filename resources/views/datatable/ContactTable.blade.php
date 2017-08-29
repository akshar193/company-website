@extends('layouts.adminmain')

@section('content')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<div class="container-fluid">
	<h1>Customer Details</h1>
	
	<div class="table-responsive">
		<table class="table table-striped" id="contact_table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Customer Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Message</th>
					<!-- <th>Created</th> -->
				</tr>
			</thead>
		</table>
	</div>
</div>


<script type="text/javascript">
$(function() {
    $('#contact_table').DataTable({
        processing: true,
        serverSide: true,
		responsive: true,
        ajax: '{{ route('ContactData') }}',
        columns: [
			{ data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phone', name: 'phone' },
			{ data: 'message', name: 'message' },
            // { data: 'created_at', name: 'created_at' }
        ]
    });
});
</script>


@stop