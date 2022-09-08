<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <p id="result"></p>
</body>

</html>

<script>
    number = 1;
    link = "https://bvrproperty.com/ujicoba/propertycard_test/?location%5B%5D=Canggu&location%5B%5D=Berawa&minbed=12&pageno=2";

    function changePageNo(link, number) {
        function arrayContains(needle, arrhaystack) {
            return (arrhaystack.indexOf(needle) > -1);
        }
        var link_length = link.length;
        var Mark = link.indexOf("pageno");
        var get_param = link.slice(Mark, link_length);
        var pageno_splited = get_param.split("=");
        pageno_splited[1] = number;
        var changed_pageno = pageno_splited.join("=");
        var original_link = link.slice(0, Mark);
        var results = original_link + changed_pageno;
        return(results);
    }

    console.log(changePageNo(link, number));
</script>