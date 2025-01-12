<?php
include 'admin_proses.php';

// CREATE
if (isset($_POST['create'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $no_hp = $_POST['no_hp'];

    $sql = "INSERT INTO users (nama,username, email,password,role) VALUES ('$nama', '$username','$email','$password','$role')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $no_hp = $_POST['no_hp'];

    $sql = "UPDATE users SET nama='$nama', username='$username', email='$email', password='$password', role='$role' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// EDIT (Untuk mendapatkan data user saat mengedit)
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $row = $result->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data</title>
    </head>
    <body>
        <h2>Edit Data</h2>
        <form action="proses.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br>
            <label for="nama">Username:</label>
            <input type="text" name="username" value="<?= $row['username'] ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= $row['email'] ?>" required><br>
            <label for="email">Password:</label>
            <input type="text" name="password" value="<?= $row['password'] ?>" required><br>
            <label for="email">Role:</label>
            <input type="text" name="role" value="<?= $row['role'] ?>" required><br>
            <button type="submit" name="update">Update</button>
        </form>
        <a href="admin.php">Kembali</a>
    </body>
    </html>
    <?php
}
?>
