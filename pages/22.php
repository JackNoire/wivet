<?php
    define('NOSTARTBODY', true);
    require_once('../genclude.php');
?>
    <script type="text/javascript" src="../js/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        window.onload = function() {
            document.getElementById("t").addEventListener("mouseout", ()=>{
                window.location = "../innerpages/22_1c"+"487.php";
            });

            document.addEventListener("mouseout", (ev)=>{
                if (ev.target.classList.contains("botan")) {
                    window.location = "../innerpages/22_3"+"fa39.php";
                }
            });
        }

        $(document).ready(function(){
            $(document).on("mouseout.anliu", "[class='anliu']", function() {
                window.location = "../innerpages/22_27"+"cc7.php";
            });
        });
    </script>
<?php html_body();  ?>
    <p id="t">Hi!</p>
    <p class='anliu'>Hello!</p>
    <p class='botan'>World!</p>