--
-- PostgreSQL database dump
--

-- Dumped from database version 15.2 (Debian 15.2-1.pgdg110+1)
-- Dumped by pg_dump version 15.2 (Debian 15.2-1.pgdg110+1)

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
-- Name: feedback; Type: TABLE; Schema: public; Owner: user
--

CREATE TABLE public.feedback (
    id bigint NOT NULL,
    email character varying,
    updated_at timestamp without time zone,
    created_at timestamp without time zone
);


ALTER TABLE public.feedback OWNER TO "user";

--
-- Name: feedback_id_seq; Type: SEQUENCE; Schema: public; Owner: user
--

ALTER TABLE public.feedback ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.feedback_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);


--
-- Data for Name: feedback; Type: TABLE DATA; Schema: public; Owner: user
--

COPY public.feedback (id, email, updated_at, created_at) FROM stdin;
1	1.1@example.com	2023-10-09 12:55:49	2023-10-09 12:55:49
2	1.1@example.com	2023-10-09 13:12:05	2023-10-09 13:12:05
3	1.1@example.com	2023-10-09 13:25:45	2023-10-09 13:25:45
4	1.1@example.com	2023-10-09 13:26:26	2023-10-09 13:26:26
5	1.1@example.com	2023-10-10 07:13:46	2023-10-10 07:13:46
6	1.1@example.com	2023-10-10 07:19:22	2023-10-10 07:19:22
\.


--
-- Name: feedback_id_seq; Type: SEQUENCE SET; Schema: public; Owner: user
--

SELECT pg_catalog.setval('public.feedback_id_seq', 6, true);


--
-- Name: feedback feedback_pkey; Type: CONSTRAINT; Schema: public; Owner: user
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

