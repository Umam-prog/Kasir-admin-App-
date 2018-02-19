<?php
    
    include "koneksi.php";
    $id =$_GET['id'];
    $stmt = $conn->query("SELECT * FROM menu where id='".$id."'");
	   while($data = $stmt->fetch(PDO::FETCH_OBJ)){
?>
<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Menu</h4>
        </div>

        <div class="modal-body">
            <center>
        	   <form action="menu_edit_proses.php" method="post" enctype="multipart/form-data">
                 <input type="text" name="id" class="input" placeholder="Nama" value="<?php echo $data->id;?>" hidden>
                 <input type="text" name="gambar_nama" class="input" placeholder="Nama" value="<?php echo $data->gambar;?>" hidden>
                      <input type="text" name="nama" class="input" placeholder="Nama" value="<?php echo $data->nama;?>">
                      <input type="text" name="harga" class="input" placeholder="harga" value="<?php echo $data->harga;?>">
                      <select class="input" name="tipe" >
                        <?php switch($data->tipe){
                            case "appetizer" :
                         ?>
                        <option value="appetizer" selected>Appetizer</option>
                        <option value="food">Food</option>
                        <option value="drink">Drink</option>
                        <option value="dessert">Dessert</option>
                        <?php 
                             break;;
                          case "food" :
                         ?>
                         <option value="appetizer" >Appetizer</option>
                        <option value="food" selected>Food</option>
                        <option value="drink">Drink</option>
                        <option value="dessert">Dessert</option>
                         <?php 
                             break;
                          case "drink" :
                         ?>
                         <option value="appetizer" >Appetizer</option>
                        <option value="food">Food</option>
                        <option value="drink" selected>Drink</option>
                        <option value="dessert">Dessert</option>
                         <?php 
                             break;
                          case "desert" :
                         ?>
                          <option value="appetizer" >Appetizer</option>
                        <option value="food">Food</option>
                        <option value="drink">Drink</option>
                        <option value="dessert" selected>Dessert</option>
                           <?php } ?>
                      '</select>
                     
                    <select class="input" name="status">
                         <?php switch($data->status) {
                            case "active" :
                         ?>
                        <option value="active" selected>Active</option>
                        <option value="disable">Disable</option>
                          <?php 
                             break;
                          case "disable" :
                         ?>
                          <option value="active" >Active</option>
                        <option value="disable" selected>Disable</option>
                            <?php } ?>
                      </select>

                      <input  type="file"  name="gambar" multiple accept="image/*" onchange="preview_image_logo()" id="preview_image"  >

                        <div id="image_preview" class="img_preview_paket"><img></div>
                     <input type="submit" class="btn btn-success" name="submit" style="margin-top:10px;width:60%;height:60px;">
                    </form>
             <?php } ?>

            </div>
        </center>
        </div>
    </div>
