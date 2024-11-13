create table pizzas(
	id INT PRIMARY KEY, 
	name varchar(255) not null, 
	img_path varchar(255), 
	price float, 
	description varchar(255)
	);
	
create table pedidos_pizzas(
	id int PRIMARY KEY , 
	id_pedido INT, 
	Pizza varchar(255), 
	preco float, 
	img_path varchar(255), 
	size varchar(10), 
	quantidade int
);
	
insert into pizzas(id,name,img_path,price,description) values (1,"Calabresa","pizza.png",21.8,"A pizza de calabresa é uma opção deliciosa e saborosa, com uma base de molho de tomate e queijo derretido, coberta com fatias finas de calabresa, cebolas cortadas em rodelas e um toque de orégano. Perfeita para quem gosta de um sabor mais intenso e levemente picante.");
insert into pizzas(id,name,img_path,price,description) values (2,"Tomate","pizza2.png",18," pizza de tomate é uma opção fresca e leve, com uma base de molho de tomate temperado, queijo derretido e fatias suculentas de tomate. Com um toque de manjericão e orégano, ela oferece um sabor simples e delicioso, ideal para quem busca uma refeição mais suave e natural.");
insert into pizzas(id,name,img_path,price,description) values (3,"Carne seca","pizza3.png",19.5," pizza de carne seca é uma deliciosa combinação de sabores intensos, com uma base de molho de tomate, queijo derretido e pedaços de carne seca desfiada, que trazem um sabor marcante e suculento. Complementada com cebolas e, às vezes, um toque de requeijão cremoso, essa pizza é uma opção perfeita para quem aprecia pratos com um toque nordestino e autêntico.");
insert into pizzas(id,name,img_path,price,description) values (4,"Brocolis","pizza4.png",23.8,"A pizza de brócolis é feita com molho de tomate, queijo derretido e pedaços de brócolis, criando uma opção leve e saborosa.");
insert into pizzas(id,name,img_path,price,description) values (5,"Pizza do campo","pizza5.png",21.8,"A pizza de milho e tomate é uma combinação simples e deliciosa, com molho de tomate, queijo derretido, pedaços de tomate frescos e grãos de milho, criando um sabor suave e levemente adocicado.");
insert into pizzas(id,name,img_path,price,description) values (6,"Pizza Mediterrânea","pizza6.png",37.8,"zza Mediterrânea é uma opção fresca e saborosa, combinando o sabor leve do molho de tomate, queijo derretido, pedaços suculentos de tomate e o toque adocicado do milho. ");
insert into pizzas(id,name,img_path,price,description) values (7,"Chocolate","pizza7.png",21.8,"A pizza de chocolate é uma sobremesa irresistível, com uma base macia e levemente doce, coberta por uma camada generosa de chocolate derretido.");
