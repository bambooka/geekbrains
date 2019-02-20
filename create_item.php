<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $describe = $image = "";
$name_err = $describe_err = $image_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    // $input_name = trim($_POST["name"]);
    // if(empty($input_name)){
    //     $name_err = "Please enter a name.";
    // } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
    //     $name_err = "Введите название";
    // } else{
    //     $name = $input_name;
    // }

    // Validate describe
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Введите название.";     
    } else{
        $name = $input_name;
    }
    
    // Validate describe
    $input_describe = trim($_POST["describe"]);
    if(empty($input_describe)){
        $describe_err = "Введите описние.";     
    } else{
        $describe = $input_describe;
    }
    
    // Validate image
    $input_image = trim($_POST["image"]);
    if(empty($input_image)){
        $image_err = "Введите ссылку на изображение украшения.";     
    } else{
        $image = $input_image;
    }
    
    
    if(empty($name_err) && empty($describe_err) && empty($image_err)){

        // $sql = "INSERT INTO item (name, describe, image) VALUES (?, ?, ?)";

        // $stmt = $mysqli->prepare($sql);
        $mysqli->query("INSERT INTO item (name, describe, image) VALUES ('$name', '$describe', $image')");

        // $stmt->bind_param("sss", $_POST['name'], $_POST['describe'], $_POST['image']);
        
        // if($stmt->execute()){

        //     header("location: item_list.php");

        //     $stmt->close();
        //     exit();
        // }



    }
    
    // Close connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    .wrapper{
        width: 500px;
        margin: 0 auto;
    }
</style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Добавление украшения</h2>
                    </div>
                    <p>Заполните все поля для добавления нового украшения и нажмите кнопку "Добавить"</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Название</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                        </div>
                        <div class="form-group <?php echo (!empty($describe_err)) ? 'has-error' : ''; ?>">
                            <label>Описание</label>
                            <textarea name="describe" class="form-control"><?php echo $describe; ?></textarea>
                        </div>
                        <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Ссылка на изображение</label>
                            <input type="text" name="image" class="form-control" value="<?php echo $image; ?>">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                        <a href="item_list.php" class="btn btn-default">К украшениям</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>