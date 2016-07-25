<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }}
        {{ Theme::partial('defaultcss') }}
        {{ Theme::asset()->styles() }}
<!-- <link media="all" type="text/css" rel="stylesheet" href="//onlinemarchandise.com/css/jquery.noty.css"> -->
<!-- <link media="all" type="text/css" rel="stylesheet" href="//onlinemarchandise.com/css/noty_theme_default.css"> -->
<!-- <link media="all" type="text/css" rel="stylesheet" href="//onlinemarchandise.com/css/jquery-ui.css"> -->
<!-- <link media="all" type="text/css" rel="stylesheet" href="//onlinemarchandise.com/css/data-dialog.css"> -->
        <style type="text/css">#tag-category{padding-left: 5px}</style>
    </head>
    <body>
        {{ Theme::partial('header') }}
        {{ Theme::partial('slider') }}
        <div class="container">
            {{ Theme::place('content') }}
        </div>
        {{ Theme::partial('footer') }}
        {{ Theme::partial('defaultjs') }}   
        {{ Theme::partial('analytic') }}
    </body>
</html>