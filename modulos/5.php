<div class="form-floating mt-5 ms-5">
    <h3 style="color: white;" class="text-center mb-3">5 - Estructuras repetitivas (for - while - do/while)</h3>
    <textarea class="form-control w-50 mx-auto " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px">
    echo "Tabla del 2 con el for: ";
         
         for ($f = 2; $f <= 20; $f = $f + 2) {
           echo $f;
           echo "-";
         }
         
         echo "Tabla del 2 con el while: ";
         
         $f = 2;
         while ($f <= 20) {
           echo $f;
           echo "-";
           $f = $f + 2;
         }
        
         echo "Tabla del 2 con el do/while: ";
        
         $f = 2;
         do {
           echo $f;
           echo "-";
           $f = $f + 2;
         } while ($f <= 20);
  

        <?php
         echo "         Desarrollo: ";
         echo "
         ";   
         echo "Tabla del 2 con el for: ";
         echo "
         ";
         for ($f = 2; $f <= 20; $f = $f + 2) {
           echo $f;
           echo "-";
         }
         echo "
         ";
         echo "Tabla del 2 con el while: ";
         echo "
         ";
         $f = 2;
         while ($f <= 20) {
           echo $f;
           echo "-";
           $f = $f + 2;
         }
         echo "
         ";
         echo "Tabla del 2 con el do/while: ";
         echo "
         ";
         $f = 2;
         do {
           echo $f;
           echo "-";
           $f = $f + 2;
         } while ($f <= 20);
       
         
        ?>
    </textarea>
</div>