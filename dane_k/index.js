
function send()
{
    var position = JSON.stringify();
    //author = prompt("Please type your name");

    $.ajax({
        type: 'POST',
        url: 'http://localhost:81/phpscript/connect.php',
        //NAme contains value
        data: { NIP:NIP, REGON:REGON, NAZWA:NAZWA,PLATNIK:PLATNIK, ULICA:ULICA ,N_DOMU:N_DOMU,N_MIESZKANIA:N_MIESZKANIA},
        success: function( data ) {
        console.log( data );

        //setTimeout(10000);
        }
    });
}



/*
 var express = require('express');
var router = express.Router();
var pool = require('./dane');
var mysql = require('mysql');

var pool = mysql.createPool({
host:'sql11.freesqldatabase.com', port:'3306',
user:'sql11486207', password:'llLSMBYgR9',
database:'sql11486207', connectionLimit:'111',
multipleStatements:'true'

})




router.get('/',function(req,res,next){
    res.render('index',{title:'Express'});  
});

router.get('/',function(req,res){
    pool.query('select *from Delegacje',function(error,result){
        if(error){
            res.send(error)
            console.log(error)
        }
        else{
            res.send(result)
            console.log(result)
        }
    })
})
  */