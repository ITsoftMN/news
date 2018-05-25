$(document).ready(function(){

    $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
});
function commendAdd(item) {

    var form = $(item).parent().parent().find('form');
    var data = form.serialize();
    var url = form.attr('action');
    var post = form.attr('method');
    //console.log(data);
    $.ajax({
        type: post,
        url: url,
        data: data,
        dataType: 'json'
    }).done(function (data) {
        console.log(data.user_name);
        alert("Successfully commend add");

    });
}

function replayCommend(id) {
    alert(id);
    $('#commend-media'+id).append('<div class="media"> <div class="media-left"> <img src="/assets/img/av-1.jpg">' +
        '</div>' + '<div class="media-body"> <input type="text" id="replay_user" class="input" name="commend_replay_user" placeholder="Нэрээ бичнэ үү"> <textarea class="input" id="commend_replay_text" name="commend_replay_text" placeholder="Сэтгэгдэл бичнэ үү"></textarea></div>'+
        '<input type="button" onclick="replayCommendAdd(this , id)" class="input-btn btn-xs" value="илгээх">'+'</div>');
}

function replayCommendAdd(item,id) {
    alert(id);
    var username = $(item).find('#replay_user').val();
    var commendtext = $(item).find('#commend_replay_text').val();
    $.ajax({
        type: 'POST',
        url : '/front/commend/replay/'+id,
        data : {name : username,text : commendtext},
        dataType : 'json'
    }).done(function (data) {
        alert('success');
        console.log(data);
    });
}