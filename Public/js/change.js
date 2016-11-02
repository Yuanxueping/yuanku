
window.onload=function(){
		var obestPlayerTabt=document.getElementById('bestPlayerTab');
		var ohighFocusBtnL=document.getElementById('highFocusBtnL');
		var ohighFocusBtnR=document.getElementById('highFocusBtnR');
		var ohighFocusCont=document.getElementById('highFocusCont');
		var opage=ohighFocusCont.getElementsByClassName('page');
		
	    var aLi=obestPlayerTabt.getElementsByTagName('li');		
		var obestPlayerCont=document.getElementById('bestPlayerCont');
	    var aUl=obestPlayerCont.getElementsByTagName('ul');
	    
	   
   		var i=0;
	    
		for(i=0;i<aLi.length;i++){
		  	aLi[i].index=i;
		  	aLi[i].onclick=function(){
		  		for(i=0;i<aLi.length;i++){
		  			aLi[i].className='';
		  			aUl[i].style.display='none';
		  		}
		  		aUl[this.index].style.display='block';
		  		this.className='current';
		  	}
		}
		ohighFocusBtnL.onclick=function(){
			opage[1].style.display='block';
			opage[0].style.display='none';
		}
		ohighFocusBtnR.onclick=function(){
			opage[0].style.display='block';
			opage[1].style.display='none';
		}		
	}

function onTop(){
		    var Top=document.getElementById('top');
   		    var timer=null;
			Top.onclick=function(){
			timer=setInterval(function(){
				var scrolltop=document.documentElement.scrollTop||document.body.scrollTop;
				var ispeed=Math.floor(-scrolltop/8);
				if(scrolltop==0){
					clearInterval(timer)
				}
				document.documentElement.scrollTop=document.body.scrollTop=scrolltop+ispeed;
				},30)
			}
	}

//function onvideo(){
//	 var Tv=document.getElementById('tv');
// 		    var timer=null;
//			Tv.onclick=function(){
//			timer=setInterval(function(){
//				var scrolltop=document.documentElement.scrollTop||document.body.scrollTop;
//				var ispeed=Math.floor(-scrolltop/8);
//				if(scrolltop==400){
//					clearInterval(timer)
//				}
//				document.documentElement.scrollTop=document.body.scrollTop=scrolltop+ispeed;
//				},30)
//			}
//}
