const b1=document.getElementById("btn1")
b1.addEventListener("click",changecolor);
const colorbox=["red","green","yellow","pink","black","blue","violet","indigo","orange","grey"]
function changecolor()
{
	i=Math.round(Math.random()*10);
	x=prompt("Guess the next color");
	if(colorbox[i]==x)
	{
		alert("You won the game");
	}
	else
	{
		alert("Better luck next time");
	}
	
	
document.body.style.backgroundColor=colorbox[i];
}
