
// make an array of visually distinct colors
// colours are taken from https://stackoverflow.com/questions/5915096/get-random-item-from-javascript-array
var colours = ['#e6194b','#3cb44b', '#ffe119', '#0082c8','#f58231','#00FFFF','#000080','#F08080','#1cebe2','#58d68d','#911eb4','#46f0f0','#f032e6','#d2f53c','#fabebe','#008080','#e6beff','#aa6e28','#fffac8','#d7dbdd'];
// assign a random colour to each of the divs with notes.
$(function() {
    $(".notes").each(function() {

        $(this).css("background-color", colours[Math.floor(Math.random()*colours.length)]);
    });
});
