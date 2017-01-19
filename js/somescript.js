function f(n){
	document.getElementById("tab"+n).style.display="block";
	document.getElementById("tab"+(n+1)%2).style.display="none";
}
function ft(n){
	document.getElementById("tab"+n).style.display="block";
	document.getElementById("tab"+(n+1)%4).style.display="none";
	document.getElementById("tab"+(n+2)%4).style.display="none";
	document.getElementById("tab"+(n+3)%4).style.display="none";
}
function fm(n){
	document.getElementById("tab"+n).style.display="block";
	document.getElementById("tab"+(n+1)%3).style.display="none";
	document.getElementById("tab"+(n+2)%3).style.display="none";
}