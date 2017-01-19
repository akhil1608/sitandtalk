function f(n){
	document.getElementById("tab"+n).style.display="block";
	document.getElementById("tab"+(n+1)%2).style.display="none";
	document.getElementById("cat"+n).style.background="#f4a460";
	document.getElementById("cat"+(n+1)%2).style.background="#ffffff";
}
function ft(n){
	document.getElementById("tab"+n).style.display="block";
	document.getElementById("tab"+(n+1)%4).style.display="none";
	document.getElementById("tab"+(n+2)%4).style.display="none";
	document.getElementById("tab"+(n+3)%4).style.display="none";
	document.getElementById("cat"+n).style.background="#f4a460";
	document.getElementById("cat"+(n+1)%4).style.background="#ffffff";
	document.getElementById("cat"+(n+2)%4).style.background="#ffffff";
	document.getElementById("cat"+(n+3)%4).style.background="#ffffff";
}
function fm(n){
	document.getElementById("tab"+n).style.display="block";
	document.getElementById("tab"+(n+1)%3).style.display="none";
	document.getElementById("tab"+(n+2)%3).style.display="none";
	document.getElementById("cat"+n).style.background="#f4a460";
	document.getElementById("cat"+(n+1)%3).style.background="#ffffff";
	document.getElementById("cat"+(n+2)%3).style.background="#ffffff";
}
