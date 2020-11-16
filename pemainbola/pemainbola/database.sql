create database pemainbola;

use pemainbola;

CREATE TABLE `pemainbola` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100),
  `no` int(2),
  `tim` varchar(20),
  PRIMARY KEY  (`id`)
);