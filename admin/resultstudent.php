<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - School Management System Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<?php
global $roll;
global $roll1;

global	$roll;
global	$eng;
global	$chem;
global	$math;
global	$phy;
global	$urdu;
if(isset($_GET['edit']))
{
	echo 'Hello';
	
	$roll = $_GET['edit'];
	$showselect=mysqli_query($con,"SELECT * from sms_result WHERE re_roll='$roll'");
	$row=mysqli_fetch_array($showselect);
	
	
	$roll=$row[1];
	$eng=$row[2];
	$chem=$row[3];
	$math=$row[4];
	$phy=$row[5];
	$urdu=$row[6];
	
	
}
// Delete Btn Work
if(isset($_GET['delete']))
{
$id2=$_GET['delete'];
$delete=mysqli_query($con,"DELETE FROM sms_result WHERE re_roll=$roll1");
if($delete>0)
{ 
echo "<script>alert('Marks Is Deleted')</script>"; 
}

}
?>
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa"><img src="../images/3.png"></i>
							School Management System Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
								<li>
									<a href="../index.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="active">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-database"></i>
							<span class="menu-text">
								Groups &amp; Classes
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<a href="groups.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Groups
								</a>

								<b class="arrow"></b>
							</li>

							<li class="active">
								<a href="classes.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Classes
								</a>

								<b class="arrow"></b>
							</li>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-indent"></i>
							<span class="menu-text"> Batch Information </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="addbatch.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Batch
								</a>

								<b class="arrow"></b>
							</li>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-address-card"></i>
							<span class="menu-text"> Student's Info </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="addstudent.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Student
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="updatestudent.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Update Student
								</a>

								<b class="arrow"></b>
							</li>
                            <li class="">
								<a href="showstudent.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Show Student
								</a>

								<b class="arrow"></b>
							</li>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-address-card"></i>
							<span class="menu-text"> Student's Result </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="resultstudent.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Result
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="showresult.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Show Result
								</a>

								<b class="arrow"></b>
							</li>
                            
						</ul>
					</li>
					
					
					
					

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Attendance </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="markatt.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Mark Attendance
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="updateatt.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Update Attendance
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="showatt.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Show Attendance
								</a>

								<b class="arrow"></b>
							</li>


								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-text-o"></i>
							<span class="menu-text"> Fee Challans </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="gchelan.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Generate Challan
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="upchelan.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Update Challan
								</a>

								<b class="arrow"></b>
							</li>

							</li>


								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Groups &amp; Sections</li>
                            <li class="active">Classes</li>
						</ul><!-- /.breadcrumb --><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
						  <div class="ace-settings-box clearfix" id="ace-settings-box">
							  <div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Result Marks
								</small>
                                <small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Subject
								</small>
															</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
							  <div class="row">
								<!-- /.col is div main sara kaam hoga  --><!-- /.col -->
                              	<div class="col-md-6">
                                	<form class="form-horizontal" role="form" method="POST">
																		
                                       <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Roll Number</label>

										<div class="col-sm-9">
											<span class="input-icon input-icon-right">
												<input type="text" id="form-field-icon-2" name="roll_num" Placeholder="Eg: sms000" value="<?php echo $roll ?>"/>
												<i class="ace-icon fa fa-database pink2"></i>
											</span>
										</div>
									</div>
                                    
                                    <div class="space-4"></div>
                                    <div class="space-4"></div>
                                    <div class="space-4"></div>
                                    <div class="space-4"></div>
                                    <div class="space-4"></div>
                                    <br>
                                    <br>
                                    <br>
                                    
									
										<div class="col-md-offset-1 col-md-9">
											<button class="btn btn-info" type="submit" name="btn_insert">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Insert Marks					</button>
                                            
                                            &nbsp; &nbsp; &nbsp;
											<button class="btn btn-success" type="submit" name="btn_show">
												<i class="ace-icon fa  fa-eye bigger-110"></i>
												Show Marks
											</button>

										</div>
									
									<!-- /.row -->
				
                                </div>
                                <div class="col-md-5">
																		
                                       <div class="form-group">
									   
									   <div class="col-sm-9">
									   <label class="col-sm-3 control-label no-padding-right">English</label>&emsp;&emsp;
											<input align="right" type="text" name="english" value="<?php echo $eng ?>"/>
																	</br>
										                           </br>
									   </div>
																
                                       <div class="col-sm-9">
										
										<label class="col-sm-3 control-label no-padding-right">Mathematics</label>
										&emsp;&emsp;
										<input align="right" type="text" name="Mathematics" value="<?php echo $math ?>"/>
																	</br>
										                           </br>
										
										</div>
																		
											<div class="col-sm-9">							
																   
											<label class="col-sm-3 control-label no-padding-right">Physics</label>
											&emsp;&emsp;
											<input align="right" type="text" name="Physics" value="<?php echo $phy ?>"/>
																	</br>
										                           </br>
											</div>
											
									<div class="col-sm-9">	
									<label class="col-sm-3 control-label no-padding-right">Chemistry</label>
											&emsp;&emsp;									
									
												<input align="right" type="text" name="Chemistry"value="<?php echo $chem?>"/>
																	</br>
																</br>
									</div>


									<div class="col-sm-9">
									<label class="col-sm-3 control-label no-padding-right">Urdu</label>
											&emsp;&emsp;
	
										<input align="right" type="text" name="Urdu" value="<?php echo $urdu ?>"/>
																	</br>
										                           </br>
										
										</div>
									</div>
									
										<div class="col-md-offset-4 col-md-9">
											<button class="btn btn-info" type="submit" name="btn_update">
												<i class="ace-icon fa fa-wrench bigger-110"></i>
												Update Marks
											</button>
										</div>
									
									<!-- /.row -->
								</form>
                                </div> 
                                <div class="col-md-1"></div>
							  </div><!-- /.row -->
                              <div class="row"><!-- .row -->
                              	<div class="col-md-2"></div><!--Space col-->
                                <div class="col-md-8"><!-- Working col-->
										<?php //btn show work
										if(isset($_POST['btn_show']))
										{
                                        echo"<table id='simple-table' class='table  table-bordered table-hover'>";
											echo"<thead>";
												echo"<tr>";
													echo"<th>Roll Number</th>";
													echo"<th>English</th>";
													echo"<th>Mathematics</th>";
													echo"<th>Physics</th>";
													echo"<th>Chemistry</th>";
													echo"<th>Urdu</th>";
													echo"<th>Edit / Delete</th>";
												echo"</tr>";
											echo"</thead>";
											$fetch=mysqli_query($con,"select * from sms_result");
											echo"<tbody>";
											echo	"<tr>";
											while($row=mysqli_fetch_array($fetch))
												{
													echo "<td>$row[1]</td>";
													echo "<td>$row[2]</td>";
													echo "<td>$row[3]</td>";
													echo "<td>$row[4]</td>";
													echo "<td>$row[5]</td>";
													echo "<td>$row[6]</td>";
													echo "<td><a href='resultstudent.php?edit=$row[1]'><i class='ace-icon fa fa-pencil-square blue bigger-150'></i></a>
															  <a href='resultstudent.php?delete=$row[1]'><i class='ace-icon fa fa-trash-o red bigger-150'></i></a>
													</td>";
													echo"</tr>";
												}
												
											echo"</tbody>";
										echo"</table>";
										}
										?>
                                </div><!-- / Working col-->
                                <div class="col-md-2"></div><!--Space col-->
                              </div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">School Management System</span>
							Application ; 2017
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	</body>
</html>
																							
																							
																							
																							

