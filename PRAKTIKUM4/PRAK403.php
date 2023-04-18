<!DOCTYPE html>
    <html lang="en">
    <head>
        <style>         
            table, tr, td, th {             
                border: solid 1px black;             
                border-collapse: collapse;             
                padding: 5px;         
            }     
        </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Praktikum 4-Nomor 3</title>
    </head>
    <body>
    <?php
$data = [         
    ["no" => 1, "nama" => "Ridho", "matkul" => [             
        ["nama_mk" =>"Pemrograman I", "sks" => 2],              
        ["nama_mk"  =>  "Praktikum  Pemrograman  I",  "sks"  => 1],             
        ["nama_mk"  =>  "Pengantar  Lingkungan  Lahan  Basah", "sks" => 2],              
        ["nama_mk" => "Arsitektur Komputer", "sks" => 3]         
        ]         
    ],          
    ["no" => 2, "nama" => "Ratna", "matkul" => [             
        ["nama_mk" =>"Basis Data I", "sks" => 2],              
        ["nama_mk"  =>  "Praktikum  Basis  Data  I",  "sks"  => 1],             
        ["nama_mk" => "Kalkulus", "sks" => 3]         
        ]         
    ],          
    ["no" => 3, "nama" => "Tono", "matkul" => [             
        ["nama_mk"  =>  "Rekayasa  Perangkat  Lunak",  "sks"  => 3],              
        ["nama_mk"  =>  "Analisis  dan  Perancangan  Sistem", "sks" => 3],             
        ["nama_mk" => "Komputasi Awan", "sks" => 3],              
        ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]         
            ]         
        ]     
    ];
    for ($i=0; $i < count($data); $i++) {         
        $jmlSKS = 0;        
        for ($j=0; $j < count($data[$i]["matkul"]); $j++) {              
            $jmlSKS += $data[$i]["matkul"][$j]["sks"];         
        }         $data[$i]["jmlSKS"] = $jmlSKS;         
        if ($data[$i]["jmlSKS"] < 7) {             
            $data[$i]["keterangan"] = "Revisi KRS";         
        } else {             
            $data[$i]["keterangan"] = "Tidak Revisi";         
        }     
    }
    ?>
    <table>         
    <tr style="background-color: #D3D3D3; font-weight: bold;">             
            <td>No</td>             
            <td>Nama</td>             
            <td>Mata Kuliah diambil</td>             
            <td>SKS</td>             
            <td>Total SKS</td>             
            <td>Keterangan</td>         
        </tr>
        <?php
        for ($i=0; $i < count($data); $i++) {                 
            for  ($j=0;  $j  <  count($data[$i]["matkul"]); $j++) {                      
                echo "<tr>";                     
                if ($j == 0) {                         
                    echo "<td>".$data[$i]["no"]."</td>";                         
                    echo "<td>".$data[$i]["nama"]."</td>";                         
                    echo "<td>".$data[$i]["matkul"][$j]["nama_mk"]."</td>";                         
                    echo "<td>".$data[$i]["matkul"][$j]["sks"]."</td>";                         
                    echo "<td>".$data[$i]["jmlSKS"]."</td>";                     
                    if($data[$i]["keterangan"]=="Revisi KRS"){                         
                        echo  "<td  style='background-color:red'>".$data[$i]["keterangan"]."</td>";                                            
                    }                     
                    else{                         
                        echo  "<td  style='background-color:green'>".$data[$i]["keterangan"]."</td>";                      
                    }
                }else {                         
                    echo "<td></td>";                         
                    echo "<td></td>";                         
                    echo "<td>".$data[$i]["matkul"][$j]["nama_mk"]."</td>";                         
                    echo "<td>".$data[$i]["matkul"][$j]["sks"]."</td>";                         
                    echo "<td></td>";                         
                    echo "<td></td>";                     
                }                     
                echo "</tr>";                 
            }             
        }
        ?>
    </table>
    </body>
    </html>