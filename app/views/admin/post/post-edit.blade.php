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
	});

</script>

<h1 class="margin-bottom">Yazıyı Düzenle
		<!--PREVIEW BUTTON-->
		<a href="{{URL::to('/admin/post/'.$post->id)}}">
			<button type="button" class="btn btn-orange btn-md">
				<i class="entypo-eye"></i> Yazıyı Önizle
			</button>
		</a>
		<!--END PREVIEW BUTTON-->
</h1>
<ol class="breadcrumb 2">
	<li>
		<a href="{{ URL::route('dashboard') }}"><i class="entypo-home"></i>Anasayfa</a>
	</li>
	<li>
		<a href=" {{ URL::to('/admin/post/') }} ">Yazılar</a>
	</li>
	<li class="active">
		<strong>Yeni Yazı Ekle</strong>
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

{{ Form::model($post, array('url' => array('/admin/post/'. $post->id),'method'=> 'PUT','files' => true)) }}
	<!-- Title and Publish Buttons -->	
	<div class="row">
		<div class="col-sm-2 post-save-changes">
			<button type="submit" class="btn btn-green btn-lg btn-block btn-icon">
				Güncelle
				<i class="entypo-check"></i>
			</button>
		</div>
		
		<div class="col-sm-10">
			{{ Form::text( 'head', Input::old('head',null), 
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
			
			{{ Form::textarea( 'content', Input::old('content',null), 
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
		
		<!-- Metabox :: Publish Settings -->		
		<div class="col-sm-4">
			
			<div class="panel panel-primary" data-collapsed="0">
		
				<div class="panel-heading">
					<div class="panel-title">
						Yayın Ayarları
					</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				
				<div class="panel-body">
					
					<div class="checkbox checkbox-replace">
						<input type="checkbox" id="slider" name="slider" {{ $post->slider==1?"checked":"" }}>

						<label>Slider'da Göster</label>
					</div>
					
					<br />
			
					<p>Yayınlanma Tarihi</p>
					<div class="input-group">

						{{ Form::text( 'publish_date', Input::old('publish_date',date("Y-m-d",strtotime($post->publish_date))), 
							array(
								'class'=>'form-control datepicker',
								'data-format'=>'yyyy-mm-dd',
								'required'=>''
								)
							)
						}}
						<div class="input-group-addon">
							<a href="#"><i class="entypo-calendar"></i></a>
						</div>
					</div>
						
					<br />
					
					<p>Yayınlanma Durumu</p>
					<select name="active" class="selectboxit">
						<optgroup label="DURUM:">
							<option value="1" {{ $post->active==1?"selected":""}}>Yayında</option>
							<option value="0" {{ $post->active==0?"selected":""}}>Pasif</option>
						</optgroup>
					</select>
					
				</div>
			
			</div>
			
		</div>
		
		
		<!-- Metabox :: Featured Image -->		
		<div class="col-sm-4">
			
			<div class="panel panel-primary" data-collapsed="0">
		
				<div class="panel-heading">
					<div class="panel-title">
						Öne Çıkarılmış Görsel
					</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				
				<div class="panel-body" style="text-align:center;">
					<div class="checkbox checkbox-replace">
						<input type="checkbox" id="del-pic" name="del-pic">
						<label>Resmi Kaldır</label>
					</div>
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="max-width: 310px; height: 160px;" data-trigger="fileinput">
							<img src="{{ $post->media!=null?asset($post->media):'http://placehold.it/320x160' }}" alt="...">
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
		
		
		<!-- Metabox :: Categories -->		
		<div class="col-sm-4">
			
			<div class="panel panel-primary" data-collapsed="0">
		
				<div class="panel-heading">
					<div class="panel-title">
						Kategoriler
					</div>
					
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				
				<div class="panel-body" style="">
					<div class="scrollable" data-height="400" style="overflow: overlay;">
						<ul class="icheck-list">
							@foreach ($cat as $c) 
								<li>
									{{ Form::radio('cat_id', $c->id, (Input::old('cat_id',null) == $post->cat_id) ? true : false, array('id'=>'minimal-radio-1-11', 'class'=>'icheck-11')) }}
							        <label for="minimal-radio-1-11">{{ $c->name }}</label>
							    </li>
							@endforeach
						</ul>
					</div>
				</div>
			
			</div>
			
		</div>
		
		<div class="clear"></div>
		
		<!-- Metabox :: Tags -->		
		<div class="col-sm-12">
			
			<div class="panel panel-primary" data-collapsed="0">
		
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
					{{ Form::text( 'tags', Input::old('tags',null), 
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