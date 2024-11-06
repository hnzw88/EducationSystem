// $(function() {
 
//     $('button#add').click(function(){
   
//     var tr_form = '' +
//     '<tr>' +
//       '<td><input type="text" name="text[]"></td>' +
//       '<td><label><input type="file" name="img[]" accept="image/*" /></label></td>' +
//     '</tr>';
   
//     $(tr_form).appendTo($('table > tbody'));
   
   
//   });
   
   
//   });


  let formCount = 1;

    document.getElementById('add-form').addEventListener('click', function() {
        const formContainer = document.getElementById('form-container');
        const newForm = document.createElement('div');
        newForm.classList.add('form-group');
        newForm.innerHTML = `
            <input type="date" name="from_date_{{ $delivery_time->id }}" value="{{ date('Y-m-d', strtotime($delivery_time->delivery_from)) }}">
            <input type="time" name="from_time_{{ $delivery_time->id }}" value="{{ date('H:i', strtotime($delivery_time->delivery_from)) }}">
            <span>~</span>
            <input type="date" name="to_date_{{ $delivery_time->id }}" value="{{ date('Y-m-d',strtotime($delivery_time->delivery_to)) }}" >
            <input type="time" name="to_time_{{ $delivery_time->id }}" value="{{ date('H:i', strtotime($delivery_time->delivery_to)) }}">
        `;
        formContainer.appendChild(newForm);
        formCount++;
    });