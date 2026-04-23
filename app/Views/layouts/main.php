<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> RikaApp </title>

    <!-- Bootstrap CSS Lokal -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/bootstrap-icons-1.13.1/bootstrap-icons.css') ?>" rel="stylesheet">

    <style>
        body {
            font-family: "SF Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            overflow-x: auto;
        }

        .sidebar {
            width: 150px;
            background-color: rgb(231, 175, 207);
            position: relative;
        }

        .content {
            flex-grow: 1;
            padding: 15px;
            background-color: #b6cadf;
        }
    </style>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

/* form */
input {
    padding: 6px;
    width: 200px;
}
button {
    padding: 6px 10px;
    background: #e096ca;
    color: white;
    border: none;
}

/* tombol link */
a {
    text-decoration: none;
    padding: 5px 8px;
    border-radius: 4px;
    margin-right: 3px;
}

a[href*="create"] { background: #98cceb; color: white; }
a[href*="print"] { background: #291526; color: white; }

/* tabel */
table {s
    border-collapse: collapse;
    width: 100%;
    margin-top: 10px;
}

th, td {
    padding: 8px;
    border: 1px solid #ccc;
    text-align: center;
}

th {
    background: #333;
    color: white;
}

tr:nth-child(even) {
    background: #f2f2f2;
}

/* aksi */
td a {
    padding: 4px 6px;
    font-size: 12px;
}

td a:nth-child(1) { background: #dfb4a9; color: white; } /* detail */
td a:nth-child(2) { background: #FFC107; color: black; } /* edit */
td a:nth-child(3) { background: #f44336; color: white; } /* hapus */
td a:nth-child(4) { background: #301c2d; color: white; } /* wa */
</style>

<body>
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <?php include(APPPATH . 'Views/layouts/menu.php'); ?>
    </div>

    <!-- Konten Utama -->
    <div class="content">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Bootstrap JS Lokal -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>