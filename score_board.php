<?php 
include "./db.php";
$scoresql ="SELECT AVG(points) as points, AVG(moves) as moves, AVG(secs) as secs, users.email 
            FROM score_board
            INNER JOIN users ON score_board.user_id = users.id GROUP BY users.id ORDER BY points DESC";            
$queryresults = mysqli_query($conn,$scoresql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McVitie's Memory Game</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
</head>
<body>
   <h2 style="text-align: center;margin-bottom: 80px;">Score Board</h2>
   <div class="container-fluid">
     <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-responsive">
                 <thead>
                       <th>Sn</th>
                      <th>Email</th>
                      <th>Avg Points</th>
                      <th>Avg Moves</th>
                      <th>Avg Time (secs)</th>
                 </thead>
                 <tbody>
                    <?php
                       $sn = 0;
                       while ($a = mysqli_fetch_assoc($queryresults)) {
                        $w = number_format($a['secs']);
                            ?>
                               <tr>
                                <td><?php echo $sn+=1; ?></td>
                               <td><?php echo $a['email'] ?></td>
                               <td><?php echo number_format($a['points']) ?></td>
                               <td><?php echo number_format($a['moves']) ?></td>
                               <td><?php echo gmdate("H:i:s",$w) ?></td>
                               </tr>
                               
                            <?php
                       }
                    ?>
                 </tbody>
            </table>
        </div>
     </div>
   </div>
<script src="./js/bootstrap.min.js"></script> 
</body>
</html>