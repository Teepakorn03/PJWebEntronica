<!DOCTYPE html>
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>JOB</title>
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans:400,300,700|Yesteryear" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/style1.css">

</head>
<body>
    <!-- ดึงข้อมูลมาโชว์จาก database  -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					@foreach ($detail as $detail)
					<div class="post">
						<h2 class="title"><a href="#"><?php echo $detail -> title?></a></h2>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p><strong><?php echo $detail -> subheading?></strong></p>
							<p><?php echo $detail -> detail?></p>
							<p><?php echo $detail -> No1?></p>
							<p><?php echo $detail -> No2?></p>
							<p><?php echo $detail -> No3?></p>
							<p><?php echo $detail -> No4?></p>
							<p><?php echo $detail -> No5?></p>
							<p><?php echo $detail -> No6?></p>
							<p><?php echo $detail -> No7?></p>
							<br>
							<p><strong><?php echo $detail -> subheading1?></strong></p>
							<p><?php echo $detail -> detail1?></p>
							<p><?php echo $detail -> No8?></p>
							<p><?php echo $detail -> No9?></p>
							<p><?php echo $detail -> No10?></p>
							<p><?php echo $detail -> No11?></p>
							<p><?php echo $detail -> No12?></p>
							<p><?php echo $detail -> No13?></p>
							<p><?php echo $detail -> No14?></p>
						</div>
					</div>
					 @endforeach

					 <div class="" align='center'>
					 	 {{ Html::link('form/create', 'Careers', array('class' => 'button')) }}
					 </div>

					<div style="clear: both;">&nbsp;</div>
				</div>


				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>

	<!-- end #page -->
</div>
</body>
</html>
