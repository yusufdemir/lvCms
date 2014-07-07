@include('admin.layouts.header')
@include('admin.layouts.sidebar')

<script type="text/javascript">
jQuery(document).ready(function($) 
{
	// Sample Toastr Notification
	setTimeout(function()
	{			
		var opts = {
			"closeButton": true,
			"debug": false,
			"positionClass": "toast-top-right",//toast-top-full-width,toast-top-right
			//"toastClass": "black",
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "0",//5000
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};
		@yield('notification')
		//toastr.success("Deneme Mesajı...!", "Başarılı Uyarı", opts);
		//toastr.error("Sıkıntı Var!", "Account Subcription Updated", opts);
        @if (Session::has('notification'))
            toastr.{{ Session::get('notification.type') }} ( "{{ Session::get('notification.text') }}", "{{ Session::get('notification.head') }}", opts);
        @endif

	}, 1000);
	
});
function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
	}
</script>

<div class="main-content">
    <div class="row">
        <!-- Profile Info and Notifications -->
        <div class="col-md-6 col-sm-8 clearfix">
            <ul class="user-info pull-left pull-none-xsm">
                <!-- Profile Info -->
                <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ Auth::user()->gravatar() }}" alt="" class="img-circle" width="44" />
                {{ Auth::user()->email }}
                </a>
                <ul class="dropdown-menu">
                    <!-- Reverse Caret -->
                    <li class="caret"></li>
                    <!-- Profile sub-links -->
                    <li>
                        <a href="extra-timeline.html">
                        <i class="entypo-user"></i>
                        Hesap Bilgileri
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="entypo-clipboard"></i>
                        Yazılarım
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">
        <ul class="list-inline links-list pull-right">

            <li>
                <a href="{{ URL::route('post-create') }}">
                <button type="button" class="btn btn-white btn-sm"><i class="entypo-doc-text"></i> Yeni Yazı</button>
                </a>
            </li>
            <li>
                <a href="{{ URL::route('post-list') }}">
                <button type="button" class="btn btn-white btn-sm"><i class="entypo-docs"></i> Yeni Sayfa</button>
                </a>
            </li>
            <li>
                <a href="{{ URL::route('post-list') }}">
                <button type="button" class="btn btn-white btn-sm"><i class="entypo-clock"></i> Yeni Etkinlik</button>
                </a>
            </li>
            <li>
                <a href="{{ URL::route('logout') }}">
                Çıkış Yap <i class="entypo-logout right"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--END TOP INFO-->

<hr>

@yield('body')

<!-- Footer -->
<footer class="main">
    &copy; 2014 <strong>LvCMS</strong> by <a href="http://www.ysfdmr.com" target="_blank">YD</a>
</footer>	</div>
</div>
@include('admin.layouts.footer')