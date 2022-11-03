@extends('index')

@section('container')

<body style="background-color: rgb(60, 55, 60)">

    <div class="container" style="margin-top: 70px">
        <div class="card-group" >

            @foreach ($heros as $hero )

                <div class="card text-white bg-secondary mb-3 gx-2" style="max-width: 27rem;">
                  <img class="card-img-top" src={{$hero->image_url}} alt="Card image cap" style="max-width:400px">
                     <div class="card-body">
                         <div class="card-title">
                            <h5>Name</h5>
                            <td>{{ $hero->name }}</td>
                        </div>
                         <div class="card-role">
                            <h5 class="card-text">Role</h5>
                            <td>{{ $hero->role }}</td>
                        </div>
                    </div>
              </div>

              @endforeach

          </div>
    </div>
</body>

@endsection
