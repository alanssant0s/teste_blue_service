--
-- PostgreSQL database dump
--

-- Dumped from database version 14.5
-- Dumped by pg_dump version 14.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: carts; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.carts (
    user_id integer NOT NULL,
    product_id integer NOT NULL,
    qtd integer DEFAULT 1 NOT NULL,
    price double precision NOT NULL,
    total double precision NOT NULL
);


ALTER TABLE public.carts OWNER TO postgres;

--
-- Name: categories_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.categories_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.categories_id_seq OWNER TO postgres;

--
-- Name: categories; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.categories (
    id integer DEFAULT nextval('public.categories_id_seq'::regclass) NOT NULL,
    name character varying(45) NOT NULL,
    created timestamp without time zone,
    modified timestamp without time zone,
    deleted timestamp without time zone
);


ALTER TABLE public.categories OWNER TO postgres;

--
-- Name: features_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.features_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.features_id_seq OWNER TO postgres;

--
-- Name: features; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.features (
    id integer DEFAULT nextval('public.features_id_seq'::regclass) NOT NULL,
    name character varying(255) NOT NULL,
    created timestamp without time zone,
    modified timestamp without time zone,
    deleted timestamp without time zone
);


ALTER TABLE public.features OWNER TO postgres;

--
-- Name: product_categories; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.product_categories (
    product_id integer NOT NULL,
    category_id integer NOT NULL
);


ALTER TABLE public.product_categories OWNER TO postgres;

--
-- Name: product_features; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.product_features (
    product_id integer NOT NULL,
    feature_id integer NOT NULL
);


ALTER TABLE public.product_features OWNER TO postgres;

--
-- Name: products_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.products_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.products_id_seq OWNER TO postgres;

--
-- Name: products; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.products (
    id integer DEFAULT nextval('public.products_id_seq'::regclass) NOT NULL,
    name character varying(255) NOT NULL,
    description text NOT NULL,
    imagem character varying(255),
    price double precision NOT NULL,
    created timestamp without time zone,
    modified timestamp without time zone,
    deleted timestamp without time zone
);


ALTER TABLE public.products OWNER TO postgres;

--
-- Name: request_products; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.request_products (
    request_id integer NOT NULL,
    product_id integer NOT NULL,
    qtd integer NOT NULL,
    price double precision NOT NULL,
    total double precision NOT NULL
);


ALTER TABLE public.request_products OWNER TO postgres;

--
-- Name: requests_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.requests_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.requests_id_seq OWNER TO postgres;

--
-- Name: requests; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.requests (
    id integer DEFAULT nextval('public.requests_id_seq'::regclass) NOT NULL,
    user_id integer NOT NULL,
    total double precision NOT NULL,
    rua character varying(255),
    numero character varying(10),
    bairro character varying(45),
    cidade character varying(45),
    estado character varying(2),
    cep character varying(8),
    created timestamp without time zone,
    modified timestamp without time zone,
    deleted timestamp without time zone
);


ALTER TABLE public.requests OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer DEFAULT nextval('public.users_id_seq'::regclass) NOT NULL,
    role_id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    rua character varying(255) DEFAULT NULL::character varying,
    numero character varying(10) DEFAULT NULL::character varying,
    bairro character varying(45) DEFAULT NULL::character varying,
    cidade character varying(45) DEFAULT NULL::character varying,
    estado character varying(2) DEFAULT NULL::character varying,
    cep character varying(8) DEFAULT NULL::character varying,
    created timestamp without time zone,
    modified timestamp without time zone,
    deleted timestamp without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Data for Name: carts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.carts (user_id, product_id, qtd, price, total) FROM stdin;
\.


--
-- Data for Name: categories; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.categories (id, name, created, modified, deleted) FROM stdin;
1	Camisetas	2022-08-13 12:04:12	2022-08-15 23:07:16.668553	\N
3	Relógios	2022-08-13 12:06:18	2022-08-15 23:07:25.227741	\N
2	Acessórios	2022-08-13 12:05:22	2022-08-15 23:07:37.97167	\N
4	Vestuário	2022-08-15 23:09:47.777808	2022-08-15 23:09:47.778049	\N
5	Copos	2022-08-15 23:13:10.181436	2022-08-15 23:13:10.181554	\N
\.


