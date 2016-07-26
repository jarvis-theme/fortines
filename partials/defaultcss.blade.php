<!-- Default css-->
{{generate_theme_css('fortines/assets/css/bootstrap.min.css')}} 
{{generate_theme_css('fortines/assets/css/font.css')}} 

@if($tema->isiCss=='')
	{{generate_theme_css('fortines/assets/css/style.css?v=001')}} 
@else
	{{generate_theme_css('fortines/assets/css/editstyle.css?v=001')}} 
@endif

{{favicon()}} 