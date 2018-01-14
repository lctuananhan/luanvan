$(document).ready(function() {
  if(window.File && window.FileList && window.FileReader) {
    $("#my-file-selector").on("change",function(e) {
      var files = e.target.files ,
      filesLength = files.length ;
      for (var i = 0; i < filesLength ; i++) {
      var f = files[i]
      var fileReader = new FileReader();
      fileReader.onload = (function(e) {
        var file = e.target;
        $("<img></img>",{
          class : "imageThumb",
          src : e.target.result,
          title : file.name
        }).insertAfter("#imagePreview");
      });
      fileReader.readAsDataURL(f);
    }
  });
  } else { alert("Your browser doesn't support to File API") }
});
