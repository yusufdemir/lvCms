@extends('admin.layouts.master')

@section('title')
	Yazılar
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
<h2> Yazılarınız</h2>

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
				<td>
					{{ $p->head }}
					<!--<img src="{{ $p->media!=null?asset($p->media):"" }}" alt="" class="img-thumb" width="22">--> 
				</td>
				<td>{{ $p->cat->name }}</td>
				<td>{{ date("Y-m-d H:i",strtotime($p->updated_at)) }}</td>
				<td>{{ date("Y-m-d",strtotime($p->publish_date)) }}</td>
				<td class="center">admin</td>
				<td class="center">
					{{ $p->active==1?'<div class="label label-success">Aktif</div>':'<div class="label label-danger">Pasif</div>' }}
				</td>
					<td>
					<!--EDIT-->
					<a href="{{URL::to('/admin/post/'.$p->id.'/edit/')}}">
						<button type="button" class="btn btn-info btn-xs">
							<i class="entypo-pencil"></i>
						</button>
					</a>
					<!--END EDIT-->
					<!--PREVIEW BUTTON-->
					<a href="{{URL::to('/admin/post/'. $p->id)}}">
						<button type="button" class="btn btn-orange btn-xs">
							<i class="entypo-eye"></i>
						</button>
					</a>
					<!--END PREVIEW BUTTON-->
					<!--DELETED-->
				{{ Form::open(array('url' => array('/admin/post', $p->id),'method'=> 'DELETE', 'class' => 'pull-right')) }}
					<button type="submit" class="btn btn-danger btn-xs" id="delcontent">
						<i class="entypo-trash"></i>
					</button>
				{{ Form::close() }}
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
{{ $all_post->links() }}

<script type="text/javascript">
	$(document).ready(function() {
		var table = $("#table-3").dataTable({
			"sPaginationType": "bootstrap",
			"displayLength": 20,
			"aLengthMenu": [[20, 25, 50, -1], [20, 25, 50, "All"]],
			"bStateSave": true,
			"bPaginate": false
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