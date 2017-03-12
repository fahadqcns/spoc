<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Mobilink Spoc Request Management Portal">
    <meta name="keywords" content="mobilink, mobilinkgsm, spoc portal, mobilink spoc portal, mobilinkgsm spoc portal,
    mobilink request management, spoc request management, spoc request, spoc management" />
    <meta name="author" content="Evamp &amp; Saanga - www.evampsaanga.com">
    <title>{{$title}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{$SITE_URL}}/images/favicon.ico">
    <link rel="stylesheet" href="{{$SITE_URL}}/css/jquery-ui.css" />
    <link rel="stylesheet" href="{{$SITE_URL}}/css/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{$SITE_URL}}/css/style.css" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

</head>
<body>

<div class="main-wrapper">
    <div class="header-wrapper">
        <div class="logo"> <a href="index.php"><img src="{{$SITE_URL}}/images/detail_03.png" border="0" /></a>
            <input type="hidden" id="site_url" value="{{$SITE_URL}}" />
        </div>
        <div class="spoc"> <span>Hello, </span><br />
            <span></span><br />
            <br />
    <span id="logout-btn">
      <form name="logout" method="post" action="{{$SITE_URL}}/controller/logout.php">
          <input type="hidden" name="token" value="" />
      </form>
    	<a class="logout" href="#" onclick="document.logout.submit(); return false">LogOut</a>
    </span>
        </div>
        <div class="navigation">
        </div>
        <div class="clear"></div>
    </div>

    @yield('slider')

    @yield('content')

    <div class="clear"></div>
    <footer>&copy; Copyrights  Mobilink. All Rights Reserved. Powered By:
        <a href="http://www.evampsaanga.com" target="_blank">Evamp &amp; Saanga</a></footer>

</div>

<script src="{{$SITE_URL}}/js/jquery-1.11.1.min.js"></script>
<script src="{{$SITE_URL}}/js/jquery-ui.min.js"></script>
<!-- custom js code start -->
<script src="{{$SITE_URL}}/spoc/js/menu.js"></script>


</body>
</html>