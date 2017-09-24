projectAsceo
============

compte ADMIN: admin adminpass
compte USER : user userpass

Jeu de données:

```
INSERT INTO `contact` (`id`, `content`, `name`, `email`, `date`, `state`) VALUES
(1, 'le css est excellent', 'Pierre Martinot', 'pierre.mtnt@gmail.com', '2017-09-24 12:26:38', 1),
(11, 'test formulaire de contact', 'Jean Jean', 'jena@gmail.com', '2017-09-24 21:08:33', 1),
(12, 'envoie d\'une question', 'ACSEO aix', 'aceso@gmail.com', '2017-09-24 21:09:06', 0),
(13, 'test test test', 'Bruce Wayne', 'wayne@gmail.com', '2017-09-24 21:09:29', 1),
(14, 'Lorem ipsum', 'John Doe', 'toto@gmail.com', '2017-09-24 21:09:51', 0);
```

```
INSERT INTO `user` (`id`, `username`, `password`, `salt`, `roles`) VALUES
(1, 'pierre', 'pierre', '', 'a:2:{i:0;s:9:\"ROLE_USER\";i:1;s:10:\"ROLE_ADMIN\";}'),
(2, 'acseo', 'acseo', '', 'a:1:{i:0;s:9:\"ROLE_USER\";}');
```
