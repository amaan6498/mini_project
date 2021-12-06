<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Login
		</title>
		<link rel = "icon" type = "image/png" href = "images\mylogo.png">
		<link rel="stylesheet" type="text/css" href="css\login.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        
        <center>
            <form method="post" action="process.php">
                
                    <section class="vh-100" style="background-color: #eee;">
                        <div class="container h-100">
                          <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-12 col-xl-11">
                              <div class="card text-black" style="border-radius: 25px;">
                                <div class="card-body p-md-5">
                                  <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                      
                                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>
                      
                                      <form class="mx-1 mx-md-4" name="regevent" onsubmit="validateForm()">
                      
                                        <div class="d-flex flex-row align-items-center mb-4">
                                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                          <div class="form-outline flex-fill mb-0">
                                            Name: <input type="text" name="uname" placeholder="Enter full name" required/>                            
                                          </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                              HT.No:  <input type="text" name="htno" placeholder="Enter your HTNo" required/>                            
                                            </div>
                                          </div>
                
                                        <div>
                                            Select an Event: <br><input type="radio" name="event" value="Sports">  Sports<br>
                                                    <input type="radio" name="event" value="Cyber Monday">  Cyber Monday<br>
                                                    <input type="radio" name="event" value="IOT">  IOT<br>
                                                    <input type="radio" name="event" value="Fest">  Fest<br>
                                                    <input type="radio" name="event" value="Annual Day">  Annual Day<br>
                                                    <input type="radio" name="event" value="Blood Donation">  Blood Donation<br>
                                        </div>
                                                       
                                        <br><br>
                                        <div>
                                            Select your year: <br><input type="radio" name="year" value="1st">  1st<br>
                                                    <input type="radio" name="year" value="2nd">  2nd<br>
                                                    <input type="radio" name="year" value="3rd">  3rd<br>
                                                    <input type="radio" name="year" value="4th">  4th<br>
                                                    <input type="radio" name="year" value="Pharmarcy">  Pharmarcy<br>
                                                    <input type="radio" name="year" value="MBA">  MBA<br>
                                        </div>             
                                        <br><br>

                                        <div>
                                            <input type="submit" name="register" value="Register">
                                        </div>
                      
                                      </form>
                                      
                                    </div>
                                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                      
                                      <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">
                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>      
                          </div>
                        </div>
                      </section>
                           
            </form>
        </center>
        
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
              <div class="text-center p-3" style="background-color: rgb(238, 232, 232);">
                © 2021 :
              <a class="text-dark" href="index.html">Online Event Management System</a>
            </div>
            <!-- Copyright -->
          </footer>
    </body>
</html>