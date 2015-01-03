/*
 * itemテーブルの定義
 */
DROP TABLE IF EXISTS items;
CREATE TABLE items (
  item_id int NOT NULL,
  item_name varbinary(256) NOT NULL,
  item_price int NOT NULL,
  PRIMARY KEY (item_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
