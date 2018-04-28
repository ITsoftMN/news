

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
