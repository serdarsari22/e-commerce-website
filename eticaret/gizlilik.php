<?php include 'header.php'; 

$menusor=$db->prepare("SELECT * FROM menu where menu_id=:id");
$menusor->execute(array(
  'id' => 4
  
  ));
$menucek=$menusor->fetch(PDO::FETCH_ASSOC);



?>


	
	<div class="">	
		
		
			<!--Main content-->
				<div class="row-1 "><br><br>
					<div class="container">		
								<div class="title">gizlilik</div>			
						<div class="">
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum 
							</p>
						</div>
					</div><br><br>
				</div>

				<div class="row-5 ">
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
				</div>
			

		
		<div class="spacer"></div>
	</div>
	
	<?php include 'footer.php'; ?>