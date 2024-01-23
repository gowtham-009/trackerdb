<?php
include 'connect.php';
if(isset($_POST['submit'])){
   
    $month=$_POST['month'];
    $get_image_name=$_FILES['image']['name'];
    $image_path="images/".basename($get_image);
    $date=$_POST['date'];
    $brain=$_POST['brain'];
    $execution=$_POST['execution'];
    $launch=$_POST['launch'];

    $sql="insert into `tracktable`(month,image,date,brain,execution,launch)
    values(' $month',' $get_image_name','$date','$brain','$execution','$launch')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:tracktable.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formdb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">This Month</label>
                        <input type="text" class="form-control" id="ins" name="month" placeholder="Enter a this month">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Person</label>
                        <input type="file" class="form-control" id="ins" name="image" placeholder="chose your image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="text" class="form-control" id="ins" name="date" placeholder="enter a date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Brainstorming</label>
                        <input type="text" class="form-control" id="ins" name="brain" placeholder="enter a Brainstorming">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Execution</label>
                        <input type="text" class="form-control" id="ins" name="execution" placeholder="enter a Execution">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Launch</label>
                        <input type="text" class="form-control" id="ins" name="launch" placeholder="enter a Launch">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
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