<?php
    class Shell{
       public $harga_super =  15420.00;
       public $harga_power = 16130.00;
       public $harga_diesel = 18310.00;
       public $harga_nitro = 16510.00;
    }
    
    class Beli  extends shell{ 
        public $ppn = 10/100;
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <!-- <p>anda membeli bahan bakar minyak tipe SVPPowerdiesel </p> -->


    <?php
    
    class Shell{
       public $ayam1 =  15000.00;
       public $ayam2 = 16000.00;
       public $bebek1 = 18000.00;
       public $bebek2 = 20000.00;
    }
    
    

    if (isset($_POST['beli'])) {
        $jumlah_liter = $_POST['jumlah_liter'];
        $tipe = $_POST['tipe'];
        $shell = new Shell();

        if($tipe == "super"){
            $total_harga = $jumlah_liter * $shell->harga_super;
            $nama_tipe = "Shell Super";
        }elseif ($tipe == "power") {
            $total_harga = $jumlah_liter * $shell->harga_power;
            $nama_tipe = "Shell V-Power";
        }elseif ($tipe == "diesel") {
            $total_harga = $jumlah_liter * $shell->harega_diesl;
            $nama_tipe = "Shell V-Power Diesel";
        }elseif ($tipe == "nitro") {
            $total_harga = $jumlah_liter * $shell->harga_nitro;
            $nama_tipe = "Shell V-Power Nitro";
        }else {
            $total_harga = 0;
            $nama_tipe = "-";
            echo "tipe bahan bakar tidak valid!";
        }

        $beli = new Beli();
        $total_bayar = $total_harga;
    ?>

        <div class="">
            <p>
                Anda membeli bahan bakar minyak tipe 
                <?= $nama_tipe?>
            </p>
            <p>
                Dengan Jumlah : 
                <?= $jumlah_liter?> Liter
            </p>
            <p>
                Total yang harus anda bayar Rp 
                <?= $total_bayar?>
            </p>
        </div>



    <?php
    }
    ?>


    <form action="" method="post">
        <div class="">      
            <label for="jumlah_liter">
                Masukan Jumlah Liter :
            </label>
            <input type="number" name="jumlah_liter" id="jumlah_liter" required min="0">
        </div>
        <div class="">      
            <label for="jumlah_liter">
                Pilih Tipe Bahan Bakar :
            </label>
            <select name="tipe" id="tipe" required > 
                <option value="" selected disabled >Pilih Bahan Bakar</option>
                <option value="super">Shell Super</option>
                <option value="power">Shell V-Power</option>
                <option value="diesel">Shell V-Power Diesel</option>
                <option value="nitro">Shell V-Power Nitro</option>   
            </select>
        </div>
        <input type="submit" value="Beli" name="beli">
    </form>

</body>
</html>