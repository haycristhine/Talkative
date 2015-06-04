/**
 * Created by Haydê on 03/06/2015.
 */
$(document).ready(function () {
    $('#confirm_password').hide();
    $('body').css("background-image", "url(" + get_image_url() +")");

    $('#btnNewAccount').click(function(){
        $('#confirm_password').fadeIn(1500);
    });
});

function get_image_url(){
    var url = 'assets/image/bg' + Math.floor((Math.random() * 4)+ 1) + '.jpg';
    return url;
}

