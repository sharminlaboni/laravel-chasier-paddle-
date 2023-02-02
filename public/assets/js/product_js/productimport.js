$(".submit").on("click",function(){
 var country = $(".country").val();
 var search_keyword = $(".search_keyword").val();
if(search_keyword!=""){
    var category = $(".category").val();
    if(category!=""){
    var searchString = 's?k='+ search_keyword.replace(/\s/g,'+') + '&i='+ category ;
    //console.log(searchString)
     }
     else{
        var searchString = 's?k=' +search_keyword.replace(/\s/g,'+') ; 
        alert(searchString)

   }
   no_pa_search_products(searchString);
}
else{
    alert('please Enter search keyword');
}
})
function no_pa_search_products(searchString){
var isInstalled = document.documentElement.getAttribute('amazonxtra-extension-installed', true);

if (isInstalled ) {


    var data = {
        type: "search",
        search_string: searchString,
        url: "https://www.amazon.com/" + searchString,

    };
    window.postMessage(data, "*", );
    //console.log(searchString);
}

else{
    console.log( "install nai");
   
}
}
 