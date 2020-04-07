<?php 
    $_SESSION['pageName'] = " | News";
    if(!isset($_SESSION['count']))
        $_SESSION['count'] = array(3, 3);
    $C = mysqli_connect("localhost", "root", "", "visualizer_19");
?>
<script type="text/javascript">
    var active = "Local News";
</script>
<!DOCTYPE html>
<html>
    <head>
        <title>Visualizer-19 | News</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div class = "mx-5 py-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-local-tab" data-toggle="tab" href="#nav-local" role="tab" aria-controls="nav-local" aria-selected="true" onclick="active = this.innerHTML;">Local News</a>
                    <a class="nav-item nav-link" id="nav-global-tab" data-toggle="tab" href="#nav-global" role="tab" aria-controls="nav-global" aria-selected="false" onclick="active = this.innerHTML;">Global News</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                
                <div class="tab-pane fade show active" id="nav-local" role="tabpanel" aria-labelledby="nav-local-tab">
                    <?php 
                        $sql = "SELECT * FROM news_data WHERE news_data.news_category = 'Local' ORDER BY news_data.news_id DESC LIMIT ".$_SESSION['count'][0];    
                        $R = mysqli_query($C, $sql);
                        while($res = mysqli_fetch_array($R)){
                    ?>
                    <div class="card my-5" style="max-width: parent;">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <img src="<?php echo $res[3]; ?>" width = "750" height = "500" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $res[1]; ?></h3><hr>
                                    <p class="card-text"><?php echo $res[2]; ?></p>
                                    <p class="card-text"><small class="text-muted"><?php echo $res[4]; ?></small></p>
                                    <p class="card-text"><a href = "<?php echo $res[7]; ?>">Source: <?php echo $res[6]; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                        echo "
                        <center>
                        <form>
                           <input type = 'submit' class = 'btn btn-info' value = 'Load more.' name = 'loadMoreLocals'/> 
                        </form>
                        </center>";
                    ?>
                </div>
                
                <div class="tab-pane fade" id="nav-global" role="tabpanel" aria-labelledby="nav-gloabl-tab">
                    <div class="tab-pane fade show active" id="nav-global" role="tabpanel" aria-labelledby="nav-global-tab">
                    <?php 
                        $sql0 = "SELECT * FROM news_data WHERE news_data.news_category = 'Global' ORDER BY news_data.news_id DESC LIMIT ".$_SESSION['count'][1];    
                        $R0 = mysqli_query($C, $sql0);
                        while($res0 = mysqli_fetch_array($R0)){
                    ?>
                    <div class="card my-5" style="max-width: parent;">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <img src="<?php echo $res0[3]; ?>" width = "700" height = "500" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $res0[1]; ?></h3><hr>
                                    <p class="card-text"><?php echo $res0[2]; ?></p>
                                    <p class="card-text"><small class="text-muted"><?php echo $res0[4]; ?></small></p>
                                    <p class="card-text"><a href = "<?php echo $res0[7]; ?>">Source: <?php echo $res0[6]; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                    echo "
                    <center>
                    <form>
                       <input type = 'submit' class = 'btn btn-info' value = 'Load more.' name = 'loadMoreGlobals'/> 
                    </form>
                    </center>";
                ?>
                </div>
                </div> 
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    function displayActive(){
        alert(active);
    } 
</script>
<?php 
    if(isset($_GET['loadMoreLocals'])){
        $_SESSION['count'][0] +=3;
    }
    if(isset($_GET['loadMoreGlobals'])){
        $_SESSION['count'][1] +=3;
    }
?>
