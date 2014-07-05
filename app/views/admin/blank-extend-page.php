@extends('admin.layouts.master')

@section('title')
	POST PAGE
@stop

@section('notification')
	toastr.info("Buradan Yeni Yazı yada Sayfalarını Oluşturup Yayınlayabilirsin ...", "Bilgilendirme Mesajı", opts);
@stop

@section('custom-js')
<script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
@stop

@section('body')
<script type="text/javascript">
	jQuery(document).ready(function($) {
		//$('.inlinebar, .inlinebar-2, .inlinebar-3').sparkline('html', {type: 'pie', barColor: '#ff6264'} );
	});
</script>



@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->