<?php include 'header.php'; ?>

	<div class="container search-wrap">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Who are you looking for?</h1>
				<hr>
				<form>
					<div class="searchform">
						<input id="search-colleague" type="text" name="search" placeholder="Search...">
					</div>
					<!-- <button class="btns-primary" type="button" name="find-colleague">Find</button> -->
				</form>
			</div>
		</div>		
	</div>

	<img class="explosion-img" src="image/explosion-klein.png" alt="explosion">

	<!-- <div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Hello</h1>
                <button class="btns-primary" onclick="logOut()">Log out</button>
			</div>
		</div>		
	</div> -->

	<script src="https://www.gstatic.com/firebasejs/5.8.3/firebase.js"></script>
    <script src="backend/db.js"></script>
	<script src="backend/user.js"></script>
	<script type="text/javascript">
		document.body.classList.add("bg-index");
	</script>
</body>
</html>