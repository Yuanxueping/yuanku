 $(function(){
           var w=$(window).width();
           if(w<850){
            $(".kong").css({
                        "width":"100%",
                        "height":"50px"
                    });
        
           }
        	
        	
        	$(window).scroll(function(){
        		var w=$(window).width();
        		var h=$(document).scrollTop();
        		if(h==0&&w>=850){
        		$(".top-nav").css({
        			"padding-top":'16px',
        			"padding-bottom":'16px',
        			"background-color":'transparent'
        			
        		}).addClass("xian").removeClass("gaise");
     		
        	  }
        		
        		else {
        			$(".top-nav").css({
        			"padding-top":'0px',
        			"padding-bottom":'0px',
        			"background-color":'#122B40'
        			
        		}).removeClass("xian").addClass("gaise");
        		
        	  }
        	})
        	$(window).resize(function(){
        		var w=$(window).width();
        		if(w<850){
        			$(".top-nav").css({
        			"padding-top":'0px',
        			"padding-bottom":'0px',
        			"background-color":'#122B40'
        			
        		}).removeClass("xian");
        		    $(".kong").css({
        		    	"width":"100%",
        		    	"height":"50px"
        		    });
        			
        		}
        		else{
        			$(".kong").css({
        		    	"width":"100%",
        		    	"height":"0px"
        		    });
        			
        		}
        		
        	})
        	
        })