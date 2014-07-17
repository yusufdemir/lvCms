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
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables/TableTools.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/datatables/jquery.dataTables.columnFilter.js') }}"></script>
<script src="{{ asset('assets/js/jquery.popconfirm.js') }}"></script>
@stop

@section('body')
<script type="text/javascript">
	jQuery(document).ready(function($) {
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

	<li class="sonuc">
		<strong>Tüm Etkinlikler</strong>
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
					<div class="panel-title">Etkinlikler</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ALBÜM ADI</th>
                        <th>RESİM SAYISI</th>
                        <th>DURUM</th>
                        <th>İŞLEMLER</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($albums as $album) 
                        <tr>
                            <td>{{ $album->id }}</td>
                            <td>{{ $album->name }}</td>
                            <td>{{ $album->photocount }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                	@endforeach
                </tbody>
            </table>

				</div>
			</div>
		</div>
	</div>
	
{{ Form::close() }}

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->