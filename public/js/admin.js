$(function(){
    var i = 0;
    $(".plus").on("click",function(){
    
        ++i;
        var form =''+ `
            <tr class="plus-area">   
                <td>
                        <div class="sample">Please register...</div>
                </td>
                <td>
                    <input type="file" class="form-control" id="image" name="image[]" multipleaccept="image/png, image/jpeg, image/jpg" value="{{old('image')}}">
                </td>
                <td>
                    <button type="button" class="del" id="del" name="formdel" value="削除"><span="mozi">－</span></button>
                </td>
            </tr>
        `;
        $(form).appendTo($('.bannerbody'));
    });
    $(document).on("click",".del",function(){
        var inputCount = $('.plus-area').length;
        if (inputCount > 1){
            $(this).closest('.plus-area').remove();
        }
    });
});
$(function(){
    $(".delete").on("click",function(){
        var deleteConfirm = window.confirm('本当に削除してよろしいですか？');
        if(deleteConfirm){
            alert('削除しました。');
        }else{
            alert('削除をやめました。');
        }
    });
    
});

