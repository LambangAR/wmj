
<p>Transaksi</p>
<?php 
foreach ($trans as $dat) {
    echo 'Tanggal = '.$dat['tanggal'].'<br>';
    echo 'Id Wil = '.$dat['id_wilayah'].'<br>';
    echo 'Kota = '.$dat['kota'].'<br>';
    echo 'id Jenis bar = '.$dat['id_jns_barang'].'<br>';
    echo 'Resi = '.$dat['resi'].'<br>'; 
    echo 'DM Oper = '.$dat['dm_operan'].'<br>';
    echo 'Pengirim = '.$dat['pengirim' ].'<br>';
    echo 'Penerima = '.$dat['penerima'].'<br>';
    echo 'id Jen pem = '.$dat['id_jns_pembayaran'].'<br>';
    echo 'Extra = '.$dat['ekstra'].'<br>';
    echo 'Biaya ex = '.$dat['biaya_ekstra'].'<br>';
}
?>

<p>Barang</p>

<?php 
foreach ($bar as $dat) {
  echo 'jml_coli = '.$dat['jml_coli'].'<br>';
  echo 'nama_barang = '.$dat['nama_barang'].'<br>';
  echo 'berat = '.$dat['berat'].'<br>';
  echo 'ongkos = '.$dat['ongkos'].'<br>';
  echo 'id_transaksi = '.$dat['id_transaksi'].'<br>';
}
?>
<script>
function print(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>