//
// $('#category-submit').click(function () {
//     var form = $('#category-form');
//     var data = form.serialize();
//     var url = form.attr('action');
//     var post = form.attr('method');
//     $.ajax({
//         type : post,
//         url : url,
//         data : data,
//         dataType : 'json'
//     }).done(function(data){
//         alert(data.name.name+' Added');
//         $('#category-list').append(data.html);
//     }).always(function(){
//     });
// });


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




//Ayush suga
// $(document).ready(function() {
//
//     var iCnt = 0;
//     // CREATE A "DIV" ELEMENT AND DESIGN IT USING jQuery ".css()" CLASS.
//     var container =  $('#formid');
//     $('#btAdd').click(function() {
//         if (iCnt < 1) {
//
//             iCnt = iCnt + 1;
//
//             // ADD TEXTBOX.
//             $(container).append('<input type=text name="name" class="input form-control" id=tb' + iCnt + ' ' +
//                 'value="Цэсний нэр ' + iCnt + '" />');
//
//             // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
//             if (iCnt == 1) {
//                 var divSubmit = $(document.createElement('div'));
//                 $(divSubmit).append('<input type=button class="bt"' +
//                     'onclick="GetTextValue()"' +
//                     'id=btSubmit value=Submit />');
//
//
//             }
//
//             // ADD BOTH THE DIV ELEMENTS TO THE "main" CONTAINER.
//             $('#main').after(container, divSubmit);
//         }
//         // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
//         // (20 IS THE LIMIT WE HAVE SET)
//         else {
//             $(container).append('<label>Reached the limit</label>');
//             $('#btAdd').attr('class', 'bt-disable');
//             $('#btAdd').attr('disabled', 'disabled');
//         }
//
//     });
//
//     // REMOVE ONE ELEMENT PER CLICK.
//     $('#btRemove').click(function() {
//         if (iCnt != 0) { $('#tb' + iCnt).remove(); iCnt = iCnt - 1; }
//
//         if (iCnt == 0) {
//             $(container)
//                 .empty()
//                 .remove();
//
//             $('#btSubmit').remove();
//             $('#btAdd')
//                 .removeAttr('disabled')
//                 .attr('class', 'bt');
//         }
//     });
//
//     // REMOVE ALL THE ELEMENTS IN THE CONTAINER.
//     $('#btRemoveAll').click(function() {
//         $(container)
//             .empty()
//             .remove();
//
//         $('#btSubmit').remove();
//         iCnt = 0;
//
//         $('#btAdd')
//             .removeAttr('disabled')
//             .attr('class', 'bt');
//     });
// });
//
//
// function GetTextValue() {
//     var form = $('#formid');
//     var data = form.serialize();
//     var url = form.attr('action');
//     var post = form.attr('method');
//
//     $.ajax({
//         type : post,
//         url : url,
//         data : data,
//         dataType : 'json'
//     }).done(function(data){
//         alert(data.name.name+' Added');
//         $('#category-list').append(data.html);
//     }).always(function(){
//     });
// }