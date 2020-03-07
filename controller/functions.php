<?php

//SAVE


function AddSubcat1(){
 if (isset($_POST['add_submit1'])) {
   require 'controller/connection.php';
   $category_name = mysqli_real_escape_string($db,$_POST['category_name']);
   $parent_category = mysqli_real_escape_string($db,$_POST['parent_category']);
   $points = mysqli_real_escape_string($db,$_POST['points']);

   $result = mysqli_query($db,"INSERT INTO subcat1_tbl (category_name,parent_category,points) VALUES ('$category_name','$parent_category','$points')");
   echo
   
   '<script>alert("Succefully Added")</script>;
   ';
 }
}


function AddSubcat2(){
 if (isset($_POST['add_submit2'])) {
   require 'controller/connection.php';
   $category_name = mysqli_real_escape_string($db,$_POST['category_name']);
   $parent_category = mysqli_real_escape_string($db,$_POST['parent_category']);
   $points = mysqli_real_escape_string($db,$_POST['points']);

   $result = mysqli_query($db,"INSERT INTO subcat2_tbl (category_name,parent_category,points) VALUES ('$category_name','$parent_category','$points')");
   echo
   
   '<script>alert("Succefully Added")</script>;
   ';
 }
}


function AddSubcat3(){
 if (isset($_POST['add_submit3'])) {
   require 'controller/connection.php';
   $category_name = mysqli_real_escape_string($db,$_POST['category_name']);
   $parent_category = mysqli_real_escape_string($db,$_POST['parent_category']);
   $points = mysqli_real_escape_string($db,$_POST['points']);

   $result = mysqli_query($db,"INSERT INTO subcat3_tbl (category_name,parent_category,points) VALUES ('$category_name','$parent_category','$points')");
   echo
   
   '<script>alert("Succefully Added")</script>;
   ';
 }
}


function AddSubcat4(){
 if (isset($_POST['add_submit4'])) {
   require 'controller/connection.php';
   $category_name = mysqli_real_escape_string($db,$_POST['category_name']);
   $parent_category = mysqli_real_escape_string($db,$_POST['parent_category']);
   $points = mysqli_real_escape_string($db,$_POST['points']);

   $result = mysqli_query($db,"INSERT INTO subcat4_tbl (category_name,parent_category,points) VALUES ('$category_name','$parent_category','$points')");
   echo
   
   '<script>alert("Succefully Added")</script>;
   ';
 }
}

function AddSubcat5(){
 if (isset($_POST['add_submit5'])) {
   require 'controller/connection.php';
   $category_name = mysqli_real_escape_string($db,$_POST['category_name']);
   $parent_category = mysqli_real_escape_string($db,$_POST['parent_category']);
   $points = mysqli_real_escape_string($db,$_POST['points']);

   $result = mysqli_query($db,"INSERT INTO subcat5_tbl (category_name,parent_category,points) VALUES ('$category_name','$parent_category','$points')");
   echo
   
   '<script>alert("Succefully Added")</script>;
   ';
 }
}



function ViewTable1(){

  
 require 'controller/connection.php';	
 $result = mysqli_query($db,"SELECT * FROM subcat1_tbl");
 while ($row = mysqli_fetch_assoc($result)) {
   $id=$row['id'];
   $category_name=$row['category_name'];
   $points=$row['points'];

   echo
   '
   <tr class="">

   <td>'.$category_name.'</td>
   <td>'.$points.'</td>
   
   <td>
   <a class="btn btn-success" style="color:white;" data-toggle="modal" data-target="#ModalEdit'.$id.'" title="Edit"><li class="fa fa-edit"></li></a>
   <a class="btn btn-danger"  style="color:white;" data-toggle="modal" data-target="#ModalDelete'.$id.'" title="Delete"><li class="fa fa-trash"></li></a>
   </td>
   </tr>


   <div class="modal fade" id="ModalDelete'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">

   <h4 class="modal-title" id="myModalLabel">Delete Record</h4>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   </div>

   <div class="modal-body">
   <div class="col-lg-12">
   <form role="form" method="POST">
   Are you sure you want to delete this record?
   <input type="hidden" name="delete_id" value="'.$id.'">
   </div>
   </div>
   <div class="modal-footer">
   <div class="col-lg-12">
   <button type="button" class="btn btn-primary " data-dismiss="modal">NO <i class="f"></i></button>
   <button type="submit" class="btn btn-danger  " name="delete_submit" >YES</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   </div>s






   <div class="modal fade" id="ModalEdit'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">
   <h3 class="modal-title" id="myModalLabel">Modify Users Record</h3>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

   </div>

   <div class="modal-body">
   <div class="col-lg-12">
   <form role="form" method="POST">
   <input type="hidden" name="edit_id" value="'.$id.'">
   <div class="form-group input-group">

   <input type="text" class="form-control" name="category_name" placeholder=" Name" value="'.$category_name.'">
   </div>

   <div class="form-group input-group">

   <input type="text" class="form-control" name="points" placeholder="Address" value="'.$points.'">
   </div>

   
   </div>
   </div>
   <div class="modal-footer">
   <div class="col-lg-12">

   <button type="submit" class="btn btn-success form-control btn-block " name="edit_submit" >UPDATE RECORDS</button>
   <button type="button" class="btn btn-secondary form-control btn-block" data-dismiss="modal">CLOSE</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   </div>

   ';

   if (isset($_POST['delete_submit'])) {
    $delete_id = $_POST['delete_id'];
    $del_result = mysqli_query($db,"DELETE FROM subcat1_tbl WHERE id ='$delete_id'");
    echo '<script>window.location.href="index.php"</script>';   
  }

  if (isset($_POST['edit_submit'])){
    require 'controller/connection.php';
    $edit_id = $_POST['edit_id'];
    $category_name = mysqli_real_escape_string($db,$_POST['category_name']);
    $points = mysqli_real_escape_string($db,$_POST['points']);
    

    $edit_result = mysqli_query($db,"UPDATE subcat1_tbl SET category_name ='$category_name', points ='$points'  WHERE id ='$edit_id' ");
    echo '<script>window.location.href="index.php"</script>';
  }
}

}

