create database bdTcc;
use bdTcc;

create table `tbUsuario`(
	`idUsuario` int primary key not null auto_increment
	,`nomeUsuario` varchar (100) 
	,`emailUsuario` varchar(100)
	,`senhaUsuario` varchar(50)
	,`dataNascUsuario` date
	,`sexoUsuario` varchar (20) 
	,`fotoUsuario` varchar (150)
)auto_increment=1;

create table `tbFoneOng`(
	`idFoneOng` int primary key auto_increment
	,`numeroFoneOng` varchar (15)
)auto_increment=1;

create table `tbLoginOng`(
	`idLoginOng` int primary key auto_increment
    , `emailOng` varchar (100) 
	, `senhaOng` varchar (50)
)auto_increment=1;

create table `tbOng`(
	`idOng` int primary key auto_increment
	, `nomeOng` varchar (100) 
	, `descricaoOng` varchar (500)
	, `logradouroOng` varchar (50) 
	, `cidadeOng` varchar (50) 
	, `bairroOng` varchar (50) 
	, `numeroOng` varchar (10)
	, `cepOng` varchar (20) 
	, `cnpjOng` varchar (20)
	, `fotoOng` varchar (150)
    ,`idLoginOng` int not null
    , `idFoneOng` int not null
    ,foreign key(`idLoginOng`) references `tbLoginOng`(`idLoginOng`)
	, foreign key(`idFoneOng`) references `tbFoneOng`(`idFoneOng`)
)auto_increment=1;

create table `tbCampanha`(
	`idCampanha` int primary key not null auto_increment
	,`nomeCampanha` varchar (100)
	,`descricaoCampanha` varchar (500)
	,`inicioCampanha` date
	,`fimCampanha` date
	,`fotoCampanha` varchar (150)
	,`idOng` int not null
    ,foreign key (`idOng`) references `tbOng`(`idOng`) 
)auto_increment=1;

create table `tbDoacao`(
	`idDoacao` int primary key not null auto_increment
	,`descricaoDoacao` varchar (500)
	,`idUsuario` int not null
    ,`idCampanha` int not null
    ,foreign key (`idUsuario`) references `tbUsuario`(`idUsuario`)
	,foreign key (`idCampanha`) references `tbCampanha`(`idCampanha`)
)auto_increment=1;
	
create table `tbRelatorio`(
	`idRelatorio` int primary key not null auto_increment
	,`descricaoRelatorio` varchar (500)
	,`idUsuario` int not null
    ,`idCampanha` int not null
    ,foreign key (`idUsuario`) references `tbUsuario`(`idUsuario`)
	, foreign key (`idCampanha`) references `tbCampanha`(`idCampanha`)
)auto_increment=1;

