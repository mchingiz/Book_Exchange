// ------------------------------
// DEPENDENCIES AND CONFIGURATION
// ------------------------------

const express = require('express');
const app = express();
const server = require('http').createServer(app);
const io = require('socket.io').listen(server);
const bodyParser = require('body-parser'); // to parse post requests
const request = require('request');
const port = 5122;

    // To parse request body
app.use( bodyParser.json() );
app.use(bodyParser.urlencoded({
  extended: true
}));

server.listen(port, function(){
    console.log("Listening to port %s",port)
});

// -------------
// FUNCTIONALITY
// -------------

// Handling client request
io.on('connection', function(socket){
    socket.user = socket.handshake.query.user;
    socket.join(socket.user);

    console.log('CONNECTED / user: %s',socket.user);

    socket.on('message',function(data){
        // console.log(data);

        console.log('MESSAGE / from: %s / to: %s / message: %s',socket.user, data.to, data.content);

        var dataToSend = {
            content: data.content,
            from: socket.user
        };

        console.log(dataToSend);

        io.to(data.to).emit('message',dataToSend)
    });
}); // end of io.connection()
