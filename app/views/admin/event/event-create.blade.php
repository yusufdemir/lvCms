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

<h1 class="margin-bottom">Yeni Etkinlik Ekle  </h1>
<ol class="breadcrumb 2">
	<li>
		<a href="{{ URL::route('dashboard') }}"><i class="entypo-home"></i>Anasayfa</a>
	</li>

	<li>
		<a href="#">Etkinlikler</a>
	</li>

	<li class="active">
		<strong>Yeni Etkinlik Ekle</strong>
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
{{ Form::open(array('url' => URL::to('admin/event'), 'files' => true, 'method' => 'post')) }}
	<!-- Title and Publish Buttons -->	
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-gradient" data-collapsed="0">
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Etkinlik Formu</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					@include('admin.event.event-form')
					{{ Form::submit('Etkinlik Ekle',array('class'=>'btn')) }}
				</div>
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="panel panel-gradient" data-collapsed="0">
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Etkinlik Formu Önizleme</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					PREVIEW
				</div>
			</div>
		</div>
	</div>
	
{{ Form::close() }}

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->