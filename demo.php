<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>LES INFOS DE L4'AUTRE PAGE </p>

     <?php



if (isset($_POST['btn'])) {

    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : []; // $_POST['hobi'] sera un tableau si au moins un hobby est sélectionné

    echo "<p>AD: " . $name . "</p>";
    echo "<p>CINSIYET: " . $gender . "</p>";

    if (!empty($hobi)) {
        echo "<p>Hobileriniz: " . implode(", ", array_map('htmlspecialchars', $hobi)) . "</p>";
    } else {
        echo "<p>Hobileriniz: hic secilmedi</p>";
    }

} else {
    echo "<p class='error-message'>Probleme: Form gönderilmedi.</p>";
}
?>


     



</body>
</html>