--
-- Data for Name: features; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.features (id, name, created, modified, deleted) FROM stdin;
1	Vermelho	2022-08-13 12:17:00	2022-08-15 23:24:21.952677	\N
5	Preto	2022-08-13 12:17:31	2022-08-15 23:24:28.618746	\N
4	Azul	2022-08-13 12:17:25	2022-08-15 23:24:34.65172	\N
3	Verde	2022-08-13 12:17:19	2022-08-15 23:24:41.850773	\N
2	Estampada	2022-08-13 12:17:13	2022-08-15 23:25:03.319142	\N
6	Sem Estampa	2022-08-15 23:25:15.916649	2022-08-15 23:25:15.916743	\N
\.


--
-- Data for Name: product_categories; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.product_categories (product_id, category_id) FROM stdin;
2	3
2	2
5	2
6	2
1	1
1	4
3	1
3	4
7	2
\.


--
-- Data for Name: product_features; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.product_features (product_id, feature_id) FROM stdin;
2	5
5	3
6	3
1	1
1	6
3	4
3	2
7	3
\.


--
-- Data for Name: products; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.products (id, name, description, imagem, price, created, modified, deleted) FROM stdin;
6	Capacete de Futebol Americano	Capacete de Futebol Americano	\N	149.9	2022-08-15 23:31:22.624394	2022-08-15 23:31:22.624527	2022-08-15 23:31:32
5	Capacete de Futebol Americano	Capacete de Futebol Americano	\N	149.9	2022-08-15 23:30:17.570409	2022-08-15 23:30:17.570557	2022-08-15 23:31:36
1	Camiseta Vermelha	Quantidade: 1 peça \r\nCor: Vermelha \r\nEstilo: Casual \r\nTipo de gola: Gola Redonda \r\nComprimento da Manga: Manga Curta \r\nComprimento: Regular \r\nMaterial: Algodão \r\nComposição: 94% Algodão, 6% Elastano	/product_images/1/img-1.png	75	2022-08-13 13:11:33	2022-08-15 23:32:28.42758	\N
2	Relógio inteligente redondo smartwatch feminino	Características: 1. Função de monitoramento de saúde: monitoramento do sono, monitoramento da frequência cardíaca, lembretes sedentários. Função padrão: contagem de passos, queima de calorias, distância. Este relógio tem muitas funções.3. Funções do corpo: exibição de tempo, exibição de data, temperatura e exibição de tempo. Boa qualidade: Este produto é feito de materiais de alta qualidade, acabamento requintado, muito boa qualidade e longa vida útil. Fácil instalação: este produto é muito fácil de instalar, não são necessárias ferramentas adicionais e o processo de instalação é muito conveniente. \r\nDescrição: Modos poliesportivos: podem ser usados para basquete, caminhada, escalada, tênis de mesa, badminton, futebol, ciclismo, etc. \r\nEspecificações: Modelo: D18 Plataforma aplicável: para plataforma Android, para plataforma Apple iOSTamanho da tela: 1,3 polegadasMaterial: Liga de zincoCapacidade da bateria: 150mAh Memória do corpo: 16mbMétodo de uso: pulseiraOperação: touchInterface: USB 2.0 Distância sem fio: 5m ( inclusive) -10m (inclusive) Função de comunicação: não suportado Material da pulseira: SiliconeColor: azul, preto, vermelho, roxo, verde \r\nIncluído no Pacote: 1 pc * Smart watch1 pc * Manual do usuário	/product_images/2/img-7.png	349.5	2022-08-13 18:56:23	2022-08-15 23:28:32.99283	\N
3	Camiseta Azul	Quantidade: 1 peça \r\nCor: Azul\r\nEstampa: Free T-Shirt Mockup \r\nEstilo: Casual \r\nTipo de gola: Gola Redonda \r\nComprimento da Manga: Manga Curta \r\nComprimento: Regular \r\nMaterial: Algodão \r\nComposição: 94% Algodão, 6% Elastano	/product_images/3/img-6.png	89.9	2022-08-13 19:00:30	2022-08-15 23:42:10.13023	\N
7	Capacete de Futebol Americano	Capacete de Futebol Americano	/product_images/7/img-5.png	149.9	2022-08-15 23:33:00.898905	2022-08-15 23:42:59.388225	\N
\.


