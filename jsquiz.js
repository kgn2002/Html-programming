function calculate()
{
	const form1=document.getElementById("f1");
	 score=0;
	if (form1.op1.value==="b")
		score++;
	if (form1.op2.value==="d")
		score++;
	if (form1.op3.value==="a")
		score++;
	if (form1.op4.value==="d")
		score++;
	if (form1.op5.value==="d")
		score++;
	if (form1.op6.value==="b")
		score++;
	if (form1.op7.value==="a")
		score++;
	if (form1.op8.value==="b")
		score++;
	if (form1.op9.value==="b")
		score++;
	if (form1.op10.value==="a")
		score++;
    if(score>5)
	{
		alert("You Won the exam by "+ score+" points");
	}
}