            <header>
                <div id="top-head" class="desktop-only">
                    <div class="container">
                        <div class="auth-block fl">
                            <ul>
                                <li><a href="{{url('kontak')}}">Costumer Care</a></li>
                                <li><a href="{{url('konfirmasiorder')}}">Status Order</a></li>
                            </ul>
                        </div>
                        @if( is_login() )
                        <div class="user-info fr">
                            <ul>
                                <li>Selamat Datang, <strong><a href="{{url('member')}}">{{user()->nama}}</a></strong></li>
                                <span class="user-welcome">|</span>
                                <li><a href="{{url('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                        @else
                        <div class="auth-block fr">
                            <ul>
                                <li><a href="{{url('member')}}">Login</a></li>
                                <li><a href="{{url('member/create')}}">Register</a></li>
                            </ul>
                        </div>
                        @endif
                        <div class="clr"></div>
                    </div>
                </div>
                <div id="top-head" class="mobile-only">
                    <div class="container">
                        <div class="menu-mobile-nav fl">
                            <a href="#menu-mobile"></a>
                            <nav id="menu-mobile">
                                <ul>
                                    @foreach(category_menu() as $mmenu)
                                    @if($mmenu->parent == '0')
                                    <li>
                                        <a tabindex="-1" href="{{category_url($mmenu)}}">{{$mmenu->nama}}</a>
                                        @if($mmenu->anak->count() > 0)
                                        <ul>
                                            @foreach($mmenu->anak as $msubmenu)
                                            @if($msubmenu->parent == $mmenu->id)
                                            <li>
                                                <a href="{{category_url($msubmenu)}}">{{$msubmenu->nama}}</a>
                                                @if($msubmenu->anak->count() > 0)
                                                <ul>
                                                    @foreach($msubmenu->anak as $msubmenu2)
                                                    @if($msubmenu2->parent == $msubmenu->id)
                                                    <li><a href="{{category_url($msubmenu2)}}">{{$msubmenu2->nama}}</a></li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        <div class="user-info fr">
                            @if( is_login() )
                            <a href="{{url('logout')}}" title="Logout"><span><i class="fa fa-sign-out"></i></span></a>
                            @endif
                            <a href="{{url('checkout')}}" title="Checkout"><span><i class="fa fa-shopping-cart"></i></span></a>
                            <a href="{{url('member')}}" title="Member"><span><i class="fa fa-user"></i></span></a>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
                <div id="center-header">
                    <div class="container">
                        <div class="row">
                            <div id="logo" class="col-xs-12 col-sm-12 col-md-3">
                                <a href="{{url('/')}}"><img src="{{url(logo_image_url())}}" alt="Logo {{Theme::place('title')}}" width="200" /></a>
                            </div>
                            <div id="search-top" class="col-xs-12 col-sm-9 col-md-7">
                                <form id="header-search" class="navbar-form" role="search" action="{{url('search')}}" method="post">
                                    <div id="edit-query-wrapper" class="views-exposed-widget views-widget-filter-search_api_views_fulltext">
                                        <div class="input-group">
                                            <div class="nav-left"></div>
                                            <span class="nav-right input-group-btn">
                                                <button class="btn btn-danger btn btn-primary btn btn-primary form-submit" id="edit-submit-display-products" value="Cari" type="submit"><span class="ladda-label">Cari</span><span class="ladda-spinner"></span></button>
                                            </span>
                                            <div class="nav-fill">
                                                <div class="input-search">
                                                    <input placeholder="Cari produk, kategori, atau merk" class="form-control form-text" id="edit-query" name="search" size="26" maxlength="128" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <div id="shopping-cart" class="col-xs-12 col-sm-3 col-md-2 desktop-only">
                                <div id="shoppingcartplace">{{ shopping_cart() }}</div>
                            </div>
                            
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>

                <nav id="menu" class="navbar navbar-default desktop-only" role="navigation">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="all_categories dropdown">
                                    <a href="#" data-toggle="dropdown"><i class="fa fa-list"></i> Semua Kategori</a>
                                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                        @foreach(category_menu() as $allmenu)
                                        @if($allmenu->parent == '0')
                                        <li class="dropdown-submenu">
                                            @if($allmenu->anak->count() > 0)
                                            <a tabindex="-1" href="{{category_url($allmenu)}}">{{ $allmenu->nama }}</a>
                                            <ul class="dropdown-menu">
                                                @foreach($allmenu->anak as $submenu)
                                                @if($submenu->parent == $allmenu->id)
                                                <li {{$submenu->anak->count() > 0 ? 'class="dropdown-submenu"' : ''}}>
                                                    <a href="{{category_url($submenu)}}">{{ $submenu->nama }}</a>
                                                    @if($submenu->anak->count() > 0)
                                                    <ul class="dropdown-menu">
                                                        @foreach($submenu->anak as $submenu2)
                                                        @if($submenu2->parent == $submenu->id)
                                                        <li><a href="{{category_url($submenu2)}}">{{ $submenu2->nama }}</a></li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                            @else
                                            <a tabindex="-1" href="{{category_url($allmenu)}}" class="nochild">{{ $allmenu->nama }}</a>
                                            @endif
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @foreach(category_menu() as $menu)
                                @if($menu->parent == '0')
                                <li><a href="{{ category_url($menu) }}">{{ $menu->nama }}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="clr"></div>
            </header>