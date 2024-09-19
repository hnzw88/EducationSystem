$(function() {
 
    $('button#add').click(function(){
   
    var tr_form = '' +
    '<tr>' +
      '<td><input type="text" name="text[]"></td>' +
      '<td><label><input type="file" name="img[]" accept="image/*" /></label></td>' +
    '</tr>';
   
    $(tr_form).appendTo($('table > tbody'));
   
   
  });
   
   
  });