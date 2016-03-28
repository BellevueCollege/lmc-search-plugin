jQuery(document).ready(function($) {
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		var href_value = e.target.toString();
		var split_href_array = href_value.split('/');
		var last_element = split_href_array[split_href_array.length -1];
 		var hidden_tab_el = $('#hidden_tab');
		switch(last_element) {
			case '#search':
				hidden_tab_el.val('default_tab');
				break;
			case '#books':
				hidden_tab_el.val('books');
				break;
			case '#articles':
				hidden_tab_el.val('articles');
				break;
			case '#course':
				hidden_tab_el.val('cr');
				break;
		}
	});
});

function searchPrimo() {
	document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value.replace(/[,]/g, " ");
	document.forms["searchForm"].submit();
}
function searchPrimoAdv() {
	jQuery('input[name=mode]').val("Advanced");
	document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value.replace(/[,]/g, " ");
	document.forms["searchForm"].submit();
}
