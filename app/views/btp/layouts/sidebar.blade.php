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
              <style>
              .email{
                margin-bottom: 50px;
              }
                #newsslatter{
                  width: 80%;
                  border: none;
                  height: 30px;
                  margin-top: 5px;
                  padding: 10px;
                  font-size: 17px;
                  font-weight: normal;
                  float: left;
                }
                #newssSubmit{
                  width: 20%;
                  border: none;
                  height: 30px;
                  margin-top: 5px;
                  font-size: 17px;
                  font-weight: normal;
                  float: left;
                }
              </style>
              <div class="sidebar-module sidebar-module-inset">
                <h4>Takip Et</h4>
                <small>Etkinlikler ve yeniliklerden haberin olması için bize e-mail adresini bırakabilirsin.</small>

                <div class="email">
                {{ Form::open(array('url' => URL::to('/newsslatter'),'method' => 'post')) }}
                  <input type="email" name="newslatter" id="newsslatter" placeholder="eposta@adresin.com">
                  <input type="submit" id="newssSubmit" value="Ekle">
                {{ Form::close(); }}
                  
                </div>
                @if (Session::has('newsslatter'))
                  <div class="col-md-12">
                    <div class="row">
                      <div class="alert alert-info">
                        {{ Session::get('newsslatter') }}
                      </div>
                    </div>
                  </div>
                @endif
                @if($errors->has())
                  <div class="col-md-12">
                    <div class="row">
                      <div class="alert alert-danger"><strong>Hata:</strong><br>
                        {{ HTML::ul($errors->all()) }}
                      </div>
                    </div>
                  </div>
                @endif
                <div class="clearfix"></div>
              </div>
            </div><!-- /.blog-sidebar -->
          </aside>
