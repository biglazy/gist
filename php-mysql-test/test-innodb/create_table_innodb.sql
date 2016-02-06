
use test;
create table test_innodb (
	id int(11) primary key auto_increment not null,
    value varchar(40) not null default ''
)engine innodb; 
