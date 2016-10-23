 jQuery('document').ready(function($){
        var site_url=$(location).attr('hostname')+'/melachuyengialamdepso1';
        
        var s=1;
        setInterval( function() {       
               $('.timetrack').html((s>60? '01 : ':'00 : ')+(s<=60?(s < 10? '0'+s++ : s++): (s++-60>30 ? '30': s++-60)));
               s=s++;
               if(s==90)
               {
                 window.location.href = site_url+"/bang-xep-hang";                 
               }
            },1000);
       //=====ajax proccess
       $(".fniTest").on("click", function() {
           var mang_tra_loi=[];
            var play_time=$('.timetrack').html(); 
           for(var i=0;i<11;i++)
           {
               var j=i+1;
               var tra_loi=$('input[name=cau_'+j+']:checked').val();
               mang_tra_loi[i]=tra_loi;
           }
          
        if (mang_tra_loi.length !== "") {            
            jQuery.post(
                    AjaxDat.ajaxurl,
                    {
                        action: 'do-ajax-jobs',
                        do_job: 'dap_an_quiz',
                        tra_loi: mang_tra_loi,
                        play_time:play_time,
                        nonce: AjaxDat.nonce
                    },
                function(response) {
                    if(response!=0)
                    {                        
                        jQuery('.result-quiz').html(response);
                    }
                   
                }
            );
        }
      //===========redirect  
      window.setTimeout(function () {
          window.location.href = window.location.href = site_url+"/bang-xep-hang";
    }, 3000);
    });
    //========Ajax Write contest
   
    $('.fniTest_contest').on('click',function(){
        
        var content=$('textarea.bxTxtShare').val();
        if(content!='')
        {   var num_word=countWords(content);         
            if(num_word>300)
            {
                $('.text-mes').html('<span>Số từ vượt quá qui định</span>');
            }
            else{
                jQuery.post(
                    AjaxDat.ajaxurl,
                    {
                         action: 'do-ajax-jobs',
                         do_job: 'write_contest',
                         content:content,
                         nonce: AjaxDat.nonce
                    },
                    function(response){
                        if(response!='')
                        {
                            //alert(response);
                            $('#post_id').attr('value',response);
                        }
                    }
              );
              //box
               $(".fniTest_contest").colorbox({
                                inline:true,
                                //onComplete:function(){jQuery('#scrollbar1').tinyscrollbar();},
                                width: 640
                                //height: 310
                });
                $(this).css('display','none');
            }
        }
        else{
            $('.text-mes').html('<span>Nội dung không được trống</span>');
        }
        
    });
    //===
    $('.write_contest #cboxOverlay,.write_contest #closeboxs').on('click',function(){
        var post_id=$('#post_id').val();
        if(post_id!='')
        {
            window.location.href='http://'+site_url+'/danh-sach-bai-du-thi';
        }
        else{
            window.location.href='http://'+site_url;
        }
        
       //alert(site_url);
   }); 
   //=====validate
   var validator = jQuery("#com_register").validate({
        rules: {
            mom_name: "required",
            child_name: "required",
            year_both: "required",
            username: "required",
            address: "required",            
            phone_number: "required",
            password: "required"
          
        },
        messages: {
            
            mom_name: "Không được trống",
            child_name: "Không được trống",
            year_both:{
                required:"Không được trống",
                number:"Phải là số"
            },
            username: "Không được trống",
            address: "Không được trống",            
            phone_number: {
                required:"Không được trống",
                number:"Phải là số"
            },
            password: "Không được trống"
            
        }
    });
   
       
});
function countWords(s){	
	s = s.replace(/(^\s*)|(\s*$)/gi,"");
	s = s.replace(/[ ]{2,}/gi," ");
	s = s.replace(/\n /,"\n");
	var t= s.split(' ').length;
        return t;
}
