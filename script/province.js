$(document).ready(function(){
  $(".province").change(function(){
    var id_province = $(".province").val();
    //alert(id);
    $.post("ajax/ajax_province.php", {id_province: id_province}, function(data){
      $(".district").html(data);
    })
  });
})
