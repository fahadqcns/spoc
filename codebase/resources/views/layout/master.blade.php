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
</head>
<body>

<div class="main-wrapper">
    <div class="header-wrapper">
        <div class="logo">
            <a href="index.php"><img src="{{$SITE_URL}}/images/detail_03.png" border="0" /></a>
            <input type="hidden" id="site_url" value="{{$SITE_URL}}" />
        </div>
        <div class="spoc">
            <span>Hello, Khalid Hussain</span><br />
            <span>Redhorse Inc.</span><br /><br />
            <span id="logout-btn">
                <form name="logout" method="post" action="{{$SITE_URL}}/controller/logout.php">
                  <input type="hidden" name="token" value="" />
                </form>
                <a class="logout" href="#" onclick="document.logout.submit(); return false">LogOut</a>
            </span>
        </div>
        <div class="navigation">
            <ul id="main-menu">
                <li><a href="index.php">Home</a></li>
                <li><a id="new-ord" href="#">New Orders</a>
                    <ul>
                        <li><a href="{{$SITE_URL}}/order/devices.php">Devices</a></li>
                        <li><a href="{{$SITE_URL}}/order/international-services.php">International Services</a></li>
                        <li><a href="{{$SITE_URL}}/order/account-details.php">Account Details</a></li>
                        <li><a href="{{$SITE_URL}}/order/duplicate-bill.php">Duplicate Bill</a></li>
                        <li><a href="{{$SITE_URL}}/order/complaints.php">Complaints</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>

    @yield('slider')

    @yield('content')

    <div class="clear"></div>
    <footer>Copyrights &copy; {{ date('Y') }}, RedHorse Inc.</footer>

</div>

<script src="{{$SITE_URL}}/js/jquery-1.11.1.min.js"></script>
<script src="{{$SITE_URL}}/js/jquery-ui.min.js"></script>
<!-- custom js code start -->
<script src="{{$SITE_URL}}/js/menu.js"></script>


</body>
</html>