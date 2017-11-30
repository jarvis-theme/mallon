        <div class="breadcrumb">
            <p>Syarat dan Ketentuan</p>
        </div>
        <div class="inner-column row">
            <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
                @if(count(best_seller()) > 0)
                <div id="best-seller" class="block">
                    <div class="title"><h2>Produk <strong>Terlaris</strong></h2></div>
                    <ul class="block-content">
                        @foreach(best_seller(5, null) as $bestproduk)
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
                    <div class="btn-more"><a href="{{url::to('produk')}}">produk lainnya</a></div>
                </div>
                @endif
                @if(count(list_blog()) > 0)
                <div id="latest-news" class="block">
                    <div class="title"><h2>Artikel <strong>Terbaru</strong></h2></div>
                    <ul class="block-content">
                        @foreach(list_blog(5) as $artikel)
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
                <div class="register-page">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h2 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Kebijakan Layanan
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>{{$service->tos}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h2 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Kebijakan Pengembalian
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>{{$service->refund}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h2 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Kebijakan Privasi
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>{{$service->privacy}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>