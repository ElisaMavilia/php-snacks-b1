<!-- 
Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<?php 
$userdata = $_GET;
$username = "";
$useremail = "";
var_dump($userdata);

?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/snack1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Snack 1</title>
</head>
<body>
    <main >
        <form action="snack2.php" method="GET" name="userdata">
            <input type="text" name="username">
            <input type="email" name="email">
            <input type="number" name="number">
            <button type="submit" name="submit" class="btn btn-success">Send</button>
        </form>
        <div>
           <?php
            if (empty($_GET['username'])) {
                echo "Name: this field is mandatory";
             } else {
                $username = $_GET['username'];
                
             };
           ?>
        </div>
        <div>
            <?php  
             if (strlen($username) < 3){
                echo 'Min 3 charachters required';
            } else{
                $username = $_GET['username'];
            }
            ?>
        </div>
        <div>
            <?php
                if (str_contains('@', $useremail) && (str_contains('.', $useremail))) {
                   $useremail = $_GET['email'];
                   echo 'The password is correct!';
                
                }else{
                    echo 'enter a valid email address';
                }
            ?>
            
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>