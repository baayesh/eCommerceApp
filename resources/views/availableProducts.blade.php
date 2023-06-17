<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="/">Home</a>
  <h1>This is where products will show</h1>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Product Name</th>
      <th>Product Description</th>
      <th>Product Price</th>
      <th>Edit Product</th>
      <th>Delete Product</th>
    </tr>
    @foreach($Product as $Products)
    <tr>
      <td>{{$Products["id"]}}</td>
      <td>{{$Products["ProductName"]}}</td>
      <td>{{$Products["ProductDescription"]}}</td>
      <td>{{$Products["ProductPrice"]}}</td>
      <td><a href="{{ 'edit/' . $Products['id'] }}">Edit</a></td>
      <td><a href="{{'delete/' . $Products['id']}}">Delete</a></td>
      
    </tr>
    @endforeach


  </table>
</body>
</html>