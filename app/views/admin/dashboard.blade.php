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
            <div class="num" data-start="0" data-end="{{ $user_count }}" data-postfix="" data-duration="1500" data-delay="0">0</div>
            <h3>Kayıtlı Kullanıcı Sayısı</h3>
            <p>so far in our blog, and our website.</p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="tile-stats tile-green">
            <div class="icon"><i class="entypo-chart-bar"></i></div>
            <div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>
            <h3>Daily Visitors</h3>
            <p>this is the average value.</p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="tile-stats tile-aqua">
            <div class="icon"><i class="entypo-mail"></i></div>
            <div class="num" data-start="0" data-end="{{ $post_count }}" data-postfix="" data-duration="1500" data-delay="1200">0</div>
            <h3>New Messages</h3>
            <p>messages per day.</p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="tile-stats tile-blue">
            <div class="icon"><i class="entypo-rss"></i></div>
            <div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>
            <h3>Subscribers</h3>
            <p>on our site right now.</p>
        </div>
    </div>
</div>
<!--END STATS BOX-->
<hr>
<!--LAST POSTS -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Son 5 Yazı</div>
                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Activity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_post as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->slug }}</td>
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