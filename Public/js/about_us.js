window.onload =function(){
	var $our_people = $('.our_people');
	var $bannav = $('.bannav');
	var spanlist = $bannav.find('span');
	var curr = 0;
	run();
	var timer = createTime();

	function createTime() {
		return setInterval(function() {
			curr++;
			run();
			
		}, 4000);
	}
	function run() {
		if(curr == $our_people.length){
			curr = 0 ;
		}
		for(var i = 0;i<$our_people.length;i++){
			if(i == curr){
				$our_people[i].style.display = 'block';
				$our_people[i].setAttribute("class","animated flipInX");
			}else{
				$our_people[i].style.display = 'none';
				$our_people[i].setAttribute("class","animated flipOutX");
			}
		}
		setSpan();
	}
	function setSpan(){
		for(var i = 0;i<spanlist.length;i++){
			if(i == curr){
				spanlist[i].style.backgroundColor = '#2ecc71';
			}else{
				spanlist[i].style.backgroundColor = '#999999';
			}
		}
	}
}