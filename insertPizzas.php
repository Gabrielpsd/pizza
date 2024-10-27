<?php
     
    $configs = include('config.php');
            
    $conection = mysqli_connect($configs->host,$configs->username,$configs->pass,$configs->database);

    $sql = 'select max(id_pedido) from pedidos_pizzas';

    $result = mysqli_query($conection,$sql);
    $result = mysqli_fetch_all($result);
    $actualNumber = $result[0][0] + 1 ;

    
    foreach($_POST as $pedido)
    {
        $pedido = json_decode($pedido);

        $sql = 'select max(id) + 1 from pedidos_pizzas';
        $id = mysqli_query($conection,$sql);
        $id = mysqli_fetch_all($id);
        $id = $id[0][0] + 1 ;

        $sql = <<< Pedido
                    INSERT INTO `pedidos_pizzas` 
                    (`id`, `id_pedido`, `Pizza`, `preco`, `img_path`, `size`, `quantidade`) 
                    VALUES ( 
                        '$id', 
                        '$actualNumber',
                        '$pedido->name',
                        '$pedido->price', 
                        '$pedido->imagem',
                        '$pedido->size', 
                        '$pedido->quantidade'); 
                Pedido;
        print_r($sql);

        $result = mysqli_query($conection,$sql);
    }

    header('Location: '.'http://localhost/pizza/pedidos.php');
?>
