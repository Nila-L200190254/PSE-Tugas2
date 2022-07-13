<!doctype html>
<html lang="en">
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php
        $perolehan=null;
        $residu=null;
        $umur=null;
    ?>
        <form action="RB.php" method="get">
            <h3><b><center> Nilai Depresiasi <i>Reducing Balance</i></center></b></h3>
            <div class="form-group">
                <label>Harga perolehan</label>
                <input type="text" name="perolehan" class="form-control" value="<?php echo $perolehan; ?>" required>
            </div>
            <div class="form-group">
                <label>Umur ekonomis (tahun)</label>
                <input type="text" name="umur" class="form-control" value="<?php echo $umur; ?>"  required>
            </div><br>
            <button type="button" class="btn btn-warning " onclick="location.href='index.html'">Kembali</button>
            <button type="submit" class="btn btn-success">Hitung</button>
        </form><hr>
        
        <?php
            if (isset($_GET['perolehan'])) {
                $perolehan=$_GET['perolehan'];
                $umur=$_GET['umur'];
                $result = ($perolehan / $umur) * 2;
                $result_a = "Hasil depresiasi menggunakan metode <i>Reducing Balance </i> pada tahun pertama adalah " .number_format($result,0,',','.');
                echo "<h4>$result_a</h4>";
                for ($i=2; $i <= $umur; $i++) { 
                    $result1 = (($perolehan-$result) / $umur) * 2;
                    $result2 = "Hasil depresiasi menggunakan metode <i> Reducing Balance </i> pada tahun ke " .$i. " adalah " .number_format($result1,0,',','.');
                    echo "<h4>$result2</h4>";
                    $perolehan = $perolehan - $result1;
                    $result1 = ($perolehan/$umur)*2;
                }
            }
        ?>
</div>
</body>
</html>