@extends('admin.layouts.master')

@section('title')
	POST PAGE
@stop

@section('notification')
	//toastr.info("Buradan Yeni Yazı yada Sayfalarını Oluşturup Yayınlayabilirsin ...", "Bilgilendirme Mesajı", waitFull);
@stop

@section('custom-js')
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables/TableTools.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/datatables/jquery.dataTables.columnFilter.js') }}"></script>
<script src="{{ asset('assets/js/jquery.popconfirm.js') }}"></script>
@stop

@section('body')
<h2> Silinmiş Yazılar</h2>

<table class="table table-bordered datatable" id="table-3">
	<thead>
		<tr class="replace-inputs">
			<th>#ID</th>
			<th>Başlık</th>
			<th>Kategori</th>
			<th>Son Güncelleme</th>
			<th>Yayın Tarihi</th>
			<th>Ekleyen</th>
			<th>Tür</th>
			<th>İşlemler</th>
		</tr>
	</thead>
	<tbody>

		@foreach ($all_post as $p)
			<tr class="gradeX">
				<td>{{ $p->id }}</td>
				<td>
					{{ $p->head }}
					<!--<img src="{{ $p->media!=null?asset($p->media):"" }}" alt="" class="img-thumb" width="22">--> 
				</td>
				<td>{{ $p->cat_id }}</td>
				<td>{{ date("Y-m-d H:i",strtotime($p->updated_at)) }}</td>
				<td>{{ date("Y-m-d",strtotime($p->publish_date)) }}</td>
				<td class="center">admin</td>
				<td class="center">
					{{ $p->type=='post'?'<div class="label label-info">Yazı</div>':'<div class="label label-success">Sayfa</div>' }}
				</td>
					<td>
					<a href="{{URL::to('/admin/post', $p->id)}}">
						<button type="button" class="btn btn-orange btn-xs">
							<i class="entypo-eye"></i>
						</button>
					</a>
					<!--END PREVIEW BUTTON-->
					<!--DELETED-->
					<a href="{{URL::action('post-recovery', $p->id)}}">
					<button type="submit" class="btn btn-info btn-xs" id="delcontent">
						<i class="entypo-ccw"></i>
					</button>
					</a>
				
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
			<th>Tür</th>
			<th>İşlemler</th>
		</tr>
	</tfoot>
</table>

<script type="text/javascript">
	$(document).ready(function() {
		var table = $("#table-3").dataTable({
			"sPaginationType": "bootstrap",
			"displayLength": 20,
			"aLengthMenu": [[20, 25, 50, -1], [20, 25, 50, "All"]],
			"bStateSave": true
		});
		
		/*table.columnFilter({
			"sPlaceHolder" : "head:after"
		});*/

		$('.comfrim').submit(function(event) {
			/* Act on the event */
			alert('Event 2');
		});
	});


</script>

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->