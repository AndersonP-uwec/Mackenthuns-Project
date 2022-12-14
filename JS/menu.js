var menu = [
    {"Sandwich":"Meatball Sub",
    "Size":"6 in.",
    "Price":"5.50$"},
    {"Sandwich":"Meatball Sub",
    "Size":"12 in.",
    "Price":"9.75$"},
    {"Sandwich":"Club Sub",
    "Size":"6 in.",
    "Price":"5.50$"},
    {"Sandwich":"Club Sub",
    "Size":"12 in.",
    "Price":"9.75$"},
    {"Sandwich":"Turkey Sub",
    "Size":"6 in.",
    "Price":"5.50$"},
    {"Sandwich":"Turkey Sub",
    "Size":"12 in.",
    "Price":"9.75$"},
    {"Sandwich":"BLT Sub",
    "Size":"6 in.",
    "Price":"5.50$"},
    {"Sandwich":"BLT Sub",
    "Size":"12 in.",
    "Price":"9.75$"},
    {"Sandwich":"Assorted Box 10 Subs",
    "Size":"12 in.",
    "Price":"95.00$"}
];

const convertJsonToHtmlTable = () => {
    //Get the headers from JSON data
    var headers = Object.keys(menu[0]);
     
    //Prepare html header
    var headerRowHTML='<tr>';
    for(var i=0;i<headers.length;i++){
        headerRowHTML+='<th>'+headers[i]+'</th>';
    }
    headerRowHTML+='</tr>';       
     
    //Prepare all the employee records as HTML
    var allRecordsHTML='';
    for(var i=0;i<menu.length;i++){
     
        //Prepare html row
        allRecordsHTML+='<tr>';
        for(var j=0;j<headers.length;j++){
            var header=headers[j];
            allRecordsHTML+='<td>'+menu[i][header]+'</td>';
        }
        allRecordsHTML+='</tr>';
         
    }
     
    //Append the table header and all records
    var table=document.getElementById("display_json_data");
    table.innerHTML=headerRowHTML + allRecordsHTML;

}

