<?php include 'admin_proses.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moonlit Bakery</title>
  <link rel="icon" type="image/x-icon" href="logo.png">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="header">
    <div class="header-container">
      <h1>Moonlit Pastry</h1>
    </div>
    <div class="header-right">
    <a href="logout.php">Logout</a>
    </div>
  </div>
  <div class="main-content">
  <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['email']}</td>
                <td>
                    <a href='proses.php?edit={$row['id']}'>Edit</a>
                    <a href='proses.php?delete={$row['id']}' onclick='return confirm(\"Yakin ingin menghapus?\");'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>

<script src="script.js".js></script>


<footer>
  <div class="social-links">
      <a href="#">
          <i class="fab fa-instagram"></i>
      </a>
      <a href="#">
          <i class="fab fa-snapchat-ghost"></i>
      </a>
      <a href="#">
          <i class="fab fa-twitter"></i>
      </a>
      <a href="#">
          <i class="fab fa-facebook-f"></i>
      </a>
  </div>

</div>
<br>
<ul class="footer-links">
  <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
    </ul>
  
    <div class="copyright">
        <p>&copy; 2024 Moonlit. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>