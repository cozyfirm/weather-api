$(document).ready(function (){

    /* When user clicks on "advanced_btn" wrapper*/
    $(".advanced_btn").click(function (){
        /* Add or remove class __af_visible on advanced__filters (those classes are defined in filters.scss) */
        $(".advanced__filters").toggleClass('__af_visible');
    });
});
