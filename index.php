<?php
/*
 * ================
 * Error reporting.
 * ================
 */
error_reporting(E_ALL);
ini_set('display_errors', 0); // SET IT TO 0 ON A LIVE SERVER !!!

/*
 * ==================================================================
 * Execute operations upon form submit (store form data in date.csv).
 * ==================================================================
 */
include 'create-csv.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/csveditor.css" rel="stylesheet">
        <title>CSV</title>
        <style>
            .mob-box{
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .form-ctr{
                width: calc(100% - 100px);
                float: left;
            }
            .mob-box .cust-btn{
                float: left;
                width: 90px;
                margin-left: 10px;
            }
        </style>     
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CSV Editor</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">CSV Maker</a></li>
              <li><a href="add.php">CSV Editor</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        <div class="container" style="max-width:800px;margin:0 auto;margin-top:50px;">  
            <div>
                <h2 style="margin-bottom:50px;">Add Column Header</h2>
                <div>
                    <form method="post" enctype="multipart/form-data" action="">
                        <div class="form-group">
                            <div>
                                <label>Header :</label>
                            </div>
                            <div class="mob-box">
                                <input type="text" class="form-control form-ctr" id="head" name="head[]" placeholder="Enter column">
                                <a href="javascript:void(0);" class="btn btn-success cust-btn add-field">Add</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>  
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" value="Simpan"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>

            $(document).on("click", ".add-field", function () {
                var field = '<div class="mob-box">' +
                        '<input type="text" class="form-control form-ctr" id="head" name="head[]" placeholder="Enter mobile">' +
                        '<a href="javascript:void(0);" class="remove-field cust-btn">Remove</a>' +
                        '<div class="clearfix"></div>' +
                        '</div>';
                $(field).insertAfter('.mob-box:last');
            });
            $(document).on("click", ".remove-field", function () {
                $(this).parent('.mob-box').remove();
            });
        </script>
    </body>
</html>