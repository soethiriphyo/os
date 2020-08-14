@extends('frontendtemplate')

@section('content')
<div class="col-lg-9">
	<h2>Profile Page</h2>

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         <div class="col-lg-5">
          	<img src="{{asset('frontend/images/jimin.jpeg')}}" width="380" height="550">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Your Profile!</h1>
              </div>
              <form class="user" method="POST" action="backend/signup.php" enctype="multipart/form-data">
                

                <div class="form-group">
                  <input type="file" class="form-control-file" placeholder="Profile" name="user_profile">
                
                    
                  
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Name" name="user_name" value="">
                  
                </div>

                
                
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="user_email" value="">
                  
                </div>

      

              

                <div class="form-group">
                  <input type="number" class="form-control form-control-user" placeholder="Phone Number" name="user_phone" value="">
                  
                </div>

                <div class="form-group">
                  <textarea class="form-control" placeholder="Address" name="user_address" value=""></textarea>
                 
                </div>




                
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
                  
                
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
	
</div>

@endsection