function showLoading() {
    $('.spinner-border').css({'display': 'inline-block'});
}

function hideLoading() {
    $('.spinner-border').css({'display': 'none'});
}

var createLastMessageElement = function(message) {
    console.log("message : " + message);
    var textClass = (message == 'success') ? "text-success" : "text-danger";
    return '<span class="last-message ' + textClass + '">' + message + '</span>';
}

var removeLastMessageElement = function() {
    var lastMessage = $('body').find('.last-message') ;
    if (lastMessage.length > 0) {
        lastMessage.remove();
    }
}