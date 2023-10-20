<div class="form-floating mt-5 ms-5">
    <textarea class="form-control w-50 mx-auto" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 400px">
            $num = rand(1,100);
            echo "Su numero es: $num ";<br>
            if ($num <= 50){
                echo "El valor es igual o menor a 50";
                }
                else{
                echo "Es mayor a 50";
            }

        <?php
        $num = rand(1, 100);
        echo "Su numero es: $num ";
        if ($num <= 50) {
            echo 
            "
            El valor es igual o menor a 50" ;
        } else {
            echo 
            "
            Es mayor a 50";
        }
        ?>
    </textarea>
</div>