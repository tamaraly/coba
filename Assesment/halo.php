<!DOCTYPE html>
<html>
<head>
    <title>Assesment1</title>
</head>
<body>
<?php
$Pesanan=array(
    "nama" 			=> "Arsene Lupin",
    "no_pesanan"	=> "1234",
    "pembayaran"  	=> "100000",
    "tgl_bayar"		=> "1902-03-23",
    "kamar"			=> "202" );
$booking=array(
    'nama' 		=> 'Sherlock Holmes',
    'no_pesanan'	=> '1234',
    'pembayaran'  	=> '300000',
    'tgl_bayar'		=> '1902-03-23',
    'kamar'		=> '308' ,);
$Pesan=array(
    'nama' 		=> 'Irene Adler',
    'no_pesanan'	=> '1234',
    'pembayaran'  	=> '450000',
    'tgl_bayar'		=> '1902-03-23',
    'kamar'		=> '810' ,);
?>

<form>
    <input type="text" placeholder="cari">
    <input type="button" value="cari">
</form>
<?php
$search
?>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>No Pesan</th>
        <th>Pembayaran</th>
        <th>TanggalBayar</th>
        <th>Kamar</th>
    </tr>
    <tr>
        <td><?php echo "<h4>".$Pesanan["nama"]."</h4>";?></td>
        <td><?php echo "<h4>".$Pesanan["no_pesanan"]."</h4>";?></td>
        <td><?php echo "<h4>".$Pesanan["pembayaran"]."</h4>";?></td>
        <td><?php echo "<h4>".$Pesanan["tgl_bayar"]."</h4>";?></td>
        <td><?php echo "<h4>".$Pesanan["kamar"]."</h4>";?></td>
    </tr>
    <tr>
        <td><?php echo "<h4>".$booking["nama"]."</h4>";?></td>
        <td><?php echo "<h4>".$booking["no_pesanan"]."</h4>";?></td>
        <td><?php echo "<h4>".$booking["pembayaran"]."</h4>";?></td>
        <td><?php echo "<h4>".$booking["tgl_bayar"]."</h4>";?></td>
        <td><?php echo "<h4>".$booking["kamar"]."</h4>";?></td>
    </tr>
    <tr>
        <td><?php echo "<h4>".$Pesan["nama"]."</h4>";?></td>
        <td><?php echo "<h4>".$Pesan["no_pesanan"]."</h4>";?></td>
        <td><?php echo "<h4>".$Pesan["pembayaran"]."</h4>";?></td>
        <td><?php echo "<h4>".$Pesan["tgl_bayar"]."</h4>";?></td>
        <td><?php echo "<h4>".$Pesan["kamar"]."</h4>";?></td>
    </tr>
</table>
</body>
</html>