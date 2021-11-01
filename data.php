<html>
<head>
    <title>Tampil Data</title>
</head>
<body>
 <center>
    <table align="center">
        <tr>
            <th colspan="3">Tampil Data Toko Sepatu</th>
        </tr>
        <tr>
            <td colspan="3">
            <hr>
            </td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td>
            <?= $nm; ?>
            </td>
        </tr>
        <tr>
            <td>No Handphone</td>
            <td>:</td>
            <td>
            <?= $no; ?>
            </td>
        </tr>
        <tr>
            <td>Merk Sepatu</td>
            <td>:</td>
            <td>
            <?= $mk; ?>
            </td>
        </tr>
        <tr>
            <td>No Sepatu</td>
            <td>:</td>
            <td>
            <?= $uk; ?>
            </td>
        </tr>
        <tr>
            <td>Subtotal</td>
            <td>:</td>
            <td>
            300.000
            </td>
        </tr>
 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('review'); 
?>">Kembali</a>
 </td>
