<!DOCTYPE html>
<html>
<head>
   <title>Banking</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="style3.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
</head>
<body>
<header>
    <div class="main">
    <div class="logo">
        <img src="vvv.jpg">
    </div>
       <div class="loader-container">
        <div class="loader"></div>
    </div>
<ul>
<li><a href="index2.php">Home</a></li>
<li><a href="index2.php">Deposit</a></li>
<li><a href="about.php">Loan</a></li>
<li><a href="bankingsystem.php">Investment</a></li>
<li><a href="bankingsystem.php">Insurance</a></li>
<li><a href="bankingsystem.php">Banking Channel</a></li>
<li><a href="bankingsystem.php">Debit Card</a></li>
<li><a href="bankingsystem.php">Credit Card</a></li>
</ul>
</div>
</div>


<div class="card-group">
  <div class="card">
    <img src="make.jpg" style="width:50%">
    <div class="card-body">
      <h5 class="card-title"><b>View Customer from your Contacts
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
</svg></b></h5>
      <p class="card-text">Payment is the transfer of money or goods and services in exchange for a product or service.</p>
    </div>

    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    <div class="user" style="top:75px">
<select name="select" id="selectform">
  <option value="nothing" selected="selected">Select User From Your Contact List</option>
  <option value="http://localhost/bankingsystem/info.html">Amanda Joe</option>
  <option value="http://localhost/bankingsystem/info.html">Ketty Jane</option>
  <option value="http://localhost/bankingsystem/info.html">Jonas Crue</option>
  <option value="http://localhost/bankingsystem/info.html">Alex Bones</option>
  <option value="http://localhost/bankingsystem/info.html">Clay Jenson</option>
  <option value="http://localhost/bankingsystem/info.html">Mike Hanigon</option>
  <option value="http://localhost/bankingsystem/info.html">harry Potter</option>
  <option value="http://localhost/bankingsystem/info.html">Jessica Devis</option>
  <option value="http://localhost/bankingsystem/info.html">Hannah Shaikh</option>

</select>
<div>
  </div>
<script type="text/javascript">
var urlMenu = document.getElementById("selectform");
urlMenu.onchange = function(){
var userOption = this.options[this.selectedIndex];
if (userOption.value != "nothing"){
window.open(userOption.value, "info","");
}
}
        $(window).on("load",function(){
            $(".loader-container").fadeOut(1000);
        });

</script>

</header>
</body>
</html>