// var user_id = findGetParameter("user_id");
// var active_chat_id = findGetParameter("to");
var user_id = $("meta[name=user_id]").attr("value");
var active_chat_id = $("meta[name=recieving_user_id]").attr("value");

var incomingMessageTemplate = $(".incoming_msg.template")
var outgoingMessageTemplate = $(".outgoing_msg.template")

if(typeof user_id === 'undefined' || typeof active_chat_id === 'undefined'){
    throw new Error("'user_id' ve ya 'active_chat_id' deyiseni movcud deyil. Socket connectionin qurulmasi ucun zehmet olmasa, deyisenleri set edin");
}

const socket = io('http://localhost:5122', {
    query: 'user=' + user_id,
    reconnection: true,
    reconnectionDelay: 1*1000,
    reconnectionAttempts: 9999,
    reconnectionDelayMax: 3*1000
});

socket.on('message', function(data){
    console.log(data)

    var incomingMessage = $(incomingMessageTemplate).clone().show()
    $(incomingMessage).find("p").text(data.content).removeClass(".template");
    $(incomingMessage).find(".time_date").text(generateTimestamp());
    $(incomingMessage).appendTo(".msg_history")
})

// UTILITY FUNCTIONS

function findGetParameter(parameterName) {
    var result = null,
        tmp = [];
    location.search
        .substr(1)
        .split("&")
        .forEach(function (item) {
          tmp = item.split("=");
          if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
        });
    return result;
}

function sendMessage(){
    var message = $(".write_msg").val();
    
    if(message != null && message != ''){
        $(".write_msg").val('');

        var data = {
            to: active_chat_id,
            content: message
        };

        console.log(data)

        var outgoingMessage = $(outgoingMessageTemplate).clone().show()
        $(outgoingMessage).find("p").text(message).removeClass(".template");
        $(outgoingMessage).find(".time_date").text(generateTimestamp());
        $(outgoingMessage).appendTo(".msg_history")

        socket.emit('message',data)
    }
}

function sendIfEnter(){
    if(event.key === 'Enter') {
        sendMessage()    
    }
}

function generateTimestamp(){
    var months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

    var now = new Date();
    
    return now.getHours()+":"+now.getMinutes()+" | "+now.getDate()+" "+months[now.getMonth()];
}