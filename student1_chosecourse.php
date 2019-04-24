<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="zhtw" />
  
  <title></title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" style="height:auti;">

  <header class="main-header">
    <!-- Logo -->
    <a href="student.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>NUTC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>國立臺中科技大學</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		<li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">WUYUSHAN</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  WUYUSHAN
                  <small>s1110231008</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">修改資料</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">登出</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        
        <div class="pull-left info">
		<br>
          <p>WUYUSHAN</p>
          
        </div>
      </div>
      <!-- search form -->
   

	  <ul class="sidebar-menu" data-widget="tree">
       <li class="header">MAIN</li>
        <li class="#">
		 <a href=".\student.html">
            <i class="fa fa-book"></i> <span>個 人 資 訊</span>
          </a>
		  <li class="#">
          <a href=".\student1.html">
            <i class="fa fa-th"></i> <span>選 課 課 程</span>
          </a>
        <li class="#">
          <a href=".\student2.html">
            <i class="fa fa-circle-o"></i> <span>系 所 課 程</span>
          </a>
		  
		  
            
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
       
       
      
        
      
        
    </section>
    <!-- /.sidebar -->
  </aside>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
   
   <section class="content-header">
   <br>
  <div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
  <div class="col-md-1">
<div class="col-md-11">
</div></div>
    <li class="active"><a href="#tab1" data-toggle="tab">我的選課</a></li>
    <li><a href="#tab2" data-toggle="tab">課程加選</a></li>
	<li><a href="#tab3" data-toggle="tab">預選課表</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
	<br>
      <div class="col-md-1"></div>
   <div class="col-md-11">
    <div class="grid_view">
        <table class="table">
    <thead>
      <tr>

      <th width="40">#</th>
        <th>科目</th>
        <th>組別</th>
        <th>修課班級</th>
		<th>教師</th>
		<th>修別</th>
		<th>學分/時數</th>
		<th>執行</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>1</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
      <td>2</td>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
      <td>3</td>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
        </div>

   </div>
    </div>

    <div class="tab-pane" id="tab2">
     <br>
      <div class="col-md-1"></div>
   <div class="col-md-11">
    <div class="grid_view">
        <table class="table">
    <thead>
      <tr>

      <th width="40">#</th>
        <th>科目</th>
        <th>修課班級</th>
		<th>上課時間</th>
		<th>教師</th>
		<th>學分/時數</th>
		<th>人數</th>
		<th>已選</th>
		<th>執行</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>1</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
      <td>2</td>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
      <td>3</td>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>

  <div class="col-md-5">
<div class="col-md-7">
</div></div>
  <nav>
  <ul class="pagination">
    <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
  </ul>
</nav>

        </div>

   </div>
    </div>

	 <div class="tab-pane" id="tab3">
	 <br>
	 <div class="col-md-1"></div>
   <div class="col-md-11">
   <div class="TabPaneDeco"></div>
        <div  class="ScheduleOut">
          <div class='schedule_tab'>

      <table id='schedule_tab' cellpadding='0' border="2" width="800">
              <tr>
                <th colspan='2'></th>

                <th class='day'>星期一</th>
                <th class='day'>星期二</th>
                <th class='day'>星期三</th>
                <th class='day'>星期四</th>
                <th class='day'>星期五</th>
    
                <th class='day' style='color:#009900;'>星期六</th>
                <th class='day' style='color:Red;'>星期日</th>

              </tr>
