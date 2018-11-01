--
-- PostgreSQL database dump
--

-- Dumped from database version 10.3
-- Dumped by pg_dump version 10.4

-- Started on 2018-08-26 12:19:18

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 2840 (class 0 OID 16420)
-- Dependencies: 199
-- Data for Name: asset_location; Type: TABLE DATA; Schema: asset; Owner: postgres
--

COPY asset.asset_location (location_id, location_name) FROM stdin;
AC	Stasiun Ancol
AK	Stasiun Angke
BKST	Stasiun Bekasi Timur
CW	Stasiun Cawang
DP	Stasiun Depok
DU	Stasiun Duri
KLDB	Stasiun Klender Baru
MJ	Stasiun Maja
PI	Stasiun Poris
PSMB	Stasiun Pasar Minggu Baru
RU	Stasiun Rawabuntu
RW	Stasiun Rawabuaya
SW	Stasiun Sawah Besar
UI	Stasiun Univ. Indonesia
UP	Stasiun Univ. Pancasila
BJD	Stasiun Bojonggede
BKS	Stasiun Bekasi
BOI	Stasiun Bojong Indah
BOO	Stasiun Bogor
BPR	Stasiun Batu Ceper
BUA	Stasiun Buaran
CBN	Stasiun Cibinong
CBT	Stasiun Cibitung
CCY	Stasiun Cicayur
CJT	Stasiun Cilejit
CKI	Stasiun Cikini
CKR	Stasiun Cikarang
CKY	Stasiun Cikoya
CLT	Stasiun Cilebut
CSK	Stasiun Cisauk
CTA	Stasiun Citayam
CUK	Stasiun Cakung
DAR	Stasiun Daru
DPB	Stasiun Depok Baru
DRN	Stasiun Duren Kalibata
GDD	Stasiun Gondangdia
GRG	Stasiun Grogol
GST	Stasiun Gangsentiong
JAK	Stasiun Jakarata Kota
JAY	Stasiun Jayakarta
JNG	Stasiun Jatinegara
JRU	Stasiun Jurangmangu
JUA	Stasiun Juanda
KBY	Stasiun Kebayoran
KDS	Stasiun Kalideres
KET	Stasiun Karet
KLD	Stasiun Klender
KMO	Stasiun Kemayoran
KMT	Stasiun Kramat
KPB	Stasiun Kampungbandan
KRI	Stasiun Kranji
LNA	Stasiun Lenteng Agung
MGB	Stasiun Mangga Besar
MRI	Stasiun Manggarai
NMO	Stasiun Nambo
PDJ	Stasiun Pondokranji
PLM	Stasiun Palmerah
POC	Stasiun Pondok Cina
POK	Stasiun Pondokjati
PRP	Stasiun Parungpanjang
PSE	Stasiun Pasar Senen
PSG	Stasiun Pesing
PSM	Stasiun Pasar Minggu
RJW	Stasiun Rajawali
SDM	Stasiun Sudimara
SRP	Stasiun Serpong
SUD	Stasiun Sudirman
TBN	Stasiun Tambun
TEB	Stasiun Tebet
TEJ	Stasiun Tenjo
THB	Stasiun Tanah Abang
TIG	Stasiun Tigaraksa
TKO	Stasiun Taman Kota
TNG	Stasiun Tangerang
TNT	Stasiun Tanjung Barat
TPK	Stasiun Tanjung Priok
TTI	Stasiun Tanah Tinggi
\.


--
-- TOC entry 2838 (class 0 OID 16398)
-- Dependencies: 197
-- Data for Name: asset_master; Type: TABLE DATA; Schema: asset; Owner: postgres
--

