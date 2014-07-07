@extends('admin.layouts.master')

@section('title')
	POST PAGE
@stop

@section('notification')
	opts = {
	"hideDuration": "0",
	"timeOut": "0"
	};
	//toastr.info("Buradan Yeni Yazı yada Sayfalarını Oluşturup Yayınlayabilirsin ...", "Bilgilendirme Mesajı", opts);
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
			<th>#ID</th>
			<th>Başlık</th>
			<th>Kategori</th>
			<th>Son Güncelleme</th>
			<th>Yayın Tarihi</th>
			<th>Ekleyen</th>
			<th>Durum</th>
			<th>İşlemler</th>
		</tr>
	</thead>
	<tbody>

		@foreach ($all_post as $p)
			<tr class="gradeX">
				<td>{{ $p->id }}</td>
				<td>{{ $p->head }}</td>
				<td>{{ $p->cat_id }}</td>
				<td>{{ date("Y-m-d H:i",strtotime($p->updated_at)) }}</td>
				<td>{{ date("Y-m-d",strtotime($p->publish_date)) }}</td>
				<td class="center">admin</td>
				<td class="center">
					{{ $p->active==1?'<div class="label label-success">Aktif</div>':'<div class="label label-danger">Pasif</div>' }}
				</td>
					<td>
					<!--EDIT-->
					<a href="{{URL::action('post-edit', $p->id)}}">
						<button type="button" class="btn btn-info btn-sm">
							<i class="entypo-pencil"></i>
						</button>
					</a>
					<!--END EDIT-->
					<!--DELETED-->
					<button type="button" class="btn btn-danger btn-sm">
						<i class="entypo-trash"></i>
					</button>
					<!--END DELETED-->
				</td>
			</tr>
		@endforeach

	</tbody>
	<tfoot>
		<tr>
			<th>#ID</th>
			<th>Başlık</th>
			<th>Kategori</th>
			<th>Son Güncelleme</th>
			<th>Yayın Tarihi</th>
			<th>Ekleyen</th>
			<th>Durum</th>
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
		
		/*table.columnFilter({
			"sPlaceHolder" : "head:after"
		});*/
	});
</script>

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->