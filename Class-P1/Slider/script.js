window.onload=function(){
	var trainer=document.getElementsByClassName('trainer').item(0);
	var rows =trainer.getElementsByClassName('row');
	var nav =document.getElementsByClassName('nav').item(0);
	var	lists=nav.getElementsByTagName('li');
	var sum=0;

	for(var i=0 ; i < rows.length ; i++){
		var cols=rows.item(i).getElementsByClassName('slide');

		for(var j=0; j < cols.length ; j++){
			nav.innerHTML+="<li></li>";
			cols.item(j).style.backgroundColor=rndColor();
		}
		nav.innerHTML+="<div class='badboy'></div>";
		rows.item(i).innerHTML+="<div class='badboy'></div>";
	}

	for(var i=0 ; i < rows.length ; i++){
		var cols=rows.item(i).getElementsByClassName('slide');
		
		for(var j=0; j < cols.length ; j++){
			(function(i,j){
				lists.item(sum+j).onclick=function(){
					go2Slide(i,j);
				}
			})(i,j);
		}
		sum=sum+cols.length;
	}

	go2Slide=function(i,j){
		trainer.style.top=(-600*i)+'px';
		trainer.style.left=(-950*j)+'px';
	}

	function rnd(a,b) {
		return Math.floor(Math.random()*(b-a))+a;
	}

	function rndColor() {
	var c='#';
	for(var i=0;i<6;i++){
		c+=rnd(0,15).toString(16);
	}
		return c;
	}
}