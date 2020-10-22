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
<div class="container">
<div class="row">

<table class="table table-striped">
   <tr>
      <td>s.no</td>
      <td>title</td>
      <td>instructions</td>
      <td>ingredients</td>
      <td>time</td>
      <td>servings</td>
      <td>nutrition</td>
      <td>food</td>

      <!-- <td>dieselcost</td>
      <td>existingdiesel</td>
      <td>fillup</td>
      <td>totaldiesel</td> 
      <td>finalbill</td> -->
   </tr>
   @foreach ($users as $key=>$food)


   <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $food->title}}</td>
      <td>{{ $food->instructions}}</td>
      <td>{{ $food->ingredients}}</td>
      <td>{{ $food->time}}</td>
      <td>{{ $food->servings}}</td>
      <td>{{ $food->nutrition}}</td>
      <td>{{ $food->food}}</td>
    
      
      </tr>

                  @endforeach
               </table>
               <a href="{{url('/')}}">go back to add recipe</a>
               </div>
</body>
</html>