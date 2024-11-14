<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="demo.php" method="post">
        <label for="name">ADINIZ:</label>
        <input type="text" id="name" name="name" placeholder="adi yazin"><br>

        <label for="gender">Cinsiyet:</label>
        <label for="erkek">Erkek</label>
        <input type="radio" id="erkek" name="gender" value="Erkek">
        <label for="kiz">Kız</label>
        <input type="radio" id="kiz" name="gender" value="Kız"><br>

        <label for="hobi">Hobileri:</label>
        <label for="yuz">Yüzme</label>
        <input type="checkbox" id="yuz" name="hobi[]" value="Yüzme">
        <label for="velo">Bisiklet</label>
        <input type="checkbox" id="velo" name="hobi[]" value="Bisiklet">
        <label for="oku">Kitap Okuma</label>
        <input type="checkbox" id="oku" name="hobi[]" value="Kitap Okuma"><br>

        <input type="submit" value="GÖNDER" name="btn" id="btn">
    </form>
</body>
</html>
