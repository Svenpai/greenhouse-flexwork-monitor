<?php include 'header_nologin.php'; ?>
  <div class="signup-card">
    <div class="bg-light">    
      <div class="container">     
        <div class="row">
         <div class="offset-md-2 offset-xs-0 col-md-10 col-xs-12 card-white">
            <h3>Sign up</h3>
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="firstname">First name</label>
                      <input type="text" id="firstname" name="firstname" placeholder="Enter first name">
                    </div>

                  <div class="form-group col-md-6">
                    <label for="lastname">Last name</label>
                      <input type="text" id="lastname" name="lastname" placeholder="Enter last name">
                  </div>
                </div>

                    <div class="styledSelect">                  
                      <label for="email">Email address</label>
                        <input class="fullwidth-input" type="text" id="e-mail" name="mail" placeholder="Enter email">
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <label for="password1">Password</label>
                      <input type="password" id="password1" placeholder="Password">
                      </div>
                      
                      <div class="form-group col-md-6">
                      <label for="password2">Password</label>
                      <input type="password" id="password2" placeholder="Password">
                      </div>
                    </div>
                
                    <div class="styledSelect"> 
                      <label for="phonenumber">Phone number</label>
                      <input class="fullwidth-input input-lg" type="number" placeholder="Ex. 0612345678" id="phone" name="phone" required>
                    </div>

                    <div class="styledSelect"> 
                      <label for="craft">Select your craft:</label>   
                          <select class="input-lg" id="craft">                     
                            <option>Creative</option>
                            <option>Data</option>
                            <option>Media</option>
                            <option>Technology</option>
                          </select>
                    </div>

                    <span class="fas fa-caret-down"></span>

                    <div class="styledSelect"> 
                      <label for="propositie">Select your proposition:</label>
                          <select class="input-lg" data-style="btn-primary" id="propositie">                     
                              <option>Consultancy</option>
                              <option>Smart services</option>
                          </select>
                          <span class="fa fa-sort-desc"></span>
                    </div>

                    <div class="styledSelect"> 
                      <button type="button" class="btns-primary mt-5" id="account-btn" onclick="createAccount(email.value, password.value, firstname.value, lastname.value, craft.value, propositie.value);">Sign up account</button>
                    </div>
                  </form>	

                  <hr class="login">
                    <div class="text-center">
                      <ul class="list-unstyled">
                        <li><a class="linkAccount" href="createaccount.php">Already have an account?</a></li>
                      </ul>
							  	</div>
											
					<!-- <img src="image/logo.png" class="greenhouse-logo float-left" alt="Greenhouse logo">	 -->
				</div>
			</div>		
		</div>
	</div>
</div>

    
    <script src="https://www.gstatic.com/firebasejs/5.8.3/firebase.js"></script>
    <script src="backend/firebase_base.js"></script>
    <script src="backend/firebase_database.js"></script>
    <script src="backend/login.js"></script>
    <script>
        var email = document.getElementById('e-mail');
        var password = document.getElementById('password1');
        var firstname = document.getElementById('firstname');
        var lastname = document.getElementById('lastname');
        var craft = document.getElementById('craft');
        var propositie = document.getElementById('propositie');
        // add class to body tag
        document.body.classList.add("bg-createaccount");
    </script>
</body>
</html>
