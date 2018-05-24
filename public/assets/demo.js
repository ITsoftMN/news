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
    $('#commend-media'+id).append('<div class="media"> <div class="media-left"> <img src="/assets/img/av-1.jpg">' +
        '</div>' +
        '</div>');
}