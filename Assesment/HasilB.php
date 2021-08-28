<?php

$pesanan = array(
    'satu' => array(
        'nama'          => 'Arsene Lupin',
        'no_pesanan'    => '1234',
        'pembayaran'    => '100000',
        'tgl_bayar'     => '1902-03-23',
        'kamar'         => '202'
    ),
    'dua' => array(
        'nama'          => 'Sherlock Holmes',
        'no_pesanan'    => '1234',
        'pembayaran'    => '300000',
        'tgl_bayar'     => '1902-03-23',
        'kamar'         => '308'
    ),
    'tiga' => array(
        'nama'          => 'Irene Adler',
        'no_pesanan'    => '1234',
        'pembayaran'    => '450000',
        'tgl_bayar'     => '1902-03-23',
        'kamar'         => '810'
    ),
);

$cari = NULL;

if(@$_POST){
    $cari  = @$_POST ['cari'];
}

$data_pesanan = array();
foreach ($pesanan as $row => $row_data){
    if($row_data['no_pesanan'] == $cari OR $row_data['nama'] == $cari){
        $data_pesanan[] = $row_data;
    }
}

echo '<table border="1">
        <thead>
        <tr>
            <th>Nama</th>
            <th>No Pesanan</th>
            <th>Pembayaran</th>
            <th>Tanggal Bayar</th>
            <th>Kamar</th>
        </tr>
        </thead>
        <tbody';

    if ($data_pesanan){
        foreach ($data_pesanan as $row) {

        echo '<tr>
                  <td>'.$row['nama'].'</td>
                  <td>'.$row['no_pesanan'].'</td>
                  <td>'.$row['pembayaran'].'</td>
                  <td>'.$row['tgl_bayar'].'</td>
                  <td>'.$row['kamar'].'</td>
               </tr>';
    }
}else{
    echo '<tr>
             <td colspan="5" align="center">Nama atau nomor pesanan tidak ada dalam daftar</td>
           </tr>';
}

echo '</tbody>
        </table>
        <br>
        <a href="FormB.php">Kembali</a>';

?>

<!-- Tamara Lucky Widodo (6701190015)-->