
use test;
create table test_myisam (
	id int(11) primary key auto_increment not null,
    value varchar(40) not null default ''
)engine myisam; 

