<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <title>sign up</title>
  </head>
  <body>
    <div class="parent">
      <div class="left-bar">
        <div class="logo">
          <div class="image">
            <img src="{{asset('dashboard/assets/image/Group.svg')}}" alt="logo" />
          </div>
          <div class="button">
            <!-- <button>
              <a href="sign in.html" class="signinlink">Sign in</a>
            </button> -->
          </div>
        </div>
      </div>
      <div class="right-bar">
        <div class="container">
          <div class="header">
            <h1>Create your account</h1>
          </div>
          <div class="prag">
            <p>
              learn fullstack from our top tutors!
            </p>
          </div>

          <form method ="Post" action="{{route('storeu')}}">
          @csrf <!--form start-->

          @if(Session::has('msg'))
          <div class="alert alert-success">{{Session::get('msg')}}</div>
          @endif


          @if ($errors->any())
          <div class="alert alert-danger">

           @foreach($errors->all() as $error)
           <li> {{$error}} </li>
           @endforeach

          </div>
          @endif

          <div class="form">
            <label for="">Full name</label>
            <input type="text" name= "name" placeholder="Enter your name" required />
            <label for="">username</label>
            <input type="text" name= "username" placeholder="Enter your username" required />
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Example@email.com" required />
            <label for="">Phone number</label>
            <input type="phone" name="phone" placeholder="Enter your phone number" required />
           <label for="">photo</label>
            <input type="file" name="image" placeholder="your photo " required />



            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter your password" required />

          </div>
          <div class="check">
            <label for="" class="checkbox">
              <input type="checkbox" />
              I agree to the terms and conditions
            </label>
            <div class="signin">
            <p>Already have account?<a href="{{route('login')}}"> log in</a></p>
          </div>
            <div class="btn btn-signup">
              <input type="submit" value="Sign up" />
            </div>
          </form> <!--form end-->
            </div>
          <!-- <div class="or">
            <div class="bar"></div>
            <span>OR</span>
            <div class="bar"></div>
          </div> -->
          <!--sign up with other platforms-->
          <!-- <div class="option">
            <img src="image/Google.svg" alt="" />
            <a href="">Sign up with Google</a>
          </div>
          <div class="option2">
            <img src="image/Vector.svg" alt="" />
            <a href="">Sign up with Facebook</a>
          </div> -->

        </div>
      </div>
    </div>
  </body>
</html>
