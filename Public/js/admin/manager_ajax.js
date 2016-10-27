 var cur_step=1;
 var old_val;
 var ajax_num=1;
 $(function  () {
          $('.pwd_box').click(function  () {
               if (cur_step==1) {
                 $('.cur_input').html($('.cur_input').attr('pwd')); 
                 // 不对当前td删除
                 $('.cur_input').removeClass('cur_input');

                  $(this).addClass('cur_input');
                  $(this).html('<input type="text">');
                  old_val=$(this).attr('pwd');
                  ajax_num=1;
               }
                

                var this_box=$(this);

                var input_val=$(this).find('input').val();
                //已经有输入新值的输入框，再点击我们不赋老的值
                if (input_val!="" && input_val!=old_val) {
                   old_val=input_val;
                } 
                $(this).find('input').focus().val(old_val).blur(function  () {
                    

                      var change_val=this_box.find('input').val();
                       

                      // 判断是不是有修改
                      if(old_val!=change_val && ajax_num==1){

                        //提交到ajax_url，相关参数都通过jquery.post
                        $.post(ajax_url,{"id":this_box.attr('id_val'),"change_val":change_val},function  (rtn) {
                          // 在回调函数里，提示用户返回过来的提示信息
                            if(rtn.stauts==1){
                              this_box.html(change_val);
                              this_box.attr('pwd',change_val);

                              cur_step=1;
                              $('.cur_input').html($('.cur_input').attr('pwd')); 
                              $('.cur_input').removeClass('cur_input');
                            }else if(rtn.stauts==-1){
                              cur_step=2;
                              alert(rtn.msg);
                            }else{
                              cur_step=2;
                              $(this).focus();
                              alert(rtn.msg);
                            }

                        });
                      }else{
                        cur_step=1;
                        ajax_num=2;
                        $('.cur_input').html($('.cur_input').attr('pwd')); 
                        $('.cur_input').removeClass('cur_input');

                      }


                });
              
          })
          
      })