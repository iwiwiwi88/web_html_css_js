var creationTime; var clickedTime; var reactionTime;
			var x=0;
			var reactions=new Array();
		
			function getRandomColor() {
				var letters = '0123456789ABCDEF';
				var color = '#';
				for (var i = 0; i < 6; i++) {
					color += letters[Math.floor(Math.random() * 16)];
				}
				return color;
			}
			function makeBox() {
				var time=Math.random();
				time*=5000;
				time=Math.floor(time);
				setTimeout(function() {
					appear();
					creationTime=Date.now();
				}, time);
			}
			function vanish() {
				document.getElementById("box").style.display="none";
			}
			function appear() {
				document.getElementById("box").style.backgroundColor=getRandomColor();
				changeShape();
				changeCoords();
				document.getElementById("box").style.display="block";
			}
			function getXY(m) {
				var x=Math.random();
				x*=m;
				return x;
			}
			function changeCoords() {
				document.getElementById("box").style.top=getXY(300)+"px";
				document.getElementById("box").style.left=getXY(500)+"px";
			}
			function changeShape() {
				if (Math.random()>0.5) {
					document.getElementById("box").style.borderRadius="100px";
				} else {
					document.getElementById("box").style.borderRadius="0px";
				}
			}
			function isItTheEnd() {
				x++;
				if (x==3) {
					return true;
				}
				return false;
			}
			function displayAllTimes() {
				var txt="";
				for(var i=0; i<reactions.length; i++) {
					txt+=reactions[i].toString()+"<br>";
				}
				return txt;
			}
			function displayTheBestTime() {
				return Math.min.apply(null, reactions).toString();
			}
			function displayTheWorstTime() {
				return Math.max.apply(null, reactions).toString();
			}
			function displayReactionTimes() {
				document.getElementById("allTimes").innerHTML=displayAllTimes();
				document.getElementById("theBestTime").innerHTML=displayTheBestTime();
				document.getElementById("theWorstTime").innerHTML=displayTheWorstTime();
				document.getElementById("done").style.display="block";
			}
			
			document.getElementById("box").onclick=function() {
				clickedTime=Date.now();
				reactionTime=clickedTime-creationTime;
				reactions.push(reactionTime/1000);
				vanish();
				if (isItTheEnd()) {
					displayReactionTimes();
				} else {
					makeBox();
				}
			}
			
			makeBox();