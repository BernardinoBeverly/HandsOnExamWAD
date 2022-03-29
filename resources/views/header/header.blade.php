<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<nav class="navbar navbar-expand-md navbar-light bg-light" style="font-size: 18px;">
    <a class="navbar-brand" href="#" style="color:red; font-size: 22px; margin-left: 15px;"><strong>Laravel</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" style="text-align:center; justify-content:center; margin-left: -120px;" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('home')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{URL::route('project')}}">Project Ideas</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::route('about')}}">About Us</a>
        </li>
      </ul>
    </div>
  </nav>
