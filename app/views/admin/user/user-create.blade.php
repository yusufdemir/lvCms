@extends('admin.layouts.master')

	@section('title')
		POST PAGE
	@stop

	@section('body')
	
		@if($errors->has())
			<div class="col-md-12">
				<div class="alert alert-danger"><strong>Hatalar:</strong><br>
					{{ HTML::ul($errors->all()) }}
				</div>
			</div>
		@endif
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-gradient" data-collapsed="0">
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Kullanıcı Ekleme Formu</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					{{ Form::open(array('url' => URL::to('admin/user'), 'method' => 'post')) }}

							{{ Form::text( 'name', Input::old('name',null), 
								array(
									'placeholder'=>'Adı',
									'class'=>'form-control input-sm',
									'required'=>''
									)
								)
							}}
							<br>
							{{ Form::text( 'surname', Input::old('surname',null), 
								array(
									'placeholder'=>'Soyadı',
									'class'=>'form-control input-sm',
									'required'=>''
									)
								)
							}}
							<br>
							{{ Form::text( 'email', Input::old('email',null), 
								array(
									'placeholder'=>'E-mail Adresi',
									'class'=>'form-control input-sm',
									'required'=>''
									)
								)
							}}
							<br>
							<label for="password">Şifre: </label>
							{{ Form::password( 'password', 
								array(
									'placeholder'=>'Şifresi',
									'class'=>'form-control input-sm',
									'required'=>''
									)
								)
							}}
							<br><br>
							{{ Form::submit('Kullanıcı Ekle',array('class'=>'btn')) }}
					{{ Form::close() }}
				</div>
			</div>
		</div>
<div class="clearfix"></div>
	@stop

@stop