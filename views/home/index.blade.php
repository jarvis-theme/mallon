        <div class="floor-elevator-block">
            <div class="floor-elevator-bar">
                <ul class="floor-menu">
                    <li class="floor-icon floor-gallery">
                        <a class="scrollmenu" href="#floor-g"><span class="icon-0"></span></a>
                    </li>
                    <li class="floor-icon">
                        <a class="scrollmenu" href="#floor-2" title="Best Seller"><span class="no-background fa fa-heart-o"></span></a>
                    </li>
                    <li class="floor-icon">
                        <a class="scrollmenu" href="#floor-3" title="New Product"><span class="no-background fa fa-bullhorn"></span></a>
                    </li>
                    <li class="floor-icon floor-electronic">
                        <a class="scrollmenu" href="#floor-5" title="My Collection"><span class="icon-5"></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="inner-column row">
            <div id="center_column" class="col-lg-12 col-xs-12 col-sm-12">
                <div id="floor-g" class="product_home row-floor-wrapper floor-wrapper-g">
                    <div class="row">
                        @foreach(horizontal_banner() as $main_banner)
                        <div id="left-g" class="col-xs-12 center">
                            <a href="{{url($main_banner->url)}}" title="Lihat Detail">
                                <img class="img-responsive" src="{{url(banner_image_url($main_banner->gambar))}}" alt="Promo">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @if(best_seller()->count() > 0)
                <div id="floor-2" class="product_home row-floor-wrapper floor-wrapper-2">
                    <div class="block-title">
                        <h2><i class="icon-title fa fa-heart-o"></i> <strong>Best Seller</strong></h2>
                    </div>
                    <div class="product-block">
                        <div class="row">
                            {{-- */ $i=0 /* --}}
                            @foreach(best_seller(7) as $best)
                            @if($i == 0)
                            <div id="left-g" class="col-xs-40 col-sm-40">
                                <a class="img-home" href="{{product_url($best)}}" title="{{$best->nama}}">
                                    <img class="img-responsive imgwidth" src="{{product_image_url($best->gambar1,'medium')}}" srcset="{{product_image_url($best->gambar1, 'thumb')}} 360w, {{product_image_url($best->gambar1, 'medium')}} 768w, {{product_image_url($best->gambar1, 'large')}} 1200w" width="463" alt="{{$best->nama}}">
                                    <div class="capt-btm main-capt">
                                        <span class="name fl">{{$best->nama}}</span>
                                        <span class="price fr">{{price($best->hargaJual)}}</span>
                                    </div>
                                </a>
                            </div>
                            <div id="center-g" class="col-xs-80 col-sm-80">
                                <div class="row">
                            @else
                                    <div class="col-xs-20 col-sm-20">
                                        <a class="rel_block" href="{{product_url($best)}}" title="Lihat Detail">
                                            <img class="img-responsive imgwidth" src="{{product_image_url($best->gambar1, 'medium')}}" srcset="{{product_image_url($best->gambar1, 'thumb')}} 768w, {{product_image_url($best->gambar1, 'large')}} 1200w" alt="{{$best->nama}}">
                                            <div class="capt-btm">
                                                <span class="nametag name fl">{{$best->nama}}</span>
                                                <span class="pricetag price fr">{{price($best->hargaJual)}}</span>
                                            </div>
                                        </a>
                                    </div>
                                    @if($i % 2 == 0)
                                    <div class="clr visible-xs"></div>
                                    @elseif($i % 3 == 0)
                                    <div class="clr hidden-xs"></div>
                                    @endif
                            @endif
                                    {{-- */ $i++; /* --}}
                            @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(new_product()->count() > 0)
                <div id="floor-3" class="product_home row-floor-wrapper floor-wrapper-3">
                    <div class="block-title">
                        <h2><i class="icon-title fa fa-bullhorn"></i> <strong>New Product</strong></h2>
                    </div>
                    <div class="product-block">
                        <div class="row">
                            {{-- */ $j=0 /* --}}
                            @foreach(new_product(7) as $new)
                            @if($j == 0)
                            <div id="left-g" class="col-xs-40 col-sm-40">
                                <a class="img-home" href="{{product_url($new)}}" title="{{$new->nama}}">
                                    <img class="img-responsive imgwidth" src="{{product_image_url($new->gambar1, 'medium')}}" srcset="{{product_image_url($new->gambar1, 'thumb')}} 360w, {{product_image_url($new->gambar1, 'medium')}} 768w, {{product_image_url($new->gambar1, 'large')}} 1200w" width="463" alt="{{$new->nama}}">
                                    <div class="capt-btm main-capt">
                                        <span class="name fl">{{$new->nama}}</span>
                                        <span class="price fr">{{price($new->hargaJual)}}</span>
                                    </div>
                                </a>
                            </div>
                            <div id="center-g" class="col-xs-80 col-sm-80">
                                <div class="row">
                            @else
                                    <div class="col-xs-20 col-sm-20">
                                        <a class="rel_block" href="{{product_url($new)}}" title="Lihat Detail">
                                            <img class="img-responsive imgwidth" src="{{product_image_url($new->gambar1, 'medium')}}"srcset="{{product_image_url($new->gambar1, 'thumb')}} 768w, {{product_image_url($new->gambar1, 'large')}} 1200w" alt="{{$new->nama}}">
                                            <div class="capt-btm">
                                                <span class="nametag name fl">{{$new->nama}}</span>
                                                <span class="pricetag price fr">{{price($new->hargaJual)}}</span>
                                            </div>
                                        </a>
                                    </div>
                                    @if($j % 2 == 0)
                                    <div class="clr visible-xs"></div>
                                    @elseif($j % 3 == 0)
                                    <div class="clr hidden-xs"></div>
                                    @endif
                            @endif
                                    {{-- */ $j++; /* --}}
                            @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                
                <div id="floor-5" class="product_home row-floor-wrapper floor-wrapper-5">
                    <div class="block-title">
                        <h2><i class="icon-title"><img src="{{url(dirTemaToko().'mallon/assets/images/ico-electronic.png')}}" width="21" height="33" alt="My Collection"></i> <strong>My Collection</strong></h2>
                    </div>
                    <div class="product-block">
                        <div class="row">
                            {{-- */ $k=0 /* --}}
                            @foreach(home_product(7) as $home)
                            @if($k == 0)
                            <div id="left-g" class="col-xs-40 col-sm-40">
                                <a class="img-home" href="{{product_url($home)}}" title="{{$home->nama}}">
                                    <img class="img-responsive imgwidth" src="{{product_image_url($home->gambar1, 'medium')}}" srcset="{{product_image_url($home->gambar1, 'thumb')}} 360w, {{product_image_url($home->gambar1, 'medium')}} 768w, {{product_image_url($home->gambar1, 'large')}} 1200w" width="463" alt="{{$home->nama}}">
                                    <div class="capt-btm main-capt">
                                        <span class="name fl">{{$home->nama}}</span>
                                        <span class="price fr">{{price($home->hargaJual)}}</span>
                                    </div>
                                </a>
                            </div>
                            <div id="center-g" class="col-xs-80 col-sm-80">
                                <div class="row">
                            @else
                                    <div class="col-xs-20 col-sm-20">
                                        <a class="rel_block" href="{{product_url($home)}}" title="Lihat Detail">
                                            <img class="img-responsive imgwidth" src="{{product_image_url($home->gambar1, 'medium')}}" srcset="{{product_image_url($home->gambar1, 'thumb')}} 768w, {{product_image_url($home->gambar1, 'large')}} 1200w" alt="{{$home->nama}}">
                                            <div class="capt-btm">
                                                <span class="nametag name fl">{{short_description($home->nama, 15)}}</span>
                                                <span class="pricetag price fr">{{price($home->hargaJual)}}</span>
                                            </div>
                                        </a>
                                    </div>
                                    @if($k % 2 == 0)
                                    <div class="clr visible-xs"></div>
                                    @elseif($k % 3 == 0)
                                    <div class="clr hidden-xs"></div>
                                    @endif
                            @endif
                                    {{-- */ $k++; /* --}}
                            @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>