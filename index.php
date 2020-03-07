<!DOCTYPE html>
<html>




<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" " crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"  crossorigin="anonymous"></script>

</head>

<body>


    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Dashboard</h3>
                <strong> <i class="fas fa-sitemap"></i></strong>
            </div>

           
            </ul>



        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-secondary">
                        <i class="fas fa-align-justify"></i>
                        <span></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <?php
                                require 'controller/functions.php';
                                echo AddSubcat1();
                                echo AddSubcat2();
                                echo AddSubcat3();
                                echo AddSubcat4();
                                echo AddSubcat5();
                            ?>
                            <form method="post">
                                <button type="submit" name="signout" class="btn btn-primary"> <i class="fas fa-sign-out-alt"></i>Logout</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">


                <div class="row">





                    <div class="col-md-12">
                      
                        <center>
                            <h4>Educational Attainment</h4>
                        </center>
                        <br> <br>
                       <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addmodal">
                            <span class=""> </span>Add Product
                        </button>-->    
                        <div class="table-responsive">

                            <h1>AB/BS Degree</h1>
                             <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#Table1Modal">
                            <span class="fa fa-plus"> </span> Sub Category
                        </button>
                            <table id="mydatatable1" class="table table-bordred table-striped">

                                <thead>


                                    <th>Category</th>
                                    <th>Points</th>
                                    

                                    <th>Actions</th>
                                </thead>
                                <tbody>

                                    <?php 
                                   echo ViewTable1();
                                    ?>


                                </tbody>

                            </table>




                             <div class="table-responsive">

                            <h1>Masters Unit</h1>
                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#Table2Modal">
                            <span class="fa fa-plus"> </span> Sub Category
                        </button>
                            <table id="mydatatable2" class="table table-bordred table-striped">

                                <thead>


                                    <th>Category</th>
                                    <th>Points</th>
                                    

                                    <th>Actions</th>
                                </thead>
                                <tbody>

                                    <?php 
                                   echo ViewTable2  ();
                                    ?>


                                </tbody>

                            </table>








                        </div>
                    </div>



                   


                             <div class="table-responsive">

                            <h1>Masters Degree</h1>
                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#Table3Modal">
                            <span class="fa fa-plus"> </span> Sub Category
                        </button>
                            <table id="mydatatable3" class="table table-bordred table-striped">

                                <thead>


                                    <th>Category</th>
                                    <th>Points</th>
                                    

                                    <th>Actions</th>
                                </thead>
                                <tbody>

                                    <?php 
                                   echo ViewTable3  ();
                                    ?>


                                </tbody>

                            </table>

                        </div>
                    </div>
                            <div class="table-responsive">

                            <h1>Doctorate Unit</h1>
                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#Table4Modal">
                            <span class="fa fa-plus"> </span> Sub Category
                        </button>
                            <table id="mydatatable4" class="table table-bordred table-striped">

                                <thead>


                                    <th>Category</th>
                                    <th>Points</th>
                                    

                                    <th>Actions</th>
                                </thead>
                                <tbody>

                                    <?php 
                                   echo ViewTable4  ();
                                    ?>


                                </tbody>

                            </table>

                        </div>
                    </div>


                             <div class="table-responsive">

                            <h1>Doctorate Degree</h1>
                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#Table5Modal">
                            <span class="fa fa-plus"> </span> Sub Category
                        </button>
                            <table id="mydatatable5" class="table table-bordred table-striped">

                                <thead>


                                    <th>Category</th>
                                    <th>Points</th>
                                    

                                    <th>Actions</th>
                                </thead>
                                <tbody>

                                    <?php 
                                   echo ViewTable5  ();
                                    ?>


                                </tbody>

                            </table>

                        </div>
                    </div>

                        <!--SEND SMS MODAL -->

                    <div class="modal fade" id="Table1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post">

                                        <div class="form-group">
                                             <input type="hidden" name="parent_category" value="AB/BS Degree">
                                                    
                                            <label for="recipient-name" class="col-form-label">SubCategory Name:</label>
                                            <input type="text" class="form-control" id="recipient-name" placeholder="" name="category_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Points:</label>
                                            <textarea class="form-control" name="points"></textarea>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="add_submit1" class="btn btn-primary">SAVE</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="Table2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post">

                                        <div class="form-group">
                                             <input type="hidden" name="parent_category" value="MastersUnit">
                                                    
                                            <label for="recipient-name" class="col-form-label">SubCategory Name:</label>
                                            <input type="text" class="form-control" id="recipient-name" placeholder="" name="category_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Points:</label>
                                            <textarea class="form-control" name="points"></textarea>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="add_submit2" class="btn btn-primary">SAVE</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="Table3Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post">

                                        <div class="form-group">
                                             <input type="hidden" name="parent_category" value="Masters Degree">
                                                    
                                            <label for="recipient-name" class="col-form-label">SubCategory Name:</label>
                                            <input type="text" class="form-control" id="recipient-name" placeholder="" name="category_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Points:</label>
                                            <textarea class="form-control" name="points"></textarea>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="add_submit3" class="btn btn-primary">SAVE</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="Table4Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post">

                                        <div class="form-group">
                                             <input type="hidden" name="parent_category" value="Doctorate Units">
                                                    
                                            <label for="recipient-name" class="col-form-label">SubCategory Name:</label>
                                            <input type="text" class="form-control" id="recipient-name" placeholder="" name="category_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Points:</label>
                                            <textarea class="form-control" name="points"></textarea>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="add_submit4" class="btn btn-primary">SAVE</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="Table5Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post">

                                        <div class="form-group">
                                             <input type="hidden" name="parent_category" value="Doctorate Degree">
                                                    
                                            <label for="recipient-name" class="col-form-label">SubCategory Name:</label>
                                            <input type="text" class="form-control" id="recipient-name" placeholder="" name="category_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Points:</label>
                                            <textarea class="form-control" name="points"></textarea>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="add_submit5" class="btn btn-primary">SAVE</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>






                    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
                    <!-- Popper.JS -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
                    <!-- Bootstrap JS -->
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
                    <!-- DataTables -->
                    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


                    <script>
                        $(document).ready(function() {
                            $('#sidebarCollapse').on('click', function() {
                                $('#sidebar').toggleClass('active');
                            });
                        });

                    </script>


                    <script>
                        $(document).ready(function() {
                            $('#mydatatable1').DataTable();
                        });

                    </script>
                     <script>
                        $(document).ready(function() {
                            $('#mydatatable2').DataTable();
                        });

                    </script>

                     <script>
                        $(document).ready(function() {
                            $('#mydatatable3').DataTable();
                        });

                    </script>

 <script>
                        $(document).ready(function() {
                            $('#mydatatable5').DataTable();
                        });

                    </script>

 <script>
                        $(document).ready(function() {
                            $('#mydatatable5').DataTable();
                        });

                    </script>








</body>

</html>
