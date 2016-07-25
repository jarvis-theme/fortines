<div class="container">
<section class="blog">
<div class="row">
<header class="span12 prime">
<h3>{{$detailblog->judul}}</h3>
<p><span class="date"><i class="icon-calendar"></i> {{date("d M Y", strtotime($detailblog->updated_at))}} <i class="icon-tag"></i><a href="{{blog_category_url(@$detailblog->kategori)}}"> {{@$detailblog->kategori->nama}}</a></span></p>
</header>
</div>
<div class="wrap">
<div class="row-fluid post">
<div class="span8">
<article>
<p>{{$detailblog->isi}}</p>
</article>
<hr>
<div class="share" id="sosmed">
<div id="twitter" data-url="{{Request::url();}}" data-text="{{$detailblog->slug}} | " data-title="Tweet"></div>
<div id="facebook" data-url="{{Request::url();}}" data-text="{{$detailblog->slug}}" data-title="Like"></div>
<div id="googleplus" data-url="{{Request::url();}}" data-text="{{$detailblog->slug}}" data-title="+1"></div>
<div id="delicious" data-url="{{Request::url();}}" data-text="{{$detailblog->slug}}"></div>
<div id="stumbleupon" data-url="{{Request::url();}}" data-text="{{$detailblog->slug}}"></div>
</div>
<br>
<hr>
<div class="navigate comments clearfix">
@if(isset($prev))
<div class="pull-left"><a href="{{$prev->slug}}">← Sebelumnya</a></div>
@else
<div class="pull-right"></div>
@endif
@if(isset($next))
<div class="pull-right"><a href="{{$next->slug}}">Selanjutnya →</a></div>
@else
<div class="pull-right"></div>
@endif
</div>
<div>
{{$fbscript}}
{{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}}
</div>
<hr>
</div>
<div class="span4 sidebar" style="pading: 0px 0px;">
<aside>
<p class="title"><i class="icon-rss"></i> <strong>Artikel Terbaru</strong></p>
<ul>
@foreach(list_blog(8) as $recent)
<li><a href="{{blog_url($recent)}}">{{$recent->judul}}</a><br /><small>diposting tanggal {{waktu($recent->updated_at)}}</small></li>
@endforeach
</ul>
</aside>
@if($detailblog->tags != "")
<aside class="clearfix tags">
<p class="title"><i class="icon-tag"></i> <strong>Tags</strong></p>
{{ getTags('<span class="underline"></span>',$detailblog->tags)}}
</aside>
@endif
<div class="span4 sidebar">
<iframe src="https://widgets.itunes.apple.com/widget.html?c=id&brc=FFFFFF&blc=FFFFFF&trc=FFFFFF&tlc=FFFFFF&d=&t=&m=software&e=macSoftware&w=250&h=300&ids=&wt=search&partnerId=&affiliate_id=&at=1000lcjg&ct=" frameborder=0 style="overflow-x:hidden;overflow-y:hidden;width:250px;height: 300px;border:0px"></iframe>
<aside>
</aside>
</div>
</div>
</div>
</div>
</section>
</div>