--
-- Data for Name: request_products; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.request_products (request_id, product_id, qtd, price, total) FROM stdin;
12	1	1	1297	1297
12	2	1	69.9	69.9
12	3	3	697.5	2092.5
13	1	1	1297	1297
13	2	1	69.9	69.9
13	3	3	697.5	2092.5
14	1	1	1297	1297
14	2	1	69.9	69.9
14	3	3	697.5	2092.5
15	1	1	1297	1297
15	2	1	69.9	69.9
15	3	3	697.5	2092.5
16	1	1	1297	1297
16	2	1	69.9	69.9
16	3	3	697.5	2092.5
17	1	1	1297	1297
17	2	1	69.9	69.9
17	3	3	697.5	2092.5
18	2	1	69.9	69.9
18	3	1	697.5	697.5
19	1	1	1297	1297
19	3	1	697.5	697.5
20	3	1	697.5	697.5
21	1	2	1297	2594
21	2	2	69.9	139.8
21	3	2	697.5	1395
22	1	18	1297	23346
22	2	21	69.9	1467.9
22	3	11	697.5	7672.5
23	1	1	1297	1297
23	2	1	69.9	69.9
23	3	1	697.5	697.5
24	2	1	69.9	69.9
24	3	1	697.5	697.5
1	3	1	697.5	697.5
25	2	2	349.5	699
25	3	5	89.9	449.5
27	3	1	89.9	89.9
27	1	1	75	75
28	7	1	149.9	149.9
28	2	1	349.5	349.5
29	1	1	75	75
29	2	1	349.5	349.5
29	3	1	89.9	89.9
29	7	1	149.9	149.9
30	1	1	75	75
30	3	1	89.9	89.9
\.


