        <div class="breadcrumb">
            <p>{{$data->judul}}</p>
        </div>
        <div class="inner-column row">
            <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
                @if(best_seller()->count() > 0)
                <div id="best-seller" class="block">
                    <div class="title"><h2>Best <strong>Seller</strong></h2></div>
                    <ul class="block-content">
                        @foreach(best_seller(5, null) as $best)
                        <li>
                            <a href="{{product_url($best)}}">
                                <div class="img-block">
                                    <img src="{{product_image_url($best->gambar1, 'thumb')}}" width="81" height="81" alt="{{$best->nama}}" />
                                </div>
                                <p class="product-name">{{short_description($best->nama, 15)}}</p>
                                <p class="price">{{price($best->hargaJual)}}</p> 
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="btn-more">
                        <a href="{{url('produk')}}">Produk Lainnya</a>
                    </div>
                </div>
                @endif
                @foreach(vertical_banner(5) as $side_banner)
                <div id="adv-sidebar" class="block">
                    <a href="{{url($side_banner->url)}}">
                        <img class="img-responsive" src="{{url(banner_image_url($side_banner->gambar))}}" width="270" alt="Info Promo" />
                    </a>
                </div>
                @endforeach
            </div>
            <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
                <h1 class="cms-title">{{$data->judul}}</h1>
                <div class="cms par2">
                    <h3>{{$data->isi}}</h3>
                </div>
            </div>
        </div>