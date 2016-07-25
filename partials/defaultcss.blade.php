<!-- TradeDoubler site verification 2824625 -->
<!-- Default css-->
<!--<link media="all" type="text/css" rel="stylesheet" href="//onlinemarchandise.com/themes/2406-tema/tender/assets/css/bootstrap.min.css">
<link media="all" type="text/css" rel="stylesheet" href="//onlinemarchandise.com/themes/2406-tema/tender/assets/css/font.css">-->
{{generate_theme_css('tender/assets/css/bootstrap.min.css')}}
{{generate_theme_css('tender/assets/css/font.css')}}
@if($tema->isiCss=='')
<!--<link media="all" type="text/css" rel="stylesheet" href="//onlinemarchandise.com/themes/2406-tema/tender/assets/css/style.css">-->
{{generate_theme_css('tender/assets/css/style.css')}}
@else
<!--<link media="all" type="text/css" rel="stylesheet" href="//onlinemarchandise.com/themes/2406-tema/tender/assets/css/editstyle.css">-->
{{generate_theme_css('tender/assets/css/editstyle.css')}}
@endif
{{favicon()}}