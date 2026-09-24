<?php
class Buku {
    public string $judul;
    public string $penulis;

    public function __construct(string $judul, string $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        echo "<p class='info'>Buku berjudul <strong>" . $this->judul . "</strong> dengan penulis <strong>" . $this->penulis . "</strong> telah ditambahkan.</p>";
    }

    public function getdetail() {
        return "<p class='detail'>Buku dengan judul: <span>" . $this->judul . "</span>, dengan penulis: <span>" . $this->penulis . "</span></p>";
    }

    public function __destruct() {
        echo "<p class='hapus'>Buku dengan judul <strong>" . $this->judul . "</strong> telah dihapus dari memori.</p>";
    }
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
    h1 {
      text-align: center;
      color: #333;
    }
    form {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      max-width: 400px;
      margin: 20px auto;
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
    }
    input[type="submit"] {
      background: #007bff;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      cursor: pointer;
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
      margin-bottom: