    <div class="sidebar-menu">


        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="{{ URL::route('dashboard') }}">
                <img src="{{ asset('assets/images/logo@2x.png') }}" width="120" alt="" />
                </a>
            </div>

            <!-- logo collapse icon -->

            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                <i class="entypo-menu"></i>
                </a>
            </div>

            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                <i class="entypo-menu"></i>
                </a>
            </div>

        </header>

        <ul id="main-menu" class="">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li>
                <a href="{{ URL::route('dashboard') }}">
                <i class="entypo-gauge"></i>
                <span>Anasayfa</span>
                </a>
            </li>
            <li class="opened">
                <a href="{{ URL::route('post-create') }}">
                <i class="entypo-doc-text-inv"></i>
                <span>Yazılar</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ URL::route('post-list') }}">
                            <span>Tüm Yazılar</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::route('post-create') }}">
                            <span>Yazı Ekle</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="opened">
                <a href="{{-- URL::route('page-create') --}}">
                <i class="entypo-doc-text-inv"></i>
                <span>Sayfalar</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ URL::route('page-list') }}">
                            <span>Tüm Sayfalar</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{URL::to('admin/posts/create/page') }}">
                            <span>Sayfa Ekle</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="opened">
                <a href="{{-- URL::to('admin/events') --}}">
                <i class="entypo-doc-text-inv"></i>
                <span>Etkinlikler</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ URL::to('admin/event') }}">
                            <span>Tüm Etkinlikler</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{URL::to('admin/event/create') }}">
                            <span>Etkinlik Ekle</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ URL::route('post-trash') }}">
                <i class="entypo-gauge"></i>
                <span>Çöp Kutusu</span>
                </a>
            </li>
        </ul>

    </div>