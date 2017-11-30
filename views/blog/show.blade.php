        <div class="breadcrumb">
            <p>Detail Blog</p>
        </div>
        <div class="inner-column row">
            <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
                @if(count(list_blog_category()) > 0)
                <div id="categories" class="block">
                    <div class="title side-title"><h2>Kategori Blog</h2></div>
                    <ul class="block-content">
                    @foreach(list_blog_category() as $kat)
                        @if(!empty($kat->nama)) 
                        <li><a href="{{blog_category_url($kat)}}">{{$kat->nama}} </a></li>
                        @endif
                    @endforeach
                    </ul>
                </div>
                @endif
                @if(count(best_seller()) > 0)
                <div id="best-seller" class="block">
                    <div class="title"><h2>Produk Terlaris</h2></div>
                    <ul class="block-content">
                        @foreach(best_seller(5, null) as $bestproduk )
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
                    <div class="btn-more"><a href="{{url::to('produk')}}">Produk Lainnya</a></div>
                </div>
                @endif
                @if(count(recentBlog(null,5)) > 0)
                <div id="latest-news" class="block">
                    <div class="title"><h2>Artikel Terbaru</h2></div>
                    <ul class="block-content">
                        @foreach(recentBlog(null,5) as $artikel)
                        <li>
                            <div class="img-block"></div>
                            <h5 class="title-news">{{short_description($artikel->judul, 20)}}</h5>
                            <p>{{short_description($artikel->isi, 46)}} <a class="read-more" href="{{blog_url($artikel)}}">Selengkapnya</a></p>
                            <span class="date-post">{{date("F d, Y", strtotime($artikel->created_at))}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div id="center_column" class="inner-bg col-lg-9 col-xs-12 col-sm-8">
                <div class="tabs-description">
                    <h3 class="title">{{$detailblog->judul}}</h3>
                    <p class="col-xs-12 col-sm-6 blogtag">
                        <small><i class="fa fa-calendar"></i> {{waktuTgl($detailblog->created_at)}}</small>&nbsp;&nbsp;
                        @if(!empty($detailblog->kategori->nama))
                        <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$detailblog->kategori)}}">{{@$detailblog->kategori->nama}}</a></span>
                        @endif
                    </p>
                    <div class="col-xs-12 col-sm-6 sosmed">{{sosialShare(blog_url($detailblog))}}</div>
                    <br><br>
                    <p>{{$detailblog->isi}}</p>
                    <hr>
                    <div class="navigate comments clearfix">
                        @if(isset($prev))
                        <div class="pull-left"><a href="{{$prev->slug}}">&larr; Sebelumnya</a></div>
                        @else
                        <div class="pull-right"></div>
                        @endif
                        @if(isset($next))
                        <div class="pull-right"><a class="fr" href="{{$next->slug}}">Selanjutnya &rarr;</a></div>
                        @else
                        <div class="pull-right"></div>
                        @endif
                    </div>
                    <hr>
                </div>
                {{$fbscript}}
                {{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}}
            </div>
        </div>