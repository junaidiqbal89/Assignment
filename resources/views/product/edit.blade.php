<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    @if(session('status'))
    <h6 class="alert alert-success">{{session('status')}}</h6>
    @endif
  <h2>Edit Product</h2>
  <a href="{{url('products')}}" class="btn btn-primary">Back</a>
  <form action="{{url('update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
      <label for="pwd">image:</label>
      <input type="file" class="form-control" name="profile_image">
      <img src="{{asset('uploads/products/'.$product->profile_image)}}" width="70px" height="70px" alt="abc">
    </div>
  <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" value="{{$product->name}}"  placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">description:</label>
      <input type="text" class="form-control" value="{{$product->description}}"  placeholder="Enter email" name="description">
    </div>
    <div class="form-group">
      <label for="pwd">price:</label>
      <input type="text" class="form-control"  value="{{$product->price}}" placeholder="Enter course" name="price">
    </div>
    <div class="form-group">
      <label for="pwd">status:</label>
      <input type="text" class="form-control"  value="{{$product->status}}" placeholder="Enter course" name="status">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
