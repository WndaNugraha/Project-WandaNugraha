<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Jumlah</label>
        <input type="number" name="jumlah">
        <input type="submit" name="a" value="Kirim">
        
        <br>
        <br>
        <?php
        if (isset($_POST['a'])) {
            $jumlah = $_POST['jumlah'];

            for ($i=0; $i < $jumlah; $i++) { 
        ?>
        <input type="text" name="teks[]">
        <?php
            }
        }
        ?>
        <input type="submit" value="KIRIM" name="kirim">
        <br>
        </form>

        <?php
            if(isset($_POST['kirim'])){
                $b = $_POST['teks'];
            
                $reverseData = array_reverse($b);
                foreach($reverseData as $data){
                    echo $data."&nbsp";
                }
            
            }
        
    

        ?>
</body>
</html>