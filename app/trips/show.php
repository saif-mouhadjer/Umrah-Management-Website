    <?php 
        require './../../app/Database_Connect.php';

        $id = $_GET['id'];

        $sql = "SELECT v.*, COUNT(b.Num_visa) AS row_count
        FROM voyage v
        LEFT JOIN visa b ON v.Num_vol = b.Num_vol
        WHERE v.Num_vol = '$id'
        GROUP BY v.Num_vol";
        $voyage = mysqli_query($conn, $sql);
        $voyage = mysqli_fetch_assoc($voyage);

        $num_guide =$voyage['num_g'];
        $sql = "SELECT Nom_g ,Prénom_g  FROM `guide` WHERE `num_g` = $num_guide";
        $guide = mysqli_query($conn, $sql);
        $guide = mysqli_fetch_assoc($guide);
    