COPY asset.asset_master (id_master, name_asset, sn, merk, model, purchasing_date, status, supplier, attachment) FROM stdin;
26	Module SFP	123456789	TP-Link	Warna Kuning	2018-06-25	1	Telkom	RAB : xxxxxxx
43	RJ45	2132132	Mikrotik	CAT6	2017-11-30	1	Telkom	RAB : xxxxxxx
20	Mesin Finger	12135	ghgd	X401	2018-06-25	2	Telkom	RAB : xxxxxxx
9	Laptop	123456	Lenovo	Flex 3	1997-05-14	2	Telkom	RAB : xxxxxxx
16	Patch Core FO	123456	Mikrotik	SC	2015-11-30	1	Telkom	RAB : xxxxxxx
24	Pigtail	123456789	Mikrotik	FC	2018-06-25	1	Telkom	RAB : xxxxxxx
62	Laptop	SN123456	Dell	Inspiron 14	2018-07-22	5	PT. Bagas Sehat Sejahtera	RAB : xxx
69	Tang Crimping	CR658	Belden	CAT	2018-07-09	1	PT. Bagas Sehat Sejahtera	MI : xxx
67	Laptop	123456	Dell	Flex	2018-07-19	5	PT. Bagas Sehat Sejahtera	RAB : xxx
39	Patch Panel	123456	Tenda	xxx	2018-11-29	5	Telkom	RAB : xxxxxxx
65	CCTV	SN123	Hikvision	Bullet	2018-07-23	3	PT. Bagas Sehat Sejahtera	RAB : xxxx
\.


--
-- TOC entry 2843 (class 0 OID 16438)
-- Dependencies: 202
-- Data for Name: asset_status; Type: TABLE DATA; Schema: asset; Owner: postgres
--

COPY asset.asset_status (kode, keterangan) FROM stdin;
1    	Ready to Deploy
5    	Broken
2    	Deployed
3    	Deleted
\.


--
-- TOC entry 2847 (class 0 OID 16456)
-- Dependencies: 206
-- Data for Name: asset_transaction; Type: TABLE DATA; Schema: asset; Owner: postgres
--

COPY asset.asset_transaction (id_transaction, id_master, name_asset, ticket, checkout_date, note, location) FROM stdin;
30	9	Laptop	TD123	2018-07-04	Pemasangan	PSMB 
31	39	Patch Panel	KCI-	2018-07-23	Urgent	BOI  
\.


--
-- TOC entry 2842 (class 0 OID 16427)
-- Dependencies: 201
-- Data for Name: asset_user; Type: TABLE DATA; Schema: asset; Owner: postgres
--

COPY asset.asset_user (id, username, name, email, password) FROM stdin;
1	admin	Admin	dev@bagas.id	c93ccd78b2076528346216b3b2f701e6
\.


--
-- TOC entry 2845 (class 0 OID 16445)
-- Dependencies: 204
-- Data for Name: asset_vendor; Type: TABLE DATA; Schema: asset; Owner: postgres
--

COPY asset.asset_vendor (id_vendor, name_vendor, address) FROM stdin;
1	PT. Kereta Commuter Indonesia	Stasiun Juanda
2	PT. Bagas Sehat Sejahtera	Offices located at 1600 Amphitheatre Parkway, Mountain View, CA, 94043
\.


--
-- TOC entry 2878 (class 0 OID 0)
-- Dependencies: 198
-- Name: asset_master_id_master_seq; Type: SEQUENCE SET; Schema: asset; Owner: postgres
--

SELECT pg_catalog.setval('asset.asset_master_id_master_seq', 69, true);


--
-- TOC entry 2879 (class 0 OID 0)
-- Dependencies: 205
-- Name: asset_transaction_id_transaction_seq; Type: SEQUENCE SET; Schema: asset; Owner: postgres
--

SELECT pg_catalog.setval('asset.asset_transaction_id_transaction_seq', 31, true);


--
-- TOC entry 2880 (class 0 OID 0)
-- Dependencies: 200
-- Name: asset_user_id_seq; Type: SEQUENCE SET; Schema: asset; Owner: postgres
--

SELECT pg_catalog.setval('asset.asset_user_id_seq', 1, true);


--
-- TOC entry 2881 (class 0 OID 0)
-- Dependencies: 203
-- Name: asset_vendor_id_vendor_seq; Type: SEQUENCE SET; Schema: asset; Owner: postgres
--

SELECT pg_catalog.setval('asset.asset_vendor_id_vendor_seq', 2, true);


-- Completed on 2018-08-26 12:19:18

--
-- PostgreSQL database dump complete
--

