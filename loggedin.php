<p>
				<?php if(isset($_SESSION['username'])){
					print_r($_SESSION['username']);
				}
				else{
					print_r("not signed in");
				}
				?>
			</p>	
