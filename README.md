# LMC Search Box Plugin

Allows insertion of a library catalog search box into any WordPress page through the shortcode `[lmcsearchbox]`.

## Base Code

This plugin is based on the following code, provided by the LMC's vendor:

```HTML
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Script that converts the query string into dlSearch.do valid parameter -->
<script type="text/javascript">
function searchPrimo() {
document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value.replace(/[,]/g, " ");
document.forms["searchForm"].submit();
}
</script>
</head>
<body>
<form id="simple" name="searchForm" method="get" target="_self" action="http://<HOST_NAME>/primo_library/libweb/action/dlSearch.do" enctype="application/x-www-form-urlencoded; charset=utf-8" onsubmit="searchPrimo()">
<!-- Customizable Parameters -->
<input type="hidden" name="institution" value="<INSTITUTION CODE>">
<input type="hidden" name="vid" value="<VIEW CODE>">
<input type="hidden" name="tab" value="<TAB CODE>">
<input type="hidden" name="search_scope" value="<SCOPE NAME>">
<input type="hidden" name="mode" value="Basic">

<!-- Fixed parameters -->
<input type="hidden" name="displayMode" value="full">
<input type="hidden" name="bulkSize" value="<RECORDS PER PAGE, e.g. 10>">
<input type="hidden" name="highlight" value="true">
<input type="hidden" name="dum" value="true">
<input type="hidden" name="query" id="primoQuery">
<input type="hidden" name="displayField" value="all">

<!-- Enable this if "Expand My Results" is enabled by default in Views Wizard -->
<input type="hidden" name="pcAvailabiltyMode" value="true">

<input type="text" id="primoQueryTemp" value="" size="35">

<!-- Search Button -->
<input id="go" title="Search" onclick="searchPrimo()" type="button" value="Search" alt="Search" style="height: 22px; font-size: 12px; font-weight: bold; background: #DE6E17; color: #ffffff; border: 1px solid;">
</form>
</body>
</html>
```

## Plugin Status

As of initial commit, this is in prototype/proof-of-concept stage. LMC is targeting release around Summer 2016.