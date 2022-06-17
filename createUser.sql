create database netflix;
create user usernetflix@localhost identified by 'netflixAdmin';
grant all privileges on netflix.* to usernetflix@localhost with grant option;
flush privileges;
