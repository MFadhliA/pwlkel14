<head>
</head>
<body>
<script type="Text/Javascript">
var months = new Array();
months[0] = "January";
months[1] = "Febuary";
months[2] = "March";
months[3] = "April";
months[4] = "May";
months[5] = "June";
months[6] = "July";
months[7] = "August";
months[8] = "September";
months[9] = "October";
months[10] = "November";
months[11] = "December";

var currentDate = new Date();
var currentMonth = currentDate.getMonth();
var hariini=currentDate.getDate();
currentDate.setDate(1);
document.write("<table align='center'  border=0	 cellpadding=0 cellspacing=0 >");
document.write("<tr>");
document.write("<td colspan=0 align='center' background='css/images/sdf.jpg'><strong>"+ months[currentMonth] +"</strong></td>");
document.write("</tr>")
document.write("<tr background='css/images/bg.jpg'>");
document.write("<td align='center'>&nbsp;Sun&nbsp;</td>");
document.write("<td align='center'>&nbsp;Mon&nbsp;</td>");
document.write("<td align='center'>&nbsp;Tue&nbsp;</td>");
document.write("<td align='center'>&nbsp;Wed&nbsp;</td>");
document.write("<td align='center'>&nbsp;Thu&nbsp;</td>");
document.write("<td align='center'>&nbsp;Fri&nbsp;</td>");
document.write("<td align='center'>&nbsp;Sat&nbsp;</td>");
document.write("</tr>");

if (currentDate.getDay() != 0)
{
document.write("<tr >");
for (i = 0; i < currentDate.getDay(); i++)
{
document.write("<td>&nbsp;</td>");
}
}

while (currentDate.getMonth() == currentMonth)
{
if (currentDate.getDay == 0)
{
document.write("<tr>");
}

if (hariini==currentDate.getDate())
{
document.write("<td align='center' background='css/images/sdf.jpg'> <font color='#FFFFFF'><strong>" + currentDate.getDate() + "</strong></font></td>");
}

else
{
document.write("<td align='center'  >" + currentDate.getDate() + "</td>");
}

if (currentDate.getDay() == 6)
{
document.write("</tr>");
}
currentDate.setDate(currentDate.getDate() + 1);
}

for (i = currentDate.getDay(); i <= 6; i++)
{
document.write("<td>&nbsp;</td>");
}

document.write("</table>");
</script>
</body>
</html>