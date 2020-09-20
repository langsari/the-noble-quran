var unirest = require("unirest");

var req = unirest("POST", "https://translator7.p.rapidapi.comhttps//kustomspk.online/rapid_api.php");

req.query({
	"lang": "es"
});

req.headers({
	"x-rapidapi-host": "translator7.p.rapidapi.com",
	"x-rapidapi-key": "4ac296dd5amsh7a85d4879bc044ap1bf265jsnd4a0e82110b9",
	"text": "hello",
	"content-type": "application/x-www-form-urlencoded",
	"useQueryString": true
});

req.form({
	"translated": "hi"
});

req.end(function (res) {
	if (res.error) throw new Error(res.error);

	console.log(res.body);
});