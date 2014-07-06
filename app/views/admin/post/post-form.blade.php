@extends('admin.layouts.master')

@section('title')
	POST PAGE
@stop

@section('notification')
	toastr.info("Buradan Yeni Yazı yada Sayfalarını Oluşturup Yayınlayabilirsin ...", "Bilgilendirme Mesajı", opts);
@stop

@section('custom-css')
	<link rel="stylesheet" href="{{ asset('assets/js/selectboxit/jquery.selectBoxIt.css') }}">
@stop

@section('custom-js')
<script src="{{ asset('assets/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('assets/js/fileinput.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/js/selectboxit/jquery.selectBoxIt.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
@stop

@section('body')
<script type="text/javascript">
	jQuery(document).ready(function($) {
		//$('.inlinebar, .inlinebar-2, .inlinebar-3').sparkline('html', {type: 'pie', barColor: '#ff6264'} );
	});
</script>

<h1 class="margin-bottom">Yeni [Yazı] Ekle</h1>
			<ol class="breadcrumb 2">
						<li>
				<a href="{{ URL::route('dashboard') }}"><i class="entypo-home"></i>Anasayfa</a>
			</li>
					<li>
			
							<a href=" {{ URL::route('post-list') }} ">Yazılar</a>
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

<form method="post"  action="{{ URL::route('post-store') }}" >
	
	<!-- Title and Publish Buttons -->	<div class="row">
		<div class="col-sm-2 post-save-changes">
			<button type="submit" class="btn btn-green btn-lg btn-block btn-icon">
				Yayınla
				<i class="entypo-check"></i>
			</button>
		</div>
		
		<div class="col-sm-10">
			<input type="text" class="form-control input-lg" name="head" value='{{ Input::old('head','') }}' placeholder="Başlık" required />
			{{-- Form::text( 'head', Input::old('head',''), 
				array(
					'placeholder'=>'Başlık',
					'class'=>'form-control input-lg',
					'required'=>''
					)
				)
			--}}
		</div>
	</div>
	
	<br />
	
	<!-- WYSIWYG - Content Editor -->	<div class="row">
		<div class="col-sm-12">
			<textarea class="form-control ckeditor" name="text" id="post_content">{{ Input::old('content','') }}</textarea>
		</div>
	</div>
	
	<br />
	
	<!-- Metaboxes -->	<div class="row">
		
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
						<input type="checkbox" id="chk-1" name="slider" checked>
						<label>Slider'da Göster</label>
					</div>
					
					<br />
			
					<p>Yayınlanma Tarihi</p>
					<div class="input-group">
						<input type="text" name="publish_date" class="form-control datepicker" value="{{ Input::old('publish_date','') }}" data-format="dd/mm/yyyy">
						
						<div class="input-group-addon">
							<a href="#"><i class="entypo-calendar"></i></a>
						</div>
					</div>
						
					<br />
					
					<p>Yayınlanma Durumu</p>
					<select name="publish" class="selectboxit">
						<optgroup label="DURUM:">
							<option value="1">Yayında</option>
							<option value="0">Pasif</option>
						</optgroup>
					</select>
					
				</div>
			
			</div>
			
		</div>
		
		
		<!-- Metabox :: Featured Image -->		<div class="col-sm-4">
			
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
					
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="max-width: 310px; height: 160px;" data-trigger="fileinput">
							<img src="http://placehold.it/320x160" alt="...">
						</div>
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px"></div>
						<div>
							<span class="btn btn-white btn-file">
								<span class="fileinput-new">Resim Seç</span>
								<span class="fileinput-exists">Değiştir</span>
								<input type="file" name="file" accept="image/*">
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
				
				<div class="panel-body" style="text-align:center;min-width: 330px !important;">
					
					<select multiple="multiple" name="categories[]" class="form-control multi-select" require>
						@foreach ($cat as $c) 
							@if($c->id == 1)
								<option value="{{ $c->id }}" selected > {{ $c->name }} </option>
							@else
								<option value="{{ $c->id }}"> {{ $c->name }} </option>
							@endif
						@endforeach
					</select>

					{{-- Form::select('categories[]',$cat, Input::old('category_id'),array('class'=>'form-control multi-select') ) --}}
					
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
					<input type="text" name="tags" value="örnek, yaz sıcağı" class="form-control tagsinput" />
					
				</div>
			
			</div>
			
		</div>
		
	</div>
	
</form>

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->