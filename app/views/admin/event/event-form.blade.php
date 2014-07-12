<script type="text/javascript">
	jQuery(document).ready(function($) {
			$("#event-cb").change(function() {
			    if(this.checked) {
			        $('#dp2').show();
			    }else{
			    	$('#dp2').hide();
			    }
			});
	});

</script>
				
				{{ Form::text( 'name', Input::old('name',null), 
					array(
						'placeholder'=>'Etkinlik Adı',
						'class'=>'form-control input-sm',
						'required'=>''
						)
					)
				}}
				<br>
				{{ Form::text( 'link', Input::old('link',null), 
					array(
						'placeholder'=>'Etkinlik Linki',
						'class'=>'form-control input-sm',
						'required'=>''
						)
					)
				}}

				<br>

				<div class="checkbox checkbox-replace">
					
					{{ Form::checkbox('more_day',null,null,array('id'=>'event-cb')) }}
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

