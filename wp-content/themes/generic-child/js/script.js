jQuery(function($) {

    jQuery( ".btn-more" ).on( "click", function(e) {
        
        e.preventDefault();
        
        let id = $(this).attr("data-id");
       //console.log(id);
       
        //La llamada AJAX
        jQuery.ajax({
            type : "post",
            dataType: 'JSON',
            url : generic_script_object.ajaxurl,
            data : {
                action: 'generic_ajax_readmore',
                id_post: id
            },
            error: function(response){
                console.log(response);
            },
            success: function(response) {
                jQuery("#post-image").attr("src", response[0].feature_image);
                jQuery("#post-title").html(response[0].title);
                jQuery("#post-image").attr("alt", response[0].title);
                jQuery("#post-image").attr("title", response[0].title);
                jQuery("#post-content").html(response[0].content);
                //console.log(response[0].feature_image);
                jQuery('.post-popup-wrap').delay(3000).fadeIn();
            }
        });

    });
    
    jQuery( "#close" ).on( "click", function(e){
        jQuery('.post-popup-wrap').fadeOut();
    });



});