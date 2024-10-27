<!DOCTYPE html>
<html>

<body>

<main>

    <?php 
        include("header.php")
        ?>
<div class="pizza-area">
    
    <?php
        $configs = include('config.php');
        
        $conection = mysqli_connect($configs->host,$configs->username,$configs->pass,$configs->database);
        
        $sql = 'select max(id_pedido) from pedidos_pizzas';
        
        $result = mysqli_query($conection,$sql);
        $result = mysqli_fetch_all($result);
        $actualNumber = $result[0][0];
        
        for($controller = 0; $controller <= $actualNumber; $controller++)
        {
            
            $sql = 'SELECT `id`, `id_pedido`, `Pizza`, `preco`, `img_path`, `size`, `quantidade` FROM `pedidos_pizzas` WHERE id_pedido ='. $controller;
            $result = mysqli_query($conection,$sql);
            
            if($result)
            {
                $result = mysqli_fetch_all($result);
                $sum = 0 ;
                foreach($result as $item)
                {
                    $sum = $sum + ($item[3] * $item[6]);
                }

                echo 
                '<div class="card border-dark  mb-5" style="margin: 10px; padding:5px; overflow:auto; max-width:100%;">
                <div class="card-header">Pedido:  '. $controller.'   Valor total: R$'. $sum .'</div>
                <div class="card-body">
                 <table class="table table-striped">
                      <thead>
                        <tr>
                        <th scope="col">Pizza</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preco</th>
                        <th scope="col">tamanho</th>
                        </tr>
                    </thead>
                <tbody>';
                
                foreach($result as $item)
                {
                    echo <<< html
                            <tr>
                                <td>$item[2]</td>
                                <td>$item[6]</td>
                                <td>R\$$item[3]</td>
                                <td>$item[5]</td>
                            </tr>
                    html;
                }
                echo '
                              </tbody>                
                        </table>
                    </div> 
                </div>';
                
            
            }
        }
        
        ?>

</div>
</main>
</body>
</html>
