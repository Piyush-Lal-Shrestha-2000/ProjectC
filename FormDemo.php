<!DOCTYPE html>
<html lang="en">
    <head>
        <title>News data</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style type="text/css">
            body{
                background: rgb(247, 248, 252);
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container fc">
            <fieldset>
                <legend><hr  class = 'mt-5'><h2>Add News</h2><hr></legend>
                <form class = "form-container mt-4">
                    <div class="form-group">
                        <label for="sel1">Select ID:</label>
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email">Heading:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter heading" name="email">
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email">Details:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter details" name="email">
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email">Source:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter source" name="email">
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email">Source URL:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter source URL" name="email">
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email">Image:</label>
                        <input type="file" class="form-control" id="email" placeholder="Enter heading" name="email">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                    <button type="reset" class="btn btn-warning btn-block">Cancel</button>
                </form>
                <hr>
                <legend><hr class = 'mt-5'><h2>Edit News</h2><hr></legend>
                <form class = "form-container mt-4">
                    <div class="form-group">
                        <label for="sel1">Select ID:</label>
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email">Edit heading:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter heading" name="email">
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email">Edit details:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter details" name="email">
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email">Edit source:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter source" name="email">
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email">Edit source URL:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter source URL" name="email">
                    </div>
                    <div class="form-group mx-auto">
                        <label for="email">Change image:</label>
                        <input type="file" class="form-control" id="email" placeholder="Enter heading" name="email">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Edit</button>
                    <button type="reset" class="btn btn-warning btn-block">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-block">Delete</button>
                </form>
                <hr>
                
            </fieldset>
        </div>
    </body>
</html>
