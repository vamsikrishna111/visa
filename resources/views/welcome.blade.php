<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-3">

<form action="{{url('insert')}}" method="post">
{{ csrf_field() }}

<div class="row">
<div class="col-md-6">

<div class="form-group">
<textarea class="form-control" rows="2"  name="title" placeholder="title"></textarea></br>
<textarea class="form-control" rows="2"  name="instructions" placeholder="instructions"></textarea></br>
<textarea class="form-control" rows="2"  name="ingredients" placeholder="ingredients"></textarea></br>
<textarea class="form-control" rows="2"  name="time"  placeholder="time"></textarea></br>
<textarea class="form-control" rows="2"  name="servings"  placeholder="servings"></textarea></br>
<textarea class="form-control" rows="2"  name="nutrition"  placeholder="nutrition"></textarea></br>
<select class="form-control" id="sel1" name="food">
<option value="" disabled selected>food</option>
        <option value="veg">veg</option>
        <option value="non-veg">non-veg</option>
       
      </select></br>
      <button class="btn btn-primary">submit</button>

</div>
</div>
</div>
</div>
</form>
</body>
</html>