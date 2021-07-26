<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>How to display success message after form submission without changing URL in Php?</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    </head>
    <body>
        <div class="container" style="max-width:800px;margin:0 auto;margin-top:50px;">  
            <div>
                <h2 style="margin-bottom:50px;">ENTER YOUR EMAIL TO REGISTER</h2>
                <div>

                    <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                    ?>

                    <form method="post" action="insert.php">
                        
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" required="" placeholder="Enter email" name="email">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="save" value="Save"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>