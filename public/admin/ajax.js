
function createSubCat(item){

    var form =  $(item).parent().parent().find('form');
    var data = form.serialize();
    var url = form.attr('action');
    var post = form.attr('method');

    $.ajax({
        type: post,
        url : url,
        data: data,
        dataType : 'json'
    }).done(function (data) {
        console.log(data.cat_id);
        console.log('#modal-info'+data.cat_id);
        $('#subcat-div-for'+data.cat_id).append('<p>'+ data.name,data.links +'</p>');
        $('#subcat'+data.cat_id).val('');
    });
}

function createCatEdit(item) {
    var form =  $(item).parent().parent().find('form');
    var data = form.serialize();
    var url = form.attr('action');
    var post = form.attr('method');

    $.ajax({
        type: post,
        url : url,
        data: data,
        dataType : 'json'
    }).done(function (data) {
        console.log(data.name);
        alert("Successfully changed category");
        window.setTimeout(function(){location.reload()},1000);
    });
}

//news add slider

function newsSlider(item){

    $.ajax({
        type: 'GET',
        url : 'news/slider/add/'+item,
    }).done(function (data) {
        //alert('success');
        //console.log(data);
        if(data == 0){
            var btn = $('#news-slider-add'+item).removeAttr('class');
            btn.addClass('btn btn-primary btn-xs');
            btn.text('slider +');
            alert('this news successfully slider remove !!!');
        }
        else {
            var btn = $('#news-slider-add'+item).removeAttr('class');
            btn.addClass('btn btn-danger btn-xs');
            btn.text('slider -');
            alert('this news successfully slider added');
        }

    });
}

function newsFeatured(item){

    $.ajax({
        type: 'GET',
        url : 'news/featured/add/'+item
    }).done(function (data) {
        //alert('success');
        //console.log(data);
        if(data == 0){
            var btn = $('#news-featured-add'+item).removeAttr('class');
            btn.addClass('btn btn-primary btn-xs');
            btn.text('featured +');
            alert('this news successfully featured remove !!!');
        }
        else {
            var btn = $('#news-featured-add'+item).removeAttr('class');
            btn.addClass('btn btn-danger btn-xs');
            btn.text('featured -');
            alert('this news successfully featured added');
        }

    });
}

//
$('#Addmenu').click(function () {
    $('#form-cat').css('display','block');
    $('#Addmenu').css('display','none');
});
function AddMenuItem() {
    var form = $('#form-cat');
    var data = form.serialize();
    var url = form.attr('action');
    var post = form.attr('method');
    $.ajax({
        type : post,
        url : url,
        data : data,
        dataType : 'json'
    }).done(function(data){
        var div = $('#empty');
        $('#empty').after('<div class="item-cat">' +
            '<div data-id="'+data.name.id+'" class="navbar-cat">'
            +'<span class="badge bg-grey">'+data.name.name+'</span>'
            +'&nbsp;<span class="badge bg-green"> Links +'+'"'+data.name.links+'"'+'</span> </div>' +
            '<button class="btn btn-primary btn-xs" onclick="addSub(this)"><i class="fa fa-plus"></i></button>' +
            '</div>');
    }).always(function(){
    });

    $('#form-cat').css('display','none');
    $('#Addmenu').css('display','block');
    alert('added');
}
function addSub(e) {
    var item = $(e).prev();
    $('.active').find('#active-input').remove();
    $('.active').find('p').remove();
    var div = item.parent().addClass('active');
    $.ajax({
        type : 'get',
        url : '/show-cat-sub/'+ item.attr('data-id')
    }).done(function(data){
        var res=$.parseJSON(data);
        jQuery.each(res, function(index, value){
            div.append('<p>'+value.name+'</p>');
        });
        div.append('<input id="active-input"  type="text">');
    }).always(function(){
    });
    console.log(item.attr('data-id'));
}
$('.navbar-cat').click(function () {
    alert('assdasd');
});



$(document).ready(function () {
    console.log('sdad');
    var currentdate = new Date();
    var d = "Now: " + currentdate.getDate() + "/"
        + (currentdate.getMonth()+1)  + "/"
        + currentdate.getFullYear() + " - "
        + currentdate.getHours() + ":"
        + currentdate.getMinutes() + ":"
        + currentdate.getSeconds();
    $('#now-date').html(d);
    console.log(d);
});
