UPDATE "books" SET "id" = '7', "title" = 0, "author_id" = 0, "cover" = 0
WHERE "id" = 7 
 Execution Time:0.0009768009185791

SELECT *
FROM "books"
WHERE "id" = '7' 
 Execution Time:9.1075897216797E-5

SELECT *
FROM "authors"
WHERE "id" = '0' 
 Execution Time:4.3869018554688E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021696090698242

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001978874206543

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021100044250488

UPDATE "books" SET "id" = '1', "title" = 0, "author_id" = 0, "cover" = 0
WHERE "id" = 1 
 Execution Time:0.00090217590332031

UPDATE "books" SET "id" = '1', "title" = 0, "author_id" = 0, "cover" = 0
WHERE "id" = 1 
 Execution Time:0.00089097023010254

UPDATE "books" SET "id" = '1', "title" = 0, "author_id" = 0, "cover" = 0
WHERE "id" = 1 
 Execution Time:0.00084590911865234

UPDATE "books" SET "id" = '1', "title" = 'FUCK IT', "author_id" = 0, "cover" = 0
WHERE "id" = 1 
 Execution Time:0.00094819068908691

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:9.2983245849609E-5

SELECT *
FROM "authors"
WHERE "id" = '0' 
 Execution Time:4.4107437133789E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019478797912598

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019097328186035

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020909309387207

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:8.392333984375E-5

SELECT *
FROM "authors"
WHERE "id" = '0' 
 Execution Time:4.5061111450195E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00023603439331055

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019311904907227

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019311904907227

UPDATE "books" SET "id" = '1', "title" = 'FUCK IT', "author_id" = '23', "cover" = 0
WHERE "id" = 1 
 Execution Time:0.00078797340393066

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:9.5129013061523E-5

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:4.9829483032227E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019097328186035

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019001960754395

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019311904907227

UPDATE "books" SET "id" = '1', "title" = 'FUCK IT', "author_id" = '23', "cover" = '/assets/images/c3.jpg'
WHERE "id" = 1 
 Execution Time:0.000823974609375

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:9.2029571533203E-5

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:4.8160552978516E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021004676818848

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020194053649902

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001990795135498

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00012707710266113

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:5.3882598876953E-5

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:3.9100646972656E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021195411682129

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0002129077911377

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020003318786621

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00013089179992676

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:5.8174133300781E-5

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:3.9100646972656E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00025105476379395

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020885467529297

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020003318786621

UPDATE "books" SET "id" = '1', "title" = 0, "author_id" = 0, "cover" = 0
WHERE "id" = 1 
 Execution Time:0.00091290473937988

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:9.2983245849609E-5

SELECT *
FROM "authors"
WHERE "id" = '0' 
 Execution Time:5.0067901611328E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001990795135498

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001990795135498

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001988410949707

UPDATE "books" SET "id" = '1', "title" = 'FUCK IT', "author_id" = '23', "cover" = '/assets/images/c3.jpg'
WHERE "id" = 1 
 Execution Time:0.00096511840820312

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021982192993164

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019693374633789

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020790100097656

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00013113021850586

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:5.1975250244141E-5

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:4.7922134399414E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021219253540039

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019502639770508

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0002140998840332

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00012493133544922

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:6.0081481933594E-5

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:3.9815902709961E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0002140998840332

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0002138614654541

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020194053649902

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00024104118347168

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:5.793571472168E-5

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:3.8862228393555E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00025391578674316

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020384788513184

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020098686218262

UPDATE "books" SET "id" = '1', "title" = 'FUCK IT', "author_id" = '23', "cover" = '/assets/images/c3.jpg'
WHERE "id" = 1 
 Execution Time:0.00096988677978516

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:9.1791152954102E-5

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:4.4822692871094E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001978874206543

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020098686218262

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001990795135498

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00013208389282227

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:6.8902969360352E-5

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:3.814697265625E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00033903121948242

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020503997802734

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020694732666016

UPDATE "books" SET "id" = '1', "title" = 'My life', "author_id" = '23', "cover" = '/assets/images/c2.jpg'
WHERE "id" = 1 
 Execution Time:0.001133918762207

