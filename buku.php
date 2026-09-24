<?php
class Buku {
    public string $judul;
    public string $penulis;

    public function __construct(string $judul, string $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getInfo(): string {
        return "<p class='info'>Buku berjudul <strong>" . htmlspecialchars($this->judul) . "</strong> dengan penulis <strong>" . htmlspecialchars($this->penulis) . "</strong> telah ditambahkan.</p>";
    }

    public function getDetail(): string {
        return "<p class='detail'>Buku dengan judul: <span>" . htmlspecialchars($this->judul) . "</span>, dengan penulis: <span>" . htmlspecialchars($this->penulis) . "</span></p>";
    }

    public function __destruct() {
        // Destructor digunakan untuk pembersihan, sebaiknya tidak melakukan echo HTML di sini.
    }
}

$pesanInfo = "";
$pesanDetail = "";

// Proses form saat dikirimkan (method POST)
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['judul']) && !empty($_POST['penulis'])) {
    $bukuBaru = new Buku($_POST['judul'], $_POST['penulis']);
    $pesanInfo = $bukuBaru->getInfo();
    $pesanDetail = $bukuBaru->getDetail();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Input Buku</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f9;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
    }
    h1 {
      text-align: center;
      color: #333;
    }
    form {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }
    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    input[type="submit"]:hover {
      background: #0056b3;
    }
    .info {
      background: #d1ecf1;
      color: #0c5460;
      padding: 10px;
      border: 1px solid #bee5eb;
      border-radius: 5px;
      margin-bottom: 10px;
    }
    .detail {
      background: #fff3cd;
      color: #856404;
      padding: 10px;
      border: 1px solid #ffeeba;
      border-radius: 5px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Input Data Buku</h1>
  
  <form action="" method="POST">
    <label for="judul">Judul Buku:</label>
    <input type="text" id="judul" name="judul" required>

    <label for="penulis">Penulis:</label>
    <input type="text" id="penulis" name="penulis" required>

    <input type="submit" value="Tambah Buku">
  </form>

  <!-- Menampilkan output jika data telah diisi -->
  <?php 
    echo $pesanInfo;
    echo $pesanDetail;
  ?>
</div>

</body>
</html>
