<?php
    include '../connexion.php'; 
    $req="SELECT * from player as p
LEFT JOIN club as c
ON p.ClubID=c.ClubID
LEFT JOIN nationality as n 
ON p.NationalityID=n.NationalityID
LEFT JOIN statiqtiques_gk as sgk
ON p.PlayerID=sgk.PlayerID
LEFT JOIN statiqtiques_normalpl as snp
ON p.PlayerID=snp.PlayerID;";
    
     $result = $conn->query($req);
     while( $row = $result->fetch_assoc()){
        $players[]=$row;
     }

     echo json_encode($players);
?>