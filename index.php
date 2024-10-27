<!DOCTYPE html>
<html>

<body>
    <div class="models">
        <button id="send_data"></button> 
        <div class="cart--item">
            <img src="" />
            <div class="cart--item-nome">--</div>
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
        </div>
    </div>
    <header>
        <div class="menu-openner" ><span>0</span>🛒</div>
    </header>
    <main>
        <div>
            <?php 
                include("header.php")
            ?>
        </div>
        <div class="pizza-area">
            <?php 
                $configs = include('config.php');
                
                $conection = mysqli_connect($configs->host,$configs->username,$configs->pass,$configs->database);

                if(!$conection)
                {
                    die("Connection failed: ". mysqli_connect_error());
                }
                else
                {
                    $sql = 'SELECT `id`, `name`, `img_path`, `price`, `description` FROM `pizzas` WHERE 1; ';
                    $result = mysqli_query($conection,$sql);

                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo <<< PIZZAS
                            <div class="pizza-item" id=$row[id]>
                                <a href="">
                                    <div class="pizza-item--img"><img src="assets/images/$row[img_path]" /></div>
                                    <div class="pizza-item--add">+</div>
                                </a>
                                <div class="pizza-item--price">R$ $row[price]</div>
                                <div class="pizza-item--name">$row[name]</div>
                                <div class="pizza-item--desc">$row[description]</div>
                            </div>
                            PIZZAS;
                        }
                    }
                    else 
                    {
                        echo "Results 0";
                    }
                }
            ?>
        </div>
    </main>
    <aside>
        <div class="cart--area">
            <div class="menu-closer">❌</div>
            <h1>Suas Pizzas</h1>
            <div class="cart"></div>
            <div class="cart--details">
                <div class="cart--totalitem subtotal">
                    <span>Subtotal</span>
                    <span class="valor--mudar">R$ --</span>
                </div>
                <div class="cart--totalitem desconto">
                    <span>Desconto (-10%)</span>
                    <span class="valor--mudar">R$ --</span>
                </div>
                <div class="cart--totalitem total big">
                    <span>Total</span>
                    <span class="valor--mudar">R$ --</span>
                </div>
                <div class="cart--finalizar">Finalizar a compra</div>
            </div>
        </div>
    </aside>
    <div class="pizzaWindowArea">
        <div class="pizzaWindowBody">
            <div class="pizzaInfo--cancelMobileButton">Voltar</div>
            <div class="pizzaBig">
                <img src="" />
            </div>
            <div class="pizzaInfo">
                <h1>--</h1>
                <div class="pizzaInfo--desc">--</div>
                <div class="pizzaInfo--sizearea">
                    <div class="pizzaInfo--sector">Tamanho</div>
                    <div class="pizzaInfo--sizes">
                        <div data-key="0" class="pizzaInfo--size">PEQUENA <span>--</span></div>
                        <div data-key="1" class="pizzaInfo--size">MÉDIO <span>--</span></div>
                        <div data-key="2" class="pizzaInfo--size selected">GRANDE <span>--</span></div>
                    </div>
                </div>
                <div class="pizzaInfo--pricearea">
                    <div class="pizzaInfo--sector">Preço</div>
                    <div class="pizzaInfo--price">
                        <div class="pizzaInfo--actualPrice">R$ --</div>
                        <div class="pizzaInfo--qtarea">
                            <button class="pizzaInfo--qtmenos">-</button>
                            <div class="pizzaInfo--qt">1</div>
                            <button class="pizzaInfo--qtmais">+</button>
                        </div>
                    </div>
                </div>
                <div class="pizzaInfo--addButton">Adicionar ao carrinho</div>
                <div class="pizzaInfo--cancelButton">Cancelar</div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="script.js?t=1730030153534"></script>
</body>
</html>
