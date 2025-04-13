

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="res/img/agassi.jpg">

    <title>Profile Page: Agassi</title>
   
   
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="res/bootstrap/jquery-3.5.1.js"></script>
	<script src="res/bootstrap/popper.min.js"></script>
	<script src="res/bootstrap/js/bootstrap.min.js"></script>
	<link href="res/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		

<style>
body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 10px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
    text-align: center;
}

.login-main-text h2{
    font-weight: 300;
}

.login-text{
    font-weight: 300;
}


.btn-black{
    background-color: #000 !important;
    color: #fff;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}

</style>


<script type="text/javascript">

function signup()
{
    var email = document.getElementById("emailaddress");
    var validat = email.value.indexOf("@");
    var validdot = email.value.indexOf(".");
    if(email.value == ""){
        document.getElementById("err").innerHTML="Email address required";
        document.getElementById("emailaddress").style.borderColor="#FF0000"
    }else if(validat < 1 || validdot < 1){
        document.getElementById("emailaddress").style.borderColor="#FF0000"
        document.getElementById("err").innerHTML="Invalid email address";
    }else {
         document.getElementById("err").innerHTML="You have been signed up";
         document.getElementById("err").style.borderColor="green";
    }
        
}
function resetb()
{  
    document.getElementById("emailaddress").style.borderColor="#000000" 
    document.getElementById("err").innerHTML="";
}

</script>

</head>

<body >


    <div class="sidenav">
         <div class="login-main-text">
             <h4>Andrew Agassi Owuor </h4>
             <img class="img-responsive" src="res/img/agassi.jpg" width="60%" height="60%" />
           
         </div>
    </div>
    <div class="main">
       <div class="col-md-8 col-sm-12">

            <div class="login-form">
                <p class="Login-text"><strong>Bio</strong> </p>
                <hr>
                <p>"Driven by curiosity and fueled by creativity, I'm a passionate individual with a love for learning and a knack for innovative thinking. With a keen eye for detail and a flair for problem-solving, I navigate complex challenges with ease and enthusiasm. Let's connect and explore the possibilities!"</p>
                
            </div>
        </div>

    </div>
    <div class="main">
       <div class="col-md-8 col-sm-12">

            <div class="login-form">
                <p class="Login-text"><strong>Skills</strong> </p>
                <hr>
                <ol>
                    <li><strong>Communication:</strong> Effective communication with colleagues, clients, and stakeholders.</li>
                    <li><strong>Teamwork:</strong> Ability to work collaboratively with others to achieve common goals.</li>
                    <li><strong>Time Management:</strong> Prioritizing tasks and managing time efficiently to meet deadlines.</li>
                    <li><strong>Problem-Solving:</strong> Analyzing problems and developing creative solutions.</li>
                    <li><strong>Adaptability:</strong> Ability to adapt to changing circumstances and priorities.</li>
                </ol>
                
            </div>
        </div>

    </div>
    <div class="main">
       <div class="col-md-6 col-sm-12">

            <div class="login-form">
                <p class="Login-text"><strong>Projects</strong> </p>
                <hr>
                <p>ICS 2203 Web App Development Project - JKUAT BScIT 2.1</p>
            </div>
        </div>

    </div>
    <div class="main">
       <div class="col-md-6 col-sm-12">

            <div class="login-form">
                <p class="Login-text"><strong>Mailing List</strong> </p>
                <form action="#" id="formlogin" name="formlogin">
                    <div class="form-group">
                        Email Address      
                        <input onkeypress="resetb()" type="email" class="form-control" placeholder="yourname@domain.com" name="email" id="emailaddress">
                    </div>
                    <div id="err"></div>
                    <button type="button" class="btn btn-outline-primary" onclick="signup()">Sign Up</button>
                    <input type="hidden" name="formsubmitted" value="TRUE" />
                    <div id="feedback"></div>
                </form>
            </div>
        </div>
        
        </div>

</body>

<div class="footer">
    
    <p> Copyright Agassi 2025</p>
</div>
</html>
