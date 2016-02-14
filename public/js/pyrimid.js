
for(var i = 0; i <= 9; i += 2) {
    for (var j = 9; j >= i; j -= 2) {
        document.write("&nbsp;&nbsp;")
    }
	for(var x = 0; x <= i; x++){
		document.write("*");
	}


	document.write("<br/>");
}
