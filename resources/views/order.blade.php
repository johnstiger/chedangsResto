<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chedangs Resto</title>
  </head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <body>
    <div class="header">
      <a href="{{route('history')}}" class="btn btn-primary">View History</a>
    </div>
    <div class="row">
      @foreach($products as $product)
      <div class="col-md-4 mt-5">
        <div class="card ml-5" style="width: 25rem;">
      <img class="card-img-top" src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2018/5/1/0/FNK_Mango-Float-H1_s4x3.jpg.rend.hgtvcom.616.462.suffix/1525187349812.jpeg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <h6>Php {{$product->price}}.00</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{route('orderForm',$product->id)}}" class="btn btn-primary">Purchase</a>
        </div>
      </div>
      </div>
    @endforeach
    </div>
</body>
</html>
