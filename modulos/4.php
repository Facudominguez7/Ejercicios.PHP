<div class="form-floating mt-5">
    <p style="color: white;">4 - Estructura condicional (if)</p>
    <textarea class="form-control w-100 " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px">
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