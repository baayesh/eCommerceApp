<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha256-fx038NkLY4U1TCrBDiu5FWPEa9eiZu01EiLryshJbCo=" crossorigin="anonymous">
  <title>Add Product</title>
</head>
<body>
  <input type="hidden" name="id" value="{{$Product['id']}}">

  <div class="container">
    <a href="/">Back</a>
  </div>
 <!-- Form -->
  <form action= "" method="POST"  >
      @csrf
        
     
          <div class="container mt-5">
            <label for="ProductName">Product Name</label>
            <input type="text" name="ProductName" value="{{$Product['ProductName']}}" class="ms-4" >

          </div>
          <div class="container">
            <label for="ProductDescription" class="mt-2">Product Description</label>
            <input type="text" value="{{$Product['ProductDescription']}}" name="ProductDescription"  >
          </div>
          <div class="container">
            <label for="ProductPrice" class="mt-2">Product Price</label>
            <input type="text" value="{{$Product['ProductPrice']}}"name="ProductPrice"  >
          </div>

          <div class="container">
            <button type="Submit" class="btn-submit">Submit</button>
          </div>
    </form>


</body>
</html>