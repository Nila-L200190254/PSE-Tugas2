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
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $jumlah_umur = 0;
            for ($i=1; $i<=$umur ; $i++) { 
                $jumlah_umur = $jumlah_umur+ $i;
            }
            $result = ($perolehan - $residu) * $umur / $jumlah_umur;    
        }
    ?>

    <form action="SOY.php" method="get">
        <h3><b><center> Nilai Depresiasi <i>Sum of Year</i></center></b></h3>
        <div class="form-group">
            <label>Harga perolehan</label>
            <input type="text" name="perolehan" class="form-control" value="<?php echo $perolehan; ?>" required>
        </div>
        <div class="form-group">
            <label>Nilai residu</label>
            <input type="text" name="residu" class="form-control" value="<?php echo $residu; ?>"  required>
        </div>
        <div class="form-group">
            <label>Umur ekonomis (tahun):</label>
            <input type="text" name="umur" class="form-control" value="<?php echo $umur; ?>"  required>
        </div><br>
        <button type="button" class="btn btn-warning" onclick="location.href='index.html'">Back</button>
        <button type="submit" class="btn btn-success">Hitung</button>
    </form><hr>

    <?php
    if (isset($_GET['perolehan'])) {
        $result = "Hasil depresiasi menggunakan metode <i> Sum of The Year </i> pada tahun ke-" . $umur . " adalah " .number_format($result,0,',','.');
        echo "<h3>$result</h3>" ;
    }
    ?>
</div>
</body>
</html>