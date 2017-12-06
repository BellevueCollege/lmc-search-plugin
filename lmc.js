jQuery(document).ready(function($) {
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		var href_value = e.target.toString();
		var split_href_array = href_value.split('/');
		var last_element = split_href_array[split_href_array.length -1];

		var tab_peram          = $('#primo_peram_tab');
		var peram_search_scope = $('#primo_peram_search_scope');
		var peram_mode         = $('#primo_peram_mode');

		switch(last_element) {
			case '#search':
				tab_peram.val('default_tab');
				peram_search_scope.val('EVERYTHING');
				break;
			case '#books':
				tab_peram.val('bellevue_alma');
				peram_search_scope.val('BELLEVUE_ALMA');
				break;
			case '#articles':
				tab_peram.val('pci');
				peram_search_scope.val('PCI');
				break;
			case '#course':
				tab_peram.val('bellevue_course_reserves');
				peram_search_scope.val('BELLEVUE_COURSE_RESERVES');
				break;
		}
	});
});

function searchPrimo() {
	document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value.replace(/[,]/g, " ");
	document.forms["searchForm"].submit();
}
function searchPrimoAdv() {
	jQuery('input[name=mode]').val("advanced");
	document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value.replace(/[,]/g, " ");
	document.forms["searchForm"].submit();
}
