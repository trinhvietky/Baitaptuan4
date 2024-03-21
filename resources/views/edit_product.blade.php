<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <h1>Edit product</h1>
        <form action="{{ url ('/product/'.$id)}}" method="post">
            @method ('PUT')
            @csrf
            <div class="mb-3 mt-3">
                <label for="Name of product"></label>
                <input type="text" class="form-control" id="email" placeholder="Name of product" name="product_name">
            </div>

            <button type="submit" class="btn btn-primary">Edit product</button>
        </form>
    </div>

</body>

</html>