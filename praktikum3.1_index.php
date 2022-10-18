<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Pizza</title>
</head>
<body>
    <h4>Black Goose Bistro | Pizza-on-Demand</h4>
    <p>Our 12" wood-fired pizzas are available for delivery. Build your <br>
    custome pizza and we'll deliver it withint an hour.
    </p>
    <form action="praktikum3.1_tampilan.php" method="post">
        <p>Your Informasion</p>

        <label for="" style="margin-bottom:5px;">Name :</label>
        <input type="text" name="name" style="margin-bottom:5px;" required><br>
        
        <label for="" style="margin-bottom:5px;">Address :</label>
        <input type="text" name="address" style="margin-bottom:5px;" required><br>
                
        <label for="" style="margin-bottom:5px;">Telephon Number :</label>
        <input type="number" name="telpon" style="margin-bottom:5px;" min="1" required><br>

        <label for="" style="margin-bottom:5px;">Email Address :</label>
        <input type="email" name="email" style="margin-bottom:5px;" required><br>
                
        <label for="" style="margin-bottom:5px;">Delivery Intruction</label><br>
        <textarea name="deli" id="" cols="35" rows="6" max="400" required placeholder="No more than 400 charters long"></textarea>
        
        <h4>Design Your Dream Pizza :</h4>
        <p style="margin-top:-20px;">Pizza Spacces</p>

        <p style="margin-bottom:-1px;">Crust (Choos One) :</p>
        (<input type="radio" name="co" id="" value="Classic white">)
        <label for="">Classic white</label><br>

        (<input type="radio" name="co" id="" value="Multigrain">)
        <label for="">Multigrain</label><br>

        (<input type="radio" name="co" id="" value="Chesse-stuffed srust">)
        <label for="">Chesse-stuffed srust</label><br>

        (<input type="radio" name="co" id="" value="Gluten-free">)
        <label for="">Gluten-free</label><br>

        <p style="margin-bottom:-1px;">Toppings (Choos as many as you want) :</p>
        [<input type="checkbox" name="tp[]" id="" value="Red Sauce">]
        <label for="">Red Sauce</label><br>

        [<input type="checkbox" name="tp[]" id="" value="White Sauce">]
        <label for="">White Sauce</label><br>

        [<input type="checkbox" name="tp[]" id="" value="Mozzarela Cheese">]
        <label for="">Mozzarela Cheese</label><br>

        [<input type="checkbox" name="tp[]" id="" value="Pepperoni">]
        <label for="">Pepperoni</label><br>

        [<input type="checkbox" name="tp[]" id="" value="Anchovies">]
        <label for="">Anchovies</label><br>

        <p style="margin-bottom:-2px;">Number</p>
        <label for="">How many pizzas :</label>
        <input type="number" name="many" id="" min="1" max="6" style="width: 50px; " required><br><br>

        <input type="submit" name="submit" value="Bring me a pizza!">
        <input type="reset" name="reset" value="reset">
        <br><br><br>
    </form>

</body>
</html>