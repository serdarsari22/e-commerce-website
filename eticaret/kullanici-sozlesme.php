<?php include 'header.php'; 

$menusor=$db->prepare("SELECT * FROM menu where menu_id=:id");
$menusor->execute(array(
  'id' => 4
  
  ));
$menucek=$menusor->fetch(PDO::FETCH_ASSOC);



?>


	
	<div class="">	
			
			<div class="row-3 "><br><br>
					<div class="container">
						
						<div class=""><h1>Türkiye'nin öncü e-ticaret sitesi olarak bundan 21 yıl önce, ülkemizi online pazaryerinden alışverişin kolaylığı ve keyfiyle tanıştırdık.</h1></div>
					</div><br><br>
				</div>
		
			<!--Main content-->
			<div class="row-2 ">
				<div class="container">		
					<div class="title"><h1>Hakkımızda</h1></div>	
					<div class="left-row col-md-6">	
						<div class="">
							<h2>Marketplace ve Classifieds platformlarıyla faaliyetlerini yürüten global e-ticaret devi eBay; 1995 yılında Kaliforniya San Jose'de kuruldu.</h2>
						</div>

					</div>	
					<div class="col-md-6 right-row">
						<div class="">
							<h2>Marketplace ve Classifieds platformlarıyla faaliyetlerini yürüten global e-ticaret devi eBay; 1995 yılında Kaliforniya San Jose'de kuruldu.</h2>
						</div>
					</div>
				</div>
			</div>




<br><br>


				

				

				<div class="row-3 "><br><br>
					<div class="container">
						<div class="title">telefon</div>
						<div class=""><p><?php echo $ayarcek['ayar_tel']; ?></p></div>
					</div><br><br>
				</div>
			

		
		<div class="spacer"></div>
	</div>
	
	<?php include 'footer.php'; ?>