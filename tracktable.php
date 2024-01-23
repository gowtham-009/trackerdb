<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css"
        integrity="sha512-8RxmFOVaKQe/xtg6lbscU9DU0IRhURWEuiI0tXevv+lXbAHfkpamD4VKFQRto9WgfOJDwOZ74c/s9Yesv3VvIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Project Tracker</h1>
                <a href="form.php"><i class="fa-solid fa-ellipsis text-dark fs-2"></i></a>
            </div>
            <div class="col-12 p-5">
              <div class="row">
              <div class="col p-0"><h4 class="text-primary" style="font-weight:400;">This month</h4></div>
               <div class="col p-0 d-flex justify-content-center align-items-center"><h5 style="color:grey;">Person</h5></div>
               <div class="col p-0 d-flex justify-content-center align-items-center"><h5 style="color:grey;">Date</h5></div>
               <div class="col p-0 d-flex justify-content-center align-items-center"><h5 style="color:grey;">Brainstorming</h5></div>
               <div class="col p-0 d-flex justify-content-center align-items-center"><h5 style="color:grey;">Execution</h5></div>
               <div class="col p-0 d-flex justify-content-center align-items-center"><h5 style="color:grey;">Launch</h5></div>
             
              </div>
              <?php
                 $sql="select * from `tracktable`";
                 $result=mysqli_query($con,$sql);
                 if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $month=$row['month'];
                        $image=$row['image'];
                        $date=$row['date'];
                        $brain=$row['brain'];
                        $execution=$row['execution'];
                        $launch=$row['launch'];
                        echo '<div class="row gap-2">
                        <div class="col p-2 rounded mb-2 bg-light d-flex justify-content-start align-items-center" style="border-left:4px solid blue;">'.$month.'</div>
                        <div class="col p-2 rounded mb-2 bg-light d-flex justify-content-center align-items-center"><img src="image/01.JPG" class="img-fluid rounded-circle" alt="person" width=50 height=100></div>
                        <div class="col p-2 rounded mb-2 bg-light d-flex justify-content-center align-items-center">'.$date.'</div>
                        <div class="col p-2 rounded mb-2 bg-success text-white d-flex justify-content-center align-items-center">'.$brain.'</div>
                        <div class="col p-2 rounded mb-2 bg-success text-white d-flex justify-content-center align-items-center">'.$execution.'</div>
                        <div class="col p-2 rounded mb-2 bg-success text-white d-flex justify-content-center align-items-center">'.$launch.'</div>
                        
                        </div>';

                    }
                 }




                ?>
                
            </div>

            <div class="col-12 p-5">
              <div class="row">
              <div class="col p-0"><h4 class="text-danger" style="font-weight:400;">Last month</h4></div>
               <div class="col p-0 d-flex justify-content-center align-items-center"><h5 style="color:grey;">Person</h5></div>
               <div class="col p-0 d-flex justify-content-center align-items-center"><h5 style="color:grey;">Date</h5></div>
               <div class="col p-0 d-flex justify-content-center align-items-center"><h5 style="color:grey;">Brainstorming</h5></div>
               <div class="col p-0 d-flex justify-content-center align-items-center"><h5 style="color:grey;">Execution</h5></div>
               <div class="col p-0 d-flex justify-content-center align-items-center"><h5 style="color:grey;">Launch</h5></div>
              </div>
              <?php
                 $sql="select * from `tracktable`";
                 $result=mysqli_query($con,$sql);
                 if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $month=$row['month'];
                        $image=$row['image'];
                        $date=$row['date'];
                        $brain=$row['brain'];
                        $execution=$row['execution'];
                        $launch=$row['launch'];
                        echo '<div class="row gap-2">
                        <div class="col p-2 rounded mb-2 bg-light d-flex justify-content-start align-items-center" style="border-left:4px solid red;">'.$month.'</div>
                        <div class="col p-2 rounded mb-2 bg-light d-flex justify-content-center align-items-center"><img src="image/02.JPG" class="img-fluid rounded-circle" alt="person" width=50 height=100></div>
                        <div class="col p-2 rounded mb-2 bg-light d-flex justify-content-center align-items-center">'.$date.'</div>
                        <div class="col p-2 rounded mb-2 bg-danger text-white d-flex justify-content-center align-items-center">'.$brain.'</div>
                        <div class="col p-2 rounded mb-2 bg-danger text-white d-flex justify-content-center align-items-center">'.$execution.'</div>
                        <div class="col p-2 rounded mb-2 bg-danger text-white d-flex justify-content-center align-items-center">'.$launch.'</div>
                        </div>';

                    }
                 }




                ?>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>