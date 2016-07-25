<div class="header-container">
<div class="container welcome">
<div class="row-fluid">
<div class="pull-left greet">
@if ( !is_login() )
Selamat berbelanja, {{HTML::link('member', 'Login')}}
@else
Selamat datang {{HTML::link('member', user()->nama)}}, {{HTML::link('logout', 'logout')}}
@endif
</div>
<div class="pull-right cart tleft" id='shoppingcartplace'>
{{shopping_cart()}}
</div>
</div>
</div>
<div class="container head">
<div class="row">
<div class="span12 clearfix">
<div class="top row">
<div class="span8 logo image">
<a href="{{url('home')}}">
<img src="{{url(logo_image_url())}}" alt="{{ Theme::place('title') }}" />
</a>
</div>
<div class="cart span4">
<form action="{{url('search')}}" class="topsearch" method='post'>
<input type="search" class="top-search" placeholder="Search" name="search" required/>
<button type="submit"><i class="icon-search"></i></button>
</form>
</div>
</div>
</div>
<div class="span12" >
<marquee behavior='scroll' direction='left' onmouseout='this.start()' onmouseover='this.stop()' scrollamount='4' scrolldelay='0'><a href='//www.jdoqocy.com/86104iqzwqyDMEHHMMEDFFLFEHFEDFIIFKHGNKMEEE' rel='nofolow' target='_blank'><img src='http://www.lduhtrp.net/sm68g04tzxIRJMMRRJIKKQKJMKJIKNNKPMLSPRJJJ'/></a>
<span style='padding-left: 20px;'><a href='//www.tkqlhce.com/ak108kjspjr6F7AAFF7688EGAEAE68AGGDC7CDD777' rel='nofolow' target='_blank'><img src='http://www.awltovhc.com/7n65h48x20MVNQQVVNMOOUWQUQUMOQWWTSNSTTNNN'/></a></span>
<span style='padding-left: 20px;'><a href="//www.idevdirect.com/14721449.html" target="_blank" rel="nofolow"><img src="http://www.idevdirect.com/affiliates/media/banners/728x90b.gif"></a></span></marquee>
</div>
</div>
<div class="span12" style="text-align: center;padding: 0px;">
</div>
<div class="container-menu">
<div class="container">
<div class="row">
<div class="span12">
<nav class="horizontal-nav full-width">
<ul class="nav" id="nav">
@foreach(main_menu()->link as $key=>$link)
<li><a href="{{menu_url($link)}}">{{$link->nama}}</a></li>
@endforeach
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>