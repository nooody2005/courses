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
    <title>log in</title>
  </head>
  <body>
    <div class="parent second">
      <div class="right-bar second">
        <div class="container">
          <div class="header">
            <h1>Welcome Back</h1>
          </div>
          <!-- <div class="prag">
            <p>
              Today is a new day. It's your day. You shape it. Sign in to start
              managing your projects.
            </p>
          </div> -->
          <form method="POST" action="{{route('handlelogin')}}">

        @csrf

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
            <label for="">Email</label>
            <input type="text" name= "email" placeholder="Example@email.com" required />
            <label for="">Password</label>
            <input
              type="password"
              name="password"
              placeholder="at least 8 characters"
              required
            />
          </div>
           <div class="signin">
            <p>Don't you have an account? <a href="">Sign up</a></p>
          </div>
          <div class="check">
            <div class="btn btn-signup">
              <input type="submit" value="Sign in" />
            </div>
          </div>
          </form>


        </div>
      </div>
      <div class="left-bar">
        <div class="logo">
          <div class="image">
            <img src="{{asset('dashboard/assets/image/Group.svg')}}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