function ViewTable2(){

  
 require 'controller/connection.php';	
 $result = mysqli_query($db,"SELECT * FROM subcat2_tbl");
 while ($row = mysqli_fetch_assoc($result)) {
   $id=$row['id'];
   $category_name=$row['category_name'];
   $points=$row['points'];

   echo
   '
   <tr class="">

   <td>'.$category_name.'</td>
   <td>'.$points.'</td>
   
   <td>
   <a class="btn btn-success" style="color:white;" data-toggle="modal" data-target="#ModalEdit'.$id.'" title="Edit"><li class="fa fa-edit"></li></a>
   <a class="btn btn-danger"  style="color:white;" data-toggle="modal" data-target="#ModalDelete'.$id.'" title="Delete"><li class="fa fa-trash"></li></a>
   </td>
   </tr>


   <div class="modal fade" id="ModalDelete'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">

   <h4 class="modal-title" id="myModalLabel">Delete Record</h4>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   </div>

   <div class="modal-body">
   <div class="col-lg-12">
   <form role="form" method="POST">
   Are you sure you want to delete this record?
   <input type="hidden" name="delete_id" value="'.$id.'">
   </div>
   </div>
   <div class="modal-footer">
   <div class="col-lg-12">
   <button type="button" class="btn btn-primary " data-dismiss="modal">NO <i class="f"></i></button>
   <button type="submit" class="btn btn-danger  " name="delete_submit" >YES</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   </div>s






   <div class="modal fade" id="ModalEdit'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">
   <h3 class="modal-title" id="myModalLabel">Modify Users Record</h3>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

   </div>

   <div class="modal-body">
   <div class="col-lg-12">
   <form role="form" method="POST">
   <input type="hidden" name="edit_id" value="'.$id.'">
   <div class="form-group input-group">

   <input type="text" class="form-control" name="category_name" placeholder=" Name" value="'.$category_name.'">
   </div>

   <div class="form-group input-group">

   <input type="text" class="form-control" name="points" placeholder="Address" value="'.$points.'">
   </div>

   
   </div>
   </div>
   <div class="modal-footer">
   <div class="col-lg-12">

   <button type="submit" class="btn btn-success form-control btn-block " name="edit_submit" >UPDATE RECORDS</button>
   <button type="button" class="btn btn-secondary form-control btn-block" data-dismiss="modal">CLOSE</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   </div>

   ';

   if (isset($_POST['delete_submit'])) {
    $delete_id = $_POST['delete_id'];
    $del_result = mysqli_query($db,"DELETE FROM subcat2_tbl WHERE id ='$delete_id'");
    echo '<script>window.location.href="index.php"</script>';   
  }

  if (isset($_POST['edit_submit'])){
    require 'controller/connection.php';
    $edit_id = $_POST['edit_id'];
    $category_name = mysqli_real_escape_string($db,$_POST['category_name']);
    $points = mysqli_real_escape_string($db,$_POST['points']);
    

    $edit_result = mysqli_query($db,"UPDATE subcat2_tbl SET category_name ='$category_name', points ='$points'  WHERE id ='$edit_id' ");
    echo '<script>window.location.href="index.php"</script>';
  }
}

}




