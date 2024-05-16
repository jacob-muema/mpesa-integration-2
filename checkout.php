<?php
  include('express-stk.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
          @import url("https://fonts.googleapis.com/css?famiyl=Poppins:200,300,400,500,600,700,800,900&display=swap");
* {
  margin: 10;
  padding-right: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #191629;
}
.card {
  position: relative;
  width: 350px;
  height: 350px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.5s;
  transition-delay: 0.5s;
}
.card:hover {
  width: 600px;
  transition-delay: 0.5s;
}
.card .circle {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.card .circle::before {
  content: "";
  position: absolute;
  top: 30;
  left: 2;
  right: 2;
  width: 350px;
  height: 350px;
  border-radius: 50%;
  background: #191919;
  border: 8px solid var(--clr);
  filter: drop-shadow(0 0 10px var(--clr)) drop-shadow(0 0 60px var(--clr));
  transition: 0.5s, background 0.5s;
  transition-delay: 0.75s, 1s;
}
.card:hover .circle::before {
  transition-delay: 0.5s;
  width: 100%;
  height: 100%;
  border-radius: 20px;
  background: var(--clr);
}
.card .circle .logo {
  position: relative;
  width: 250px;
  transition: 0.5s;
  transition-delay: 0.5s;
}
.card:hover .circle .logo {
  transform: scale(0);
  transition-delay: 0s;
}
.card .product_img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0) rotate(315deg);
  height: 300px;
  transition: 0.5s ease-in-out;
}
.card:hover .product_img {
  transition-delay: 0.75s;
  top: 25%;
  left: 72%;
  height: 300px;
  transform: translate(-30%, -65%) scale(1) rotate(-55deg);
}
.card .content {
  position: absolute;
  width: 50%;
  left: 20%;
  padding: 20px 20px 20px 20px;
  opacity: 0;
  transition: 0.5s;
  visibility: hidden;
}
.card:hover .content {
  transition-delay: 0.75s;
  opacity: 1;
  visibility: visible;
  left: 20px;
}
.card .content h2 {
  color: #fff;
  text-transform: uppercase;
  font-size: 2.5em;
  line-height: 1em;
}
.card .content p {
  color: #fff;
}
.card .content a {
  position: relative;
  color: #111;
  background: #fff;
  padding: 10px 20px;
  border-radius: 10px;
  display: inline-block;
  text-decoration: none;
  font-weight: 600;
  margin-top: 10px;
}

            @import url(https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900);
@import url(https://fonts.googleapis.com/css?family=Source+Code+Pro:400,200,300,500,600,700,900);
.container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  flex-direction: column; }

* {
  box-sizing: border-box; }

html {
  background-color: #171A3D;
  font-family: 'Lato', sans-serif; }

.price h1 {
  font-weight: 300;
  color: black;
  letter-spacing: 2px; 
  text-align:center;
}

.card {
  margin-top: 30px;
  margin-bottom: 30px;
  width: 520px; }
.card .row {
    width: 100%;
    padding: 1rem 0;
    border-bottom: 1.2px solid #292C58; }
.card .row.number{
    background-color: #242852;
}

.cardholder .info, .number .info {
  position: relative;
  margin-left: 40px; }
  .cardholder .info label, .number .info label {
    display: inline-block;
    letter-spacing: 0.5px;
    color: #8F92C3;
    width: 40%; }
  .cardholder .info input, .number .info input {
    display: inline-block;
    width: 55%;
    background-color: transparent;
    font-family: 'Source Code Pro';
    border: none;
    outline: none;
    margin-left: 1%;
    color: white; }
    .cardholder .info input::placeholder, .number .info input::placeholder {
      font-family: 'Source Code Pro';
      color: #444880; }

#cardnumber, #cardnumber::placeholder {
  letter-spacing: 2px;
font-size:16px; }

.button button {
  font-size: 1.2rem;
  font-weight: 400;
  letter-spacing: 1px;
  width: 520px;
  background-color: #18C2C0;
  border: none;
  color: #fff;
  padding: 18px;
  border-radius: 5px;
  outline: none;
  cursor:pointer;
  transition: background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1); }
  .button button:hover {
    background-color: #15aeac; }
  .button button:active {
    background-color: #139b99; }
  .button button i {
    font-size: 1.2rem;
    margin-right: 5px; }


        </style>
   <div class="card">
        <div class="circle" style="--clr: #0cae00;">
          <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhonjfUpSJCHpycbX3HO2ik3EYl9b-RmIQitwc4xmZYGbkqXr7wXMfqItAT6Uxpqj3b-Mh2_6HQb_tsiEsmU2YIge5zilpRhpgb3LFGa3-_DvW048munF2IqOW_bbgLIBtU_PvG7-WVLFjf-zJs_Z1GqWQnY8QAz_VaMoQl5frznIcprxp-nrqwK0HzDaw/s1200/Sprite_2022.svg.png" class="logo">
        </div>
        <div class="content">
          <h2>SPRITE</h2>
          <p>Sprite is a revitalizing soda that awakens your senses and delights your palate. </br>Our unique fusion of lemon and lime.</p>
          <p>coding.minku</p>
          <button style="padding: 5px; font-size: 1em; border: 1px solid #ccc; border-radius: 4px;" onclick="togglePaymentSection()">View More</button>

        </div>
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjD7NbtGe13bMt4t0syaaIePNP83Piyf_i4MyN0EfAMJr9iH6ZFxGPljzeUf9aBW_vvJwZBI25lCIG1g5NmR5iZ0AnchS9Jncm8F8pp6ovMSkGBKY2RIVFmTdZLW_lTerAEomw2ondZwoEwADv7zljsqZ9OD9ChdHdDm-Fsq-DK6IrVNuHp8reYZ-CP4H4/s584/sprite-drink-in-a-can-on-ice-isolated-on-white-background-FT21NP-removebg-preview.png" class="product_img">
      </div>
            </div>
        </div>
    </div>
    <div id="paymentSection" style="display: none;">
    <div class="container">
        <form action='<?php echo $_SERVER['PHP_SELF'] ?>' method='POST'>
            <div class="price">
                <h1>Amount: KES 1</h1>
            </div>
            <div class="card__container">
                <div class="card">
                    <div class="row">
                        <img src="mpesa.png" style="width:30%;margin: 0 35%;">
                        <p style="color:#8F92C3;line-height:1.7;">1. Enter the <b>phone number</b> and press "<b>Confirm and Pay</b>"</br>2. You will receive a popup on your phone. Enter your <b>MPESA PIN</b></p>
                        <?php if ($errmsg != ''): ?>
                            <p style="background: #cc2a24;padding: .8rem;color: #ffffff;"><?php echo $errmsg; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="row number">
                        <div class="info">
                            <input type="hidden" name="orderNo" value="#O2JDI2I3R" />
                            <label for="cardnumber">Phone number</label>
                            <input id="cardnumber" type="text" name="phone_number" maxlength="10" placeholder="0700000000" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <button type="submit"><i class="ion-locked"></i> Confirm and Pay</button>
            </div>
                        </div>
        </form>
   <p style="color:#fff;line-height:1.7;margin-top:5rem;">Copyright 2022 | All Rights Reserved | Made with lots of <i class="fab fa-gratipay"></i> by Evans & Jacob</p>
</div>

<script>
    function togglePaymentSection() {
        var paymentSection = document.getElementById('paymentSection');
        if (paymentSection.style.display === 'none') {
            paymentSection.style.display = 'block';
        } else {
            paymentSection.style.display = 'none';
        }
    }
</script>

   </body>
</html>





