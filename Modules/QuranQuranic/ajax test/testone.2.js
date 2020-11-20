// JavaScript Document
//var baseUrl = "http://www.soundjay.com/button/";
var audio = ["sound-01a.mp3", "sound-02.mp3"];

$('button.ci').click(function() {
    var i = $(this).attr('id').substring(1);
    new Audio(baseUrl + audio[i-1]).play();
});