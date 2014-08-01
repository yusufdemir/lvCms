@extends('admin.layouts.master')

@section('title')
	Medyalar
@stop

@section('notification')
	
@stop

@section('custom-css')

@stop

@section('custom-js')
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables/TableTools.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/datatables/jquery.dataTables.columnFilter.js') }}"></script>
<script src="{{ asset('assets/js/jquery.popconfirm.js') }}"></script>
@stop

@section('body')
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#send-album').click(function(event) {
				$.ajax({
			    url : "{{ URL::to('admin/media/addalbum')}}",
			    type: "post",
			    dataType: 'JSON',
			    data : {
			    	name:$("#album-name").val(),
			    	description:$("#album-description").val()
			    },
			    success: function(data)
			    {		    	
			        if (data.status=="true") {
			        	$("#add-album").modal('hide');
			        	window.location.reload(true);
			        }else{
			        	alert('-Albüm Eklenemedi');
			        }
			    },
			    error: function (data)
			    {
			 		alert('Sunucuya Ulaşılamıyor...');
			    }
			});	
		});
	});

</script>
<style>
	.modal-backdrop {position:inherit ;}
</style>
<h1 class="margin-bottom">Albümler
				<a href="#" onclick="jQuery('#add-album').modal('show');" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-cog"></i>
					Albüm Ekle
				</a>
</h1>
<ol class="breadcrumb 2">
	<li>
		<a href="{{ URL::route('dashboard') }}"><i class="entypo-home"></i>Anasayfa</a>
	</li>

	<li>
		<a href="#">Albümler</a>
	</li>

	<li class="sonuc">
		<strong>Tüm Albümler</strong>
	</li>
</ol>
			
<br />

<style>
.ms-container .ms-list {
	width: 135px;
	height: 205px;
}

.post-save-changes {
	float: right;
}

@media screen and (max-width: 789px)
{
	.post-save-changes {
		float: none;
		margin-bottom: 20px;
	}
}
</style>

@if($errors->has())
	<div class="col-md-12">
		<div class="alert alert-danger"><strong>Hatalar:</strong><br>
			{{ HTML::ul($errors->all()) }}
		</div>
	</div>
@endif


	<div class="row">

		<div class="col-md-12">
			<div class="panel panel-gradient" data-collapsed="0">
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Albümler</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ALBÜM ADI</th>
                        <th>GÖRSEL SAYISI</th>
                        
                        <th>İŞLEMLER</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($albums as $album) 
                        <tr>
                            <td>{{ $album->id }}</td>
                            <td>{{ $album->name }}</td>
                            
                            <td>
                            @foreach ($album->photocount as $count) 
                            	{{ $count->count }}
                            @endforeach
                            </td>
                            <td>
								<!--EDIT-->
								<a href="{{URL::to('admin/media/showalbum/'.$album->id) }}">
									<button type="button" class="btn btn-info btn-xs">
										<i class="entypo-pencil"></i> Düzenle
									</button>
								</a>
								<!--END EDIT-->
								<!--DELETED-->
								{{ Form::open(array('url' => 'admin/media/deletealbum', 'method'=> 'DELETE', 'class' => 'pull-right')) }}
									<input type="hidden" name="id" value="{{ $album->id }}">
									<button type="submit" class="btn btn-danger btn-xs" id="delcontent">
										<i class="entypo-trash"></i> Kaldır
									</button>
								{{ Form::close() }}
								<!--END DELETED-->
                            </td>
                        </tr>
                	@endforeach
                </tbody>
            </table>

				</div>
			</div>
		</div>
	</div>
	
{{ Form::close() }}

<!-- Album Cover Settings Modal -->
<div class="modal fade custom-width" id="add-album">
	<div class="modal-dialog" style="width: 65%;">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><strong>Yeni Albüm Ekle</strong></h4>
			</div>
			
			<div class="modal-body">
				
				<div class="row">
				
					<div class="col-sm-12">
					
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Başlık</label>
									
									<input type="text" class="form-control" id="album-name" name="name" placeholder="Albüm Başlığını Gir">
								</div>	
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Açıklama</label>
									
									<textarea class="form-control autogrow" id="album-description" name="description" placeholder="Albüm Açıklaması" style="min-height: 120px;"></textarea>
								</div>	
								
							</div>
						</div>
						
					</div>
				</div>
				
				
			</div>
			
			<div class="modal-footer">
				<button type="button" id="send-album" class="btn btn-success btn-icon">
					<i class="entypo-check"></i>
					Albümü Ekle
				</button>
			</div>
		</div>
	</div>
</div>

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->