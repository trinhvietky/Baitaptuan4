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
  <h2>Sign Up</h2>
  <p>It's quick and easy</p>
  <form action="{{url ('process')}}" method="post">
    @csrf
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="First name" name="firstName">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Surname" name="surname">
      </div>
    </div>

    <div class="mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Mobile number or email adddress " name="phoneOrEmail">
    </div>

    <div class="mb-3">  
      <input type="password" class="form-control" id="pwd" placeholder="New password" name="pass">
    </div>

    <!-- <label for="sel1" class="form-label">Select list (select one):</label>

    <div class="row">
      <div class="col">
      <select class="form-select" id="sel1" name="sellist1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
      </div>

      <div class="col">
      <select class="form-select" id="sel1" name="sellist1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
      </div>

      <div class="col">
      <select class="form-select" id="sel1" name="sellist1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
      </div>

    </div> -->


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>

</html>