        <h2 class="title">Koleksi Produk</h2>
        <div id="banner">
            <div class="category_banner">
                @foreach(horizontal_banner() as $main_banner)
                <img class="img-responsive" src="{{url(banner_image_url($main_banner->gambar))}}" alt="Info Promo" width="1170" height="284"/ >
                @endforeach
            </div>
            <div id="three_banner">
                <div class="row">
                    {{-- */ $total = vertical_banner()->count() /* --}}
                    @foreach(vertical_banner() as $side_banner)
                    @if($total == 1)
                    <div class="item col-xs-12">
                    @else
                    <div class="item col-xs-12 col-sm-4">
                    @endif
                        <a href="{{url($side_banner->url)}}">
                            <img class="img-responsive" src="{{url(banner_image_url($side_banner->gambar))}}" alt="Promo" / >
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="inner-column row">
            <div id="center_column" class="col-lg-12 col-xs-12 col-sm-12">
                <div class="product-list">
                    <div class="row">
                        <ul class="grid">
                            {{-- */ $i = 1 /* --}}
                            @foreach(list_product(null, @$category, @$collection) as $products)
                            <li class="col-md-3 col-sm-6 col-xs-6">
                                <div class="prod-container">
                                    <a href="{{product_url($products)}}">
                                        <div class="image-container">
                                            <img class="img-responsive" src="{{product_image_url($products->gambar1, 'medium')}}" srcset="{{product_image_url($products->gambar1, 'large')}} 1200w" alt="{{$products->nama}}" />
                                            @if(is_outstok($products))
                                            <div class="icon-info icon-sold">KOSONG</div>
                                            @elseif(is_terlaris($products))
                                            <div class="icon-info icon-promo">TERLARIS</div>
                                            @elseif(is_produkbaru($products))
                                            <div class="icon-info icon-new">BARU</div>
                                            @endif
                                        </div>
                                        <h5 class="product-name">{{short_description($products->nama, 25)}}</h5>
                                        <span class="price">{{price($products->hargaJual)}}</span>
                                    </a>
                                </div>
                            </li>
                                @if($i % 2 == 0)
                                <div class="clr visible-xs"></div>
                                @endif
                                @if($i % 4 == 0)
                                <div class="clr hidden-xs hidden-sm"></div>
                                @endif
                                {{-- */ $i++ /* --}}
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="clr"></div>
                @if(list_product(null, @$category, @$collection)->getTotal() > 0)
                <div class="content_sortPagiBar">
                    <div class="prod-count">
                        <p>Page <span class="bp-red">{{list_product(null, @$category, @$collection)->getFrom()}}</span> from <span class="bp-red">{{ceil(list_product(null, @$category, @$collection)->getTotal()/list_product(null, @$category, @$collection)->getPerPage())}} pages</span></p>
                    </div>
                    {{list_product(null, @$category, @$collection)->links()}}
                    <div class="clr"></div>
                </div>
                @endif
            </div>
        </div>