<?php


if(isset($_POST['btn_insert']))
{
	$roll=$_POST['roll_num'];
	$eng=$_POST['english'];
	$chem=$_POST['Chemistry'];
	$math=$_POST['Mathematics'];
	$phy=$_POST['Physics'];
	$urdu=$_POST['Urdu'];
	$insert=mysqli_query($con,"insert into sms_result values('','$roll','$eng','$chem','$math','$phy','$urdu')");
				if($insert==1)
				{
					echo "<script> alert ('Marks Is Added'); </script>";
				}
				else
				{
					echo "<script> alert ('Sorry Marks is not Added'); </script>";
				}
}
// Update Btn Work

									if(isset($_POST['btn_update']))
									{
										$roll=$_POST['roll_num'];
										$eng=$_POST['english'];
										$math=$_POST['Mathematics'];
										$phy=$_POST['Physics'];
										$chem=$_POST['Chemistry'];
										$urdu=$_POST['Urdu'];
										$updateQuer = "UPDATE sms_result SET re_roll='$roll', re_eng='$eng', re_math='$math', re_phy='$phy',
										re_chem='$chem', re_urdu='$urdu' WHERE re_roll='$roll'";
										$update = mysqli_query($con,$updateQuer);
										if($update==1)
										{
											?>
                                            <div class="blue">
                                            <br>
                                            <h3>Marks has been Updated Successfully!</h3>
                                            <center><i class="fa fa-spinner fa-4x fa-spin"></i></center>
                                            <br>
                                            <h4>Please wait while you're being Redirected...</h4>
                                            <script>
                                            setTimeout(function(){window.location="resultstudent.php"}, 2000);
                                            </script>
                                            </div>
                                            <?php
										}
										else
										{
											echo "<script> alert ('Sorry Marks is not Updated'); </script>";
										}
				
									}
									

?>