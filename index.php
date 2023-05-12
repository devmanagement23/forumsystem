<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CodeDiscuss</title>
  </head>
  <body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>

          <!-- -----crousel------------------------------------------------------------------------------ -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/1600x400/?code,java" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1600x400/?code,python" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1600x400/?code,hacker" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- -------------------------------cards--------------------------------------------------- -->
    <div class="container my-4">
      <h2 class="text-center my-4">CodeDiscuss - Categories</h2>       

      <div class="row my-4">

         <!-- fetching categories from database -->
        <?php 
          $sql = "SELECT * FROM categories";          
          $result = mysqli_query($conn,$sql);

            //  while loop to iterate through category in cards

          while($row = mysqli_fetch_assoc($result)){
            //echo $row['category_id'];
            $cat = $row['category_name'];

            //card
            echo '<div class="col-md-4 my-2">
                    <div class="card" style="width: 18rem;">
                      <img src="https://source.unsplash.com/600x400/?'. $cat .',coding" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">'. $cat .'</h5>
                        <p class="card-text">'.$row['category_description'] .'....</p>
                        <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                        </div>          
                        </div>';
                      }          
                      
        ?>

                                                <!-- $description =$row['category_description'];

                                                  <p class="card-text">'.substr($description,0,20).'.</p>
                                               -->
      </div>
    </div>    

    
    <?php include 'partials/_footer.php'; ?>
 
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>