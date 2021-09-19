create table customer(
cust_id int primary key,
password varchar(30) not null,
foreign key (cust_id) references customer_details(id)
on delete cascade
);
INSERT INTO customer
VALUES ((SELECT id FROM customer_details WHERE lname='Tasnim'), 'tasnim'),
((SELECT id FROM customer_details WHERE lname='chomsky'), 'abc123'),
((SELECT id FROM customer_details WHERE lname='murakami'), 'mura'),
((SELECT id FROM customer_details WHERE lname='king'), 'king'),
((SELECT id FROM customer_details WHERE lname='dostoevsky'), 'russia'),
((SELECT id FROM customer_details WHERE lname='doty'), 'magicshp'),
((SELECT id FROM customer_details WHERE lname='dickens'), 'french//revo'),
((SELECT id FROM customer_details WHERE lname='twain'), 'tom'),
((SELECT id FROM customer_details WHERE lname='westover'), 'educated'),
((SELECT id FROM customer_details WHERE lname='sasson'), 'qwait');
describe customer_details;
describe customer;
drop table customer;
create table orders (
id int primary key auto_increment,
amount int not null,
cust_id int,
product_id int,
foreign key (cust_id) references customer_details(id)
on delete cascade,
foreign key (product_id) references products(product_id)
on delete cascade
);

select Name from products natural join orders where products.product_id = orders.product_id;