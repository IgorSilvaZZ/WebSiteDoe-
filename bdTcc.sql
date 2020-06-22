create database bdTcc;
use bdTcc;

create table `tbUsuario`(
	`idUsuario` int primary key not null auto_increment
	,`nomeUsuario` varchar (70) 
	,`emailUsuario` varchar(200)
	,`senhaUsuario` varchar(200)
	,`dataNascUsuario` date
	,`sexoUsuario` varchar (20) 
	,`fotoUsuario` varchar (100)
)auto_increment=1;

create table `tbFoneOng`(
	`idFoneOng` int primary key auto_increment
	,`numeroFoneOng` varchar (15)
)auto_increment=1;

create table `tbLoginOng`(
	`idLoginOng` int primary key auto_increment
    , `emailOng` varchar (20) 
	, `senhaOng` varchar (200)
)auto_increment=1;

create table `tbOng`(
	`idOng` int primary key auto_increment
	, `nomeOng` varchar (50) 
	, `descricaoOng` varchar (500)
	, `logradouroOng` varchar (50) 
	, `cidadeOng` varchar (50) 
	, `bairroOng` varchar (50) 
	, `numeroOng` varchar (50)
	, `cepOng` varchar (100) 
	, `cnpjOng` varchar (168)
	, `fotoOng` varchar (100)
    ,`idLoginOng` int null
    , `idFoneOng` int not null
    ,foreign key(`idFoneOng`) references `tbLoginOng`(`idLoginOng`)
	, foreign key(`idFoneOng`) references `tbFoneOng`(`idFoneOng`)
)auto_increment=1;

create table `tbCampanha`(
	`idCampanha` int primary key not null auto_increment
	,`nomeCampanha` varchar (50)
	,`descricaoCampanha` varchar (500)
	,`inicioCampanha` date
	,`fimCampanha` date
	,`fotoCampanha` varchar (100)
	,`idOng` int not null
    ,foreign key (`idOng`) references `tbOng`(`idOng`) 
)auto_increment=1;

create table `tbDoacao`(
	`idDoacao` int primary key not null auto_increment
	,`descricaoDoacao` varchar (250)
	,`idUsuario` int not null
    ,`idCampanha` int not null
    ,foreign key (`idUsuario`) references `tbUsuario`(`idUsuario`)
	,foreign key (`idCampanha`) references `tbCampanha`(`idCampanha`)
)auto_increment=1;
	
create table `tbRelatorio`(
	`idRelatorio` int primary key not null auto_increment
	,`descricaoRelatorio` varchar (250)
	,`idUsuario` int not null
    ,`idCampanha` int not null
    ,foreign key (`idUsuario`) references `tbUsuario`(`idUsuario`)
	, foreign key (`idCampanha`) references `tbCampanha`(`idCampanha`)
)auto_increment=1;

create table `tbPostagem`(
	`idPostagem` int primary key not null auto_increment
    ,`descPostagem` mediumtext
    ,`idOng` int not null
    ,foreign key (`idOng`) references `tbOng`(`idOng`)
)auto_increment=1;

create table `tbFavoritos`(
	`idFavorito` int primary key not null auto_increment
    ,`idOng` int not null
    ,`idUsuario` int not null
    ,foreign key (`idOng`) references `tbOng`(`idOng`)
    ,foreign key (`idUsuario`) references `tbUsuario`(`idUsuario`)
)auto_increment=1;