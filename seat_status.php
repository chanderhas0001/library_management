<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <?php require_once ("header.php"); ?>
    <?php require_once ("dao.php"); ?>
    <!-- <link rel="stylesheet" href="seat_layout.css"> -->
    <style>
        .box {
            display: flex;
            flex-wrap: wrap;
        }

        .seat {
            /* display: inline-block; */
            height: 100px;
            width: 100px;
            margin: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            font-weight: bold;
        }

        .available {
            border: 10px solid green;
        }

        .booked {
            border: 10px solid red;
        }
    </style>

    <div class="box">
        <?php
        $row = selectAll("seats");
      
        for ($i = 0; $i < count($row); $i++) {
            if ($row[$i]['admission_id'] == "null") {
                ?>
                 
                  <div class="seat booked"><?php echo $row[$i]['seatid']; ?></div>
               
               
                <?php
            } else {
                ?>
               <div class="seat available">
                <a href="viewprofile.php?view=<?php echo $row[$i]['admission_id'];?>"><?php echo $row[$i]['seatid']; ?></a>
                </div>
                <?php
            }
        }

        ?>
    </div>
  

    <?php require_once ("footer.php"); ?>
<?php
} else {
    header('location:login.php?error=please login in first');
}
?>