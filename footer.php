    <script>

function prep(){
    document.getElementById("toggle").onclick = function() {
        if ( document.getElementById("menu-r").className == "menu-show") {
             document.getElementById("menu-r").className = "top-nav-r";
        } else {
           document.getElementById("menu-r").className = "menu-show";
        }
    };
}
 
 window.onload = function(){
        prep();
     };
     </script>
     <?php wp_footer(); ?>
    </body>
    </html>