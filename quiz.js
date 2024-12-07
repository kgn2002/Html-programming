function calculate()
{
	alert("are uou ready for the exam");
	const x=document.getElementById("f1");
	let score=0;
	if (x.q1.value==="b")
	{
		score=score+1;
	}
    if(score>0)
	{
		alert("You Won the exam");
	}
}