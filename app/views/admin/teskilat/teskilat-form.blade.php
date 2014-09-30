

	<div class="row">
		<div class="col-sm-6">

		{{ Form::text('firstname', Input::old('firstname',null), 
			array(
				'placeholder'=>'Adı',
				'class'=>'form-control input-lg',
				'required'=>''
				)
			)
		}}

		</div>
	

		<div class="col-sm-6">

			{{ Form::text('lastname', Input::old('lastname',null), 
				array(
					'placeholder'=>'Soyadı',
					'class'=>'form-control input-lg',
					'required'=>''
					)
				)
			}}
		</div>
	</div>
<br>
	<div class="row">
		<div class="col-sm-6">
		{{ Form::text('email', Input::old('email',null), 
			array(
				'placeholder'=>'E-mail Adresi',
				'class'=>'form-control input-lg'
				)
			)
		}}
		</div>

		<div class="col-sm-6">
		{{ Form::text('address', Input::old('address',null), 
			array(
				'placeholder'=>'Adres',
				'class'=>'form-control input-lg'
				)
			)
		}}

		</div>
	</div>
<br>
	<div class="row">
		<div class="col-sm-6">
			{{ Form::select('city', $citys ,Input::old('city',null) ,array('class' => 'form-control input-lg')) }}
		</div>
		<div class="col-sm-6">
			{{ Form::text('phone', Input::old('phone',null), 
				array(
					'placeholder'=>'Telefon',
					'class'=>'form-control input-lg'
					)
				)
			}}
		</div>
	</div>

