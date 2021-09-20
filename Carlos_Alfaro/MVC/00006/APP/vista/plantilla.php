<!DOCTYPE html>
<html>
   <?php include "comp/head.php";?>
   <body class="w3-light-grey">
      <!-- Top container -->
      <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
         <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();">
            <i class="fa fa-bars">
            </i>
            Menu
         </button>
         <span class="w3-bar-item w3-right">
            Logo
         </span>
      </div>
      <!-- Sidebar/menu -->
      <?php include "comp/nav.php";?>
      <!-- Overlay effect when opening sidebar on small screens -->
      <div class="w3-overlay w3-hide-large w3-animate-opacity" id="myOverlay" onclick="w3_close()" style="cursor:pointer" title="close side menu">
      </div>
      <!-- !PAGE CONTENT! -->
      <div class="w3-main" style="margin-left:300px;margin-top:43px;">
         <!-- Header -->
         <header class="w3-container" style="padding-top:22px">
            <h5>
               <b>
                  <i class="fa fa-dashboard">
                  </i>
                  My Dashboard
               </b>
            </h5>
         </header>
         <!-- ///////////////////////////////////////////////////////////// -->
         <?php function navegacion($value = '')
{
   $valor = $value;
   echo include_once "{$value}.php";
}?>
         <?php if (isset($_GET['views'])) {

   navegacion($_GET['views']);

}?>
         <!-- ///////////////////////////////////////////////////////////// -->
      </div>
      <script src="vista/js/js.js" type="text/javascript">
      </script>
   </body>
</html>
