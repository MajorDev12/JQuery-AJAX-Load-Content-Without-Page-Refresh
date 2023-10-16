$(document).ready(function (){
    // set trigger and container variables
    var trigger = $('nav ul li a'),
    container = $(".content");

    // change on click
    trigger.on('click', function(){
        target = $(this).data('target');

        //load target page into container
        container.load(target + '.php');

        //stop the link behaviour
        return false;
    })
})