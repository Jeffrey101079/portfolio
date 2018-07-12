var counter = 0;
function start()
{
	counter++;
	if(counter%2==0){
		document.getElementById('seal').src= "./black.png";
	}
	else{
		document.getElementById('seal').src= "./gold.png";
	}
	
}
setInterval(start, 1000);
window.addEventListener("load", start, false)