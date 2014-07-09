@extends('admin.layouts.master')

@section('title')
	POST PAGE
@stop

@section('notification')
	//toastr.info("Buradan Yeni Yazı yada Sayfalarını Oluşturup Yayınlayabilirsin ...", "Bilgilendirme Mesajı", waitFull);
@stop

@section('custom-css')
<link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">

@stop

@section('body')
<h2>Önizleme</h2>
 <br>  <br> 
<div class="row">
	<div class="col-sm-8">
		
		<div class="blog-post-single">
			
			<a href="#" class="image">
				<img src="{{ asset($post->media) }}" class="img-responsive img-rounded">
			</a>
									
			<div class="post-details">
				
				<h3>
					<a href="#">{{ $post->head }}</a>
				</h3>
				
				<div class="post-meta">
					
					<div class="meta-info">
						<i class="entypo-calendar"></i> {{ $post->publish_date }}
						<i class="entypo-comment"></i>{{ $post->cat->name }} / {{ $post->user->name }}
					</div>
					
				</div>
				<br>
			</div>
			
			
			<div class="post-content">
				{{ $post->content }}
			</div>
			
			<br>
			
			
		</div>
		
	</div>

	<div class="col-sm-4">
		<div class="panel panel-gray" data-collapsed="0">
			
			<!-- panel head -->
			<div class="panel-heading">
				<div class="panel-title">Seçenekler</div>
				
				<div class="panel-options">
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<!-- panel body -->
			<div class="panel-body">
					<!--DELETED-->
				{{ Form::open(array('route' => array('post-delete', $post->id),'method'=> 'DELETE', 'class' => 'pull-right')) }}
					<button type="submit" class="btn btn-danger btn-xs" id="delcontent">
						<i class="entypo-trash"></i>Çöpe Taşı
					</button>
				{{ Form::close() }}
					<!--END DELETED-->
					<!--EDIT-->
					<a href="{{URL::action('post-edit', $post->id)}}">
						<button type="button" class="btn btn-info btn-xs">
							<i class="entypo-pencil"></i> Düzenle
						</button>
					</a>
					<!--END EDIT-->


			</div>
			
		</div>
	</div>

</div>
@stop <!--END BODY SECTION-->
@stop<!--END EXTENDS SECTION-->