SELECT *
FROM "books"
WHERE "id" = '1' 
 Execution Time:0.00013518333435059

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:4.6014785766602E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020408630371094

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001988410949707

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022196769714355

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019383430480957

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00035810470581055

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021004676818848

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020289421081543

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019598007202148

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00032615661621094

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020694732666016

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020289421081543

SELECT *
FROM "books"
WHERE "id" = '99' 
 Execution Time:7.9870223999023E-5

SELECT *
FROM "authors"
WHERE "id" = '56' 
 Execution Time:4.5061111450195E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020599365234375

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021910667419434

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020790100097656

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00018191337585449

SELECT *
FROM "books"
WHERE "id" = '99' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM "authors"
WHERE "id" = '56' 
 Execution Time:4.5061111450195E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021100044250488

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020313262939453

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021004676818848

UPDATE "books" SET "id" = '99', "title" = 'Io ti odio.', "author_id" = '56', "cover" = '/assets/images/c1.jpg'
WHERE "id" = 99 
 Execution Time:0.0010058879852295

SELECT *
FROM "books"
WHERE "id" = '99' 
 Execution Time:9.2983245849609E-5

SELECT *
FROM "authors"
WHERE "id" = '56' 
 Execution Time:4.3153762817383E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020909309387207

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021004676818848

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0002129077911377

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00012493133544922

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020194053649902

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020003318786621

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022006034851074

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019407272338867

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021505355834961

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021195411682129

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020909309387207

SELECT *
FROM "books"
WHERE "id" = '49' 
 Execution Time:8.8930130004883E-5

SELECT *
FROM "authors"
WHERE "id" = '76' 
 Execution Time:4.4107437133789E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00026202201843262

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001990795135498

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001990795135498

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022506713867188

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020503997802734

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020694732666016

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020408630371094

SELECT *
FROM "books"
WHERE "id" = '52' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM "authors"
WHERE "id" = '23' 
 Execution Time:4.1007995605469E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021100044250488

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022315979003906

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00024914741516113

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020503997802734

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019598007202148

SELECT *
FROM "books"
WHERE "id" = '60' 
 Execution Time:8.3208084106445E-5

SELECT *
FROM "authors"
WHERE "id" = '7' 
 Execution Time:4.4107437133789E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020694732666016

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001990795135498

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021505355834961

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00014901161193848

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001990795135498

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020289421081543

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022196769714355

SELECT *
FROM "books"
WHERE "id" = '64' 
 Execution Time:8.702278137207E-5

SELECT *
FROM "authors"
WHERE "id" = '73' 
 Execution Time:4.1961669921875E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020885467529297

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00012898445129395

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020813941955566

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022006034851074

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020790100097656

SELECT *
FROM "books"
WHERE "id" = '20' 
 Execution Time:8.4877014160156E-5

SELECT *
FROM "authors"
WHERE "id" = '96' 
 Execution Time:4.2915344238281E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020098686218262

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001981258392334

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020003318786621

SELECT *
FROM "books"
WHERE "id" = '22' 
 Execution Time:0.00014305114746094

SELECT *
FROM "authors"
WHERE "id" = '11' 
 Execution Time:7.8916549682617E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020790100097656

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001990795135498

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022006034851074

SELECT *
FROM "books"
WHERE "id" = '73' 
 Execution Time:8.2015991210938E-5

SELECT *
FROM "authors"
WHERE "id" = '55' 
 Execution Time:4.2915344238281E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019502639770508

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021100044250488

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001978874206543

SELECT *
FROM "books"
WHERE "id" = '59' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM "authors"
WHERE "id" = '62' 
 Execution Time:4.3153762817383E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021195411682129

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00019502639770508

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020384788513184

SELECT *
FROM "books"
WHERE "id" = '60' 
 Execution Time:7.9154968261719E-5

SELECT *
FROM "authors"
WHERE "id" = '7' 
 Execution Time:4.2915344238281E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020194053649902

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00012087821960449

SELECT *
FROM "books"
WHERE "id" = '60' 
 Execution Time:6.413459777832E-5

SELECT *
FROM "authors"
WHERE "id" = '7' 
 Execution Time:3.7908554077148E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020098686218262

UPDATE "books" SET "id" = '60', "title" = 'A culpa aut soluta veritatis.', "author_id" = '29', "cover" = '/assets/images/c2.jpg'
WHERE "id" = 60 
 Execution Time:0.0010321140289307

