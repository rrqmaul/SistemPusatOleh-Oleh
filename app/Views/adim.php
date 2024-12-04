<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="sidebar">
        <div class="profile">
            <img src="<?= base_url('images/profile-icon.png') ?>" alt="Profile Icon">
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Pembelian</a></li>
            <li><a href="#">Pelanggan</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1>Admin Dashboard</h1>
        <div class="dashboard-cards">
            <div class="card">
                <img src="<?= base_url('images/mail-icon.png') ?>" alt="Pesanan Masuk">
                <p>Pesanan Masuk</p>
            </div>
            <div class="card">
                <img src="<?= base_url('images/stock-icon.png') ?>" alt="Stok">
                <p>Stok</p>
            </div>
            <div class="card">
                <img src="<?= base_url('images/notification-icon.png') ?>" alt="Notifikasi">
                <p>Notifikasi (90)</p>
            </div>
            <div class="card">
                <img src="<?= base_url('images/order-icon.png') ?>" alt="Order Pending">
                <p>Order Pending</p>
            </div>
        </div>
        <div class="actions">
            <div class="alert">
                <p>⚠️ Masalah penting yang harus diperbaiki</p>
            </div>
            <div class="add-product">
                <button>+ Tambah Produk</button>
            </div>
        </div>
    </div>
</body>
</html>
