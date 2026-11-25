    <?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'cmd';

    try {
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        mysqli_set_charset($conn, 'utf8mb4');
    } catch (mysqli_sql_exception $e) {
        die('Erreur de connexion : ' . $e->getMessage());
    }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $name = $_POST['username'];
//     $pwd = $_POST['password'];
//     $query = "SELECT * FROM users WHERE users='$name' AND password='$pwd'";
//     $result = mysqli_query($conn, $query);
//     echo $query;

//     if (mysqli_num_rows($result) > 0) {
//         echo 'Connexion réussie';
//     } else {
//         echo 'Identifiants invalides';
//     }
// }

// $query = "SELECT * FROM users WHERE users='admin' UNION SELECT * FROM users WHERE users='toto'";
// $result = mysqli_query($conn, $query);
// echo '<pre>';
// var_dump(mysqli_fetch_all($result));


$categ = "'UNION SELECT username,password FROMusers--";
$req = "SELECT * FROM produits WHERE categories='$categ'";

echo $req;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" id="username" name="username" >
            <br><br>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password">
            <br><br>
        <button type="submit">Se connecter</button>
            
        </form>
</body>
</html>