<html>
<head>
<!-- jQuery -->
<script type="text/javascript"
		src="https://code.jquery.com/jquery-3.5.1.js">
</script>

<!-- DataTables CSS -->
<link rel="stylesheet"
		href=
"https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src=
"https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
</script>
</head>
<body>

<!-- HTML table with student data -->
<table id="tableID" class="display">
	<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Age</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>1</td>
		<td>Sam</td>
		<td>35</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Sam</td>
		<td>30</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Sameer</td>
		<td>45</td>
	</tr>
	<tr>
		<td>4</td>
		<td>Rob</td>
		<td>4</td>
	</tr>
	<tr>
		<td>5</td>
		<td>Robber</td>
		<td>68</td>
	</tr>
	<tr>
		<td>6</td>
		<td>Mikasa</td>
		<td>25</td>
	</tr>
	<tr>
		<td>7</td>
		<td>Eren</td>
		<td>23</td>
	</tr>
	<tr>
		<td>8</td>
		<td>Jean</td>
		<td>35</td>
	</tr>
	<tr>
		<td>9</td>
		<td>Walter</td>
		<td>65</td>
	</tr>
	<tr>
		<td>10</td>
		<td>Jessie</td>
		<td>28</td>
	</tr>
	<tr>
		<td>11</td>
		<td>Gabi</td>
		<td>20</td>
	</tr>
	<tr>
		<td>12</td>
		<td>Tim</td>
		<td>30</td>
	</tr>
	<tr>
		<td>13</td>
		<td>Max</td>
		<td>35</td>
	</tr>
	</tbody>
</table>
<script>

	// Initialize the DataTable
	$(document).ready(function () {
	$('#tableID').DataTable({
		paging: true
	});
	});
</script>
</body>
</html>
