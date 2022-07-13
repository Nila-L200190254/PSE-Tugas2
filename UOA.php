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
        $pemakaian = null;
        $kapasitas_max=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $pemakaian=$_GET['pemakaian'];
            $kapasitas_max=$_GET['kapasitas_max'];
            $result=0;
                    $result = ($perolehan - $residu) * ($pemakaian / $kapasitas_max);
        }
    ?>
    <form action="UOA.php" method="get">
        <h3><b><center> Nilai Depresiasi <i>Unit of Activity</i></center></b></h3>
        <div class="form-group">
            <label>Harga perolehan</label>
            <input type="text" name="perolehan" class="form-control" value="<?php echo $perolehan; ?>" required>
        </div>
        <div class="form-group">
            <label>Nilai residu</label>
            <input type="text" name="residu" class="form-control" value="<?php echo $residu; ?>"  required>
        </div>
        <div class="form-group">
            <label>Pemakaian:</label>
            <input type="text" name="pemakaian" class="form-control" value="<?php echo $pemakaian; ?>"  required>
        </div>
        <div class="form-group">
            <label>Kapasitas maksimum</label>
            <input type="text" name="kapasitas_max" class="form-control" value="<?php echo $kapasitas_max; ?>"  required>
        </div><br>
        <button type="button" class="btn btn-warning" onclick="location.href='index.html'">Back</button>
        <button type="submit" class="btn btn-success">Hitung</button>
    </form><hr>
    
    <?php
        if (isset($_GET['perolehan'])) {
            $result = "Hasil depresiasi menggunakan metode <i> Unit of Activity </i> adalah " .number_format($result,0,',','.');
            echo "<h3>$result</h3>" ;
        }
    ?>
</div>
</body>
</html>