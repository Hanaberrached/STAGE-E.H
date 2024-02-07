@extends('master', ['pageName' => 'services'])

@section('content')
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - EH DR. MADJEBEUR TAMI</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/accueil.css') }}">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
    />
    <script src="https://kit.fontawesome.com/efb3069b65.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
    

    <title>Page d'accueil</title>
  </head>

  
    <h1 style="font-size: 56px;">Noter nos Services</h1>

    <div class="row">
        @foreach($services as $service)
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="service-block">
            <div class="icon"><i class="fas fa-house-medical fa-xl"></i></div>
            <h1>{{ $service->name }}</h1>
            <h3 style="padding-top:20px ">Note moyenne :
                @php
                    $averageRating = $service->ratings->avg('rating');
                    $roundedRating = round($averageRating);
                @endphp
            
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= $roundedRating)
                        <i class="fas fa-star fa-lg" style="color:yellow"></i>
                    @else
                        <i class="far fa-star fa-lg" style="color:yellow"></i>
                    @endif
                @endfor
            </h3>
            
            @auth
                <form action="{{ route('services.rate', $service->id) }}" method="POST">
                    @csrf
                    <label for="rating_{{ $service->id }}" style="padding-top:20px;font-size:20px; ">Notez ce service :</label>
                    <div class="rating">
                        <input required type="radio" id="star5_{{ $service->id }}" name="rating" value="5">
                        <label for="star5_{{ $service->id }}" title="5 stars"><i class="fas fa-star fa-lg"></i></label>
                        <input required type="radio" id="star4_{{ $service->id }}" name="rating" value="4">
                        <label for="star4_{{ $service->id }}" title="4 stars"><i class="fas fa-star fa-lg"></i></label>
                        <input required type="radio" id="star3_{{ $service->id }}" name="rating" value="3">
                        <label  for="star3_{{ $service->id }}" title="3 stars"><i class="fas fa-star fa-lg"></i></label>
                        <input required type="radio" id="star2_{{ $service->id }}" name="rating" value="2">
                        <label for="star2_{{ $service->id }}" title="2 stars"><i class="fas fa-star fa-lg"></i></label>
                        <input required type="radio" id="star1_{{ $service->id }}" name="rating" value="1">
                        <label for="star1_{{ $service->id }}" title="1 star"><i class="fas fa-star fa-lg"></i></label>
                    </div>
                    
                    <button type="submit" style="margin-top:20px;font-size:16px;border-radius: 5px;">Noter</button>
                </form>
            @else
                <p>Please log in to rate this service.</p>
            @endauth
        </div>
    </div>
@endforeach

    </div>
@endsection

<style>
    .service-block {
    background-color: white;
    border-radius: 5px;
    padding: 20px;
    margin: 20px;
    text-align: center;
}

.icon {
    color:rgb(21, 155, 208);
    font-size: 40px;
    margin-bottom: 10px;
}

h4 a {
    color: #333;
    text-decoration: none;
}

p {
    margin-bottom: 10px;
}

form {
    margin-top: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
}

select {
    margin-bottom: 10px;
}

button {
    background-color: #333;
    color: #fff;
    padding: 5px 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-lg-4,
.col-md-6,
.col-sm-12 {
    padding-right: 15px;
    padding-left: 15px;
    width: 100%;
}

@media (min-width: 768px) {
    .col-lg-4 {
        flex: 0 0 33.33%;
        max-width: 33.33%;
    }
}

@media (min-width: 992px) {
    .col-lg-4 {
        flex: 0 0 33.33%;
        max-width: 33.33%;
    }
}

@media (min-width: 1200px) {
    .col-lg-4 {
        flex: 0 0 33.33%;
        max-width: 33.33%;
    }
}

.rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
}

.rating input {
    display: none;
}

.rating label {
    color: #ddd;
    font-size: 30px;
    margin: 0;
    cursor: pointer;
}

.rating label i {
    transition: color 0.3s ease;
}

.rating input:checked ~ label {
    color: #ffca08;
}

.rating label:hover i,
.rating label:hover ~ label i {
    color: #ffca08;
}

body.dark-mode .service-block {
    background-color: #212121;
    color: #fff;
  }


</style>
</html>
