<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <a class="tablink" style=" background-color: #555; color: white; float: left;        border: none; outline: none; cursor: pointer; padding-top: 15px; padding-bottom: 15px; width: 20%; text-decoration: none; position:relative; text-align:center;">Home</a>
        <a class="tablink" style=" background-color: #555; color: white; float: left;        border: none; outline: none; cursor: pointer; padding-top: 15px; padding-bottom: 15px; width: 20%; text-decoration: none; position:relative; text-align:center;" >Genrate Link</a>
        <a class="tablink" style=" background-color: #555; color: white; float: left;        border: none; outline: none; cursor: pointer; padding-top: 15px; padding-bottom: 15px; width: 20%; text-decoration: none; position:relative; text-align:center;"> Transaction History</a>
        <a class="tablink" style=" background-color: #555; color: white; float: left;        border: none; outline: none; cursor: pointer; padding-top: 15px; padding-bottom: 15px; width: 20%; text-decoration: none; position:relative; text-align:center;" >Policy</a>
        <a class="tablink" style=" background-color: #555; color: white; float: left;
        border: none; outline: none; cursor: pointer; padding-top: 15px; padding-bottom: 15px; width: 20%; text-decoration: none; position:relative; text-align:center;" >Logout</a>
    </nav>
    <br><br><br><br><br>
    <table cellpadding="5"align="center">
        <form action="praktikum3.2_tampilan.php" method="post">
            <tr>
                <td rowspan="11" style="width:30%; text-align:center;">
                    <img src="download.png" alt="404" srcset="" width="50%" height="10%" id="foto"><br>
                    <center><input type="file" name="file" id="" accept="image/png, .jpeg, .jpg" onchange="gambar(this.value)" style="margin-left: 20%;margin-right: 20%;"></center>
                </td>
                <td style="text-align:right; width: 20%;">Title Here :</td>
                <td><input type="text" name="th" placeholder="Macbook udara " required></td>
            </tr>
            <tr>
                <td style="text-align:right;">Description :</td>
                <td><textarea name="des" id="" cols="40" rows="10" required></textarea></td>
            </tr>
            <tr>
                <td style="text-align:right;">Account Number :</td>
                <td><input type="number" name="an" min="120" required></td>
            </tr>
            <tr>
                <td style="text-align:right;">Total Amount :</td>
                <td><input type="number" name="ta" min="120" required></td>
            </tr>
            <tr>
                <td style="text-align:right;">Bank :</td>
                <td>
                    <select name="bank" id="" required>
                        <option value="bri">BRI</option>
                        <option value="bac">BAC</option>
                        <option value="abc">ABC</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align:right;">Accoun Holder :</td>
                <td><input type="text" name="ah" placeholder="name here" required></td>
            </tr>
            <tr>
                <td style="text-align:right;">Transaction :</td>
                <td>
                    <input type="number" min="1" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    *if then transaction is for 3 person , choose 3 form the drop down list <br>
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
                <td><button type="submit" style="background-color: green; color:white;">Genrate Nabr Link</button></td>
            </tr>
        </form>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        function gambar(val){
            $("#foto").attr('src',URL.createObjectURL(event.target.files[0]));
        }
    </script>
</body>
</html>