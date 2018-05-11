<?php
//MySQLi Fragmentos por http://www.dreamweaver-tutoriales.com
//La "p" antes de localhost indica que la conexión es persistente (http://blog.ayzweb.com/tutorial/conexion-php-a-mysql-mysql_connect-o-mysql_pconnect-persistente)
//Copyright Jorge Vila 2015

if (!isset($_SESSION)) {
 // session_start();
}

$con = mysqli_connect("localhost","root","suadmin","tiendita");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  
/*
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Aguja Norteña','Corte muy suave y jugoso por su gran marmoleo. Se obtiene del diezmillo.','aguja.jpg',265,30,'Hereford','Chihuahua');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Arrachera','Corte muy suave y sabroso, Proviene del diafragma, lo que le da ese sabor unico. Marinada','arrachera.jpg',300,35,'Sonora inc','Sonora');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Top Sirloin','Corte de gran intensidad. Considerado un corte magro por no tener por no contener grasa ni nervios. Se obtiene de la parte inferior del lomo.','sirloin.jpg',350,25,'Laguna','Coahuila');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Costilla Norteña','Trozo de lomo con hueso. Estupendo para pasar por el carbon','costilla.jpg',300,33,'San juan','Monterrey');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('New York','Conocido tambien como strip loin. Marmoleo medio y textura firme. Este va termino 3/4.','newyork.jpg',450,15,'San juan','Monterrey');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Rib Eye','El corte mas jugoso, reconocido por su gran maoleo adherido al musculo, sin cartilago ni tejido conectivo, lo cual permite tener  consistencia intensa. Se Obtiene del centro del costillar.','ribeye.jpg',500,30,'laguna','Chihuahua');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Porter House','Asi como el T-Bone, se obtiene de la parte posterior del lomo de res con el caracteristico sabor de la carne adherida al hueso','porter.jpg',900,15,'Sonora','Sonora');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Chuleton','Corte selecto que se encuentra en el extremo frontal del lomo, al cual se le regula el exceso de grasa. Es el punto de referencia de los cortes finos','chuleton.jpg',750,20,'Texas inc','Texas');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Diezmillo marinado','Corte de muszculo sin hueso, que gracias a su proceso de marinado lo hace un corte suave y jugoso. Se obtiene de la espaldilla','diezmillo.png',400,15,'Texas inc','Texas');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Cowboy','Corte de muzculo con hueso, de sabor fuerte','cowboy.jpg',750,20,'Laguna','Coahulia');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Picaña','Cortesuave y muy jugosa, tapa inferior del sirloin. Presenta una cobertura de grasa que permite facilmente su remocion parcial.','picaña.jpg',600,15,'Sonora','Sonora');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Short rib','Proviene del cuarto delantero, conformado de grasa y presencia de hueso lo cual le permite un saborr inigualabel','short.jpg',456,21,'San juan','Monterrey');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('filete de caña','Corte deshuesado suave por su gran marmoleo  se produce  del lomo principal despues de quitar  el strip loin, el aguayon superior y el aguayon inferior','fil.jpg',300,20,'Sonora','Sonora');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Tomahawk','Corte muy suave por su gran marmoleo, se obtiene del Rib Steak con la pieza de costilla pegada a el. Para asar al carbon.','tom.jpg',800,16,'Laguna','Coahulia');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Prime Rib','Corte selecto que se encuentra en la parte frontal del lomo, al cual se l regula el exceso de grasa','prime.jpg',852,20,'San juan','Monterrey');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Costilla de Rib Eye','Se encuentra en el extremo frontal del lomo de la costilla 6 a la 12.','cost.png',750,26,'Sonora','Sonora');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Cabrito','Cria de cabra hasta de 4 meses','cabri.jpg',1000,14,'Sonora','Sonora');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Carne seca','Carne seca enchilada, ideal para botanear','carne.jpg',150,15,'San juan','Monterrey');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Chorizo Argentino','Delicioso embutido','ca.jpg',320,12,'Laguna','Coahulia');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Chistorra','De sabor intenso y poca grasa','chistorra.jpg',325,20,'San juan','Monterrey');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Salchicha Polaca','Delisiosa salchicha ideal para asar','pol.jpg',290,30,'Sonora','Sonora');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Salchica para asar','Rica salchicha para asar','salchica.jpg',250,40,'San juan','Monterrey');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Queso Empalmes Maria Aurora','5 piezas, 100% natural. El sabor de provincia nnorteña','queso.jpg',150,25,'San juan','Monterrey');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Queso machego','De sabor extraudinario para el paladar','qm.jpg',180,40,'Laguna','Coahulia');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Queso Oaxaca','Excelentes cualidades de fundido. Tipico par las quesadillas','oaxaca.jpg',110,35,'San juan','Monterrey');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Queso Panela','Con hierbas finas, chile verde, chipotle, entre otros, es exquisito y ademas contiene pocas calorias','qb.jpg',120,32,'Sonora','Sonora');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Queso Provolone','Originario de Italia para halagar al paladar','pro.jpg',200,23,'Sonora','Sonora');
insert into productos (p_nombre,p_descripcion,p_foto,precio,p_almacen,p_fabricante,p_origen) values('Queso reblochon','Sin conservador ni colerantes, con todo el sabor del campo','reb.jpg',250,35,'San juan','Monterrey');
*/
//
?>
