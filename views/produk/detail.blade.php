        <div class="inner-column row">
            <div id="center_column" class="col-lg-12 col-xs-12 col-sm-12">
                <div class="product-details">
                    <form action="#" id="addorder">
                        <div class="row">
                            <div id="prod-left" class="col-lg-4 col-xs-12 col-sm-4">
                                <div class="big-image">
                                    <img src="{{product_image_url($produk->gambar1, 'medium')}}" srcset="{{product_image_url($produk->gambar1, 'thumb')}} 768w, {{product_image_url($produk->gambar1, 'large')}} 1200w" width="899" alt="{{$produk->nama}}" />
                                    <a class="zoom fancybox" href="{{product_image_url($produk->gambar1, 'large')}}" title="{{$produk->nama}}">&nbsp;</a>
                                </div>
                                <div id="thumb-view">
                                    <ul id="thumb-list" class="owl-carousel owl-theme">
                                        @if($produk->gambar1 != '')
                                        <li class="item">
                                            <a class="zoom fancybox" href="{{product_image_url($produk->gambar1,'large')}}" title="{{$produk->nama}}">
                                            {{HTML::image(product_image_url($produk->gambar1,'thumb'),'gambar1',array('width'=>'130'))}}
                                            </a>
                                        </li>
                                        @endif
                                        @if($produk->gambar2 != '')
                                        <li class="item">
                                            <a class="zoom fancybox" href="{{product_image_url($produk->gambar2,'large')}}" title="{{$produk->nama}}">
                                            {{HTML::image(product_image_url($produk->gambar2,'thumb'),'gambar2',array('width'=>'130'))}}
                                            </a>
                                        </li>
                                        @endif
                                        @if($produk->gambar3 != '')
                                        <li class="item">
                                            <a class="zoom fancybox" href="{{product_image_url($produk->gambar3,'large')}}" title="{{$produk->nama}}">
                                            {{HTML::image(product_image_url($produk->gambar3,'thumb'),'gambar3',array('width'=>'130'))}}
                                            </a>
                                        </li>
                                        @endif
                                        @if($produk->gambar4 != '')
                                        <li class="item">
                                            <a class="zoom fancybox" href="{{product_image_url($produk->gambar4,'large')}}" title="{{$produk->nama}}">
                                            {{HTML::image(product_image_url($produk->gambar4,'thumb'),'gambar4',array('width'=>'130'))}}
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div id="prod-center" class="col-lg-5 col-xs-12 col-sm-5">
                                <h2 class="name-title">{{$produk->nama}}</h2>
                                <div class="content_price">
                                    <span class="lbl"><strong>Harga :</strong></span>
                                    <span class="price">{{price($produk->hargaJual)}}</span>
                                    @if(!empty($produk->hargaCoret))
                                    <span class="old-price">{{price($produk->hargaCoret)}}</span>
                                    @endif
                                </div>
                                
                                <div class="desc-prod">
                                    <p class="title">Deskripsi Produk :</p>
                                    <p>{{short_description($produk->deskripsi, 220)}}</p>
                                </div>
                                <div class="size-list">
                                    <div class="form-group">
                                        @if($opsiproduk->count() > 0)
                                        <label class="control-label">Opsi :</label>
                                        <div class="inlineblock">
                                            <div class="select-style">
                                                <select class="form-control">
                                                    <option value="">-- Pilih Opsi --</option>
                                                    @foreach ($opsiproduk as $key => $opsi)
                                                    <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}}>{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="jumlah">
                                    <div class="form-group">
                                        <label class="control-label">Jumlah :</label>
                                        <div class="inlineblock">
                                            <button type='button' class='qtyminus' field='qty' /><i class="fa fa-caret-left"></i></button>
                                            <input type='text' name='qty' value='1' class='qty' />
                                            <button type='button' value='+' class='qtyplus' field='qty' /><i class="fa fa-caret-right"></i></button>
                                        </div>
                                        <span class="clearfix"></span>
                                     </div>
                                </div>
                                @if($produk->stok > 0)
                                <div class="avail-info">
                                    <span class="instock">Stok tersedia, <span class="ttl-stock">{{ $produk->stok }} item</span></span>
                                </div>
                                @else
                                <div class="noavail-info">
                                    <span class="fa-stack fa-1x">
                                        <i id="iconstocks" class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-close fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <span class="instock">  Stok kosong</span>
                                </div>
                                @endif
                                <div class="button_block">
                                    <button class="btn addtocart" type="submit"><i class="cart"></i> Tambahkan ke Troli</button>
                                </div>

                            </div>
                            <div id="prod-right" class="col-lg-3 col-xs-12 col-sm-3">
                                <div class="supplier_block">
                                    <div class="content">
                                        <div>
                                            {{ sosialShare(product_url($produk)) }}
                                        </div>
                                        <p class="n_supplier"></p>
                                        <div class="packing">
                                            <h4>Detail Barang</h4>
                                            <p>Berat (gram) : {{ $produk->berat }}</p>
                                            <p>Vendor : {{ $produk->vendor == '' ? '' : $produk->vendor }}</p>
                                        </div>
                                        <div class="est_shipping">
                                            <h4>Pengiriman</h4>
                                            <p>Untuk wilayah Jabodetabek 4 - 9 hari kerja dan Luar Jabodetabek 6-14 hari kerja.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </form>
                </div>
                
                <div id="more_info">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#desc_detail" aria-controls="desc_detail" role="tab" data-toggle="tab">Deskripsi Produk</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="profile" role="tab" data-toggle="tab">Review</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="desc_detail">
                            <p>{{$produk->deskripsi}}</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="reviews">
                            {{ pluginTrustklik() }}
                        </div>
                    </div>
                </div>
                @if(other_product($produk)->count() > 0)
                <div id="related-product" class="product-list">
                    <h2>Produk Sejenis Lainnya</h2>
                    <div class="row">
                        <ul class="grid">
                            @foreach(other_product($produk, 8) as $relproduk)
                            <li class="col-md-3 col-sm-6 col-xs-6">
                                <div class="prod-container">
                                    <a href="{{product_url($relproduk)}}">
                                        <div class="image-container">
                                            <img class="img-responsive" src="{{product_image_url($relproduk->gambar1, 'medium')}}" srcset="{{product_image_url($relproduk->gambar1, 'large')}} 1200w" alt="{{$relproduk->nama}}" />
                                            @if(is_outstok($relproduk))
                                            <div class="icon-info icon-sold">KOSONG</div>
                                            @elseif(is_terlaris($relproduk))
                                            <div class="icon-info icon-promo">TERLARIS</div>
                                            @elseif(is_produkbaru($relproduk))
                                            <div class="icon-info icon-new">BARU</div>
                                            @endif
                                        </div>
                                        <h5 class="product-name">{{short_description($relproduk->nama, 25)}}</h5>
                                        <span class="price">{{price($relproduk->hargaJual)}}</span>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>