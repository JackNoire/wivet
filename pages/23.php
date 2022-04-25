<?php
    define('NOSTARTBODY', true);
    require_once('../genclude.php');
?>
    <script>
        var href = '';
        var content = '';
        function f1() {
            href += '../innerpages/23_';
        }
        function f2_(func, args) {
            func.apply(null, args);
        }
        function f2(str) {
            href += str;
        }
        setTimeout(()=>{
            var a = document.createElement("a");
            a.href = href;
            a.innerHTML = content;
            document.body.appendChild(a);
        }, 4000);
        setTimeout(f2_, 2000, f2, ["1c9"]);
        setTimeout("href += 'fd.php'", 3000);
        setTimeout(f1, 1000);
        setInterval(()=>{
            content += 'C';
        }, 500);
    </script>
<?php html_body();  ?>