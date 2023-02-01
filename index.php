<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>foam</title>


<style>

.h3a{


color: orange;


}
.div1{
    height: 100px;
width: 20px;



}



</style>


</head>
<body>



<div class="container card bg-secondary card-body mt-5">
<center>
    <h3 class="h3a">Insert Product Name</h3>
</center>

<form action="show.php" method="post">
  <div class="col">
  <div class="form-group row">
    <label for="exampleInputPassword1">Product name</label>

    <div class="col-sm-10">
    <input type="text" name="pname" class="form-control" id="exampleInputPassword1" Required placeholder="enter your product name">
    </div>  
</div>

<div class="form-group row">
    <label for="exampleInputPassword1" >Product description</label>

    <div class="col-sm-10">
    <textarea  name="pdecri" id="" class="form-control" cols="80" rows="2">Type Message....</textarea>
    </div>  
</div>





<div class="form-group row">
    <label for="inputnumber" >Product price</label>

    <div class="col-sm-10">
    <input type="number" name="pprice" class="form-control" id="inputnumber"required placeholder="enter your product price">
    



    <input class="form-check-input mt-3" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label mt-3" for="invalidCheck2">
        Are you Sure?
      </label>
</div>  
</div>
<center>
  <button type="submit" class="btn btn-outline-dark btn-active"><b> Save data</b></button></center>
  </div>
</form>


</div>












<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>