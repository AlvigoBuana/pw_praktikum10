<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Praktikum 9</title>
 <style>
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 1em;
    }
    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 1em;
    }
    .form-group label {
        flex: 1;
        min-width: 150px;
    }
    .form-group input {
        flex: 2;
        padding: 0.5em;
    }
    .form-group input[type="submit"] {
        flex: none;
        width: 100%;
    }
 </style>
</head>
<body>
 <form method="POST" action="action_challenge.php">
    <div class="form-group">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama">
    </div>
    <div class="form-group">
        <label for="angka1">Masukkan Angka Pertama (1-10) :</label>
        <input type="number" id="angka1" name="angka1" min="1" max="10">
    </div>
    <div class="form-group">
        <label for="angka2">Masukkan Angka Kedua (1-10) :</label>
        <input type="number" id="angka2" name="angka2" min="1" max="10">
    </div>
    <div class="form-group">
        <input type="submit" value="Hitung">
    </div>
 </form>
</body>
</html>
