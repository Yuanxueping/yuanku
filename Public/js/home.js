/**
 * 第六部分 小图轮播的代码
 */
	var example = document.getElementById('example');
	var wiper = document.getElementById('wiper');
	var items = document.getElementsByClassName('item');
	var curr = 0;
	
	example.style.height = items[0].offsetHeight + 'px';
	var weight =  items[0].offsetWidth;
	setInterval(function() {
		curr++;
		if(curr < items.length/2)
			wiper.style.left = wiper.offsetLeft - weight + 'px';
		else{
			curr = 0;
			wiper.style.left = 0 + 'px';
		}
			
			
	}, 3000);

	/**
	 * 第八部分  画板生成百分图代码
	 */

		//创建第一个画板
		var canvas1 = document.getElementById('loader01'), //获取canvas元素
			context1 = canvas1.getContext('2d'), //获取画图环境，指明为2d
			centerX = canvas1.width / 2, //Canvas中心点x轴坐标
			centerY = canvas1.height / 2, //Canvas中心点y轴坐标
			rad = Math.PI * 2 / 100, //将360度分成100份，那么每一份就是rad度
			speed1 = 0.1, //加载的快慢就靠它了 
			time1 = null,
			data1 = canvas1.getAttribute("data-percent");

		//创建其他画板
		var canvas2 = document.getElementById('loader02'),
			context2 = canvas2.getContext('2d'),
			speed2 = 0.1,
			time2 = null,
			data2 = canvas2.getAttribute("data-percent");
		var canvas3 = document.getElementById('loader03'),
			context3 = canvas3.getContext('2d'),
			speed3 = 0.1,
			time3 = null,
			data3 = canvas3.getAttribute("data-percent");
		var canvas4 = document.getElementById('loader04'),
			context4 = canvas4.getContext('2d'),
			speed4 = 0.1,
			time4 = null,
			data4 = canvas4.getAttribute("data-percent");
		var canvas5 = document.getElementById('loader05'),
			context5 = canvas5.getContext('2d'),
			speed5 = 0.1,
			time5 = null,
			data5 = canvas5.getAttribute("data-percent");

		//绘制蓝色外圈
		function blueCircle(context, n) {
			context.save();
			context.strokeStyle = "#fff"; //设置描边样式
			context.lineWidth = 5; //设置线宽
			context.beginPath(); //路径开始
			context.arc(centerX, centerY, 60, -Math.PI / 2, -Math.PI / 2 + n * rad, false); //用于绘制圆弧context.arc(x坐标，y坐标，半径，起始角度，终止角度，顺时针/逆时针)
			context.stroke(); //绘制
			context.closePath(); //路径结束
			context.restore();
		}
		//绘制白色外圈
		function whiteCircle(context) {
			context.strokeStyle = "#CCCCCC";
			context.save();
			context.lineWidth = 5; //设置线宽
			context.beginPath();

			context.arc(centerX, centerY, 60, 0, Math.PI * 2, false);
			context.stroke();
			context.closePath();
			context.restore();
		}
		//百分比文字绘制
		function text(context, n) {
			context.save(); //save和restore可以保证样式属性只运用于该段canvas元素
			context.fillStyle = "#fff"; //设置描边样式
			context.font = "30px Arial"; //设置字体大小和字体
			//绘制字体，并且指定位置
			context.fillText(n.toFixed(0) + "%", centerX - 25, centerY + 10);
			context.stroke(); //执行绘制
			context.restore();
		}
		//动画循环
		function drawFrame(canvas, context, speed, data, time) {
			time = setInterval(function() {
				context.clearRect(0, 0, canvas.width, canvas.height);
				whiteCircle(context);
				text(context, speed);
				blueCircle(context, speed);
				if(speed > data) {
					speed = data;
					clearInterval(time);
				}
				speed += 1;
			}, 50)

		};

		//执行
		drawFrame(canvas1, context1, speed1, data1, time1);
		drawFrame(canvas2, context2, speed2, data2, time2);
		drawFrame(canvas3, context3, speed3, data3, time3);
		drawFrame(canvas4, context4, speed4, data4, time4);
		drawFrame(canvas5, context5, speed5, data5, time5);

	/**
	 * 第十一部分 tabs代码
	 */
	var tabs = document.getElementById('tabs');
	var tabsUl = tabs.getElementsByTagName('ul')[0];
	var tabslis = tabsUl.getElementsByTagName('li');
	var tabsContainer = document.getElementById('tabs_container');
	var tabsDivs = tabsContainer.getElementsByTagName('div');
	
	for(var i=0; i<tabslis.length; i++){
		
		tabslis[i].onclick =function(){
			
			for(var j=0; j<tabsDivs.length; j++){
				tabsDivs[j].className = "hidescaleup make_transist";
			}
			
			var temp = this.getElementsByTagName('a')[0].getAttribute('href');
			document.getElementById(temp).className = "hidescaleup make_transist showscaleup"
			
			for(var i=0; i<tabslis.length; i++){
				tabslis[i].className = "";
			}
			this.className = "tabulous_active";
		}
	}
	
