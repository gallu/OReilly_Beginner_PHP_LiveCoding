-- 本番ではやらないこと！！
select * from items;
-- せめてこっち
-- select * from items LIMIT 0, 10;
-- select * from items LIMIT 10, 3;
select * from items order by item_id LIMIT 0, 10;
select * from items order by item_price LIMIT 0, 10;
select * from items order by item_price DESC LIMIT 0, 10;

