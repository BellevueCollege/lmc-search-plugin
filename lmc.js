function searchPrimo() { 
	document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value.replace(/[,]/g, " "); document.forms["searchForm"].submit();
}