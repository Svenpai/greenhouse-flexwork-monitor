<?php include 'header.php'; ?>
    <div class="container form-wrap">
        <div class="row">
            <div class="col-md-3">
                <div class="profiel">
                    <div class="status">
                    </div>
                    <div class="uploadPicture">
                    </div>
                    <div class="profilePicture">
                        <!--img here -->
                    </div>
                    
                    <div class="name">
                        <h2>Alies van Hout</h2>
                        <span>Media Design</span>
                    </div>
                    <div class="subSettings">
                        <ul>
                            <li><div class="testIcon"></div><p>alies@greenhouse.com</p></li>
                            <li><div class="testIcon"></div><p>064566798</p></li>
                        </ul>
                    </div>
                    <a href="#" class="button">Change password</a>
                </div>
               
            </div>
            <div class="editProfile offset-md-1 col-md-8">
                <h2>Crafts</h2>
                <div class="row">
                    <div class="crafts col-md-6">
                        Tech
                    </div>
                    <div class="crafts col-md-6">
                        Data
                    </div>
                    <div class="crafts col-md-6">
                        Creative
                    </div>
                    <div class="crafts col-md-6">
                        Media
                    </div>

                </div>
                <h2>Propositions</h2>                   
                <select id="propositions">                     
                    <option>Consultancy</option>
                    <option>Smart Services</option>
                    <option>Full Service marketing</option>
                    <option>Tech Support</option>
                </select>
                <div class="changeButtons row">
                    <div class="col-md-6">
                        <a href="#" class="cancel_button">Cancel</a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">Save changes</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    
    <script src="https://www.gstatic.com/firebasejs/5.8.3/firebase.js"></script>
    <script src="backend/db.js"></script>
    <script src="backend/dbcon.js"></script>
    <script>
        document.body.classList.add("bg-profilepage");
    </script>
</body>
</html>