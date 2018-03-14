var express = require('express');
var morgan = require('morgan');
var path = require('path');
var nodemailer = require('nodemailer');
var mongoose = require('mongoose');
var myParser = require("body-parser")
var routes = require('./routes/routes.js');
var app = express(); 
mongoose.connect('mongodb://aimcom:dbGr1!2!3!@ds121336.mlab.com:21336/aimdb');
var publicPath = path.resolve(__dirname, 'public');
app.use(express.static(publicPath)); 

app.use(morgan("dev")); 


app.set('view engine','ejs'); 
app.use(myParser.urlencoded({extended : true}));





var formSchema = mongoose.Schema({
    name: String,
    email: String,
    message: String,
    created: {type:Date, default: Date.now}
    });
    
    
    var message = mongoose.model("message",formSchema);

    app.post("/contactme", function(req, res) {
      var emCheck=/\S+@\S+\.\S+/;
      if(emCheck.test(req.body.email)){
 var newMessage= new message(req.body);
         newMessage.save(function(err,result){

          if(err){
            res.render('404',{myCss:'404.css',message:'Error Receiving Message. Please, check the information  you provided.'});
          }else{ 
            sendEmail();
          }
         });

      }else{
        console.log(req.body.email);
        res.render('404',{myCss:'404.css',message:'Error: Invalid Email. Press the back Key!'});
        
      }
        
        
        function sendEmail(){

          var transporter = nodemailer.createTransport({
           service:'gmail',
          auth: {
            user: 'aimuhirecom@gmail.com',
            pass: 'F1!f2!F3!'
          }
        });
        
         
         var mailOptions = {
           from: 'marsanline@gmail.com',
           to: 'marsanline@gmail.com',
           subject: 'Aimuhire.com Form Message',
           html:'<h3>'+req.body.name+'<h3>'+'<br/>'+'<p>'+req.body.message+'</p><br/>'+req.body.email 
         };
         
         transporter.sendMail(mailOptions, function(error, info){
           if (error) {
             console.log(error);
           } else {
             console.log('Email sent: ' + info.response);
             res.render('404',{myCss:'404.css',message:'Message Sent! Thank You.'});
           }
         });


        } 
       
        });



    app.use('/', routes);
app.listen(50000, function () {
    console.log('app started on 50000');
});