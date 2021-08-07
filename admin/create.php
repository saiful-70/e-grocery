<?php
ob_start();
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$id = $image = $name = $description = $price = $unit = $remain = "";
$id_err = $image_err = $name_err = $description_err = $price_err = $unit_err = $remain_err = "";

 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
    // Validate id
    $input_id = trim($_POST["id"]);
    if(empty($input_id)){
        $id_err = "Please enter an product Unique ID.";
    } else{
        $id = $input_id;
    }
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } else{
        $name = $input_name;
    }
    
    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter a description.";     
    } else{
        $description = $input_description;
    }
    
    // Validate price
    $input_price = trim($_POST["price"]);
    if(empty($input_price)){
        $price_err = "Please enter the price amount.";     
    } elseif(!ctype_digit($input_price)){
        $price_err = "Please enter a positive integer value.";
    } else{
        $price = $input_price;
    }

    // Validate unit
    $input_unit = trim($_POST["unit"]);
    if(empty($input_unit)){
        $unit_err = "Please enter the unit amount.";     
    } else{
        $unit = $input_unit;
    }
    
    // Validate remain
    $input_remain = trim($_POST["remain"]);
    if(empty($input_remain)){
        $remain_err = "Please enter the remain amount.";     
    } elseif(!ctype_digit($input_remain)){
        $remain_err = "Please enter a positive integer value.";
    } else{
        $remain = $input_remain;
    }
    
    
    // Check input errors before inserting in database
    if(empty($id_err) && empty($name_err) && empty($description_err) && empty($price_err) && empty($unit_err) && empty($remain_err)){
        // image validation
        $imagetype = array(image_type_to_mime_type(IMAGETYPE_GIF), image_type_to_mime_type(IMAGETYPE_JPEG), image_type_to_mime_type(IMAGETYPE_PNG));

        $image_err = "";
        $imageUploadERROR = FALSE;
        $FOLDER = "uploads/products/";
        if ($_FILES["f"]["name"] && $_FILES["f"]["error"] == 0) {
            // uploaded file is OK
            
            if (in_array($_FILES["f"]["type"], $imagetype)) {
                // get the extention of the file
                $file_extention = @strtolower(@end(@explode(".", $_FILES["f"]["name"])));
                // Setting an unique name for the file
                $file_name = $_POST["id"] . "." . $file_extention;
                $image = $file_name;
                
                if (move_uploaded_file($_FILES["f"]["tmp_name"], $FOLDER . $file_name) === FALSE) {
                    $image_err = "Error while uploading the file";
                } else {
                    echo "Image uploaded successfully";
                }
            } else {
                $image_err = "File is not a valid image type.";
            }
        }
        // Prepare an insert statement
        $sql = "INSERT INTO products (id, image, name, description, price, unit, remain) VALUES ('$id', '$image', '$name', '$description', '$price', '$unit', '$remain')";
        if (mysqli_query($link, $sql)) {
            header("Location: products.php#products");
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($link);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>e-grocery - Create Record</title>
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
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 class="bg-success p-3 my-3 text-center text-white text-uppercase">Create Record</h2>
                    </div>
                    <h4 class="text-primary">Please fill this form and submit to add product</h4>
                    <form action="create.php" enctype="multipart/form-data" method="POST">
                        <div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>">
                            <label class="font-weight-bold">Product ID <span class="text-danger">[Put it
                                    UNIQUE]</span></label>
                            <input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
                            <span class=" help-block text-danger"><?php echo $id_err;?></span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                                    <label class="font-weight-bold">Product Picture</label>
                                    <input type="file" name="f" class="form-control" required>
                                    <span class=" help-block text-danger"><?php echo $image_err;?></span>
                                </div>
                                <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                    <label class="font-weight-bold">Product Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                                    <span class="help-block text-danger"><?php echo $name_err;?></span>
                                </div>
                                <div class=" form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                                    <label class="font-weight-bold">Product Description</label>
                                    <textarea name="description"
                                        class="form-control"><?php echo $description; ?></textarea>
                                    <span class="help-block text-danger"><?php echo $description_err;?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                    <label class="font-weight-bold">Product Price</label>
                                    <input type="text" name="price" class="form-control" value="<?php echo $price; ?>">
                                    <span class="help-block text-danger"><?php echo $price_err;?></span>
                                </div>
                                <div class="form-group <?php echo (!empty($remain_err)) ? 'has-error' : ''; ?>">
                                    <label class="font-weight-bold">Product Remain</label>
                                    <input type="text" name="remain" class="form-control"
                                        value="<?php echo $remain; ?>">
                                    <span class="help-block text-danger"><?php echo $remain_err;?></span>
                                </div>
                                <div class="form-group <?php echo (!empty($unit_err)) ? 'has-error' : ''; ?>">
                                    <label class="font-weight-bold">Standard Product
                                        Unit [e.g. kg,pieces,dozen,etc]</label>
                                    <input type="text" name="unit" class="form-control" value="<?php echo $unit; ?>">
                                    <span class="help-block text-danger"><?php echo $unit_err;?></span>
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                        <a href="home.php" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>