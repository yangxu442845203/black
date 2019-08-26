<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
 <!--<![endif]-->
 <head> 
  <meta charset="utf-8" /> 
  <!-- Viewport Metatag --> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0" /> 
  <!-- Plugin Stylesheets first to ease overrides --> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/plugins/colorpicker/colorpicker.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/custom-plugins/wizard/wizard.css" media="screen" /> 
  <!-- Required Stylesheets --> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/bootstrap/css/bootstrap.min.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/css/fonts/ptsans/stylesheet.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/css/fonts/icomoon/style.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/css/mws-style.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/css/icons/icol16.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/css/icons/icol32.css" media="screen" /> 
  <!-- Demo Stylesheet --> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/css/demo.css" media="screen" /> 
  <!-- jQuery-UI Stylesheet --> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/jui/css/jquery.ui.all.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/jui/jquery-ui.custom.css" media="screen" /> 
  <!-- Theme Stylesheet --> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/css/mws-theme.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/css/themer.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/Admins/css/my.css" media="screen" /> 
  <title>@yield("title")</title> 
 </head> 
 <body> 
  <!-- Header --> 
  <div id="mws-header" class="clearfix"> 
   <!-- Logo Container --> 
   <div id="mws-logo-container"> 
    <!-- Logo Wrapper, images put within this wrapper will always be vertically centered --> 
    <div id="mws-logo-wrap"> 
     <img src="/static/Admins/images/mws-logo.png" alt="mws admin" /> 
    </div> 
   </div> 
   <!-- User Tools (notifications, logout, profile, change password) --> 
   <div id="mws-user-tools" class="clearfix"> 
    <!-- Notifications --> 
    <div id="mws-user-notif" class="mws-dropdown-menu"> 
     <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a> 
     <!-- Unread notification count --> 
     <span class="mws-dropdown-notif">35</span> 
     <!-- Notifications dropdown --> 
     <div class="mws-dropdown-box"> 
      <div class="mws-dropdown-content"> 
       <ul class="mws-notifications"> 
        <li class="read"> <a href="#"> <span class="message"> Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="read"> <a href="#"> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="#"> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="#"> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
       </ul> 
       <div class="mws-dropdown-viewall"> 
        <a href="#">View All Notifications</a> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!-- Messages --> 
    <div id="mws-user-message" class="mws-dropdown-menu"> 
     <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a> 
     <!-- Unred messages count --> 
     <span class="mws-dropdown-notif">35</span> 
     <!-- Messages dropdown --> 
     <div class="mws-dropdown-box"> 
      <div class="mws-dropdown-content"> 
       <ul class="mws-messages"> 
        <li class="read"> <a href="#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="read"> <a href="#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
       </ul> 
       <div class="mws-dropdown-viewall"> 
        <a href="#">View All Messages</a> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!-- User Information and functions section --> 
    <div id="mws-user-info" class="mws-inset"> 
     <!-- User Photo --> 
     <div id="mws-user-photo"> 
      <img src="/static/Admins/example/profile.jpg" alt="User Photo" /> 
     </div> 
     <!-- Username and Functions --> 
     <div id="mws-user-functions"> 
      <div id="mws-username">
        Hello, {{session('adminname')}} 
      </div> 
      <ul> 
       <li><a href="#">Profile</a></li> 
       <li><a href="#">Change Password</a></li> 
       <li><a href="/adminlogin">退出</a></li> 
      </ul> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- Start Main Wrapper --> 
  <div id="mws-wrapper"> 
   <!-- Necessary markup, do not remove --> 
   <div id="mws-sidebar-stitch"></div> 
   <div id="mws-sidebar-bg"></div> 
   <!-- Sidebar Wrapper --> 
   <div id="mws-sidebar"> 
    <!-- Hidden Nav Collapse Button --> 
    <div id="mws-nav-collapse"> 
     <span></span> 
     <span></span> 
     <span></span> 
    </div> 
    <!-- Searchbox --> 
    <div id="mws-searchbox" class="mws-inset"> 
     <form action="typography.html"> 
      <input type="text" class="mws-search-input" placeholder="Search..." /> 
      <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button> 
     </form> 
    </div> 
    <!-- Main Navigation --> 
    <div id="mws-navigation"> 
     <ul> 
     <li> <a href="#"><i class="icon-user"></i> 管理员管理</a> 
       <ul class="closed"> 
        <li><a href="/adminusers/create">管理员添加</a></li> 
        <li><a href="/adminusers">管理员列表</a></li> 
        <li><a href="/role/create">角色添加</a></li> 
        <li><a href="/role">角色列表</a></li> 
        <li><a href="/auth/create">权限添加</a></li> 
        <li><a href="/auth">权限列表</a></li> 
       </ul> 
     </li> 
     <li> <a href="#"><i class="icon-user"></i> 会员管理</a> 
       <ul class="closed"> 
        <li><a href="/adminuser/create">会员添加</a></li> 
        <li><a href="/adminuser">会员列表</a></li> 
       </ul> 
     </li>
      <li> <a href="#"><i class="icon-th-list"></i> 分类管理</a> 
       <ul class="closed"> 
        <li><a href="/admincates/create">分类添加</a></li> 
        <li><a href="/admincates/">分类列表</a></li> 
       </ul> </li> 
      <li> <a href="#"><i class="icon-file"></i> 公告管理</a> 
       <ul class="closed"> 
        <li><a href="/adminarticle/create">公告添加</a></li> 
        <li><a href="/adminarticle">公告列表</a></li> 
       </ul> </li> 
      <li> <a href="#"><i class="icon-file"></i> 商品管理</a> 
       <ul class="closed"> 
        <li><a href="/adminshop/create">商品添加</a></li> 
        <li><a href="/adminshop">商品列表</a></li> 
       </ul> </li> 
       <li> <a href="#"><i class="icon-file"></i> 订单管理</a> 
       <ul class="closed"> 
        <li><a href="/adminperson">订单列表</a></li> 
       </ul> </li>
       <li> <a href="#"><i class="icon-file"></i> 链接管理</a> 
       <ul class="closed"> 
        <li><a href="/adminyouqing/create">链接添加</a></li> 
        <li><a href="/adminyouqing">链接列表</a></li> 
       </ul> </li> 
        <li> <a href="#"><i class="icon-file"></i> 轮播图管理</a> 
       <ul class="closed"> 
        <li><a href="/adminlunbotu/create">图片添加</a></li> 
        <li><a href="/adminlunbotu">图片列表</a></li> 
       </ul> </li> 
     </ul> 
    </div> 
   </div> 
   <!-- Main Container Start --> 
   <div id="mws-container" class="clearfix"> 
    <div class="container"> 
    @if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @if(session('success'))
      <div class="mws-form-message success">
      {{session('success')}}
       </div>
     @endif
     
      @if(session('error'))
      <div class="mws-form-message warning">
      {{session('error')}}
       </div>
     @endif
     @section("admin")
     @show
     <!-- Panels End --> 
    </div> 
    <!-- footer --> 
    <div id="mws-footer">
      Copyright Your Website 2012. All Rights Reserved. 
    </div> 
   </div> 
   <!-- Main Container End --> 
  </div> 
  <!-- JavaScript Plugins --> 
  <script src="/static/Admins/js/libs/jquery-1.8.3.min.js"></script> 
  <script src="/static/Admins/js/libs/jquery.mousewheel.min.js"></script> 
  <script src="/static/Admins/js/libs/jquery.placeholder.min.js"></script> 
  <script src="/static/Admins/custom-plugins/fileinput.js"></script> 
  <!-- jQuery-UI Dependent Scripts --> 
  <script src="/static/Admins/jui/js/jquery-ui-1.9.2.min.js"></script> 
  <script src="/static/Admins/jui/jquery-ui.custom.min.js"></script> 
  <script src="/static/Admins/jui/js/jquery.ui.touch-punch.js"></script> 
  <!-- Plugin Scripts --> 
  <script src="/static/Admins/plugins/datatables/jquery.dataTables.min.js"></script> 
  <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]--> 
  <script src="/static/Admins/plugins/flot/jquery.flot.min.js"></script> 
  <script src="/static/Admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script> 
  <script src="/static/Admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script> 
  <script src="/static/Admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script> 
  <script src="/static/Admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script> 
  <script src="/static/Admins/plugins/colorpicker/colorpicker-min.js"></script> 
  <script src="/static/Admins/plugins/validate/jquery.validate-min.js"></script> 
  <script src="/static/Admins/custom-plugins/wizard/wizard.min.js"></script> 
  <!-- Core Script --> 
  <script src="/static/Admins/bootstrap/js/bootstrap.min.js"></script> 
  <script src="/static/Admins/js/core/mws.js"></script> 
  <!-- Themer Script (Remove if not needed) --> 
  <script src="/static/Admins/js/core/themer.js"></script> 
  <!-- Demo Scripts (remove if not needed) --> 
  <script src="/static/Admins/js/demo/demo.dashboard.js"></script>  
 </body>
</html>