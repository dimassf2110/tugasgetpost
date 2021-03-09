<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
               
        <div class="container-fluid bg-light p-5  shadow-sm">
            <div class="row">
              <div class="col-8">
                <form method="POST" action="tugas2.php" class="form-horizontal ">
                  <h1 class="text-primary">SERBA SERBI</h1>
                  <hr>
                  <div class="form-group row">
                    <label for="nama__pembeli" class="col-sm-4 col-form-label"><b>Nama Pembeli</b></label>
                    <div class="col-sm-8">
                      <h2>
                      <input type="text" class="form-control" name="namapembeli">
                      </h2>
                    </div>
                  </div>
                <!------------------------>

                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-4 pt-0"><b>Pilih Produk</b></legend>
                      <div class="col-sm-8">

                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="IPHONE 12 PRO MAX" name="produk" value="IPHONE 12 PRO MAX" required>
                          <label class="form-check-label" for="IPHONE 12 PRO MAX">
                          IPHONE 12 PRO MAX
                          </label>
                        </div>
                        <!--------------------------->
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id=" SAMSUNG NOTE 10" name="produk" value=" SAMSUNG NOTE 10" required>
                          <label class="form-check-label" for=" SAMSUNG NOTE 10">
                            SAMSUNG NOTE 10
                          </label>
                        </div>
                        <!--------------------------->
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="  OPPO RENO 9" name="produk" value="  OPPO RENO 9" required>
                          <label class="form-check-label" for="  OPPO RENO 9">
                          OPPO RENO 9
                          </label>
                        </div>

                      </div>  <!---col-->
                    </div> <!---row-->
                  </fieldset> 
                  <div class="form-group row">
                 
                    <label for="jumlah__" class="col-sm-4 col-form-label"><b>Jumlah</b></label>
                    <div class="col-sm-5">
                      <input type="number" for="produk__" class="form-control" name="jumlah" value="" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tanggal"><b>Tanggal Pesan</b></label>
                    <input type="date" name="tanggal" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="kurir">Jenis Kurir</label>
                    <input type="text" name="kurir" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="biaya_kurir">Biaya Kurir</label>
                    <input type="text" name="biaya_kurir" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="asuransi">Biaya Asuransi</label>
                    <input type="text" name="asuransi" value="" class="form-control">
                </div>
<br>
                  <button href="" type="submit" class="btn btn-primary pl-5 pr-5" name="proses">Kirim</button>

                </form>

              </div> <!-----col-6-->
              <div class="col-4 " >
                  <ul class="p-1 bg-white" style="list-style-type:none;border:1px solid #c4c4c4;">
                    <li class="bg-primary p-2 text-white">Daftar Harga</li>
                    <li class="p-2">IPHONE 12 PRO MAX : Rp. 12.000.000,-</li>
                    <li class="p-2 bg-light">SAMSUNG NOTE 10 : Rp. 10.500.000,-</li>
                    <li class="p-2">OPPO RENO 9 : Rp. 8.900.000,-</li>
                    <li class="bg-primary p-2 text-white">Noted : Harga bisa saja berubah sesuai waktu</li>
                  </ul>
              </div>

              
            
            </div> <!---row-->
        </div> <!---containe-fluid-->

        <div class="container-fluid bg-light mt-5 mb-5 p-5 shadow-sm">
          <h1 class="animate_animated animatebounce animateinfinite	infinite animate_delay-4s	4s">Total Belanjaan kamu!</h1>
          <br>
        </div>
        
<?php

$nama_pembeli = $_POST['namapembeli'];
$produk = $_POST['produk']; 
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat']; 
$kurir = $_POST['kurir']; 
$biaya_kurir = $_POST['biaya_kurir'];  
$asuransi = $_POST['asuransi'];  


echo '<br/> <h3> namapembeli </h3>'.  $nama_pembeli ;
echo '<br/> <h3> produk </h3> '.$produk;
echo '<br/> <h3> jumlah </h3> '.$jumlah ;
echo '<br/> <h3> jumlah </h3> '.$jumlah ;
echo '<br/> <h3> tanggal </h3>'.$tanggal;
echo '<br/> <h3> alamat </h3> '.$alamat ;
echo '<br/> <h3> kurir </h3> '.$kurir ;
echo '<br/> <h3> biayakurir </h3>  '.$biaya_kurir ;
echo '<br/> <h3> asuransi </h3> '.$asuransi  ;

if($produk == 'IPHONE 12 PRO MAX ') {
    echo '<br> <h3> total: </h3> '. 12000000 * $jumlah;

 }
 else if($produk == 'SAMSUNG NOTE 10 ') {
    echo '<br> total: '. 10500000 * $jumlah;

 }
 else  {
    echo '<br> total: '. 8900000 * $jumlah;

 }
 




?>

</body>
</html>