FROM mysql:5.6

COPY toko_item/paw.sql /docker-entrypoint-initdb.d/
