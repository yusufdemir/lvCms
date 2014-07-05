@extends ('admin.layouts.auth.master')
	
	@section('title')
		test
	@stop

	@section('extend_js')
	<script src="{{ asset('assets/js/neon-login.js') }}"></script>
	@stop

	@section('body')
	<script type="text/javascript">
		var baseurl = '{{ URL::route('login') }}';
	</script>

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="index.html" class="logo">
				<img src="assets/images/logo@2x.png" width="120" alt="" />
			</a>
			
			<p class="description">Giriş Yapınız</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>İşleniyor...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<div class="form-login-error">
				<h3>Hatalı Giriş</h3>
			</div>
			
			<form method="post" role="form" id="form_login">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="email" id="email" placeholder="E-mail" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Giriş Yap
					</button>
				</div>
			</form>
			
			
			<div class="login-bottom-links">
				
				<a href="extra-forgot-password.html" class="link">Şifreni mi unuttun?</a>
				
				<br />
				
				<a href="#">@YD</a>
				
			</div>
			
		</div>
		
	</div>
	
</div>
	@stop

@stop