SELECT *
FROM "books"
WHERE "id" = '60' 
 Execution Time:0.00010585784912109

SELECT *
FROM "authors"
WHERE "id" = '29' 
 Execution Time:4.8160552978516E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0001990795135498

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020480155944824

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020813941955566

SELECT *
FROM "books"
WHERE "id" = '60' 
 Execution Time:8.4877014160156E-5

SELECT *
FROM "authors"
WHERE "id" = '29' 
 Execution Time:4.4107437133789E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020408630371094

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00012087821960449

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00023102760314941

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020313262939453

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020599365234375

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00026297569274902

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021600723266602

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021004676818848

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020694732666016

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020909309387207

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022506713867188

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00012302398681641

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022602081298828

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020003318786621

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00047707557678223

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021004676818848

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022196769714355

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020599365234375

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021004676818848

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020503997802734

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00026392936706543

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00026607513427734

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00023984909057617

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0002748966217041

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00023603439331055

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022602081298828

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020098686218262

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0002739429473877

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00012707710266113

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021719932556152

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022387504577637

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021004676818848

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021696090698242

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00012493133544922

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021815299987793

SELECT *
FROM "books"
WHERE "id" = '103' 
 Execution Time:8.9883804321289E-5

SELECT *
FROM "authors"
WHERE "id" = '78' 
 Execution Time:4.2915344238281E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020503997802734

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00011992454528809

SELECT *
FROM "books"
WHERE "id" = '103' 
 Execution Time:4.7922134399414E-5

SELECT *
FROM "authors"
WHERE "id" = '78' 
 Execution Time:3.7193298339844E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020313262939453

UPDATE "books" SET "id" = '103', "title" = 'Test 2', "author_id" = '78', "cover" = ''
WHERE "id" = 103 
 Execution Time:0.0011281967163086

SELECT *
FROM "books"
WHERE "id" = '103' 
 Execution Time:9.4890594482422E-5

SELECT *
FROM "authors"
WHERE "id" = '78' 
 Execution Time:4.2200088500977E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020694732666016

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00022101402282715

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00024580955505371

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00026297569274902

SELECT *
FROM "books"
WHERE "id" = '103' 
 Execution Time:7.7009201049805E-5

SELECT *
FROM "authors"
WHERE "id" = '78' 
 Execution Time:4.2915344238281E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020384788513184

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020098686218262

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020694732666016

SELECT *
FROM "books"
WHERE "id" = '102' 
 Execution Time:7.7962875366211E-5

SELECT *
FROM "authors"
WHERE "id" = '84' 
 Execution Time:5.5074691772461E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020289421081543

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020098686218262

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00018596649169922

SELECT *
FROM "books"
WHERE "id" = '102' 
 Execution Time:5.4836273193359E-5

SELECT *
FROM "authors"
WHERE "id" = '84' 
 Execution Time:4.0054321289062E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020599365234375

UPDATE "books" SET "id" = '102', "title" = 'Test redirect', "author_id" = '84', "cover" = 'ddd'
WHERE "id" = 102 
 Execution Time:0.00087404251098633

SELECT *
FROM "books"
WHERE "id" = '102' 
 Execution Time:8.8930130004883E-5

SELECT *
FROM "authors"
WHERE "id" = '84' 
 Execution Time:4.1007995605469E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020503997802734

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00015807151794434

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020217895507812

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021100044250488

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020384788513184

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020098686218262

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00021505355834961

SELECT *
FROM "books"
WHERE "id" = '64' 
 Execution Time:8.1062316894531E-5

SELECT *
FROM "authors"
WHERE "id" = '73' 
 Execution Time:4.3153762817383E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.0002140998840332

SELECT *
FROM "authors"
ORDER BY "name" ASC 
 Execution Time:0.00013184547424316

SELECT *
FROM "books"
WHERE "id" = '64' 
 Execution Time:5.3882598876953E-5

SELECT *
FROM "authors"
WHERE "id" = '73' 
 Execution Time:4.0054321289062E-5

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020003318786621

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020313262939453

SELECT "books"."id" as "id", "books"."title" as "title", "authors"."id" as "author_id", "authors"."name" as "author_name"
FROM "books"
JOIN "authors" ON "books"."author_id" = "authors"."id"
ORDER BY "title" ASC 
 Execution Time:0.00020599365234375

