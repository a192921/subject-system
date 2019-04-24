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
        <div class="pull-left image">
         
        </div>
      </div>
      <!-- search form -->
    <br>

	  <ul class="sidebar-menu" data-widget="tree">
       <li class="header">MAIN</li>
        <li class="#">
		 <a href=".\teacher.html">
            <i class="fa fa-book"></i> <span>個 人 資 訊</span>
          </a>
		  <li class="#">
          <a href=".\teacher1.html">
            <i class="fa fa-th"></i> <span>選 課 課 程</span>
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
    <li class="active"><a href="#tab1" data-toggle="tab">課程簡介</a></li>
    <li><a href="#tab2" data-toggle="tab">用書資訊</a></li>
	<li><a href="#tab3" data-toggle="tab">評分方式與比重</a></li>
	<li><a href="#tab4" data-toggle="tab">授課進度及內容</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
	<br>
      <div class="col-md-1"></div>
   <div class="col-md-11">
    <div class="grid_view">
        <br>
  <label for="comment">課程簡介:</label>
  <textarea class="form-control" rows="5" id="comment" style="width:500px"></textarea>
</div> <br>
<div class="form-group">
  <label for="comment">具體教學目標:</label>
  <textarea class="form-control" rows="5" id="comment" style="width:500px"></textarea>
</div>
       

   </div>
    </div>

    <div class="tab-pane" id="tab2">
     <br>
      <div class="col-md-1"></div>
   <div class="col-md-11">
    <div class="grid_view">
        <table class="table" style="width:800px">
    <thead>
      <tr>

        <th >書名</th>
        <th>作者</th>
		<th>出版社</th>
		<th>出版年次</th>
		<th>版次</th>
		<th>出版地</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      
        <td>資料庫的核心理論與實務n</td>
        <td>Doe</td>
        <td>前程文化事業有限公司</td>
		<td>2015年</td>
		<td>1</td>
		<td>新北市</td>
      </tr>
      <tr>
      
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
      
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table> <br>

  <div class="form-group">
  <label for="comment">其他參考資料:</label>
  <textarea class="form-control" rows="5" id="comment" style="width:500px"></textarea>
</div>
        </div>

   </div>
    </div>

	 <div class="tab-pane" id="tab3">
	 <br>
	 <div class="col-md-1"></div>
   <div class="col-md-11">
  
   <table class="table" style="width:500px">
    <thead>
      <tr>
	  <th width="40"></th>
        <th>評分項目</th>
        <th>比重</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  <td>1</td>
        <td>出席率及學習態度</td>
        <td>0%</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Moe</td>
        <td>0%</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Dooley</td>
        <td>0%</td>
      </tr>
    </tbody>
  </table>
  </div>
  </div>

  <div class="tab-pane" id="tab4">
  <br>
	 <div class="col-md-1"></div>
   <div class="col-md-11">

   <table class="table" style="width:500px">
    <thead>
      <tr>
        <th width="60">周次</th>
        <th width="200">主題內容/章節</th>
        <th>備註</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>實體關係模式</td>
        <td></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Moe</td>
        <td></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Dooley</td>
        <td></td>
      </tr>
    </tbody>
  </table>
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
