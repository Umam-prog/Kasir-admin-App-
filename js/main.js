function menu(evt, menuname) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(menuname).style.display = "block";
    evt.currentTarget.className += " active";
}

$(function() {
    //----- OPEN
    $('[data-popup-open]').on('tap', function()  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
    });
 
    //----- CLOSE
    $('[data-popup-close]').on('tap', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
 
        e.preventDefault();
    });
});

$(function() { 
  // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
  // e.g. just plyr.setup(); and leave it at that if you have no need for events
  var instances = plyr.setup({
    // Output to console
    debug: true
  });

  // Get an element
  function get(selector) {
    return document.querySelector(selector);
  }

  // Custom event handler (just for demo)
  function on(element, type, callback) {
    if (!(element instanceof HTMLElement)) {
      element = get(element);
    }
    element.addEventListener(type, callback, false);
  }

  // Loop through each instance
  instances.forEach(function(instance) {
    // Play
    on('.js-play', 'click', function() { 
      instance.play();
    });
    
   // Stop
    on('.js-stop', 'click', function() { 
      instance.stop();
    });
    
  });
});


var arrItem = [];
var insertData = function(n){
   for(arr in arrItem){
      if(arrItem[arr].nama == n.nama){
          arrItem[arr].jumlah += 1;
          return 1;
        }
   }
   arrItem.push(n);
}

var createElement = function(nama, harga, gambar, jumlah){
    var img = $('<img>').attr({'class':'img_sum', 'src':gambar});
    var nama = $('<h3></h3>').text(nama);
    var harga = $('<h3></h3>').text("Rp. " + parseInt(harga.replace("Rp","")) * jumlah + ",-");
    var quantity = $('<h4></h4>').text("Jumlah");
    var quantity_angka = $('<h1></h1>').text(jumlah);
    var div_6 = $('<div></div>').attr('class', 'col-md-5').append(nama,harga);
    var div_3 = $('<div></div>').attr('class', 'col-md-4').append(img);
    var div_3_2 = $('<div></div>').attr('class', 'col-md-2').append(quantity,quantity_angka);
    var row = $('<div></div>').attr('class', 'row').append(div_3,div_6,div_3_2);
    var div = $('<div></div>').attr('class', 'div_sum').append(row);
    $(".summary").append(div);
}

var pesanan;
var total = 0;
$(function(){
    $('#pay').tap(function(){
        $('.data_add').each(function(){
            var item = {};
            $(this).children().each(function(){
                if($(this).attr('class') == 'data_img'){
                    item.gambar = $(this).attr('src');
                }else if($(this).attr('class') == 'data_nama') {
                    item.nama  = $(this).text();
                }else{
                     item.harga = $(this).text();
                }
                item.jumlah = 1;
            });
            insertData(item);
        });
        console.log(arrItem);
        for(var arr in arrItem){
          console.log(arrItem[arr].harga);
            createElement(arrItem[arr].nama, arrItem[arr].harga, arrItem[arr].gambar, arrItem[arr].jumlah);
              total += (parseInt(arrItem[arr].harga.replace("Rp","")) * parseInt(arrItem[arr].jumlah));
              // console.log(parseInt(arrItem[arr].harga).replace("Rp",""));
        }
       $(".summary_payment h2").text("Total Pembayaran Anda : Rp."+total+",-" );
    });

    $(".full_page").tap(function(){
      if($(this).attr("data-id")){
          if($(this).attr("data-id") == 1 )
            pesanan = "Makan Disini";
          else
            pesanan = "Bawa Pulang";
      }
      console.log(pesanan);
    });

});


$('.bayar_button').on('click', function(){

  $.ajax ({
    method : "POST",
    url    : "admin/data.php",
    data   : { item : arrItem,
               total : total
              },
    success : function(masuk){
        if(masuk == "1"){
           swal({
                title : "Terima Kasih Telah Berbelanja Di Toko Kami",
                text: "Total Belanja Rp." + total + " " + pesanan,
                icon: "success",
                buttons: true,
                html: true,
              })
              .then((ok) => {
                location.reload();
              });
            
         }
         else {
          console.log(masuk);
             swal("Maaf Pesanan Anda Tidak Dapat Diproses");
             location.reload();
         }

    }
  });
});


$(".exit").click(function(e){
  e.preventDefault();
  location.reload();
});


$(".clear_item").click(function(e){
  $(".summary").empty();
  total = 0;
  arrItem =[];
  $(".summary_payment h2").empty();
});



