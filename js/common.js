
jQuery.noConflict(); 
jQuery(document).ready(function(){


    jQuery(".fniTest").colorbox({
        inline:true,
        //onComplete:function(){jQuery('#scrollbar1').tinyscrollbar();},
        width: 640
        //height: 310
    });

    jQuery(".fniRule").colorbox({
        inline:true,
        onComplete:function(){
            jQuery('#scrollbar1').tinyscrollbar();
        },
        width: 840
        //height: 310
    });

    jQuery(".lnk_ctaMn").colorbox({
        inline:true,
        onComplete:function(){
            jQuery('#scrollbar1').tinyscrollbar();
        },
        width: 840
        //height: 310
    });

    jQuery('.bxslider').bxSlider({
        infiniteLoop: false,
        hideControlOnEnd: true
    });
    jQuery('.ansAdv').click(function(){
        if(!jQuery(this).find('.upClaps').hasClass("claps")) {
            jQuery(this).parent().find('.hidAns').slideDown('50');
            jQuery(this).find('.upClaps').addClass('claps');
        }else {
            jQuery(this).parent().find('.hidAns').slideUp('50');
            jQuery(this).find('.upClaps').removeClass('claps');
        }
    });

    //Tabs

    jQuery('.tabs span').click(function(){
        switch_tabs(jQuery(this));
    });
    switch_tabs("");

});

function switch_tabs(obj)
{
    if (obj.length==0) {
        jQuery(".dfTabs").each(function(index, element){
            switch_tabs(jQuery(this));
        });
    };
    var mainId = jQuery(obj).parent().parent().parent().prop('id');
    var listItem = jQuery(obj).parent();
    var itemIndex = jQuery('#'+mainId+'>ul>li').index( listItem );

    jQuery('#'+mainId+'>ul>li>span').removeClass("selected");
    jQuery(obj).addClass('selected');
    jQuery('#'+mainId+'> div').each(function(index, element){
        if (index==itemIndex) {
            jQuery(this).show().addClass('selected')
        }
        else{
            jQuery(this).hide()
        };
    });
}