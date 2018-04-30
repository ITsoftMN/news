
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
    var form = $('#sub-category-form');
    var data = form.serialize();
    var url = form.attr('action');
    var post = form.attr('method');
   $.ajax({
       type: post,
       url : url,
       data: data,
       dataType : 'json'
   }).done(function (data) {
       alert(data.name);
       $('input').val('');
   });
});

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
        $('#empty').after('<div class="item-cat col-md-2">' +
            '<div data-id="'+data.name.id+'" class="navbar-cat">'
            +'<span class="badge bg-grey">'+data.name.name+'</span></div>' +
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








//Ayush suga
$(document).ready(function() {

    var iCnt = 0;
    // CREATE A "DIV" ELEMENT AND DESIGN IT USING jQuery ".css()" CLASS.
    var container =  $('#formid');
    $('#btAdd').click(function() {
        if (iCnt < 1) {

            iCnt = iCnt + 1;

            // ADD TEXTBOX.
            $(container).append('<input type=text name="name" class="input form-control" id=tb' + iCnt + ' ' +
                'value="Цэсний нэр ' + iCnt + '" />');

            // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
            if (iCnt == 1) {
                var divSubmit = $(document.createElement('div'));
                $(divSubmit).append('<input type=button class="bt"' +
                    'onclick="GetTextValue()"' +
                    'id=btSubmit value=Submit />');


            }

            // ADD BOTH THE DIV ELEMENTS TO THE "main" CONTAINER.
            $('#main').after(container, divSubmit);
        }
        // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
        // (20 IS THE LIMIT WE HAVE SET)
        else {
            $(container).append('<label>Reached the limit</label>');
            $('#btAdd').attr('class', 'bt-disable');
            $('#btAdd').attr('disabled', 'disabled');
        }

    });

    // REMOVE ONE ELEMENT PER CLICK.
    $('#btRemove').click(function() {
        if (iCnt != 0) { $('#tb' + iCnt).remove(); iCnt = iCnt - 1; }

        if (iCnt == 0) {
            $(container)
                .empty()
                .remove();

            $('#btSubmit').remove();
            $('#btAdd')
                .removeAttr('disabled')
                .attr('class', 'bt');
        }
    });

    // REMOVE ALL THE ELEMENTS IN THE CONTAINER.
    $('#btRemoveAll').click(function() {
        $(container)
            .empty()
            .remove();

        $('#btSubmit').remove();
        iCnt = 0;

        $('#btAdd')
            .removeAttr('disabled')
            .attr('class', 'bt');
    });
});


function GetTextValue() {
    var form = $('#formid');
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
}