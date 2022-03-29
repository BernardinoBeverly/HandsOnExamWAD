@extends('layout.main')

@section('PageContent')
   <html>
       <body>
        <div class="jumbotron d-flex align-items-center">
            <div class="container text-center" style="position: relative; top: 100px; ">
                <h2 style="font-weight: 600; font-size: 4rem;">{{$title}}</h2>
                <h4 style="font-size: 3rem">{{$subtitle}}</h4>
                <h4 style="color:red; font-size: 3rem; margin-bottom: 30px;">{{$subSubtitle}}</h4>
                <p style="font-size: 18px; color: rgb(87, 87, 87); margin-bottom: 30px;">{{$body}}</p>
                <a href="{{URL::route('project')}}" class="btn btn-danger">Get Started</a>
            </div>
        </div>
       </body>
   </html>
@endsection
