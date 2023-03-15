<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prompt/Confirm - Tables</title>
</head>
<body>
<script type="text/javascript">
document.write('<center>');
var tableRange = prompt('Enter the limit of tables: ');
function tablesRange(tableRange){
for (var tableNumber = 2 ; tableNumber <= tableRange ; tableNumber++) {
		document.write("<table cellpadding='7' border='3'> <tr> <td>");
	for (var tableCount = 1 ; tableCount <= 10 ; tableCount++) {
			document.write(tableNumber + " x " + tableCount + " = " + tableNumber*tableCount);
	document.write("<br/>");
	}
	if(tableNumber == 5){
		var confirmMoreTables = confirm("Tables till 5 are printed, Do you want to print more tables?");
		if (confirmMoreTables) {
			tableNumber = 5;
			var tablesGreaterThanFive = prompt('Enter a number greater than 5 to print more tables');
			if(tablesGreaterThanFive > 5){
			tableRange  = tablesGreaterThanFive;
			}

			else{
				tablesGreaterThanFive = prompt('Kindly, give a number more than 5.');
				tableRange  = tablesGreaterThanFive;
			}
		}
	}
		document.write("</table> </td></tr>");
}
}
tablesRange(tableRange);
document.write('</center>');
</script>
</body>
</html>