<?php
// Vérifier si le script est exécuté en ligne de commande ou en tant que script web
if (php_sapi_name() === 'cli') {
    // Traitement pour l'exécution en ligne de commande
    if ($argc > 1) {
        parse_str( $argv[1], $_POST );
    }
} else 
    // Traitement pour l'exécution en tant que script web
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";

        // Affichage dans le terminal (console)
        echo "Email : " . $email . "\n";
        echo "Mot de passe : " . $password . "\n";
    }