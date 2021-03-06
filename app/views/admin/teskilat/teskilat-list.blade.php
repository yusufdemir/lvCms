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

<h1 class="margin-bottom">Tüm Teşkilat  </h1>
<ol class="breadcrumb 2">
	<li>
		<a href="{{ URL::route('dashboard') }}"><i class="entypo-home"></i>Anasayfa</a>
	</li>

	<li>
		<a href="{{ URL::to('/admin/teskilat') }}">Teşkilat</a>
	</li>

	<li class="active">
		<strong>Teşkilat Listele</strong>
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
					<div class="panel-title">Teşkilat</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Kullanıcı Adı</th>
                        <th>Soyadı</th>
                        <th>E-Mail</th>
                        <th>İli</th>
                        <th>Telefon</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teskilat as $user)
                        <tr>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->sehir->il_ad }}</td>
                            <td>{{ $user->phone }}</td>
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
								<a href="/admin/teskilat/{{ $user->id }}/edit">
									<button type="submit" class="btn btn-info btn-xs" id="delcontent">
										<i class="entypo-pencil"></i> Düzenle
									</button>
								</a>
								{{ Form::open(array('url' => array('admin/teskilat', $user->id),'method'=> 'DELETE', 'class' => 'pull-right')) }}
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
            {{ $teskilat->links() }}

				</div>
			</div>
		</div>
	</div>
	
{{ Form::close() }}

@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->