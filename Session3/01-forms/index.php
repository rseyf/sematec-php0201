<?php
    $customerName= $_POST["customer_name"];
    echo ($_POST["customer_name"]);


    // $sentEmail = mail("rseyf@hotmail.com", $customerName ,"new customer signed up");
    // if ($sentEmail) {
    //     echo "email sent!";
    // }

    

?>
<html>
    <head>
        <title>Input form</title>
    </head>
    <body>
        <div><h1>Please Enter Your Name:</h1></div>
        <div>
            <!-- start of input form -->
            <form action="index.php" enctype="multipart/form-data" method="POST">
                <input type="text" name="customer_name" placeholder="Your Name">
                <button type="submit">Submit</button>
            </form>
            <!-- end of input form -->
        </div>
    </body>         

</html>