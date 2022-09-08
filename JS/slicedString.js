// Change last parameter variable, it cannot be in the middle of the url
// Examples

link = "https://url.com/?bla=12&blob=11"; //The URL it self
number = "100"; // Variable of parameter
param = "pageno="; // the last parameter name

function changePageNo(link, number, param) {
    var link_length = link.length;
    var Mark = link.indexOf(param);
    var get_param = link.slice(Mark, link_length);
    var pageno_splited = get_param.split("=");
    pageno_splited[1] = number;
    var changed_pageno = pageno_splited.join("=");
    var original_link = link.slice(0, Mark);
    var results = original_link + changed_pageno;
    return(results);
}

console.log(changePageNo(link, number, param));