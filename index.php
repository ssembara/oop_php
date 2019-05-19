<html>
    <head>
        <title>Matakuliah</title>
    </head>
    <body>
        <table border="0">
            <form action="" method="POST">
                <tr>
                    <td>Matakuliah</td>
                    <td>:</td>
                    <td><input type="text" name="mk" value="Pemrograman Web"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tgs"></td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts"></td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas"></td>
                </tr>
                <tr>
                    <td colspan="3">================================</td>
                </tr>
                <tr>
                    <td>Matakuliah</td>
                    <td>:</td>
                    <td><input type="text" name="mk2" value="Pemrograman Dasar"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim2"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama2"></td>
                </tr>
                <tr>
                    <td>Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="tgs2"></td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td>:</td>
                    <td><input type="number" name="uts2"></td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td>:</td>
                    <td><input type="number" name="uas2"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" name="proses" style="float: right;"></td>
                </tr>     
                
            </form>
        </table>
        
        <?php
            include 'Matakuliah.php';
            include 'Pemrograman_Web.php';
            include 'Pemrograman_Dasar.php';
            
            
            if(isset($_POST['proses'])){
                $mk =$_POST['mk'];
                $nim =$_POST['nim'];
                $nama =$_POST['nama'];
                $Tugas =$_POST['tgs'];
                $UTS =$_POST['uts'];
                $UAS =$_POST['uas'];
                
                $mkk =$_POST['mk2'];
                $nim2 =$_POST['nim2'];
                $nama2 =$_POST['nama2'];
                $Tugas2 =$_POST['tgs2'];
                $UTS2 =$_POST['uts2'];
                $UAS2 =$_POST['uas2'];
                
                $mk1 = new Pemrograman_Web($nim, $nama, $Tugas, $UTS, $UAS);
                $mk2 = new Pemrograman_Dasar($nim2, $nama2, $Tugas2, $UTS2, $UAS2);
                
                $mk1->NilaiTotal($Tugas, $UTS, $UAS);
                $mk2->NilaiTotal($Tugas2, $UTS2, $UAS2);
                
                
                echo 'MK   : '.$mk.'<br>';
                echo 'NIM  : '.$mk1->getNim().'<br>';
                echo 'Nama : '.$mk1->getNama().'<br>';
                echo 'Tugas: '.$mk1->getTugas().'<br>';
                echo 'UTS  : '.$mk1->getUTS().'<br>';
                echo 'UAS  : '.$mk1->getUAS().'<br>';
                echo 'NA   : '.$mk1->NilaiTotal($Tugas, $UTS, $UAS).'<br>';
                echo '<br>';
                echo 'MK   : '.$mkk.'<br>';
                echo 'NIM  : '.$mk2->getNim().'<br>';
                echo 'Nama : '.$mk2->getNama().'<br>';
                echo 'Tugas: '.$mk2->getTugas().'<br>';
                echo 'UTS  : '.$mk2->getUTS().'<br>';
                echo 'UAS  : '.$mk2->getUAS().'<br>';
                echo 'NA   : '.$mk2->NilaiTotal($Tugas2, $UTS2, $UAS2).'<br>';
                
            }
        ?>
    </body>
</html>


