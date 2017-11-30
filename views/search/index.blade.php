        <div class="breadcrumb">
            <p>Search</p>
        </div>
        <div class="inner-column row">
            <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
                @if(count(best_seller()) > 0)
                <div id="best-seller" class="block">
                    <div class="title"><h2>Produk <strong>Terlaris</strong></h2></div>
                    <ul class="block-content">
                        @foreach(best_seller() as $bestproduk)
                        <li>
                            <a href="{{product_url($bestproduk)}}">
                                <div class="img-block">
                                    {{HTML::image(product_image_url($bestproduk->gambar1,'thumb'), $bestproduk->nama,array('title'=>$bestproduk->nama))}}
                                </div>
                                <p class="product-name">{{short_description($bestproduk->nama,12)}}</p>
                                <p class="price">{{price($bestproduk->hargaJual)}}</p> 
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="btn-more"><a href="{{url('produk')}}">Produk Lainnya</a></div>
                </div>
                @endif
                @foreach(vertical_banner(5) as $side_banner)
                <div id="adv-sidebar" class="block">
                    <a href="{{url($side_banner->url)}}">
                        <img class="img-responsive" src="{{url(banner_image_url($side_banner->gambar))}}" width="270" height="388" alt="Info Promo" />
                    </a>
                </div>
                @endforeach
            </div>
            
            @if($jumlahCari != 0)
                @if(count($hasilpro) > 0)
                <div id="center_column" class="col-xs-12 col-sm-8 col-lg-9">
                    <div class="product-list">
                        <div class="row">
                            <ul class="grid">
                                @foreach($hasilpro as $listproduk)
                                <li class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="prod-container">
                                        <a href="{{product_url($listproduk)}}">
                                            <div class="image-container">
                                                <img class="img-responsive" src="{{product_image_url($listproduk->gambar1, 'medium')}}" srcset="{{product_image_url($listproduk->gambar1, 'large')}} 1200w" alt="{{$listproduk->nama}}" />
                                                @if(is_outstok($listproduk))
                                                <div class="icon-info icon-sold">KOSONG</div>
                                                @elseif(is_terlaris($listproduk))
                                                <div class="icon-info icon-promo">TERLARIS</div>
                                                @elseif(is_produkbaru($listproduk))
                                                <div class="icon-info icon-new">BARU</div>
                                                @endif
                                            </div>
                                            <h5 class="product-name">{{short_description($listproduk->nama, 25)}}</h5>
                                            <span class="price">{{price($listproduk->hargaJual)}}</span>
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
                {{$hasilpro->links()}}
                @endif
                @if(count($hasilhal) > 0 || count($hasilblog) > 0)
                <div id="center_column" class="inner-bg col-xs-12 col-sm-8 col-lg-9 pull-right">
                    <div class="tabs-description">
                        @foreach($hasilhal as $hal)
                        <article class="col-lg-12">
                            <h3 class="title">{{$hal->judul}}</h3>
                            <p>
                                {{shortDescription($hal->isi,300)}}<br>
                                <a href="{{url('halaman/'.$hal->slug)}}" class="theme">Baca Selengkapnya →</a>
                            </p>
                        </article>
                        @endforeach
                        @foreach($hasilblog as $blog_result)  
                        <article class="col-lg-12">
                            <h3 class="title">{{$blog_result->judul}}</h3>
                            <p id="title-blog">
                                <small><i class="fa fa-calendar"></i> {{waktuTgl($blog_result->updated_at)}}</small>&nbsp;&nbsp;
                                <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$blog_result->kategori)}}">{{@$blog_result->kategori->nama}}</a></span>
                            </p>
                            <p>
                                {{short_description($blog_result->isi,300)}}<br>
                                <a href="{{blog_url($blog_result)}}" class="theme">Baca Selengkapnya →</a>
                            </p>
                            <hr>
                        </article>
                        @endforeach 
                    </div>
                </div>
                @endif
            @else
            <article class="text-center"><i>Hasil pencarian tidak ditemukan</i></article>
            @endif
        </div>