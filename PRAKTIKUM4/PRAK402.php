<!DOCTYPE html>
<html lang="en">
<head>
<style>         
table, tr, td, th {             
    border: solid 1px black;             
    border-collapse: collapse;             
    padding: 10px;                  
    }     
</style> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4-Nomor 2</title>
</head>
<body>
<?php
$data = [         
    ["nama"  =>  "Andi",  "nim"  =>  "2101001",  "uts"  =>  87, "uas" => 65],         
    ["nama"  =>  "Budi",  "nim"  =>  "2101002",  "uts"  =>  76, "uas" => 79],         
    ["nama"  =>  "Tono",  "nim"  =>  "2101003",  "uts"  =>  50, "uas" => 41],
    ["nama"  =>  "Jessica",  "nim"  =>  "2101004",  "uts"  => 60, "uas" => 75],     
];      
for ($i=0; $i < count($data); $i++) {          
    $data[$i]["akhir"]  =  $data[$i]["uts"]  *  0.4  + $data[$i]["uas"] * 0.6;         
    if($data[$i]["akhir"] >= 80){             
        $data[$i]["huruf"] = "A";         
    }elseif($data[$i]["akhir"] > 70){             
        $data[$i]["huruf"] = "B";         
    }elseif($data[$i]["akhir"] > 60){             
        $data[$i]["huruf"] = "C";         
    }elseif($data[$i]["akhir"] > 50){             
        $data[$i]["huruf"] = "D";         
    }else{             
        $data[$i]["huruf"] = "E";       
    }     
}
?>
    <table>                               
        <tr style="background-color: #D3D3D3; font-weight: bold;">                      
        <td>Nama</td>             
        <td>NIM</td>             
        <td>Nilai UTS</td>             
        <td>Nilai UAS</td>             
        <td>Nilai Akhir</td>             
        <td>Huruf</td>         
    </tr>
    <?php
    for ($i=0; $i < count($data); $i++) {              
        echo "<tr>";             
        echo "<td>".$data[$i]["nama"]."</td>";             
        echo "<td>".$data[$i]["nim"]."</td>";             
        echo "<td>".$data[$i]["uts"]."</td>";             
        echo "<td>".$data[$i]["uas"]."</td>";             
        echo "<td>".$data[$i]["akhir"]."</td>";             
        echo "<td>".$data[$i]["huruf"]."</td>";             
        echo "</tr>";         
    }
    ?>
    </table>
</body>
</html>