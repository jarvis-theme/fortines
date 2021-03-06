<section class="home-panel promo">
    <div class="containers">
        <div class="row-fluid">
        
            <h1>{{ Theme::place('title') }}</h1>
            <p>{{about_us()->isi}}</p>
        
        </div>
    </div>
</section>

<div class="container home">
    <section class="feat">
        <div class="row">
            <div class="span12">
                <h6 class="subhead"><strong>PRODUK UNGGULAN</strong></h6>
                <div class="tab-content row">
                    @foreach(home_product() as $key=>$myproduk)
                    <div class="tab-pane active" id="feat">
                        <article id="popular" class="span4">
                            @if(is_outstok($myproduk)) 
                            {{is_outstok($myproduk)}} 
                            @elseif(is_terlaris($myproduk)) 
                            {{is_terlaris($myproduk)}} 
                            @elseif(is_produkbaru($myproduk)) 
                            {{is_produkbaru($myproduk)}} 
                            @endif

                            <div class="view view-thumb">
                                <img id="img-popular" src="{{URL::to(product_image_url($myproduk->gambar1,'medium'))}}" alt="{{$myproduk->nama}}" title="{{$myproduk->nama}}" asd>
                                <div class="mask">
                                    <h2>{{price($myproduk->hargaJual,$matauang)}}</h2>
                                    <p>{{short_description($myproduk->deskripsi,100)}}</p>
                                    <a href="{{product_url($myproduk)}}" class="info">Beli</a>
                                </div>
                            </div>

                            <p class="product-title"><a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama, 20)}}</a></p>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
