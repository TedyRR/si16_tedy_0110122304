<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        $z=$_POST['file'];
        $a=$_POST['th'];
        $b=$_POST['des'];
        $c=$_POST['an'];
        $d=$_POST['ta'];
        $e=$_POST['ah'];
    ?>
    <nav>
        <a class="tablink" style=" background-color: #555; color: white; float: left; border: none; outline: none; cursor: pointer; padding-top: 15px; padding-bottom: 15px; width: 20%; text-decoration: none; position:relative; text-align:center;">Home</a>
        <a class="tablink" style=" background-color: #555; color: white; float: left; border: none; outline: none; cursor: pointer; padding-top: 15px; padding-bottom: 15px; width: 20%; text-decoration: none; position:relative; text-align:center;" >Genrate Link</a>
        <a class="tablink" style=" background-color: #555; color: white; float: left; border: none; outline: none; cursor: pointer; padding-top: 15px; padding-bottom: 15px; width: 20%; text-decoration: none; position:relative; text-align:center;"> Transaction History</a>
        <a class="tablink" style=" background-color: #555; color: white; float: left; border: none; outline: none; cursor: pointer; padding-top: 15px; padding-bottom: 15px; width: 20%; text-decoration: none; position:relative; text-align:center;" >Policy</a>
        <a class="tablink" style=" background-color: #555; color: white; float: left; border: none; outline: none; cursor: pointer; padding-top: 15px; padding-bottom: 15px; width: 20%; text-decoration: none; position:relative; text-align:center;" >Logout</a>
    </nav>
    <br><br><br><br><br>
    <table cellpadding="5"align="center">
        <form action="" method="post">
            <tr>
                <td rowspan="11" style="width:30%; text-align:center;">
                    
                    <?php 
                    // echo"$z";
                    ?>
                    <img src="download.png" alt="404" srcset="" width="50%" height="10%" id="foto"><br>
                </td>
                <td style="text-align:right; width: 20%;">Title Here :</td>
                <td><?php echo"$a"; ?></td>
            </tr>
            <tr>
                <td style="text-align:right;">Description :</td>
                <td><?php echo"$b"; ?></textarea></td>
            </tr>
            <tr>
                <td style="text-align:right;">Account Number :</td>
                <td><?php echo"$c"; ?></td>
            </tr>
            <tr>
                <td style="text-align:right;">Total Amount :</td>
                <td><?php echo"$d"; ?></td>
            </tr>
            <tr>
                <td style="text-align:right;">Payment Type :</td>
                <td>
                    <select name="bank" id="" required>
                        <option value="bri">Visa debit</option>
                        <option value="bac">E-mony</option>
                        <option value="abc">Flazz</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align:right;">Accoun Holder :</td>
                <td><?php echo"$d"; ?></td>
            </tr>
            <tr>
                <td style="text-align:right;">Account Number :</td>
                <td>
                    <input type="number" min="100" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label for="" style="color: green;"><input type="checkbox" name="ck[]" id="" require >Send to mobile phone</label><br>
                    <label for="" style="color: green;"><input type="checkbox" name="ck[]" id="" require> Send to email</label>
                </td>
            </tr>
            <tr>
                <td style="text-align:right;">Send to mobile phone :</td>
                <td><input type="number" name="hp" min="100" required></td>
            </tr>
            <tr>
                <td style="text-align:right;">Send to email :</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" style="background-color: green; color:white;">Pay Using QuickLink</button></td>
            </tr>
        </form>
    </table>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        function gambar(val){
            $("#foto").attr('src',URL.createObjectURL(event.target.files[0]));
        }
    </script> -->
</body>
</html>