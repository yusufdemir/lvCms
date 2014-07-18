@extends('admin.layouts.master')

@section('title')
	POST PAGE
@stop

@section('notification')
	
@stop

@section('custom-css')
	<link rel="stylesheet" href="{{ asset('assets/js/jcrop/jquery.Jcrop.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/js/dropzone/dropzone.css') }}">
@stop

@section('custom-js')
<script src="{{ asset('assets/js/jcrop/jquery.Jcrop.min.js') }}"></script>
<script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>

<script>

$("#dropzone_upload").dropzone({
    paramName: 'file',
    url: '{{ URL::to("admin/media/storephoto") }}',
    maxFilesize: 3,
    acceptedFiles:'image/*',
	init: function() {
		this.on('sending', function(file, xhr, formData){
            formData.append('album_id', {{ $album->id }});
            console.log("Sending");
        });
		this.on('success', function(response){
            //alert(response.status);
            console.log('success');
        });
	}
});


</script>
@stop

@section('body')

<style>
	.modal-backdrop {position:inherit ;}
</style>

<script type="text/javascript">
jQuery(document).ready(function($)
{
	$(".gallery-env").on("click", ".image-thumb .image-options a.delete", function(ev)
	{

		ev.preventDefault();
		//alert( $(this).attr("data-id") );
		
		var $image = $(this).closest('[data-tag]');
		var formData = {_method:"PUT",id:$(this).attr("data-id")}; //Array 
		$.ajax({
		    url : "{{ URL::to('admin/media/delphoto')}}",
		    type: "GET",
		    dataType: 'JSON',
		    data : formData,
		    success: function(data)
		    {		    	
		    	var t = new TimelineLite({
		    		onComplete: function(){
		    			$image.slideUp(function(){
		    				$image.remove();
		    			});
		    	}});
				$image.addClass('no-animation');
				
				t.append( TweenMax.to($image, .2, {css: {scale: 0.95}}) );
				t.append( TweenMax.to($image, .5, {css: {autoAlpha: 0, transform: "translateX(100px) scale(.95)"}}) );
		        if (data.status==true) {
		        	
		        }else{
		        	alert('Hata Oluştu');
		        }
		    },
		    error: function (data)
		    {
		 		alert('ERROR DELETE');
		    }
		});

	}).on("click", ".image-thumb .image-options a.edit", function(ev)
	{
		ev.preventDefault();
		
		$.ajax({
		    url : "{{ URL::to('admin/media/photoinfo')}}",
		    type: "GET",
		    dataType: 'JSON',
		    data : {id:$(this).attr("data-id")},
		    success: function(data)
		    {		    	
		        if (data.status==true) {
		        	$("#photo-title").val(data.title);
		        	$("#photo-description").val(data.description);
		        	$("#photo-id").val(data.id);
		        	$("#album-image-options").modal('show');
		        }
		    },
		    error: function (data)
		    {
		 		alert('Resim Düzenleme Hatası');
		 		$("#album-image-options").modal('hide');
		    }
		});

	});
	
	

	$('#save-image').click(function(event) {
			$.ajax({
		    url : "{{ URL::to('admin/media/savephotoinfo')}}",
		    type: "post",
		    dataType: 'JSON',
		    data : {
		    	id:$("#photo-id").val(),
		    	title:$("#photo-title").val(),
		    	description:$("#photo-description").val()
		    },
		    success: function(data)
		    {		    	
		        if (data.status==true) {
		        	$("#album-image-options").modal('hide');
		        }else{
		        	alert('-Bilgi Güncelleme Hatası' + $("#photo-title").val() + $("#photo-description").val());
		        }
		    },
		    error: function (data)
		    {
		 		alert('Bilgi Güncelleme Hatası');
		    }
		});	
	});
	
});



</script>

<h1 class="margin-bottom">{{ $album->name }} 
				<a href="#" onclick="jQuery('#album-cover-options').modal('show');" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-cog"></i>
					Albüm Düzenle
				</a>
</h1>

<ol class="breadcrumb 2">
	<li>
		<a href="{{ URL::route('dashboard') }}"><i class="entypo-home"></i>Anasayfa</a>
	</li>

	<li>
		<a href="#">Medya</a>
	</li>
	<li>
		<a href="#">Albümler</a>
	</li>
	<li class="sonuc">
		<strong>Seçili Albümü Düzenle</strong>
	</li>
</ol>
			

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
	
	<div class="gallery-env">

		{{-- var_dump($images) --}}
			@foreach ($images as $image )
				<div class="col-sm-2 col-xs-4" data-tag="1d">

					<article class="image-thumb">
						
						<a href="#" class="image">
							<img src="{{ asset($image->photo->link) }}" />
						</a>
						
						<div class="image-options">
							<a href="#" class="edit" data-id="{{ $image->id }}"><i class="entypo-pencil"></i></a>
							<a href="#" class="delete" data-id="{{ $image->id }}"><i class="entypo-cancel"></i></a>
						</div>
						
					</article>
				
				</div>
			@endforeach
	</div>
</div><!--END ROW-->

<div class="clear"></div>

	<hr />

		<h3>
			Albüme Resim Yükle
			<br />
			<small>Sürükleyip Bırakarak Albüme Resim Yükleyebilirsin...</small>
		</h3>

		<br />
			
		<form action="" class="dropzone dz-min" id="dropzone_upload">
			<div class="fallback">
				<input name="file" type="file" multiple />
			</div>
		</form>

		<div id="dze_info" class="hidden">
			
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">Dropzone Uploaded Images Info</div>
				</div>
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="40%">File name</th>
							<th width="15%">Size</th>
							<th width="15%">Type</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4"></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>



<!--MODALS-->

<!-- Album Cover Settings Modal -->
<div class="modal fade custom-width" id="album-cover-options">
	<div class="modal-dialog" style="width: 65%;">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit: <strong>Album Title</strong></h4>
			</div>
			
			<div class="modal-body">
				
				<div class="row">
				
					<div class="col-sm-6">
					
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Title</label>
									
									<input type="text" class="form-control" id="field-1" placeholder="Enter album title">
								</div>	
								
							</div>
						</div>
					
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Tags</label>
									
									<input type="text" class="form-control" id="field-3" placeholder="Tags">
								</div>	
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Description</label>
									
									<textarea class="form-control autogrow" id="field-2" placeholder="Enter album description" style="min-height: 120px;"></textarea>
								</div>	
								
							</div>
						</div>
						
					</div>
				</div>
				
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-icon">
					<i class="entypo-check"></i>
					Apply Changes
				</button>
			</div>
		</div>
	</div>
</div>


<!-- Album Image Settings Modal -->
<div class="modal fade" id="album-image-options">
	<div class="modal-dialog">
		<div class="modal-content">
						
			<div class="modal-body">
			
					
						<div class="row">
							<div class="col-md-12">
								<input type="hidden" name="photo-id" id="photo-id" value="">
								<div class="form-group">
									<label for="field-1" class="control-label">Resim Adı/Başlığı</label>
									
									<input type="text" class="form-control" id="photo-title" name="photo-title" placeholder="Enter image title">
								</div>	
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Açıklaması</label>
									
									<textarea class="form-control autogrow" id="photo-description" name="photo-description" placeholder="Enter image description" style="min-height: 80px;"></textarea>
								</div>	
								
							</div>
						</div>
						
				
				
			</div>
			
			<div class="modal-footer">
				<button type="button" id="save-image" class="btn btn-success btn-icon">
					<i class="entypo-check"></i>
					Bilgileri Güncelle
				</button>
			</div>
		</div>
	</div>
</div>

<!--MODAL END-->


	

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->