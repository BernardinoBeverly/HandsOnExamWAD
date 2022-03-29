@extends('layout.main')

@section('PageContent')
   <html>
       <body>
        <h2 class="card-title text-center" style="margin-top: 25px; margin-bottom: 30px;">{{$title}}</h2>
        <div class="card-group text-center">
            @foreach($ideas as $idea)
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title" style="font-size: 1.2rem;">{{$idea}}</h5>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="card-group">
            @foreach($ideasImgs as $ideasImg)
                <div class="card">
                    <div class="card-body text-center">
                    <img src="{{$ideasImg}}" class="card-img-top" alt="..." style="width: 150px; height: 150px">
                    </div>
                </div>
            @endforeach
        </div>
       </body>
   </html>
@endsection