<tr><th class='number'>1</th><th class='time'>08:10<br />｜<br />09:00</th><td class='data'><div id='S101' class='course_name'></div></td><td class='data'><div id='S201' class='course_name'></div></td><td class='data'><div id='S301' class='course_name'></div></td><td class='data'><div id='S401' class='course_name'></div></td><td class='data'><div id='S501' class='course_name'></div></td><td class='data'><div id='S601' class='course_name'></div></td><td class='data'><div id='S701' class='course_name'></div></td></tr><tr><th class='number'>2</th><th class='time'>09:10<br />｜<br />10:00</th><td class='data'><div id='S102' class='course_name'></div></td><td class='data'><div id='S202' class='course_name'></div></td><td class='data'><div id='S302' class='course_name'></div></td><td class='data'><div id='S402' class='course_name'></div></td><td class='data'><div id='S502' class='course_name'></div></td><td class='data'><div id='S602' class='course_name'></div></td><td class='data'><div id='S702' class='course_name'></div></td></tr><tr><th class='number'>3</th><th class='time'>10:10<br />｜<br />11:00</th><td class='data'><div id='S103' class='course_name'></div></td><td class='data'><div id='S203' class='course_name'></div></td><td class='data'><div id='S303' class='course_name'></div></td><td class='data'><div id='S403' class='course_name'></div></td><td class='data'><div id='S503' class='course_name'></div></td><td class='data'><div id='S603' class='course_name'></div></td><td class='data'><div id='S703' class='course_name'></div></td></tr><tr><th class='number'>4</th><th class='time'>11:10<br />｜<br />12:00</th><td class='data'><div id='S104' class='course_name'></div></td><td class='data'><div id='S204' class='course_name'></div></td><td class='data'><div id='S304' class='course_name'></div></td><td class='data'><div id='S404' class='course_name'></div></td><td class='data'><div id='S504' class='course_name'></div></td><td class='data'><div id='S604' class='course_name'></div></td><td class='data'><div id='S704' class='course_name'></div></td></tr><tr><th class='number' colspan='2'>中午時間</th><td class='data'><div id='S100' class='course_name'></div></td><td class='data'><div id='S200' class='course_name'></div></td><td class='data'><div id='S300' class='course_name'></div></td><td class='data'><div id='S400' class='course_name'></div></td><td class='data'><div id='S500' class='course_name'></div></td><td class='data'><div id='S600' class='course_name'></div></td><td class='data'><div id='S700' class='course_name'></div></td></tr><tr><th class='number'>5</th><th class='time'>13:25<br />｜<br />14:15</th><td class='data'><div id='S105' class='course_name'></div></td><td class='data'><div id='S205' class='course_name'></div></td><td class='data'><div id='S305' class='course_name'></div></td><td class='data'><div id='S405' class='course_name'></div></td><td class='data'><div id='S505' class='course_name'></div></td><td class='data'><div id='S605' class='course_name'></div></td><td class='data'><div id='S705' class='course_name'></div></td></tr><tr><th class='number'>6</th><th class='time'>14:20<br />｜<br />15:10</th><td class='data'><div id='S106' class='course_name'></div></td><td class='data'><div id='S206' class='course_name'></div></td><td class='data'><div id='S306' class='course_name'></div></td><td class='data'><div id='S406' class='course_name'></div></td><td class='data'><div id='S506' class='course_name'></div></td><td class='data'><div id='S606' class='course_name'></div></td><td class='data'><div id='S706' class='course_name'></div></td></tr><tr><th class='number'>7</th><th class='time'>15:20<br />｜<br />16:10</th><td class='data'><div id='S107' class='course_name'></div></td><td class='data'><div id='S207' class='course_name'></div></td><td class='data'><div id='S307' class='course_name'></div></td><td class='data'><div id='S407' class='course_name'></div></td><td class='data'><div id='S507' class='course_name'></div></td><td class='data'><div id='S607' class='course_name'></div></td><td class='data'><div id='S707' class='course_name'></div></td></tr><tr><th class='number'>8</th><th class='time'>16:15<br />｜<br />17:05</th><td class='data'><div id='S108' class='course_name'></div></td><td class='data'><div id='S208' class='course_name'></div></td><td class='data'><div id='S308' class='course_name'></div></td><td class='data'><div id='S408' class='course_name'></div></td><td class='data'><div id='S508' class='course_name'></div></td><td class='data'><div id='S608' class='course_name'></div></td><td class='data'><div id='S708' class='course_name'></div></td></tr>
          </table>
    </div>
  </div>
</div>

 
  
  
  
   </section>
            

  <!-- Control Sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
