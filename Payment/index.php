<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="U-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Billing Address</title>
</head>
<body>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col">
                    <h3 class="title">BILLING ADDRESS</h3>
                    
                    <div class="inputBox">
                        <span>Email : </span>
                        <input type="email" placeholder="justinBabaero@gmail.com">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Name : </span>
                            <input type="text" placeholder="Amanda">
                        </div>

                        <div class="inputBox">
                            <span>Surname : </span>
                            <input type="text" placeholder="Dela Cruz">
                        </div>
                    </div>

                    <div class="inputBox">
                        <span>Address : </span>
                        <input type="text" placeholder="123, Dagupan, Pangasinan">
                    </div>

                    <div class="inputBox">
                        <span>Phone number : </span>
                        <input type="number" placeholder="(+63 969696969)">
                    </div>

                    <div class="inputBox">
                        <span>State : </span>
                        <input type="text" placeholder="Philippines">
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">PAYMENT</h3>
                    
                    <div class="inputBox">
                        <span>CARDS ACCEPTED </span>
                        <img src="card_img.png" alt="">
                    </div>

                    <div class="card"> <span>Card Type : </span> 
                        <select> <option value="paypal">Paypal</option> 
                            <option value="mastercard">Mastercard</option> 
                            <option value="american_express">American Express</option> 
                            <option value="visa">Visa</option> </select> </div>

                    <div class="inputBox">
                        <span>Card Number : </span>
                        <input type="number" placeholder="312 2134 1235">
                    </div>

                    <div class="inputBox">
                        <span>Pin number : </span>
                        <input type="password" placeholder="1234">
                    </div>

                    <div class="inputBox">
                        <span>Expiration Date: </span>
                        <input type="date" placeholder="(20/06/2004)">
                    </div>

                    <div class="inputBox">
                        <span>Country : </span>
                        <input type="text" placeholder="Philippines">
                    </div>
                </div>
            </div>
            <a href="#" class="submit-btn">CHECK OUT</a>
        </form>
    </div>
</body>
</html>