function ViewTable3(){

  
 require 'controller/connection.php';	
 $result = mysqli_query($db,"SELECT * FROM subcat3_tbl");
 while ($row = mysqli_fetch_assoc($result)) {
   $id=$row['id'];
   $category_name=$row['category_name'];
   $points=$row['points'];

   echo
   '
   <tr class="">

   <td>'.$category_name.'</td>
   <td>'.$points.'</td>
   
   <td>
   <a class="btn btn-success" style="color:white;" data-toggle="modal" data-target="#ModalEdit'.$id.'" title="Edit"><li class="fa fa-edit"></li></a>
   <a class="btn btn-danger"  style="color:white;" data-toggle="modal" data-target="#ModalDelete'.$id.'" title="Delete"><li class="fa fa-trash"></li></a>
   </td>
   </tr>


   <div class="modal fade" id="ModalDelete'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">

   <h4 class="modal-title" id="myModalLabel">Delete Record</h4>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   </div>

   <div class="modal-body">
   <div class="col-lg-12">
   <form role="form" method="POST">
   Are you sure you want to delete this record?
   <input type="hidden" name="delete_id" value="'.$id.'">
   </div>
   </div>
   <div class="modal-footer">
   <div class="col-lg-12">
   <button type="button" class="btn btn-primary " data-dismiss="modal">NO <i class="f"></i></button>
   <button type="submit" class="btn btn-danger  " name="delete_submit" >YES</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   </div>s






   <div class="modal fade" id="ModalEdit'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">
   <h3 class="modal-title" id="myModalLabel">Modify Users Record</h3>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

   </div>

   <div class="modal-body">
   <div class="col-lg-12">
   <form role="form" method="POST">
   <input type="hidden" name="edit_id" value="'.$id.'">
   <div class="form-group input-group">

   <input type="text" class="form-control" name="category_name" placeholder=" Name" value="'.$category_name.'">
   </div>

   <div class="form-group input-group">

   <input type="text" class="form-control" name="points" placeholder="Address" value="'.$points.'">
   </div>

   
   </div>
   </div>
   <div class="modal-footer">
   <div class="col-lg-12">

   <button type="submit" class="btn btn-success form-control btn-block " name="edit_submit" >UPDATE RECORDS</button>
   <button type="button" class="btn btn-secondary form-control btn-block" data-dismiss="modal">CLOSE</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   </div>

   ';

   if (isset($_POST['delete_submit'])) {
    $delete_id = $_POST['delete_id'];
    $del_result = mysqli_query($db,"DELETE FROM subcat3_tbl WHERE id ='$delete_id'");
    echo '<script>window.location.href="index.php"</script>';   
  }

  if (isset($_POST['edit_submit'])){
    require 'controller/connection.php';
    $edit_id = $_POST['edit_id'];
    $category_name = mysqli_real_escape_string($db,$_POST['category_name']);
    $points = mysqli_real_escape_string($db,$_POST['points']);
    

    $edit_result = mysqli_query($db,"UPDATE subcat3_tbl SET category_name ='$category_name', points ='$points'  WHERE id ='$edit_id' ");
    echo '<script>window.location.href="index.php"</script>';
  }
}

}






function ViewTable4(){

  
 require 'controller/connection.php';	
 $result = mysqli_query($db,"SELECT * FROM subcat4_tbl");
 while ($row = mysqli_fetch_assoc($result)) {
   $id=$row['id'];
   $category_name=$row['category_name'];
   $points=$row['points'];

   echo
   '
   <tr class="">

   <td>'.$category_name.'</td>
   <td>'.$points.'</td>
   
   <td>
   <a class="btn btn-success" style="color:white;" data-toggle="modal" data-target="#ModalEdit'.$id.'" title="Edit"><li class="fa fa-edit"></li></a>
   <a class="btn btn-danger"  style="color:white;" data-toggle="modal" data-target="#ModalDelete'.$id.'" title="Delete"><li class="fa fa-trash"></li></a>
   </td>
   </tr>


   <div class="modal fade" id="ModalDelete'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">

   <h4 class="modal-title" id="myModalLabel">Delete Record</h4>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   </div>

   <div class="modal-body">
   <div class="col-lg-12">
   <form role="form" method="POST">
   Are you sure you want to delete this record?
   <input type="hidden" name="delete_id" value="'.$id.'">
   </div>
   </div>
   <div class="modal-footer">
   <div class="col-lg-12">
   <button type="button" class="btn btn-primary " data-dismiss="modal">NO <i class="f"></i></button>
   <button type="submit" class="btn btn-danger  " name="delete_submit" >YES</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   </div>s






   <div class="modal fade" id="ModalEdit'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">
   <h3 class="modal-title" id="myModalLabel">Modify Users Record</h3>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

   </div>

   <div class="modal-body">
   <div class="col-lg-12">
   <form role="form" method="POST">
   <input type="hidden" name="edit_id" value="'.$id.'">
   <div class="form-group input-group">

   <input type="text" class="form-control" name="category_name" placeholder=" Name" value="'.$category_name.'">
   </div>

   <div class="form-group input-group">

   <input type="text" class="form-control" name="points" placeholder="Address" value="'.$points.'">
   </div>

   
   </div>
   </div>
   <div class="modal-footer">
   <div class="col-lg-12">

   <button type="submit" class="btn btn-success form-control btn-block " name="edit_submit" >UPDATE RECORDS</button>
   <button type="button" class="btn btn-secondary form-control btn-block" data-dismiss="modal">CLOSE</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   </div>

   ';

   if (isset($_POST['delete_submit'])) {
    $delete_id = $_POST['delete_id'];
    $del_result = mysqli_query($db,"DELETE FROM subcat4_tbl WHERE id ='$delete_id'");
    echo '<script>window.location.href="index.php"</script>';   
  }

  if (isset($_POST['edit_submit'])){
    require 'controller/connection.php';
    $edit_id = $_POST['edit_id'];
    $category_name = mysqli_real_escape_string($db,$_POST['category_name']);
    $points = mysqli_real_escape_string($db,$_POST['points']);
    

    $edit_result = mysqli_query($db,"UPDATE subcat4_tbl SET category_name ='$category_name', points ='$points'  WHERE id ='$edit_id' ");
    echo '<script>window.location.href="index.php"</script>';
  }
}

}



