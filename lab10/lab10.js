var i = 1;
var j = 1;
var msg = '';
var d = '';

while (i<10){
	d = 'd'+i;
	msg = '';
	j = 1 ;
	while(j<10){
	msg += i + 'x' + j + '='+ (i*j) +'<br />';
	j++ ;

    }
    document.getElementById(d).innerHTML = msg;
    i++ ;
}