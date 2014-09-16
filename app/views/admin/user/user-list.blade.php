@extends('admin.layouts.master')

@section('title')
	Kullanıcılar
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

<h1 class="margin-bottom">Tüm Kullanıcılar  </h1>
<ol class="breadcrumb 2">
	<li>
		<a href="{{ URL::route('dashboard') }}"><i class="entypo-home"></i>Anasayfa</a>
	</li>

	<li>
		<a href="#">Kullanıcılar</a>
	</li>

	<li class="active">
		<strong>Kullanıcıları Listele</strong>
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
					<div class="panel-title">Kullanıcılar</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Kullanıcı Adı</th>
                        <th>Soyadı</th>
                        <th>E-Mail</th>
                        <th>Üyelik Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
								<!--EDIT-->
								<!--
								<a href="{{URL::to('admin/event/'.$user->id.'/edit') }}">
									<button type="button" class="btn btn-info btn-xs">
										<i class="entypo-pencil"></i> Düzenle
									</button>
								</a>-->
								<!--END EDIT-->
								<!--DELETED-->
								{{ Form::open(array('url' => array('admin/user', $user->id),'method'=> 'DELETE', 'class' => 'pull-right')) }}
									<button type="submit" class="btn btn-danger btn-xs" id="delcontent">
										<i class="entypo-trash"></i> Sil
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

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->