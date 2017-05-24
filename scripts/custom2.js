$(document).ready(function(){

  $( ".img-responsive" ).mouseover(function() {
  

    var nameEdit = this.src;
    nameEdit = nameEdit.substring(0, nameEdit.length - 5);
    this.src = nameEdit + "2.png";  

  });
  $( ".img-responsive" ).mouseout(function() {

    var nameEdit = this.src;
    nameEdit = nameEdit.substring(0, nameEdit.length - 5);
    this.src = nameEdit + "1.png";

  });

}); 