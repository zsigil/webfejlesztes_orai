<?php
function Listazas($conn){
    $output = "";
    $query = "SELECT rendeles.id as id, vevo, datum, darab, cim from rendeles inner join konyv on rendeles.konyvId=konyv.id order by vevo";
    
    $result = $conn->query($query);
    
    if($result->num_rows>0){
            $output .= "<table class='table table-striped'><thead><tr><th>Rendelő</th><th>Dátum</th><th>Könyv cím</th><th>Darab</th></tr></thead><tbody>";
        while($row=$result->fetch_assoc()){
            $output .= "<tr>";
            $output .= "<td>" . $row["vevo"]. "</td>";
            $output .= "<td>" . $row["datum"]. "</td>";
            $output .= "<td>" . $row["cim"]. "</td>";
            $output .= "<td>" . $row["darab"]. "</td>";
            $output .= "<td>";
            $output .= "<form method='POST' action='delete.php'>";
            $output .= "<input type='hidden' name='azon' value='" . $row["id"] . "'>";
            $output .= "<input class='ml-3 btn btn-danger' type='submit' value='TÖRLÖM'>";
            $output .= "</form>";
            $output .= "</td>";
            $output .= "</tr>";        
        }
            $output .= "</tbody></table>";
            echo $output;
    }
}





?>