//<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var categoryLists = new Array(2);
 categoryLists["empty"] = ["Select category"]; 
 categoryLists["Baby food"] = ["cereals", "jars", "yoghurt", "veggies flour" ,"oats" ,"juice"]; 
 categoryLists["receipes"] = ["homemade", "organic", "manufactured"];  
 categoryLists["party notebook"]= ["party notebook"];
 categoryLists["party theme"]= ["party theme"];
 categoryLists["essential goods of motherhood"]= ["essential goods of motherhood"];
 
 //categorytLists["OTHERS"]= ["Other product, Specify in type Field"];
 
 /* 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function categoryChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = categoryLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("category"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
