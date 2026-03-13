document.addEventListener("DOMContentLoaded", function(e) {
	var lmcTabs = document.querySelectorAll('#lmc-search-block a[data-bs-toggle="tab"]');
	lmcTabs.forEach( tab => tab.addEventListener('shown.bs.tab', onLmcTabChange) );

	function onLmcTabChange(e) {
		var href_value = e.target.toString();
		var split_href_array = href_value.split('/');
		var last_element = split_href_array[split_href_array.length -1];

		var tab_peram          = document.getElementById('primo_peram_tab');
		var peram_search_scope = document.getElementById('primo_peram_search_scope');
		var peram_mode         = document.getElementById('primo_peram_mode');

		switch(last_element) {
			case '#search':
				tab_peram.value = 'Everything';
				peram_search_scope.value = 'MyInst_and_CI';
				break;
			case '#books':
				tab_peram.value = 'LibraryCatalog';
				peram_search_scope.value = 'MyInstitution';
				break;
			case '#articles':
				tab_peram.value = 'CentralIndex';
				peram_search_scope.value = 'CentralIndex';
				break;
			case '#course':
				tab_peram.value = 'CourseReserves';
				peram_search_scope.value = 'CourseReserves';
				break;
		}
	}
});


function searchPrimo() {
	document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value.replace(/[,]/g, " ");
	document.forms["searchForm"].submit();
}

function searchPrimoAdv() {
	document.querySelector('input[name="mode"]').value = "advanced";
	document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value.replace(/[,]/g, " ");
	document.forms["searchForm"].submit();
}