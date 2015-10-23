function hello() {
    console.info("hello world!");
};

function bye() {
    console.info("Bye world!");
};

$(function(){

    // jQuery methods go here...
    $('#sayhello').click(function() {
        //console.debug("Prova");
        //alert("Hola");
        $('#helloworld').show();
    });
});


