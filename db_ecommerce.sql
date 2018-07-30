CREATE DATABASE e_commerce
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    CONNECTION LIMIT = -1;


CREATE TABLE public.wines
(
    id serial NOT NULL,
    name character varying(50) NOT NULL,
    type character varying(50) NOT NULL,
    price float NOT NULL,
    ml integer NOT NULL,
    PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
);

ALTER TABLE public.wines
    OWNER to postgres;


CREATE TABLE public.sales
(
    id serial NOT NULL,
    date date NOT NULL,
    freight double precision NOT NULL,
    description character varying(100),
    PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
);

ALTER TABLE public.sales
    OWNER to postgres;

CREATE TABLE public.sales_has_wines
(
    id serial NOT NULL,
    sales_id serial NOT NULL,
    wines_id serial NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_sales_id FOREIGN KEY (sales_id)
        REFERENCES public.sales (id) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE NO ACTION,
    CONSTRAINT fk_wines_id FOREIGN KEY (wines_id)
        REFERENCES public.wines (id) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE NO ACTION,
    quantity integer NOT NULL
)
WITH (
    OIDS = FALSE
);

ALTER TABLE public.sales_has_wines
    OWNER to postgres;


INSERT INTO wines (name, type, price, ml) VALUES ('Vinho 1', 'Merlot', '30.00', '750'), ('Vinho 2', 'Merlot', '60.00', '2000'), ('Vinho 3', 'Merlot', '37.00', '750'), ('Vinho 4', 'Bordeaux', '130.00', '750'), ('Vinho 5', 'Merlot', '2.00', '750'), ('Vinho 6', 'Merlot', '50.00', '750'), ('Vinho 7', 'Merlot', '10.00', '750'), ('Vinho 8', 'Merlot', '33.00', '750'), ('Vinho 9', 'Merlot', '30.00', '750'), ('Vinho 10', 'Merlot', '30.00', '750');
