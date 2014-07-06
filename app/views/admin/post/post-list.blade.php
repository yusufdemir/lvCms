@extends('admin.layouts.master')

@section('title')
	POST PAGE
@stop

@section('notification')
	toastr.success("Buradan Yeni Yazı yada Sayfalarını Oluşturup Yayınlayabilirsin ...", "Bilgilendirme Mesajı", opts);
@stop

@section('custom-js')

<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables/TableTools.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/datatables/jquery.dataTables.columnFilter.js') }}"></script>

@stop

@section('body')
<script type="text/javascript">
	jQuery(document).ready(function($) {
		//$('.inlinebar, .inlinebar-2, .inlinebar-3').sparkline('html', {type: 'pie', barColor: '#ff6264'} );
	});
</script>

<h2>Yazılarınız</h2>

<table class="table table-bordered datatable" id="table-3">
	<thead>
		<tr class="replace-inputs">
			<th>Başlık</th>
			<th>Seo Link</th>
			<th>Yayın Tarihi</th>
			<th>Ekleyen</th>
			<th>İşlemler</th>
		</tr>
		<tr>
			<th>Başlık</th>
			<th>Seo Link</th>
			<th>Yayın Tarihi</th>
			<th>Ekleyen</th>
			<th>İşlemler</th>
		</tr>
	</thead>
	<tbody>

		@foreach ($all_post as $p)
			<tr class="gradeX">
				<td>{{ $p->head }}</td>
				<td>{{ $p->slug }}</td>
				<td>{{ $p->publish_date }}</td>
				<td class="center">GET AUTHOR</td>
				<td class="center">{{ $p->active }}</td>
			</tr>
		@endforeach

	</tbody>
	<tfoot>
		<tr>
			<th>Başlık</th>
			<th>Seo Link</th>
			<th>Yayın Tarihi</th>
			<th>Ekleyen</th>
			<th>İşlemler</th>
		</tr>
	</tfoot>
</table>

<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		var table = $("#table-3").dataTable({
			"sPaginationType": "bootstrap",
			"displayLength": 20,
			"aLengthMenu": [[20, 25, 50, -1], [20, 25, 50, "All"]],
			"bStateSave": true
		});
		
		table.columnFilter({
			"sPlaceHolder" : "head:after"
		});
	});
</script>

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->