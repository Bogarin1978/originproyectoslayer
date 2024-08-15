
 


create table userhause (
useid int (10)  not null auto_increment,
userol int (1) not null,
useNombre varchar (25) not null,
useApellido varchar (25) not null,
useEmail varchar (30) not null,
usepassword varchar (30)not null,
usedireccion varchar(20) not null,
uselocalidad varchar(30) not null,
useprovincia varchar (20) not null,
usetelefono int (30) not null,
PRIMARY KEY (useid) ,
rolidfx int (10),
FOREIGN KEY (rolidfx) references roles (rolid)

);

create table administrator(
admid int (10) not null auto_increment,
admrol int (1) not null,
admemail varchar (30) not null,
admpassword varchar (30) not null,
admNombre varchar (30) not null,
admApellido varchar (30) not null,
admPuesto varchar (20)not null,
PRIMARY KEY (admid),
rolidad int not null,
FOREIGN KEY (rolidad) references roles(rolid)

);


create table roles (
rolid int (10) not null auto_increment,
useidf int not null,
roltipo int (2) not null,
primary key(rolid),
FOREIGN KEY(useidf) references user (useid)
);
create table productos (
prodid int(10) not null auto_increment,
prodnombre varchar(30) not null,
prodcodigo varchar (30) not null,
prodmarca varchar (30) not null,
prodmodelo varchar (30) not null,
prodprecio int (20) not null,
proddescripcion varchar (40) not null,
prodstockautual int(25) not null,
prodstockmin int(25) not null,
prdproveedor varchar (30) not null,
PRIMARY KEY (prodid),
rolidf int not null,
foreign key (rolidf)references roles (rolid)

);

use bdeasyhause;

create table proveedores (
proveid int (10) not null auto_increment,
proveNombre varchar (30) not null,
provecuit int (20) not null,
provecategoria varchar (20) not null,
provedireccion varchar (35)  not null,
provetelefono int (20) not null ,
primary key (proveid) ,
prodidfx int not null,
admidfx int not null,
foreign key (prodidfx) references  productos(prodid),
foreign key (admidfx) references administrator (admid)


);

use bdeasyhause;

create table precios (
preid int (10) not null auto_increment,
prefecha date ,
preprecionormal int (10) not null,
prepreciomin int (10) not null,
prepreciomax int (10) not null,
primary key (preid),
prodidmx int  not null,
admidmx int not null,

FOREIGN KEY (prodidmx) references productos(prodid) ,
FOREIGN KEY  (admidmx) references administrator(admid)

);

use bdeasyhause;

create table categoria (
catid int (10) not null auto_increment,
cattipo varchar (20),
catdetalle varchar (35),
PRIMARY KEY  (catid),
preidcx int not null,
admidcx int not null ,
FOREIGN KEY (admidcx) references administrator (admid),
FOREIGN KEY (preidcx) references precios (preid)

);


use bdeasyhause;

create table factcabezera (
factid int not null auto_increment,
factfecha date not null,
facttipo varchar (4)not null,
factnomcliente varchar (20) not null,
factApellidocliente varchar (25) not null,
primary key (factid),
admsa int ,
foreign key (admsa) references administrator (admid)


);

create table factdetalle (
facdeid int (10) not null auto_increment,
facfechapag date not null,
faccantidad int (5) not null,
factotal int (15) not null,
facvendedor varchar (35) not null,
PRIMARY KEY (facdeid),
admsd int ,
factidsd int,

FOREIGN KEY (factidsd) references factcabezera (factid),
FOREIGN KEY (admsd) references administrator (admid)

);







