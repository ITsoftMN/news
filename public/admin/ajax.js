
$('#category-submit').click(function () {
    var form = $('#category-form');
    var data = form.serialize();
    var url = form.attr('action');
    var post = form.attr('method');
    $.ajax({
        type : post,
        url : url,
        data : data,
        dataType : 'json'
    }).done(function(data){
        alert(data.name.name+' Added');
        $('#category-list').append(data.html);
    }).always(function(){
    });
});


$('#subcat-submit').click(function () {
   $.ajax({
       type: 'POST',
       url : '/sub/cat/post',
       data: {
           '_token':$('input[name=_token]').val(),
           'name':$('input[name=name]').val(),
           'cat_id':$('input[name=cat_id]').val()
        },
        success:function (data) {
            alert(data.success);
        },
   });
});