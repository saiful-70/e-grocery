<?php
    // Process delete operation after confirmation
    require_once "config.php";
    if(isset($_POST["delete"])) {
        $id =  trim($_POST["id"]); 
        $sql = "DELETE FROM products WHERE id = '$id'";
        if (mysqli_query($link, $sql)) {
            header("Location: home.php");
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($link);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style type="text/css">
    .wrapper {
        width: 500px;
        margin: 0 auto;
    }
    </style>
</head>

<body>
    <div class=>
        <div class=" container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 class="bg-danger p-3 my-3 text-center text-white text-uppercase">Delete Record</h2>
                    </div>
                    <form action="delete.php" method="POST">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>" />
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger" name="delete">
                                <a href="home.php" class="btn btn-primary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>