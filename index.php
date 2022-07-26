<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <title>Document</title>

</head>
<body>

<h1 id="header1"> Please fill in the form</h1>
<!-- 

susikurti GET formą kuri turėtų 4 įvesties laukus. tema  pagal jūsų fantaziją.

1. Atvaizduoti HTML duomenis kuriuos suveda vartotojas į formą.
2. Susikurti sesiją, įdėti tai ką vartotojas užpildė formoje ir su ciklu atvaizduoti ekrane
3. Atvaizduoti gražiai, bootrstapiniame table -->

 <container id="container">
    <?php 
    session_start();
    $_SESSION['userInfo'] = []; 
    
    echo ( " Session id : " . session_id());

    // if(!isset($_SESSION['userInfo'])) {
    //     $_SESSION['userInfo'] = [];
         
    // }
    
    
    if( isset($_GET["name"]) && isset($_GET["username"]) && isset($_GET["email"])  && isset($_GET["password"]) ) {
        $_SESSION['userInfo'][] = ['name' => $_GET['name'], 'username' => $_GET['username'],  'email' => $_GET['email'],  'password' => $_GET['password'] ];
        
    } 

    for ($i=0; $i < count($_SESSION['userInfo']) ; $i++) { 
        $userNumber = $_SESSION['userInfo'][$i];
    }

    echo("<br>");
    print_r($_SESSION['userInfo']);
      ?>
    <form action="" method="get">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We might share your email with someone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
   

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>

  <tbody>
    <?php 
        foreach ($_SESSION['userInfo'] as $userNumber ) {
            
        
    ?>
        <tr  class="table-success">
            <td> <?=$userNumber['name']?></td>
            <td> <?=$userNumber['username']?></td>
            <td> <?=$userNumber['email']?></td>
            <td> <?=$userNumber['password']?></td>
          
            
        <tr>
          
    </tr>
        <?php } ?>
</tbody>
</table>
</container>
   


    




</body>
</html>