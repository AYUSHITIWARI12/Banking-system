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
<div class="loader-container">
        <div class="loader"></div>
    </div>
<header>

    <div class="main">
    <div class="logo">
        <img src="vvv.jpg">
    </div>

<ul>
<li><a href="index2.php">Home
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a></li>
<li><a href="index2.php">Deposit</a></li>
<li><a href="about.php">Loan</a></li>
<li><a href="transfer.php">Investment</a></li>
<li><a href="transfer.php">Insurance</a></li>
<li><a href="transfer.php">Banking Channel</a></li>
<li><a href="transfer.php">Debit Card</a></li>
<li><a href="transfer.php">Credit Card</a></li>
</ul>
</div>
</div>

</div><div class="card">
  <div class="card-header">
 <b>Services</b>
  </div>

  <div class="card-body dropdown">
    <h5 class="card-title"><b>View All Customer</b></h5>
    <p class="card-text">Select User,Make Payment and get Information about customer</p>
   <a href="user.php" class="btn1">Transfer Money
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
  <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
</svg></a>

  </div>
  <div class="card-body">
    <h5 class="card-title"><b>Personal Loan</b></h5>
    <p class="card-text">Personal Loans offer fast processing of your loan!</p>
    <a href="#" class="btn1">Personal Loan</a>
  </div>
   <div class="card-body">
    <h5 class="card-title"><b>Digital Savings Account</b></h5>
    <p class="card-text"> Digital Savings Account is your avenue to open a Savings Account anytime anywhere! </p>
    <a href="#" class="btn1">Savings Account</a>
  </div>
   <div class="card-body">
    <h5 class="card-title"><b>Atm Banking</b></h5>
    <p class="card-text">  ATM Services are created keeping in mind the comfort of its customers! </p>
    <a href="#" class="btn1">Atm Info</a>
  </div>
</div>

</header>
<script>
        $(window).on("load",function(){
            $(".loader-container").fadeOut(1000);
        });
    </script>
</body>
</html>