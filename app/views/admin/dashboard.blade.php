@extends('admin.layouts.master')

@section('notification')
	toastr.success("Deneme Mesajı...!", "Başarılı Uyarı", opts);
@stop

@section('custom-js')
<script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
@stop

@section('body')
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.inlinebar, .inlinebar-2, .inlinebar-3').sparkline('html', {type: 'pie', barColor: '#ff6264'} );
	});
</script>
<!--STATS BOX-->
<div class="row">
    <div class="col-sm-3">
        <div class="tile-stats tile-red">
            <div class="icon"><i class="entypo-users"></i></div>
            <div class="num" data-start="0" data-end="{{ $counts['users'] }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
            <h3>Kayıtlı Kullanıcı Sayısı</h3>
            <p></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="tile-stats tile-green">
            <div class="icon"><i class="entypo-chart-bar"></i></div>
            <div class="num" data-start="0" data-end="{{ $counts['posts'] }}" data-postfix="" data-duration="1500" data-delay="250">0</div>
            <h3>Makale Sayısı</h3>
            <p></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="tile-stats tile-aqua">
            <div class="icon"><i class="entypo-mail"></i></div>
            <div class="num" data-start="0" data-end="{{ $counts['albums'] }}" data-postfix="" data-duration="1500" data-delay="500">0</div>
            <h3>Albüm Sayısı</h3>
            <p></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="tile-stats tile-blue">
            <div class="icon"><i class="entypo-rss"></i></div>
            <div class="num" data-start="0" data-end="{{ $counts['actives'] }}" data-postfix="" data-duration="1500" data-delay="750">0</div>
            <h3>Etkinlik Sayısı</h3>
            <p></p>
        </div>
    </div>
</div>
<!--END STATS BOX-->
<hr>
<img src="{{-- $gravatar --}}" alt="" class="img-circle" width="44" />
<!--LAST POSTS -->
<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Son 5 Yazı</div>
                <div class="panel-options">

                </div>
            </div>
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Başlık</th>
                        <th>Tarih</th>
                        <th>İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_post as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->head }}</td>
                            <td>{{ $p->publish_date }}</td>
                            <td class="text-center"><span class="inlinebar">4,3,5,4,5,6</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--END LAST POSTS-->
@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->