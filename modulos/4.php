<div class="form-floating mt-5 ms-5">
    <h3 style="color: white;" class="text-center mb-3">4 - Estructura condicional (if)</h3>
    <textarea class="form-control w-50 mx-auto " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px">
            $num = rand(1,3);
            if($num == 1){
                echo "Uno";
            }
            if($num == 2){
                echo "Dos";
            }
            if($num == 3){
                echo "Tres";
            }
        <?php
       $num = rand(1,3);
       echo "Valor: ";
       if($num == 1){
           echo "Uno";
       }
       if($num == 2){
           echo "Dos";
       }
       if($num == 3){
           echo "Tres";
       } 
        ?>
    </textarea>
</div>