const x=document.getElementById("img1")
const p=document.getElementById("p1")
x.addEventListener("mouseover",enlargeImg);
p.addEventListener("mouseover",enlargeImg);
x.addEventListener("mouseout",normalview);
p.addEventListener("mouseout",normalview);
function enlargeImg() {
    x.src="bgt2.jpg";
	p.innerHTML="The Gabba Test match <br> the Border-Gavaskar Trophy (BGT) 2020-21 was a historic and thrilling encounter. Held from January 15 to 19, 2021, at the Brisbane Cricket Ground (Gabba), it was the fourth and final Test of the series.";
}
function normalview() {
    x.src="bgt.jpg";
	p.innerHTML="Never ever understimate the Indian team";
}
