<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <body>
    <div class="container">

    <form action="{{route('register')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Firstname</label>
        <input type="text" name="firstname" class="form-control"   placeholder="Firstname">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Lastname</label>
        <input type="text" name="lastname" class="form-control"  placeholder="Lastname">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" name="address" class="form-control"  placeholder="Address">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contact Number</label>
        <input type="number" name="contact_number" class="form-control"  placeholder="Contact Number">
      </div>
      <input type="hidden" name="product_id" value="{{$product}}">
      <input type="hidden" name="product_quantity" value="{{$quantity}}">

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
