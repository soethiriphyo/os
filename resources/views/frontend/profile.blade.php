@extends('frontendtemplate')
@section('content')

<div class="col-lg-9">
  {{-- <h2 class="text-center">Customer Profile Page</h2> --}}



  <div class="container">
    {{-- {{Auth::user()}} --}}
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
              
              </div>

              <form class="user" method="POST" action="backend/signup.php" enctype="multipart/form-data">
                

                 <div class="form-group row">
                 
                 <div class="col-lg-3"></div>
                 <div class="col-lg-3"> 
                  <img src="{{asset('frontend/images/lisa.jpeg')}}" style="border-radius: 60%; width: 150px; height: 150px">
                 </div>
                  
 
                </div>


                <div class="form-group">
                  <input type="text" name="user_name" value="{{Auth::user()->name}}" class="form-control form-control-user" placeholder="Name">
                

                </div>

               
                <div class="form-group">
                  <input type="email" name="user_email" value="{{Auth::user()->email}}" class="form-control form-control-user" placeholder="Email Address">
                
                </div>

               


                {{-- <input type="submit" class="btn btn-primary btn-user btn-block" value="Change"> --}}
                
                
              </form>

              <hr>



             
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


@endsection