<!DOCTYPE html>
<html>
    <head>
        <title>Visualizer-19 | Maps</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
        <link rel="icon" href = "Images/Visualizer19Logo.png">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
        <style type="text/css">
   
a{
    outline: 0;
}
.mapdiv{
    width: 800px;
    margin: auto;
}
.mapdiv path{
    fill: darkgray;
    stroke: red ;
    stroke-width: 5px;
    transition: fill 0.3s;
}
.mapdiv path:hover{
    fill:blue;
    cursor: pointer;
}
    </style>
    </head>
    <body>
        <a href = "V19MainPage.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to the main page</a>
        <nav class = "m-5">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active disabled" id="nav-contact-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Select: </a>
                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#CountryMap" role="tab" aria-selected="true">Country</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#ZonalMap" role="tab" aria-selected="false">Zones</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#ProvinceMap" role="tab" aria-selected="false">Provinces</a>
                
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade" id="CountryMap" role="tabpanel">
                <?php include('NepalMap.html'); ?>    
            </div>
            <div class="tab-pane fade" id="ZonalMap" role="tabpanel" >
                <?php include('NepalZoneMap.html'); ?>
            </div>
            <div class="tab-pane fade" id="ProvinceMap" role="tabpanel">
                <?php  include('NepalProvinceMap.html'); ?>
            </div>
            <div class="tab-pane fade" role="tabpanel">
                <?php  include('DBinjS.html'); ?>
            </div>
        </div>
        <div class="modal fade w-250" id="bootstrap-modal0" role="dialog">
            <div id="demo-modal0"></div>
        </div>
    </body>
</html>
<script type="text/javascript">
    function myFunction(a){
        $("#dataModal").show();
    }
    function open(x){
        $(x).modal('show');
    }
    function closeModal(x){
        $(x).hide();
    }
    function showData(name, type){
        // $('#inner-modal').load('GetMapData.php?type='+type+'&name=' + name,
        //     function() {
        //         $('#dataModal').modal({
        //             show : true
        //         });
        //     }
        // );
        $('#demo-modal0').load('GetMapData.php?type='+type+'&name='+name,
            function() {
                $('#bootstrap-modal0').modal({
                    show : true
                });
            }
        );
    }
</script>
