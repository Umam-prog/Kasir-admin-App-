<?php
include "/admin/koneksi.php"; 
include "/admin/function.php"; 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Project IMK</title>
    <link rel="stylesheet" type="text/css" href="css/Bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/plyr.css">
    <link rel='stylesheet prefetch' type="text/css" href="css/ionicons.min.css">
    <!-- <script src="js/jquery-3.0.0.js"></script> -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.ui.touch-punch.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="library/plyr/plyr.js"></script>
    <script>

      var sementara;
       $(function () {
            $(".data_add").draggable({
                  revert: "invalid",
                  cursor: "move",
                   containment : ".popup-inner",             
            });

            $(".data_image").draggable({
                  revert: "invalid",
                  helper: "clone", // create "copy" with original properties, but not a true clone
                  cursor: "move",
                  containment : ".active_slide",
                  drag : function(event, ui){
                                        }
               
            });

            $("disable").draggable("disable");

            $("#basket").droppable({
                 accept: ".data_image",
                 drop: function (event, ui) {
                   
                     var $item = ui.draggable.clone();
                     $item.draggable({
                          revert: true,
                          snap:true,
                      });
                      var nilai = $item.removeClass("data_image").addClass("data_add");  $("#source").append(nilai);
                      $("#pay").removeClass("disable");
                      sementara++;
                      }
            });

             $("#trash").droppable({
                 accept: ".data_add",
                 drop: function (event, ui) {
                                      swal({
                      title: "Are you sure?",
                      text: "Once deleted, you will not be able to recover this imaginary file!",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                         ui.draggable.removeClass("data_add").addClass("trash"); 
                        $("#src_trash").append(ui.draggable);
                        swal("Poof! Your imaginary file has been deleted!", {
                          icon: "success",
                        });
                        sementara--;
                      } else {
                        swal("Your imaginary file is safe!");
                      }
                    });
                }
            });
          
        });
    </script>
  </head>
  <body>

<div class='easytransitions'>
    <div class='easytransitions_transition'>
        <div class='div easytransitions_transition__part-1 none'></div>
        <div class='div easytransitions_transition__part-2 none'></div>
        <div class='div easytransitions_transition__part-3 none'></div>
        <div class='div easytransitions_transition__part-4 none'></div>
        <div class='div easytransitions_transition__part-5 none'></div>
        <div class='div easytransitions_transition__part-6 none'></div>
        <div class='div easytransitions_transition__part-7 none'></div>
        <div class='div easytransitions_transition__part-8 none'></div>
    </div>
      <section class='active_slide' data-transition='none' >
          <div class="easytransitions_navigation__right full_page"></div>
          <div class="col-md-6 col-sm-12 col-lg-6" style="height : 100vh;">
              <h3 class="start_title">Selera</h3>
              <h3 class="start_title">Uni</h3>
              <img src="img/bulet.png" class="img_cover" style="width : 100%;margin-top : 100px;opacity:.7">
          </div>
          <div class="col-md-6 col-sm-12 col-lg-6" style="height : 100vh; "></div>
      </section>
      <!-- <section data-transition='split_diagonal'>
        <div class="easytransitions_navigation__right full_page"></div>
        <div class='center'>
          <h1>You see that?</h1>
          <span>%section{'data-transition' => 'split_diagonal'}</span>
        </div>
      </section> -->
      <section data-transition='split_diagonal'>
        <div class='col-md-2 col-sm-2 col-lg-2  menu'>
            <ul>
              <li><a href="#" class="tablinks active" onclick="menu(event, 'Appetizer')"><img src="img/Appetizer.png" class="menu_icon"></a></li>
              <li><a href="#" class="tablinks" onclick="menu(event, 'Food')"><img src="img/Food.png" class="menu_icon"></a></li>
              <li><a href="#" class="tablinks" onclick="menu(event, 'Drink')"><img src="img/Drink.png" class="menu_icon"></a></li>
              <li><a href="#" class="tablinks" onclick="menu(event, 'Dessert')"><img src="img/Dessert.png" class="menu_icon"></a></li>
              </ul>
            <ul>
              <li><a href="#"><img src="img/info.png" class="menu_icon js-play" data-popup-open="popup-2" > </a></li>
              <li><a class="easytransitions_navigation__left" style="margin-left : 0;"><img src="img/Back.png" class="menu_icon"></a></li>
            </ul>
        </div>
        <div class="col-md-10 col-sm-10 col-lg-10 isi_menu">
            <div id="Appetizer" class="tabcontent "  style="display:block;">
              <h3 style="text-align: center"> Appetizer</h3>
                  <?php show($conn, "appetizer");?>
            </div>
            <div id="Food" class="tabcontent"  >  <h3 style="text-align: center"> Food</h3><?php show($conn, "food");?></div>
            <div id="Drink" class="tabcontent"  >  <h3 style="text-align: center"> Drink</h3><?php show($conn, "drink");?></div>
            <div id="Dessert" class="tabcontent"  > <h3 style="text-align: center"> Desert</h3> <?php show($conn, "dessert");?></div>
        </div>
          <div class="navigasi" >
          <div class="icon" id="basket" data-popup-open="popup-1">
            <img src="img/Buy.png">
          </div>
          <div class="icon  easytransitions_navigation__right" id="pay"  >
            <img src="img/Payment.png"  >
          </div>
        </div>
        <div id="src_trash" style="visibility:hidden;"></div>
      </section>
      <section data-transition='split_diagonal'>
            <div class="row pilih">
              <div class="col-md-6" style="position : relative;" >
                <div class="easytransitions_navigation__right full_page" data-id="1">
                </div>
              </div>
              <div class="col-md-6"  style="position : relative;">
                <div class="easytransitions_navigation__right full_page" data-id="2">
              </div>
            </div>
             <img src="img/back.png" class="easytransitions_navigation__left clear_item">
              <img src="img/exit.png" class="exit" style="left :70px;">
            </div>
      </section>
      <section  data-transition='split_diagonal'>
          <div class="row pilih">
              <div class="col-md-6 bg_pay"></div>
              <div class="col-md-6 sum_pay">
                <div class="summary"></div>
                <div class="summary_payment">
                  <h2>  </h2>
                  <button class="bayar_button"> Bayar </button>
                </div>
              </div>
               <img src="img/back2.png" class="easytransitions_navigation__left ">
              <img src="img/exit2.png" class="exit" style="left :70px;">
          </div>
      </section>
  <div class="popup" data-popup="popup-1">
    <div class="popup-inner">
    <p><a data-popup-close="popup-1" href="#">Close</a></p>
    <a class="popup-close " data-popup-close="popup-1" href="#">x</a>
    <div class="navigasi" style="z-index:100">
      <div class="icon" id="trash" >
      <img src="img/Trash.png"  >
      </div>
    </div>
    <div  id="source"></div>
    </div>
  </div>
  <div class="popup" data-popup="popup-2">
    <div class="popup-inner" style="padding : 0;" >
      <p style="margin:0"><a data-popup-close="popup-2 " href="#" style="display:none">Close</a></p>
      <a class="popup-close js-stop" data-popup-close="popup-2" href="#">x</a>
   <!--    <video poster="img/bg2.jpg"  width="320" height="240" controls crossorigin > -->
        <!-- Video files -->
       <div data-type="youtube" data-video-id="1u_NviMSMF8"></div>
      <!-- </video> -->
    </div>
  </div>
</div>
<script >
</script>
<script src="js/transition.js"></script>
<script src="js/main.js"></script>
</body>
</html>
