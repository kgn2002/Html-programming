function calender()
{
    calender1=[];
    const year=document.getElementById("n1").value;
    const month=["January","February","March","April","May","June","July","August","September","October","November","December"];
    const week=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
    for(let m=0;m<12;m++)
    {
        console.log(month[m]);
        calender1=[];
        for(let n=0;n<6;n++)
        {
            calender1.push([]);
            for(let i=0;i<7;i++)
            {
                calender1[i].push([null]);
            }
        }
        const a= new Date(year,m,1).getDay();
        const b=new Date(year,m+1,0).getDate();
        day=1;
        row=0;
        col=a;
        while(day<=b)
        {
            calender1[row][col]=day;
            col++;
            if(col==7)
            {
                row++;
                col=0;
            }
            day++;
        }
        console.log(calender1);
    }
   
}
