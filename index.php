<?php
$message = "";
$encrypted_message = "";
$decrypted_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Jika tombol Encrypt diklik
    if (isset($_POST["encrypt"])) {
        // Proses enkripsi pesan
        $message = $_POST["message"];
        $encrypted_message = md5($message);
    }

    // Jika tombol Decrypt diklik
    if (isset($_POST["decrypt"])) {
        // Proses "dekripsi" pesan (tidak benar-benar dekripsi karena MD5 bersifat satu arah)
        // Namun, ini akan mengembalikan pesan yang sama jika diberikan pesan yang sama
        $encrypted_message = $_POST["encrypted_message"];
        $decrypted_message = "Decryption not possible because MD5 is a one-way hash algorithm.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5 Encryption</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">MD5 Encryption</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="message">Enter your message:</label>
                <input type="text" class="form-control" id="message" name="message" value="<?php echo $message; ?>">
            </div>
            <div class="form-group">
                <label for="encrypted_message">Encrypted message:</label>
                <input type="text" class="form-control" id="encrypted_message" name="encrypted_message" value="<?php echo $encrypted_message; ?>" readonly>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="encrypt">Encrypt</button>
                <button type="submit" class="btn btn-primary" name="decrypt">Decrypt</button>
            </div>
            <?php if (!empty($decrypted_message)): ?>
            <div class="form-group mt-4">
                <label for="decrypted_message">Decrypted message:</label>
                <input type="text" class="form-control" id="decrypted_message" name="decrypted_message" value="<?php echo $decrypted_message; ?>" readonly>
            </div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
