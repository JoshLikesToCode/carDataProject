/* Make sure phpMyAdmin is NOT in strict mode, directions in write up on how to do this*/

const express = require('express');
const session = require('express-session');
const mysql = require('mysql');
const moment = require('moment');
let app = express();


var pool = mysql.createPool( {
        host: 'localhost',
        user: 'root',
        password: 'root',
        database: 'cars',
        connectionLimit: 10,
        multipleStatements : true
});

sessionID = 125;
usersname = new Array();


app.get('/register', function(req, res) {
	var momentDate = new moment('2020-05-20T20:13:00.000Z');
	var dateTime =momentDate.format("YYYY-MM-DD HH:mm:ss");
	let session = {sessionID: sessionID, username: req.query.name, date:dateTime, width: 14, active: 1};
	let sql = 'INSERT INTO sessions SET ?';
	let query = pool.query(sql, session, (err, result) => {
		if (err) throw err;
		console.log(result);
		res.send('Session for '+sessionID+' created.')
	});

	pool.query("INSERT INTO cars (`name`, `width`, `time`) VALUES (?,?,?)", [req.query.name, req.query.width, req.query.time]);
});


app.get('/wheels', function (req, res) {
       	pool.query("INSERT INTO cars (`sessionID`, `name`, `width`, `time`, `left1`, `right1`) SELECT '"+sessionID+"', name, width, '"+req.query.time+"', '"+req.query.left+"', '"+req.query.right+"' FROM cars ORDER BY uniqueID DESC LIMIT 1");
	res.send("okay");
});



app.get('/echo', function (req, res) {
	pool.query("INSERT INTO cars (`sessionID`, `name`, `width`, `time`, `left1`, `right1`, `dist`) SELECT sessionID, name, width, '"+req.query.time+"', left1, right1, '"+req.query.dist+"' FROM cars ORDER BY uniqueID DESC LIMIT 1");
	res.send("okay");
});



app.get('/line', function (req, res) {
	pool.query("INSERT INTO cars (`sessionID`, `name`, `width`, `time`, `left1`, `right1`, `dist`, `l1`, `l2`, `l3`) SELECT sessionID, name, width, '"+req.query.time+"', left1, right1, dist, '"+req.query.l1+"', '"+req.query.l2+"', '"+req.query.l3+"' FROM cars ORDER BY uniqueID DESC LIMIT 1");	
	res.send("okay");
});

app.get('/other', function(req, res) {
	pool.query("INSERT INTO cars (`sessionID`, `name`, `width`, `left1`, `right1`, `dist`, `l1`, `l2`, `l3`, `ir`, `time`) SELECT sessionID, name, width, left1, right1, dist, l1, l2, l3, '"+req.query.ir+"', '"+req.query.time+"' FROM cars ORDER BY uniqueID DESC LIMIT 1");

	res.send("okay");
});

app.get('/end', (req, res) => {
	var user = 'bob';
	var momentDate = new moment('2020-05-21T20:13:00.300Z');
        var dateTime =momentDate.format("YYYY-MM-DD HH:mm:ss");

	let session = {username: user, date: dateTime, width: 14, active: 0};
        let sql = 'UPDATE sessions SET ?';
        let query = pool.query(sql, session, (err, result) => {
                if (err) throw err;
                console.log(result);
                res.send('Session for '+sessionID+' terminated.')
		sessionID++;
        });

});



app.listen(3000, function(req, res) {
        console.log('Express JS ready for port 3000');
});

/*
app.get('/end', (req, res) => {
	process.kill;
});*/

