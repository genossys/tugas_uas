<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>id</th>
				<th>idlelang</th>
				<th>jadwal</th>
				<th>batasIplaod</th>
				<th>ket</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($jadwal as $p)
			<tr>
				<td>{{$p->idJadwal }}</td>
				<td>{{$p->idLelang}}</td>
				<td>{{$p->jadwal}}</td>
				<td>{{$p->batasUplaod}}</td>
				<td>{{$p->keterangan}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>