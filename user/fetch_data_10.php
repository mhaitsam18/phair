<?php 

include "../function.php";

$sql = "SELECT * FROM (SELECT * FROM ph ORDER BY id_ph DESC LIMIT 10)Var1 ORDER BY id_ph ASC";  
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
$output = '
<table class="table table-light">
<thead class="table-dark">
<tr>
<th>No</th>
<th>Sampel</th>
<th>pH Air</th>
<th>Tegangan</th>
</tr>
</thead>';

if($rows > 0){
    $no = 1;
    foreach ($result as $item) {
        $output .= '
        <tbody>
            <tr>
                <td>'. $no++ .'</td> 
                <td>Air PDAM</td> 
                <td>'. $item['nilai_ph'] .'</td> 
                <td>'.$item['tegangan'].'</td> 
                
            </tr>
        </tbody>
        ';
    }
}else{
    
    $output .= '
    <tbody>
    <tr>
    <td colspan="4" align="center">Data not found</td>
    </tr>
    </tbody>
    ';
}

$output.= '</table>';

echo $output;
?>