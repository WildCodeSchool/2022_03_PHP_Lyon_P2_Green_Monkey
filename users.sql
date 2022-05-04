create table projet2.user
(
    id       int auto_increment
        primary key,
    mail     varchar(100) null,
    password varchar(100) null
)
    auto_increment = 3;

insert into projet2.user (id, mail, password)
values  (2, 'test@test.com', '$argon2i$v=19$m=16,t=2,p=1$ZUthZkdSWFY0R2tRbktESQ$U21Avh4mjs07RXYutKG53g'),
        (3, 'vin.diesel@wanadoo.fr', '$argon2i$v=19$m=16,t=2,p=1$VmFCUTdMaFVScHBNU3BwYw$lky9RdbxEIgHs6HtEGwcLQ');
