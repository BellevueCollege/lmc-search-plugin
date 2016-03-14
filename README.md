# LMC Search Box Plugin

Allows insertion of a library catalog search box into any WordPress page through the shortcode `[lmcsearchbox]`.

## Code Functionality

This plugin is based on the code, provided by the LMC's vendor. You can find the base code in search-template.html file.
The code dynamically edit the value of the hidden element 'hidden_tab' before submitting the form.
After you hit the search button it takes the user to the following page:
http://wactc-primo.hosted.exlibrisgroup.com/primo_library/libweb/action/dlSearch.do?institution=WACTC_BELLEVUE+&vid=BELLEVUE&tab=default_tab&search_scope=default_scope&mode=Basic&displayMode=full&bulkSize=15&highlight=true&dum=true&query=any%2Ccontains%2C&displayField=all&pcAvailabiltyMode=true

The query variable tab should have the appropriate value.
For, Search All       - default_tab
     Books and Media  - books
     Articles         - articles
     Course Reserves  - Cr



