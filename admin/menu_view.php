<div class="bg_employee" >
	<div style="width:100%;height :80px;" >
		<div class="left_employee" style="width : 49%; float:;left;" >
		<a data-toggle="modal" data-target="#add" class="btn btn-primary" style ="margin:3% 3% 2% 	10%;"><span class="glyphicon glyphicon-plus" ></span>Tambah Menu</a></div>
	
</div>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Kategori</h4>
      </div>
      <div class="modal-body">
      <div class="table-responsive scroll">
      <center>
      	<form action="menu_add.php" method="post" enctype="multipart/form-data">
	      <input type="text" name="nama" class="input" placeholder="Nama">
	      <input type="text" name="harga" class="input" placeholder="harga">
	      <select class="input" name="tipe">
	      	<option value="appetizer">Appetizer</option>
	      	<option value="food">Food</option>
	      	<option value="drink">Drink</option>
	      	<option value="dessert">Dessert</option>
	      </select>
	        <select class="input" name="status">
	      	<option value="active">Active</option>
	      	<option value="disable">Disable</option>
	      </select>
	      <input  type="file"  name="gambar" multiple accept="image/*" onchange="preview_image_logo()" id="preview_image"  >

			<div id="image_preview" class="img_preview_paket"><img></div>
	     <input type="submit" class="btn btn-success" name="submit" style="margin-top:10px;width:60%;height:60px;">
	    </form>
	      </center>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</div>
    </div>	
  </div>
</div>

<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>

<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<?php
include "koneksi.php";
$stmt = $conn->query("SELECT * FROM menu");
?>
<div class="col-md-12" style="width : 100%;">
        <div class="card-body table-responsive" style="width: 100%;">
          <table class="datatable table table-striped " id="myTable" cellspacing="0" width="100%">
            <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Tipe</th>
            <th>Status</th>
            <th>Gambar </th>
            <th> Edit</th>
        </tr>
    </thead>
    <tbody>
    	<?php 

    		while($data = $stmt->fetch(PDO::FETCH_OBJ)){
			echo "<tr>";
			echo "<th align=center>". $data->id."</th>";
			echo "<th align=center>". $data->nama."</th>";
			echo "<th align=center>". $data->harga."</th>";
			echo "<th align=center>". $data->tipe."</th>";
			echo "<th align=center>". $data->status."</th>";
			echo "<th><img src='../img". $data->gambar."' class='data_img'></th>";
			echo "<th align=center> <a  id='".$data->id."' class='btn btn-success edit'><span class='glyphicon glyphicon-edit'>&nbspEdit</span></a>&nbsp<a  onclick=\"confirm_modal('delete.php?&id=".$data->id."')\" class='btn btn-danger delete' id='".$data->id."'><span class='glyphicon glyphicon-trash'>&nbspDelete</span></a>"."</th>";
			echo "</tr>";

		}

    	 ?>
          </tbody>
        </table>
        </div>
      </div>
</div>