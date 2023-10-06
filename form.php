<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Document</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Welcome</h1>
                <p>

                    <?php 
                        $fname = '';
                        $lname = '';
                        $checked = '';

                        if (isset( $_REQUEST['cb1'] ) && $_REQUEST['cb1']==1 ){
                            $checked = 'checked';
                        }
                    ?>

                    <?php if (isset( $_REQUEST['fname'] ) && !empty($_REQUEST['fname'] ) ){
                        // $fname = htmlspecialchars($_REQUEST['fname']);
                        $fname = filter_input(INPUT_POST,'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } ?>
                    <?php if (isset( $_REQUEST['lname'] ) && !empty($_REQUEST['lname'] ) ){
                        // $fname = htmlspecialchars ($_REQUEST['lname']);
                        $fname = filter_input(INPUT_POST,'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } ?>

                    <?php// if ( isset( $_REQUEST['fname'] ) && !empty($_REQUEST['fname'] ) ) { ?>
                        <!-- First Name: <?php //echo $_REQUEST['fname']; ?> <br> -->
                    <?php// } ?>
                    <?php //if ( isset( $_REQUEST['lname']) && !empty($_REQUEST['lname'] ) ) { ?>      
                        <!-- Last Name: <?php //echo $_REQUEST['lname']; ?> <br> -->
                    <?php //} ?>
                </p>
                <p>
                    <!-- First Name: <?php //echo $fname; ?> <br> -->
                    <!-- Last Name: <?php //echo $lname; ?> -->
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                    
                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked ?>>
                        <label for="cb1" class="label-inline">Some Checkbox</label>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>