@extends('admin.layouts.master')

@section('title')
	POST PAGE
@stop

@section('notification')
	
@stop

@section('custom-css')
	<link rel="stylesheet" href="{{ asset('assets/js/selectboxit/jquery.selectBoxIt.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/js/icheck/skins/square/_all.css') }}">
@stop

@section('custom-js')
<script src="{{ asset('assets/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('assets/js/fileinput.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/js/selectboxit/jquery.selectBoxIt.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/icheck/icheck.min.js') }}"></script>
@stop

@section('body')
<script type="text/javascript">
	jQuery(document).ready(function($) {
		//$('.inlinebar, .inlinebar-2, .inlinebar-3').sparkline('html', {type: 'pie', barColor: '#ff6264'} );
		$('input.icheck-11').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-yellow'
		});
			$("#event-cb").change(function() {
			    if(this.checked) {
			        $('#dp2').show();
			    }else{
			    	$('#dp2').hide();
			    }
			});
	});

</script>

<h1 class="margin-bottom">Yeni {{ $t['name'] }} Ekle  </h1>
<ol class="breadcrumb 2">
	<li>
		<a href="{{ URL::route('dashboard') }}"><i class="entypo-home"></i>Anasayfa</a>
	</li>
	<li>
		<a href="#">{{ $t['name'] }}</a>
	</li>
	<li class="active">
		<strong>Yeni {{ $t['name'] }} Ekle</strong>
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

<!--<form enctype="multipart/form-data"  action="{{ URL::route('post-store') }}" method="post"  >-->
{{ Form::open(array('url' => URL::route('post-store'), 'files' => true, 'method' => 'post')) }}
{{ Form::hidden('type', $t['action'] ) }}
	<!-- Title and Publish Buttons -->	
	<div class="row">
		<div class="col-sm-2 post-save-changes">
			<button type="submit" class="btn btn-green btn-lg btn-block btn-icon">
				Yayınla
				<i class="entypo-check"></i>
			</button>
		</div>
		
		<div class="col-sm-10">
			{{ Form::text( 'head', Input::old('head',''), 
				array(
					'placeholder'=>'Başlık',
					'class'=>'form-control input-lg',
					'required'=>''
					)
				)
			}}
		</div>
	</div>
	
	<br />
	
	<!-- WYSIWYG - Content Editor -->	
	<div class="row">
		<div class="col-sm-12">
			
			{{ Form::textarea( 'content', Input::old('content',''), 
				array(
					'class'=>'form-control ckeditor'
					)
				)
			}}
		</div>
	</div>
	
	<br />
	
	<!-- Metaboxes -->	
	<div class="row">

		<!-- Metabox :: Featured Image -->		
		<div class="col-sm-4">
			
			<div class="panel panel-gray" data-collapsed="0">
		
				<div class="panel-heading">
					<div class="panel-title">
						Öne Çıkarılmış Görsel
					</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				
				<div class="panel-body" style="text-align:center;">
					
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="max-width: 310px; height: 160px;" data-trigger="fileinput">
							<img src="{{ Input::old('media','http://placehold.it/320x160') }}" alt="...">
						</div>
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px"></div>
						<div>
							<span class="btn btn-white btn-file">
								<span class="fileinput-new">Resim Seç</span>
								<span class="fileinput-exists">Değiştir</span>
								<input type="file" name="media" accept="image/*">
							</span>
							<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Sil</a>
						</div>
					</div>
					
				</div>
			
			</div>
			
		</div>

@if($t['action']=="event")
		
		<div class="col-sm-4">
			
			<div class="panel panel-gray" data-collapsed="0">
		
				<div class="panel-heading">
					<div class="panel-title">
						Etkinlik Ayarları
					</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>

				<div class="panel-body">
					<div class="checkbox checkbox-replace">
						<input type="checkbox" id="event-cb" name="event-cb">
						<label>Bir günden uzun</label>
					</div>
					<br>
					<p>Başlangıç Tarihi:</p>
					{{ Form::text( 'event_start', Input::old('event_start',date('Y-m-d')), 
						array(
							'class'=>'form-control datepicker',
							'data-format'=>'yyyy-mm-dd'
							)
						)
					}}
					<br>
					<div id="dp2">
						<p>Bitiş Tarihi:</p>
						{{ Form::text( 'event_end', Input::old('event_end',date('Y-m-d')), 
							array(
								'class'=>'form-control datepicker',
								'data-format'=>'yyyy-mm-dd'
								)
							)
						}}
					</div>
				</div>
			</div>
		</div>
		@endif

		<!-- Metabox :: Publish Settings -->		
		<div class="col-sm-4">
			
			<div class="panel panel-gray" data-collapsed="0">
		
				<div class="panel-heading">
					<div class="panel-title">
						Yayın Ayarları
					</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				
				<div class="panel-body">
					@if($t['action']=="post")
					<div class="checkbox checkbox-replace">
						<input type="checkbox" id="slider" name="slider" checked>

						<label>Slider'da Göster</label>
					</div>
					
					<br />
			
					<p>Yayınlanma Tarihi</p>
					<div class="input-group">
						<input type="text" name="publish_date" class="form-control datepicker" value="{{ Input::old('publish_date',date('Y-m-d')) }}" data-format="yyyy-mm-dd">
						
						<div class="input-group-addon">
							<a href="#"><i class="entypo-calendar"></i></a>
						</div>
					</div>
						
					<br />
					@endif
					<p>Yayınlanma Durumu</p>
					<select name="active" class="selectboxit">
						<optgroup label="DURUM:">
							<option value="1">Yayında</option>
							<option value="0">Pasif</option>
						</optgroup>
					</select>
					
				</div>
			
			</div>
			
		</div>
		
		@if($t['action']=="post")
		<!-- Metabox :: Categories -->		
		<div class="col-sm-4">
			
			<div class="panel panel-gray" data-collapsed="0">
		
				<div class="panel-heading">
					<div class="panel-title">
						Kategoriler
					</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				
				<div class="panel-body" style="">
					<div class="scrollable" data-height="200">
						<ul class="icheck-list">
							@foreach ($cat as $c) 
								<li>
									{{ Form::radio('cat_id', $c->id, (Input::old('cat_id','1') == $c->id) ? true : false, array('id'=>'minimal-radio-1-11', 'class'=>'icheck-11')) }}
							        <label for="minimal-radio-1-11">{{ $c->name }}</label>
							    </li>
							@endforeach
						</ul>
					</div>
				</div>
			
			</div>
			
		</div>
		
		@endif
		

		<!-- Metabox :: Tags -->		
		<div class="col-sm-4">
			
			<div class="panel panel-gray" data-collapsed="0">
		
				<div class="panel-heading">
					<div class="panel-title">
						Etiketler
					</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				
				<div class="panel-body">
					
					<p>Yazınıza ait etiketleri ekleyin</p>
					<!--<input type="text" name="tags" value="" class="form-control tagsinput" />-->
					{{ Form::text( 'tags', Input::old('tags',''), 
						array(
							'placeholder'=>'Etiketler',
							'class'=>'form-control tagsinput'
							)
						)
					}}
				</div>
			
			</div>
			
		</div>




	</div>
	
</form>

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->