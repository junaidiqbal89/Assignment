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
  <h2>Product Table</h2>
  <a href="{{url('add-product')}}" class="btn btn-primary">Add Product</a>        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>image</th>
        <th>name</th>
        <th>description</th>
        <th>price</th>
        <th>status</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($product as $item)
      <tr>
      <td><img src="{{asset('uploads/products/'.$item->profile_image)}}" width="70px" height="70px" alt="abc"></td>  
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->status}}</td>
        <td>
            <a href="{{url('edit-product/'.$item->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
