const form = document.getElementById("lmc-search-form");

form.addEventListener("submit", function() {
    const queryTemp = document.getElementById("primoQueryTemp").value;
    document.getElementById("primoQuery").value = `any,contains,${queryTemp.replace(/,/g, " ")}`;
});
