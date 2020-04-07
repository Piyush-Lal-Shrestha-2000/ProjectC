<?php
  // $str = "A-P-P";
  // $health_institutes = "XYZ Hospital;Hetauda Hospital;Ramnagar Clinic;";
  // $health_institutes_links = "www.xyzhopital.com.np;www.htdhopital.com.np;www.clinic@Ramnagar.com.np;";
  // echo "<pre>";
  // var_dump(explode(";", $health_institutes));
  // var_dump(explode(";", $health_institutes_links));
  // echo "</pre>";
//     $a = true;
//     if(!$a){
 ?>  
    <!-- <h1>Hello World!</h1> -->
 <?php 
//     }else{
 ?>
     <!-- <h1>Bye bye</h1> -->
 <?php
//     }
?>
<style type="text/css">
    p{
        padding: 0 15px;
    }table{
        padding: 0 15px;
    }caption{
        padding: 10px 10px;
    }
</style>
<?php
    $C = mysqli_connect("localhost", "root", "", "visualizer_19") or die("Connection error");
    //$query = "SELECT * FROM maps_districts_data, health_institute_data WHERE maps_districts_data.district_name = '".$_GET["modal"]."' AND maps_districts_data.district_name = health_institute_data.health_institute_district_name";
    if($_GET["type"]=="District"){
        $q0 = "SELECT district_total_cases, district_recovered, district_death, district_ongoing_cases FROM maps_districts_data WHERE maps_districts_data.district_name = '".$_GET["modal"]."'";
        $q1 = "SELECT * FROM health_institute_data WHERE health_institute_data.health_institute_district_name = '".$_GET["modal"]."'";
    }
    if($_GET["type"]=="Province"){
        $q0 = "SELECT SUM(district_total_cases), SUM(district_recovered), SUM(district_death), SUM(district_ongoing_cases) FROM maps_districts_data WHERE maps_districts_data.district_province_number = '".$_GET["modal"]."'";
        $q1 = "SELECT * FROM health_institute_data WHERE health_institute_data.health_institute_province_number= '".$_GET["modal"]."'";
    }
    if($_GET["type"]=="Zone"){
        $q0 = "SELECT SUM(district_total_cases), SUM(district_recovered), SUM(district_death), SUM(district_ongoing_cases) FROM maps_districts_data WHERE maps_districts_data.district_zone_name = '".$_GET["modal"]."'";
        $q1 = "SELECT * FROM health_institute_data WHERE health_institute_data.health_institute_zone_name= '".$_GET["modal"]."'";
    }
    if($_GET["type"]=="Geo"){
        $q0 = "SELECT SUM(district_total_cases), SUM(district_recovered), SUM(district_death), SUM(district_ongoing_cases) FROM maps_districts_data WHERE maps_districts_data.district_geographical_region = '".$_GET["modal"]."'";
        $q1 = "SELECT * FROM health_institute_data WHERE health_institute_data.health_institute_geographical_region_name= '".$_GET["modal"]."'";
    }
    if($_GET["type"]=="Country"){
        $q0 = "SELECT SUM(district_total_cases), SUM(district_recovered), SUM(district_death), SUM(district_ongoing_cases) FROM maps_districts_data";
        $q1 = "SELECT * FROM health_institute_data";
    }
    $R0 = mysqli_query($C, $q0);
    $R1 = mysqli_query($C, $q1);
    //$result = $dbController->runQuery($query);
//    if(!empty($result)) 
  //  {
?>
        <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h2 class="modal-title">Data of <?php echo $_GET["modal"]." (".$_GET["type"].")";?></h2>
                </div>
                <div class = "modal-text px-5">
                    <?php 
                        $total_cases = 0; $recovered = 0; $ongoing = 0; $death = 0;
                        while($r = mysqli_fetch_array($R0)){
                            $total_cases = $r[0];
                            $recovered = $r[1];
                            $death = $r[2];
                            $ongoing = $r[3];
                        }
                    ?>
                    <table class = "table cases">
                        <thead>
                            <tr>
                                <th colspan="2"><h3>Covid-19 Cases</h3></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class = 'text-danger'>
                                <th scope="row">Total cases: </th>
                                <td><?php echo $total_cases; ?></td>
                            </tr>
                            <tr class = 'text-success'>
                                <th scope="row">Recovered: </th>
                                <td><?php echo $recovered; ?></td>
                            </tr>
                            <tr class = 'text-warning'>
                                <th scope="row">Ongoing: </th>
                                <td><?php echo $ongoing; ?></td>
                            </tr>
                            <tr class = 'text-danger'>
                                <th scope="row">Death(s): </th>
                                <td><?php echo $death; ?></td>
                            </tr>
                        </tbody>
                        <caption align="bottom"><a href = "https://en.wikipedia.org/wiki/2020_coronavirus_pandemic_in_Nepal?fbclid=IwAR3S9BH8JtRQvJwqSAxgudfCuLXzoQLHlICxEchwcyswqY5mg8nlWgUhxh0" target="_blank">Source</a></caption>
                    </table>
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan = "3"><h3>Certified Health Institutes</h3></th>    
                            </tr>
                          <tr>
                            <th>SN</th>
                            <th>Health Institute</th>
                            <th>District</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                while($r = mysqli_fetch_array($R1)){
                                    echo "<tr>";
                                        echo "<td>".(++$i)."</td>";
                                        echo "<td><a href = '".$r[6]."' target = '_blank'>".$r[1]."</a></td>";
                                        echo "<td>".$r[2]."</td>";
                                    echo "</tr>";
                                }
                            ?>      
                        </tbody>
                        <caption align="bottom"><a href = "https://covid19.mohp.gov.np/#/" target="_blank">Source</a></caption>
                      </table>
                    
                </div>            
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
<?php
    //}
?>
