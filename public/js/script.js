/**
 * Created by Cyrille_able on 29/03/2017.
 */
$(function () {

    $('#button_ali').hide();
    $('#button_app').hide();
    $('#button_presta').hide();
    $('#button_renov').hide();

    $('#prestation').hover(function (){
        $('#button_presta').toggle();
        $(this).animate({
            opacity: 0.25,
        },1000, function() {
            $(this).animate({
                opacity: 1,
            });
        });
    });

    $('#renovation').hover(function (){
        $('#button_renov').toggle();
        $(this).animate({
            opacity: 0.25,
        },1000, function() {
            $(this).animate({
                opacity: 1,
            });
        });
    });

    $('#alimentation').hover(function (){
        $('#button_ali').toggle();
        $(this).animate({
            opacity: 0.25,
        },1000, function() {
            $(this).animate({
                opacity: 1,
            });
        });
    });

    $('#reparation').hover(function (){
        $('#button_app').toggle();
        $(this).animate({
            opacity: 0.25,
        },1000, function() {
            $(this).animate({
                opacity: 1,
            });
        });
    });


    function hover_(){

    }
});