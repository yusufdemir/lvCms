          <aside>
            <div class="col-sm-4 blog-sidebar">
              <div class="sidebar-module-title">
                <h4>ETKİNLİK TAKVİMİ</h4> <div class="stripe-title"> </div>
              </div>
              <div class="clearfix"></div>
              <div class="sidebar-module">
                <div id="eventCalendar"></div>
              </div>
              <!-- /.Sidebar-news-Start -->
                <div class="sidebar-module-title">
                  <h4>HABERLER</h4> <div class="stripe-title"> </div>
                </div>
                <ul class="cat-news">
                  @foreach ($newsSidebar as $index => $post)
                    @if ($index == 0)
                      <li class="first"> 
                        @if($post->media!=null)
                          <img src="{{ Timthumb::link(asset($post->media),220,150) }}" alt="{{ $post->head }}" class="thumbnail">
                        @else
                          <img class="thumbnail" src="http://dummyimage.com/320x210/8a4d4d/ffffff.jpg&text=BTP" alt="BTP">
                        @endif
                        <h3><a href="{{ URL::to('content/view/'.$post->id.'/'.$post->slug) }}" title="{{ $post->head }}">{{ $post->head }}</a></h3>
                        <p>{{ Str::words($post->content,20) }}</p>
                      </li>
                    @else
                      <li>
                        @if($post->media!=null)
                          <img src="{{ Timthumb::link(asset($post->media),50,50) }}" alt="{{ $post->head }}" class="thumbnail">
                        @else
                          <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP" alt="test">
                        @endif
                        <h4><a href="{{ URL::to('content/view/'.$post->id.'/'.$post->slug) }}" title="{{ $post->head }}">{{ $post->head }}</a></h4>
                        <small>{{ date("Y-m-d",strtotime($post->created_at)) }}</small>
                        <div class="clearfix"></div>
                      </li>
                    @endif

                  @endforeach
                </ul>
                <br>
              <!-- /.Sidebar-news-END -->
              <div class="sidebar-module sidebar-module-inset">
                <h4>Btp.org.tr Yenilendi.</h4>
                <p>Yenilenen alt yapısıyla <em>daha hızlı ve daha güvenli</em>.</p>
              </div>
            </div><!-- /.blog-sidebar -->
          </aside>
