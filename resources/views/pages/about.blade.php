@extends('layout.main')

@section('PageContent')
   <html>
       <body>
        <h2 class="text-center" style="margin-top: 25px; margin-bottom: 20px;">{{$title}}</h2>
        <div class="container text-center">
            <h4 style="margin-bottom: 30px" >{{$subtitle}}</h4>
            <p style="font-size: 16px; color: rgb(87, 87, 87);">{{$subSubtitle}}</p>
            <p style="font-size: 16px; color: rgb(87, 87, 87);">{{$body}}</p>
        </div>
       </body>
   </html>
@endsection
