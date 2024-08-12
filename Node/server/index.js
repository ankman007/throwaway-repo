const http = require("http");
const fs = require("fs");
const url = require("url");

function handlerFunction(res, req) {
    if (req.url == '/favicon.ico') return;
    
    const current_url = url.parse(req.url, true);
    const log = `${Date.now()} | ${req.url} | ${req.method} : New Req Received\n`;

    fs.appendFile('log.txt', log, (err, data) => {
        console.log('URL: ', current_url);

        if (err){
            console.log("Error: ", err);
            return res.end("Internal Server Error.");
        }

        switch(current_url.pathname){
            case "/":
                res.end("Homepage");
                break;
            case "/about":
                const name = current_url.query.name;
                const age = current_url.query.age;
                res.end(`I am ${name} and my age is ${age}`);
                break;
            case "/signup":
                if (req.method == GET) return res.end("This is sign up form");
                else if (req.method == POST){
                    // Form validation & DB Query
                    return res.end("Sucess")
                } 
            default:
                res.end("404 not found");
        }
    });
}
const myServer = http.createServer(handlerFunction);

myServer.listen(5000, () => console.log("Server started"));