function ViewTable5(){

  
 require 'controller/connection.php';	
 $result = mysqli_query($db,"SELECT * FROM subcat5_tbl");
 while ($row = mysqli_fetch_assoc($result)) {
   $id=$row['id'];
   $category_name=$row['category_name'];
   $points=$row['points'];

   echo
   '
   <tr class="">

   <td>'.$category_name.'</td>
   <td>'.$points.'</td>
   
   <td>
   <a class="btn btn-success" style="color:white;" data-toggle="modal" data-target="#ModalEdit'.$id.'" title="Edit"><li class="fa fa-edit"></li></a>
   <a class="btn btn-danger"  style="color:white;" data-toggle="modal" data-target="#ModalDelete'.$id.'" title="Delete"><li class="fa fa-trash"></li></a>
   </td>
   </tr>


   <div class="modal fade" id="ModalDelete'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">

   <h4 class="modal-title" id="myModalLabel">Delete Record</h4>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   </div>

   <div class="modal-body">
   <div class="col-lg-12">
   <form role="form" method="POST">
   Are you sure you want to delete this record?
   <input type="hidden" name="delete_id" value="'.$id.'">
   </div>
   </div>
   <div class="modal-footer">
   <div class="col-lg-12">
   <button type="button" class="btn btn-primary " data-dismiss="modal">NO <i class="f"></i></button>
   <button type="submit" class="btn btn-danger  " name="delete_submit" >YES</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   </div>s






   <div class="modal fade" id="ModalEdit'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">
   <h3 class="modal-title" id="myModalLabel">Modify Users Record</h3>
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

   </div>

   <div class="modal-body">
   <div class="col-lg-12">
   <form role="form" method="POST">
   <input type="hidden" name="edit_id" value="'.$id.'">
   <div class="form-group input-group">

   <input type="text" class="form-control" name="category_name" placeholder=" Name" value="'.$category_name.'">
   </div>

   <div class="form-group input-group">

   <input type="text" class="form-control" name="points" placeholder="Address" value="'.$points.'">
   </div>

   
   </div>
   </div>
   <div class="modal-footer">
   <div class="col-lg-12">

   <button type="submit" class="btn btn-success form-control btn-block " name="edit_submit" >UPDATE RECORDS</button>
   <button type="button" class="btn btn-secondary form-control btn-block" data-dismiss="modal">CLOSE</button>
   </div>
   </div>
   </form>
   </div>
   </div>
   </div>

   ';

   if (isset($_POST['delete_submit'])) {
    $delete_id = $_POST['delete_id'];
    $del_result = mysqli_query($db,"DELETE FROM subcat5_tbl WHERE id ='$delete_id'");
    echo '<script>window.location.href="index.php"</script>';   
  }

  if (isset($_POST['edit_submit'])){
    require 'controller/connection.php';
    $edit_id = $_POST['edit_id'];
    $category_name = mysqli_real_escape_string($db,$_POST['category_name']);
    $points = mysqli_real_escape_string($db,$_POST['points']);
    

    $edit_result = mysqli_query($db,"UPDATE subcat5_tbl SET category_name ='$category_name', points ='$points'  WHERE id ='$edit_id' ");
    echo '<script>window.location.href="index.php"</script>';
  }
}

}

?>