--
-- Data for Name: requests; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.requests (id, user_id, total, rua, numero, bairro, cidade, estado, cep, created, modified, deleted) FROM stdin;
12	1	3459.4	\N	\N	\N	\N	\N	\N	2022-08-15 00:35:17	2022-08-15 00:35:17	\N
13	1	3459.4	\N	\N	\N	\N	\N	\N	2022-08-15 00:35:50	2022-08-15 00:35:50	\N
14	1	3459.4	\N	\N	\N	\N	\N	\N	2022-08-15 00:35:57	2022-08-15 00:35:57	\N
15	1	3459.4	\N	\N	\N	\N	\N	\N	2022-08-15 00:36:01	2022-08-15 00:36:01	\N
16	1	3459.4	\N	\N	\N	\N	\N	\N	2022-08-15 00:36:18	2022-08-15 00:36:18	\N
17	1	3459.4	\N	\N	\N	\N	\N	\N	2022-08-15 00:37:14	2022-08-15 00:37:14	\N
18	1	767.4	\N	\N	\N	\N	\N	\N	2022-08-15 01:15:44	2022-08-15 01:15:44	\N
19	8	1994.5	Rua Visconde da Parna▒ba	2340	Horto	Teresina	PI	64049570	2022-08-15 13:28:24	2022-08-15 13:28:24	\N
20	8	697.5	Francisco Lins da Trindade	2340	Horto	Teresina	PI	64049570	2022-08-15 13:32:45	2022-08-15 13:32:45	\N
21	1	4128.8	Rua Visconde da Parna▒ba	2340	Horto	Teresina	PI	64049-57	2022-08-15 17:26:58	2022-08-15 17:26:58	\N
22	1	32486.4	Rua Visconde da Parna▒ba	2340	Horto	Teresina	PI	64049-57	2022-08-15 19:13:51	2022-08-15 19:13:51	\N
23	1	2064.4	Rua Visconde da Parna▒ba	2340	Horto	Teresina	PI	64049-57	2022-08-15 19:16:46	2022-08-15 19:16:46	\N
24	1	767.4	Rua Visconde da Parna▒ba	2340	Horto	Teresina	PI	64049-57	2022-08-15 20:54:08	2022-08-15 20:54:08	\N
1	1	697.5	Rua Visconde da Parna▒ba	2340	Horto	Teresina	PI	64049-57	2022-08-15 22:56:35.507507	2022-08-15 22:56:35.50755	\N
25	1	1148.5	Rua Visconde da Parnaíba	2340	Horto	Teresina	PI	64049-57	2022-08-15 23:17:21.703747	2022-08-15 23:17:21.703777	\N
26	1	0	Rua Visconde da Parnaíba	2340	Horto	Teresina	PI	64049-57	2022-08-15 23:22:08.215875	2022-08-15 23:22:08.215913	\N
27	1	164.9	Rua Visconde da Parnaíba	2340	Horto	Teresina	PI	64049570	2022-08-15 23:23:58.030833	2022-08-15 23:23:58.030873	\N
28	1	499.4	Francisco Lins da Trindade	2340	Horto	Teresina	PI	64049570	2022-08-15 23:34:06.308872	2022-08-15 23:34:06.308929	\N
29	1	664.3	Francisco Lins da Trindade	2340	Horto	Teresina	PI	64049570	2022-08-15 23:48:13.217974	2022-08-15 23:48:13.218006	\N
30	4	164.9	Rua Firmino De Sousa Martins	2120	Uruguai	Teresina	PI	64.078-6	2022-08-15 23:55:26.71542	2022-08-15 23:55:26.715507	\N
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, role_id, name, email, password, rua, numero, bairro, cidade, estado, cep, created, modified, deleted) FROM stdin;
2	5	Junior da Dulce	emailteste@mail.com	$2y$10$IusQGxmmq5rMYyCfNF.1j.m8RGihb67Ip9Hbb2oZIZT39FeRlaAAq	\N	\N	\N	\N	\N	\N	2022-08-13 11:08:24	2022-08-13 11:41:33	\N
3	1	Thayana Regina	thayanareginaalmeida@gmail.com	$2y$10$jx7QZrgbJ5.A/t0Hfi3Pk.V.QF/yVeC6/AlDyAo9iJ4aYW/.ot34G	\N	\N	\N	\N	\N	\N	2022-08-13 12:09:50	2022-08-13 12:09:50	\N
5	5	Maria 23	maria@mail.com	$2y$10$0aufPNwsan/hV69KHKtuTOq64iX6oQRlDsayhBoX9z59gFJ9nU9vm	\N	\N	\N	\N	\N	\N	2022-08-15 13:01:42	2022-08-15 13:01:42	\N
6	5	asdasd	mads@mail.com	$2y$10$tZRQ0SgCJhq1pgqpRV8cZe9Jmx/hUMuhYvejzSwhjWEQLrehSxy.u	\N	\N	\N	\N	\N	\N	2022-08-15 13:02:36	2022-08-15 13:02:36	\N
7	5	asdfsdf	sdasd@mail.com	$2y$10$BimbO9TVuDTyrv81DZF6buEm3hKbrIhmHfNYUnFz.nsLDBFccYd0.	\N	\N	\N	\N	\N	\N	2022-08-15 13:03:02	2022-08-15 13:03:02	\N
8	5	Max	max@mail.com	$2y$10$KY/SMD5DtrovBgyAV3zIZu7wyzL43j7U0vLZwYOTlidL57KiWGmxW	Francisco Lins da Trindade	2340	Horto	Teresina	PI	64049570	2022-08-15 13:03:57	2022-08-15 13:32:45	\N
1	1	Alan Santos	santos.alansousa@gmail.com	$2y$10$DVsld5lCsAzkB.rMZTZ6pOxxcgVg0gYWL1LwzCzbHfU3jxUUceul6	Francisco Lins da Trindade	2340	Horto	Teresina	PI	64049570	2022-08-13 09:51:35	2022-08-15 23:48:13.216595	\N
4	5	Jo▒ozinho 20	joao@mail.com	$2y$10$xWmyRWEMBmLWHtvQswvIoePzbyAgB9MlYhARDRaxUWVKdsjXFnRMe	Rua Firmino De Sousa Martins	2120	Uruguai	Teresina	PI	64.078-6	2022-08-15 13:00:17	2022-08-15 23:55:26.713374	\N
9	1	Admin	admin@mail.com	$2y$10$PPTXYurERxD4lTomaxkU0O4nYaFKVpLouYW8at5BkoQb.cs1GVwQ6	\N	\N	\N	\N	\N	\N	2022-08-16 00:28:59.107913	2022-08-16 00:28:59.108068	\N
\.


