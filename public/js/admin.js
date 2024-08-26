$(function(){
    var i = 0;
    $(".plus").on("click",function(e){
        e.preventDefault()
    
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


function deleteAjax(){ 
$(function(){
    $(".delete").on("click",function(e){
        e.preventDefault()
        
        $.ajaxSetup({
            headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        })

        var deleteConfirm = window.confirm('本当に削除してよろしいですか？');
        
        if(deleteConfirm == true){
            var clickEle = $(this)
            var bannerID = clickEle.attr('data-banner_id');
            $.ajax({

                url:"destroy/"+bannerID,
                type:"POST",
                data:{'id':bannerID},
                dataType:"text"

            })
            .done(function(){
                clickEle.parents('tr').remove();
                alert('削除しました。');
            })
            .fail(function(){
                alert('削除に失敗しました。');
            });
        }else{
            window.alert('削除をやめました。')
            return false;
        };
    });
});
};
deleteAjax();

