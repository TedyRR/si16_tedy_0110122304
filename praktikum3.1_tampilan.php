<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <title>Pemesanan Pizza</title>
</head>

<body>
    <?php
        $name = $_POST['name'];
        $address = $_POST['address'];
        $telpon = $_POST['telpon'];
        $email = $_POST['email'];
        $deli = $_POST['deli'];
        $co = $_POST['co'];
        $tp = implode(",", $_POST['tp']);
        $many = $_POST['many'];
    ?>
    <center>
        <br>
        <div class="w3-card-4" style="width:50%; background:pink; ">
            <div class="w3-container">
                <div style="margin: 30px; padding:10px;">
                    <p class="" style="font-family: 'Times New Roman', Times, serif; font-size:25px;"> THANK YOU</p>
                    <hr style="border-top: 1px solid blue; margin-top:-15px;">

                    
                    <p style="color: red; font-weight:bold; text-align: left;">Your Information</p>
                    <ul style="text-align: left; margin-top:-10px;">
                        <li style="list-style: none;"><b>Name : </b><?php echo"$name"; ?></li>
                        <li style="list-style: none;"><b>Address : </b><?php echo"$address"; ?></li>
                        <li style="list-style: none;"><b>Telephone Number : </b><?php echo"$telpon"; ?></li>
                        <li style="list-style: none;"><b>Email Address : </b><?php echo"$email"; ?></li>
                    </ul>
                    <p style="text-align: left;"><b>Delivery intruction : </b><?php echo"$deli"; ?></p>

                    <p style="color: red; font-weight:bold; text-align: left;">Your Pizza</p>
                    <ul style="text-align: left; margin-top:-10px;">
                        <li style="list-style: none;"><b>Crust : </b><?php echo"$co"; ?></li>
                        <li style="list-style: none;"><b>Toppings : </b><?php echo"$tp"; ?></li>
                        <li style="list-style: none;"><b>Number : </b><?php echo"$many"; ?></li>
                        
                    </ul>

                    <hr style="border-top: 1px solid red;">
                    <p style="text-align: left;">This site is for educational purposses only. No Pizzas well be delivered.</p>
                </div>
            </div>
        </div>
    </center>
</body>

</html>