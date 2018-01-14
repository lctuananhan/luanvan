$(document).ready(function(){
  $(".district").change(function(){
    var id_district = $(".district").val();
    //alert(id_district);
    $.post("ajax/ajax_ward.php", {id_district: id_district}, function(data){
      $(".ward").html(data);
    })
  });
})
