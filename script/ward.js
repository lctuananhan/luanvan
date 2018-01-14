$(document).ready(function(){
      $(".ward").change(function(){
        var id_ward = $(".ward").val();
        //alert(id);
        $.post("ajax/ajax_street.php", {id_ward: id_ward}, function(data){
          $(".street").html(data);
        })
      });
})
