<?php
    define('NOSTARTBODY', true);
    require_once('../genclude.php');
?>
    <script type="text/javascript">
        xhr = new XMLHttpRequest();
        xhr.open("get", "../innerpages/<?php tc('24_1e852'); ?>.php");
        xhr.onreadystatechange = function() {
            status = xhr.status;
            if (status === 0 || (status >= 200 && status < 400)) {
                document.getElementById("div").innerHTML = "Success!";
            }
        }
        xhr.send();
    </script>
<?php html_body();  ?>
    <div id="div"></div>