$(document).ready(function (){
    let open = false;
    $(".show_menu").click(function (){
        if(!open){
            $(".main_menu_inner").css('display', 'flex');
        }else $(".main_menu_inner").css('display', 'none');

        open = !open;

    });
})