--
-- Name: categories_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.categories_id_seq', 5, true);


--
-- Name: features_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.features_id_seq', 6, true);


--
-- Name: products_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.products_id_seq', 7, true);


--
-- Name: requests_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.requests_id_seq', 30, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 9, true);


--
-- Name: carts carts_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.carts
    ADD CONSTRAINT carts_pkey PRIMARY KEY (user_id, product_id);


--
-- Name: categories categories_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_pkey PRIMARY KEY (id);


--
-- Name: features features_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.features
    ADD CONSTRAINT features_pkey PRIMARY KEY (id);


--
-- Name: product_categories product_categories_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_categories
    ADD CONSTRAINT product_categories_pkey PRIMARY KEY (product_id, category_id);


--
-- Name: product_features product_features_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_features
    ADD CONSTRAINT product_features_pkey PRIMARY KEY (product_id, feature_id);


--
-- Name: products products_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);


--
-- Name: request_products request_products_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.request_products
    ADD CONSTRAINT request_products_pkey PRIMARY KEY (request_id, product_id);


--
-- Name: requests requests_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.requests
    ADD CONSTRAINT requests_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: request_products fk_order_has_products_order1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.request_products
    ADD CONSTRAINT fk_order_has_products_order1 FOREIGN KEY (request_id) REFERENCES public.requests(id);


--
-- Name: request_products fk_order_has_products_products1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.request_products
    ADD CONSTRAINT fk_order_has_products_products1 FOREIGN KEY (product_id) REFERENCES public.products(id);


--
-- Name: requests fk_order_users1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.requests
    ADD CONSTRAINT fk_order_users1 FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: product_categories fk_products_has_categories_categories1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_categories
    ADD CONSTRAINT fk_products_has_categories_categories1 FOREIGN KEY (category_id) REFERENCES public.categories(id);


--
-- Name: product_categories fk_products_has_categories_products1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_categories
    ADD CONSTRAINT fk_products_has_categories_products1 FOREIGN KEY (product_id) REFERENCES public.products(id);


--
-- Name: product_features fk_products_has_features_features1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_features
    ADD CONSTRAINT fk_products_has_features_features1 FOREIGN KEY (feature_id) REFERENCES public.features(id);


--
-- Name: product_features fk_products_has_features_products; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_features
    ADD CONSTRAINT fk_products_has_features_products FOREIGN KEY (product_id) REFERENCES public.products(id);


--
-- Name: carts fk_users_has_products_products1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.carts
    ADD CONSTRAINT fk_users_has_products_products1 FOREIGN KEY (product_id) REFERENCES public.products(id);


--
-- Name: carts fk_users_has_products_users1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.carts
    ADD CONSTRAINT fk_users_has_products_users1 FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- PostgreSQL database dump complete
--

