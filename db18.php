<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='main.js'></script>
    <style>
        body{
  background-color: #eee;
}

div.stars {

  width: 270px;

  display: inline-block;

}

 .mt-200{
     margin-top:200px;  
 }

input.star { display: none; }

 

label.star {

  float: right;

  padding: 10px;

  font-size: 36px;

  color: #4A148C;

  transition: all .2s;

}

 

input.star:checked ~ label.star:before {

  content: '\f005';

  color: #FD4;

  transition: all .25s;

}

 
input.star-5:checked ~ label.star:before {

  color: #FE7;

  text-shadow: 0 0 20px #952;

}

 

input.star-1:checked ~ label.star:before { color: #F62; }

    

label.star:hover { transform: rotate(-15deg) scale(1.3); }

 

label.star:before {

  content: '\f006';

  font-family: FontAwesome;

}
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center mt-200">
	

<div class="row">

	<div class="col-md-12">

		<div class="stars">

  <form action="">

    <input class="star star-5" id="star-5" type="radio" name="star"/>

    <label class="star star-5" for="star-5"></label>

    <input class="star star-4" id="star-4" type="radio" name="star"/>

    <label class="star star-4" for="star-4"></label>

    <input class="star star-3" id="star-3" type="radio" name="star"/>

    <label class="star star-3" for="star-3"></label>

    <input class="star star-2" id="star-2" type="radio" name="star"/>

    <label class="star star-2" for="star-2"></label>

    <input class="star star-1" id="star-1" type="radio" name="star"/>

    <label class="star star-1" for="star-1"></label>

  </form>

</div>


		
	</div>
	

</div>

</div>

<!-- <section class="intro">
  <div class="mask d-flex align-items-center h-100" style="background-color: #D6D6D6;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="my-md-5 pb-5">

                <h1 class="fw-bold mb-0">Welcome</h1>

                <i class="fas fa-user-astronaut fa-3x my-5"></i>
                
                <div class="form-outline mb-4">
                  <input type="email" id="typeEmail" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmail">Email</label>
                </div>

                <div class="form-outline mb-5">
                  <input type="password" id="typePassword" class="form-control form-control-lg" />
                  <label class="form-label" for="typePassword">Password</label>
                </div>

                <button class="btn btn-primary btn-lg btn-rounded gradient-custom text-body px-5" type="submit">Login</button>

              </div>

              <div>
                <p class="mb-0">Don't have an account? <a href="#!" class="text-body fw-bold">Sign Up</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<div class="container">
  <span id="rateMe1"></span>
</div>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
<!-- rating.js file -->
<script>
    // Rating Initialization
$(document).ready(function() {
  $('#rateMe1').mdbRate();
});
</script>
</body>

</html>