<?php
// $file = fopen("temp.csv","r");
// echo "<pre>";

// $data =  array();
// while(! feof($file))
//   {
//         $csvdata = fgetcsv($file);
//         $data[] = explode(',', $csvdata[0]);
//   }
// print_r($data);
// fclose($file);
// while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         $num = count($data);

//         $row++;
//         for ($c = 0; $c < $num; $c++) {
//             $arr[$row][$c]= $data[$c];
//         }
//    }
//$C = mysqli_connect("localhost", "root", "", "visualizer_19") or die("Connection error");
$arr=array();
$row = -1;
echo "<pre>";
$sql = "";
if (($handle = fopen("temp.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c = 0; $c < $num; $c++) {
            $arr[$row][$c] = $data[$c];
        }
        if($row<1)
            continue;
        $sql = "INSERT INTO health_institute_data(health_institute_name, health_institute_district_name, health_institute_url
) VALUES ('".$arr[$row][0]."', '".$arr[$row][1]."', '".$arr[$row][2]."')";
         //mysqli_query($C, $sql);
        //echo $sql."<br>";
    }
    //print_r($arr);
    fclose($handle);
}
?>
