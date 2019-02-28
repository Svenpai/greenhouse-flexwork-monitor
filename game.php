<?php include 'header.php'; ?>

	<div class="gameBtns">
		<div class="popup-button">
			<!--Trigger button -->
			<button type="button" class="game-button" data-toggle="modal" data-target="#achieveModal">Achievements</button>
		
		</div>
		
		<div class="popup-button">
			<!--Trigger button -->
			<button type="button" class="game-button" data-toggle="modal" data-target=".bd-example-modal-xl">Leaderboards</button>
		</div>
	</div>

	
<!-- <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content"> -->
	<div class="container pushDown">
		<div class="modal-wrap modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
					<div class="row">			
						<div class="col-md-12 modal-colomn">
							<div class="modal-header text-right">
								<div class="tab tab-1">
								</div>
								<div class="tab tab-2">
								</div>

							<h4>Achievement</h4>

						</div>

						<div class="modal-inner">
							<div class="modal-progression">
								<div class="progress-bar-bg">
								<p ="title">Achievements clear</p>
									<div class="progress-bar"></div>
									<div class="progress-circle">
										<img src="image/icon-reward.png" alt="reward icon" width="50px" height="50px">
									</div>
								<p>1 / 30</p>
								</div>
							</div>							
						</div>
					</div>							
				</div>
			</div>
		</div>
	</div>




    <!-- </div>
  </div>
</div> -->


	<script src="https://www.gstatic.com/firebasejs/5.8.3/firebase.js"></script>
    <script src="backend/firebase_base.js"></script>
	<script src="backend/firebase_database.js"></script>
	<script src="backend/user.js"></script>
	<script type="text/javascript">
		document.body.classList.add("bg-game");
	</script>
</body>
</html>