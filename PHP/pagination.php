<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <ul id="pag">

    </ul>

</body>

</html>

<script>
    $(document).ready(function() {
        var array = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        var dataLength = array.length;
        var dataperPage = 3;

        function countPageNumber(dataperPage, array) {
            let total_page = 0;
            if (dataLength % dataperPage == 0) {
                total_page = dataLength / dataperPage;
            } else {
                total_page = dataLength / dataperPage;
                total_page = Math.floor(total_page) + 1;
            }
            return (total_page);
        }
        var num = 6;
        var limit = 4;
        var total_halaman = 20;


        var sisaLeft = 0;

        function leftNumber(num, setLimit) {
            let result = num - setLimit;

            function getDifference(a, b) {
                return Math.abs(a - b);
            }


            if (result == 0) {
                return result + num -1;
            } else if (result < 0) {
                res = getDifference(result, num);
                sisaLeft = res - num;
                result = getDifference(1, num);
                return result;
            } else if (result > 0){
                return setLimit;
            }
        }

        var nomorKiri = leftNumber(num, limit);

        <?php
        $pagenow = $_GET['pageno'];
        ?>
        var pagenow = <?= $pagenow ?>;
        var total_page = countPageNumber(dataperPage, array);
        var coba = leftNumber(1, 3);

        for(let i = 1; i <= nomorKiri;i++  ){
            console.log(num - i);
        }
        // console.log(nomorKiri);
    });
</script>