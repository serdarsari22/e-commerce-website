<?php include 'header.php'; 

$menusor=$db->prepare("SELECT * FROM menu where menu_id=:id");
$menusor->execute(array(
  'id' => 4
  
  ));
$menucek=$menusor->fetch(PDO::FETCH_ASSOC);



?>

<div class="spacer"></div>
	
	<div class="contacts">	
			<!--Main content-->
				<!-- <div class="row-1 "><br><br>
					<div class="container">		
								<div class="title">gizlilik</div>			
						<div class="">
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum 
							</p>
						</div>
					</div><br><br>
				</div>

				<div class="row-4 ">
					<div class="container">
								<div class="title">vizyon</div>
								<div class=""><p><?php echo $menucek['menu_detay'] ?></p></div>
					</div>

				</div>

				<div class="row-3 "><br><br>
					<div class="container">
						<div class="title">telefon</div>
						<div class=""><p><?php echo $ayarcek['ayar_tel']; ?></p></div>
					</div><br><br>
				</div> -->
				<div class="contact">

					<div class="col-up">
					
						<div class="contact-col col-md-4">
							<div class="column">
								<div class="title"><h3>Müşteri Destek</h3></div><br>
								<div class="button-help">
									<button class="btn btn-yellow btn-help">Müşteri Canlı Destek</button>
								</div>
							</div>
						</div>

						<div class="contact-col col-md-4">
							<div class="column">
								<div class="title"><h3>Bizi Arayın</h3></div><br>	
								<div class="button-help">
									<button class="btn btn-yellow btn-help">0 (212) 724 24 24</button>
								</div>
							</div>
						</div>

						<div class="contact-col col-md-4">
							<div class="column">
								<div class="title"><h3>Bize Mail Atın</h3></div><br>	
								<div class="button-help">
									<button class="btn btn-yellow btn-help">helpdesk@ecommerce.com</button>
								</div>
							</div>
						</div>

					</div>
					<div class="col-down">
						<div class="col-left col-md-4">
							
							<div class="column-down">
								<div class="col-container">	
									<div class="title"><h3>Genel Merkez</h3></div><br>
									<div class="adres">
										<p class="adres">İş Kuleleri Kule-2 Kat:10-11 Levent 34330 İstanbul</p>
									</div>	
								</div>
							</div>

							
							<div class="column-down">
								<div class="col-container">
									<div class="title"><h3>Kariyer</h3></div><br>	
									<div class="button-help">
										<button class="btn btn-yellow btn-help">Ekibimize  katıl</button>
									</div>
								</div>
							</div>
						</div>	

						<div class="col-right col-md-8">
							
							<div class="col-map">
								<div class="col-container">
									<div class="mapouter">
										<div class="gmap_canvas">
											<iframe width="800" height="340" id="gmap_canvas" src="https://maps.google.com/maps?q=i%C5%9Fkule&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
											</iframe><a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
		
		
			

		
		<div class="spacer"></div>
	</div>
	
	<?php include 'footer.php'; ?>