<?php 

/*These configs are neccessary in order to make Modern AAC work.*/

/*URL of website including http:// and without slash at the end! */
$config['website'] = $config['website'] = 'http://'.$_SERVER['HTTP_HOST'] . '/'.trim(dirname($_SERVER['SCRIPT_NAME']), '/.\\');


/*Database information*/
$config['database']['host'] = "localhost";
$config['database']['login'] = "root";
$config['database']['password'] = "";
$config['database']['database'] = "dbo";

/*Name of server*/
$config['server_name'] = "Dragon Ball War";

 
// Sistema automatico Pagseguro by Pernilonguildo
// Seu email cadastrado no pagseguro
$config['pagseguro']['email'] = 'Seu Email do pagseguro';
 
// Nome do Produto
$config['pagseguro']['produtoNome'] = 'Premium points';
 
// Valor unitario do produto ou seja valor de cada ponto
// Exemplo de valores
// 100 = R$ 1,00
// 235 = R$ 2,35
// 4254 = R$ 42,54
$config['pagseguro']['produtoValor'] = '100'; 
 
// Token gerado no painel do pagseguro
$config['pagseguro']['token'] = 'D2423F5162C847C0A159BA8E6A4AFCF0';  

/*End of most important configs*/

/* Simple ticket system */
$config['newsTickerLimit'] = 4; 
$config['newsTickerWords'] = 4; 

/*List of cities, declare by using city ID and name eg. 2=>"Eternia City" etc.*/
$config['cities'] = array(1=>'Terra');

/* Kill configuration */
$kills = array('Dende' => 2045, 'cave rat' => 3002, 'troll' => 3003, 'wyrm' => 9544, 'demon' => 9545);
$limit= 5;

/*List of vocation available to choose when creating new character*/
$config['vocations'] = array(
1=>"Goku", 
17=>"Vegeta", 
32=>"Piccolo", 
45=>"C17", 
57=>"Gohan", 
71=>"Trunks", 
83=>"Cell", 
95=>"Freeza", 
111=>"Majin Boo", 
127=>"Broly", 
140=>"C18", 
152=>"Uub", 
164=>"Goten", 
178=>"Chibi Trunks", 
192=>"Cooler", 
206=>"Dende", 
218=>"Tsuful", 
230=>"Bardock", 
244=>"Kuririn", 
256=>"Pan", 
268=>"Kaio", 
280=>"Videl", 
292=>"Janemba", 
304=>"Tenshinhan", 
316=>"Jenk", 
328=>"Raditz", 
340=>"C16", 
352=>"Turles", 
364=>"Bulma",
762=>"Putine",
540=>"Bills",
560=>"Whis",
615=>"Mira",
678=>"Yamcha");

/*List of vocation that exists on server*/
$config['server_vocations'] = array(
0=>"None", 
1=>"Goku", 
2=>"Goku", 
3=>"Goku", 
4=>"Goku", 
5=>"Goku", 
6=>"Goku", 
7=>"Goku", 
8=>"Goku", 
9=>"Goku", 
10=>"Goku", 
11=>"Goku", 
12=>"Goku", 
13=>"Goku", 
14=>"Goku", 
15=>"Goku", 
16=>"Goku", 
17=>"Vegeta", 
18=>"Vegeta", 
19=>"Vegeta", 
20=>"Vegeta", 
21=>"Vegeta", 
22=>"Vegeta", 
23=>"Vegeta", 
24=>"Vegeta", 
25=>"Vegeta", 
26=>"Vegeta", 
27=>"Vegeta", 
28=>"Vegeta", 
29=>"Vegeta", 
30=>"Vegeta", 
31=>"Vegeta", 
32=>"Piccolo", 
33=>"Piccolo", 
34=>"Piccolo", 
35=>"Piccolo", 
36=>"Piccolo", 
37=>"Piccolo", 
38=>"Piccolo", 
39=>"Piccolo", 
40=>"Piccolo", 
41=>"Piccolo", 
42=>"Piccolo", 
43=>"Piccolo", 
44=>"Piccolo", 
45=>"C17", 
46=>"C17", 
47=>"C17", 
48=>"C17", 
49=>"C17", 
50=>"C17", 
51=>"C17", 
52=>"C17", 
53=>"C17", 
54=>"C17", 
55=>"C17", 
56=>"C17", 
57=>"Gohan", 
58=>"Gohan", 
59=>"Gohan", 
60=>"Gohan", 
61=>"Gohan", 
62=>"Gohan", 
63=>"Gohan", 
64=>"Gohan", 
65=>"Gohan", 
66=>"Gohan", 
67=>"Gohan", 
68=>"Gohan", 
69=>"Gohan", 
70=>"Gohan", 
71=>"Trunks", 
72=>"Trunks", 
73=>"Trunks", 
74=>"Trunks", 
75=>"Trunks", 
76=>"Trunks", 
77=>"Trunks", 
78=>"Trunks", 
79=>"Trunks", 
80=>"Trunks", 
81=>"Trunks", 
82=>"Trunks", 
83=>"Cell", 
84=>"Cell", 
85=>"Cell", 
86=>"Cell", 
87=>"Cell", 
88=>"Cell", 
89=>"Cell", 
90=>"Cell", 
91=>"Cell", 
92=>"Cell", 
93=>"Cell", 
94=>"Cell", 
95=>"Freeza", 
96=>"Freeza", 
97=>"Freeza", 
98=>"Freeza", 
99=>"Freeza", 
100=>"Freeza", 
101=>"Freeza", 
102=>"Freeza", 
103=>"Freeza", 
104=>"Freeza", 
105=>"Freeza", 
106=>"Freeza", 
107=>"Freeza", 
108=>"Freeza", 
109=>"Freeza", 
110=>"Freeza", 
111=>"Majin Boo", 
112=>"Majin Boo", 
113=>"Majin Boo", 
114=>"Majin Boo", 
115=>"Majin Boo", 
116=>"Majin Boo", 
117=>"Majin Boo", 
118=>"Majin Boo", 
119=>"Majin Boo", 
120=>"Majin Boo", 
121=>"Majin Boo", 
122=>"Majin Boo", 
123=>"Majin Boo", 
124=>"Majin Boo", 
125=>"Majin Boo", 
126=>"Majin Boo", 
127=>"Broly", 
128=>"Broly", 
129=>"Broly", 
130=>"Broly", 
131=>"Broly", 
132=>"Broly", 
133=>"Broly", 
134=>"Broly", 
135=>"Broly", 
136=>"Broly", 
137=>"Broly", 
138=>"Broly", 
139=>"Broly", 
140=>"C18", 
141=>"C18", 
142=>"C18", 
143=>"C18", 
144=>"C18", 
145=>"C18", 
146=>"C18", 
147=>"C18", 
148=>"C18", 
149=>"C18", 
150=>"C18", 
151=>"C18", 
152=>"Uub", 
153=>"Uub", 
154=>"Uub", 
155=>"Uub", 
156=>"Uub", 
157=>"Uub", 
158=>"Uub", 
159=>"Uub", 
160=>"Uub", 
161=>"Uub", 
162=>"Uub", 
163=>"Uub", 
164=>"Goten", 
165=>"Goten", 
166=>"Goten", 
167=>"Goten", 
168=>"Goten", 
169=>"Goten", 
170=>"Goten", 
171=>"Goten", 
172=>"Goten", 
173=>"Goten", 
174=>"Goten", 
175=>"Goten", 
176=>"Goten", 
177=>"Goten", 
178=>"Chibi Trunks", 
179=>"Chibi Trunks", 
180=>"Chibi Trunks", 
181=>"Chibi Trunks", 
182=>"Chibi Trunks", 
183=>"Chibi Trunks", 
184=>"Chibi Trunks", 
185=>"Chibi Trunks", 
186=>"Chibi Trunks", 
187=>"Chibi Trunks", 
188=>"Chibi Trunks", 
189=>"Chibi Trunks", 
190=>"Chibi Trunks", 
191=>"Chibi Trunks", 
192=>"Cooler", 
193=>"Cooler", 
194=>"Cooler", 
195=>"Cooler", 
196=>"Cooler", 
197=>"Cooler", 
198=>"Cooler", 
199=>"Cooler", 
200=>"Cooler", 
201=>"Cooler", 
202=>"Cooler", 
203=>"Cooler", 
204=>"Cooler", 
205=>"Cooler", 
206=>"Dende", 
207=>"Dende", 
208=>"Dende", 
209=>"Dende", 
210=>"Dende", 
211=>"Dende", 
212=>"Dende", 
213=>"Dende", 
214=>"Dende", 
215=>"Dende", 
216=>"Dende", 
217=>"Dende", 
218=>"Tsuful", 
219=>"Tsuful", 
220=>"Tsuful", 
221=>"Tsuful", 
222=>"Tsuful", 
223=>"Tsuful", 
224=>"Tsuful", 
225=>"Tsuful", 
226=>"Tsuful", 
227=>"Tsuful", 
228=>"Tsuful", 
229=>"Tsuful", 
230=>"Bardock", 
231=>"Bardock", 
232=>"Bardock", 
233=>"Bardock", 
234=>"Bardock", 
235=>"Bardock", 
236=>"Bardock", 
237=>"Bardock", 
238=>"Bardock", 
239=>"Bardock", 
240=>"Bardock", 
241=>"Bardock", 
242=>"Bardock", 
243=>"Bardock", 
244=>"Kuririn", 
245=>"Kuririn", 
246=>"Kuririn", 
247=>"Kuririn", 
248=>"Kuririn", 
249=>"Kuririn", 
250=>"Kuririn", 
251=>"Kuririn", 
252=>"Kuririn", 
253=>"Kuririn", 
254=>"Kuririn", 
255=>"Kuririn", 
256=>"Pan", 
257=>"Pan", 
258=>"Pan", 
259=>"Pan", 
260=>"Pan", 
261=>"Pan", 
262=>"Pan", 
263=>"Pan", 
264=>"Pan", 
265=>"Pan", 
266=>"Pan", 
267=>"Pan", 
268=>"Kaio", 
269=>"Kaio", 
270=>"Kaio", 
271=>"Kaio", 
272=>"Kaio", 
273=>"Kaio", 
274=>"Kaio", 
275=>"Kaio", 
276=>"Kaio", 
277=>"Kaio", 
278=>"Kaio", 
279=>"Kaio", 
280=>"Videl", 
281=>"Videl", 
282=>"Videl", 
283=>"Videl", 
284=>"Videl", 
285=>"Videl", 
286=>"Videl", 
287=>"Videl", 
288=>"Videl", 
289=>"Videl", 
290=>"Videl", 
291=>"Videl", 
292=>"Janemba", 
293=>"Janemba", 
294=>"Janemba", 
295=>"Janemba", 
296=>"Janemba", 
297=>"Janemba", 
298=>"Janemba", 
299=>"Janemba", 
300=>"Janemba", 
301=>"Janemba", 
302=>"Janemba", 
303=>"Janemba", 
304=>"Tenshinhan", 
305=>"Tenshinhan", 
306=>"Tenshinhan", 
307=>"Tenshinhan", 
308=>"Tenshinhan", 
309=>"Tenshinhan", 
310=>"Tenshinhan", 
311=>"Tenshinhan", 
312=>"Tenshinhan", 
313=>"Tenshinhan", 
314=>"Tenshinhan", 
315=>"Tenshinhan", 
316=>"Jenk", 
317=>"Jenk", 
318=>"Jenk", 
319=>"Jenk", 
320=>"Jenk", 
321=>"Jenk", 
322=>"Jenk", 
323=>"Jenk", 
324=>"Jenk", 
325=>"Jenk", 
326=>"Jenk", 
327=>"Jenk", 
328=>"Raditz", 
329=>"Raditz", 
330=>"Raditz", 
331=>"Raditz", 
332=>"Raditz", 
333=>"Raditz", 
334=>"Raditz", 
335=>"Raditz", 
336=>"Raditz", 
337=>"Raditz", 
338=>"Raditz", 
339=>"Raditz", 
340=>"C16", 
341=>"C16", 
342=>"C16", 
343=>"C16", 
344=>"C16", 
345=>"C16", 
346=>"C16", 
347=>"C16", 
348=>"C16", 
349=>"C16", 
350=>"C16", 
351=>"C16", 
352=>"Turles", 
353=>"Turles", 
354=>"Turles", 
355=>"Turles", 
356=>"Turles", 
357=>"Turles", 
358=>"Turles", 
359=>"Turles", 
360=>"Turles", 
361=>"Turles", 
362=>"Turles", 
363=>"Turles", 
364=>"Bulma", 
365=>"Bulma", 
366=>"Bulma", 
367=>"Bulma", 
368=>"Bulma", 
369=>"Bulma", 
370=>"Bulma", 
371=>"Bulma", 
372=>"Bulma", 
373=>"Bulma", 
374=>"Bulma", 
375=>"Bulma", 
376=>"Shenron", 
377=>"Shenron", 
378=>"Shenron", 
379=>"Shenron", 
380=>"Shenron", 
381=>"Shenron", 
382=>"Shenron", 
383=>"Shenron", 
384=>"Shenron", 
385=>"Shenron", 
386=>"Shenron", 
387=>"Shenron", 
388=>"Vegetto", 
389=>"Vegetto", 
390=>"Vegetto", 
391=>"Vegetto", 
392=>"Vegetto", 
393=>"Vegetto", 
394=>"Vegetto", 
395=>"Vegetto", 
396=>"Vegetto", 
397=>"Vegetto", 
398=>"Vegetto", 
399=>"Vegetto", 
400=>"Tapion", 
401=>"Tapion", 
402=>"Tapion", 
403=>"Tapion", 
404=>"Tapion", 
405=>"Tapion", 
406=>"Tapion", 
407=>"Tapion", 
408=>"Tapion", 
409=>"Tapion", 
410=>"Tapion", 
411=>"Tapion", 
412=>"Tapion", 
413=>"Kame", 
414=>"Kame", 
415=>"Kame", 
416=>"Kame", 
417=>"Kame", 
418=>"Kame", 
419=>"Kame", 
420=>"Kame", 
421=>"Kame", 
422=>"Kame", 
423=>"Kame", 
424=>"Kame", 
425=>"King Vegeta", 
426=>"King Vegeta", 
427=>"King Vegeta", 
428=>"King Vegeta", 
429=>"King Vegeta", 
430=>"King Vegeta", 
431=>"King Vegeta", 
432=>"King Vegeta", 
433=>"King Vegeta", 
434=>"King Vegeta", 
435=>"King Vegeta", 
436=>"King Vegeta", 
437=>"Kagome", 
438=>"Kagome", 
439=>"Kagome", 
440=>"Kagome", 
441=>"Kagome", 
442=>"Kagome", 
443=>"Kagome", 
444=>"Kagome", 
445=>"Kagome", 
446=>"Kagome", 
447=>"Kagome", 
448=>"Kagome", 
449=>"Zaiko", 
450=>"Zaiko", 
451=>"Zaiko", 
452=>"Zaiko", 
453=>"Zaiko", 
454=>"Zaiko", 
455=>"Zaiko", 
456=>"Zaiko", 
457=>"Zaiko", 
458=>"Zaiko", 
459=>"Zaiko", 
460=>"Zaiko", 
461=>"Lord Chilled", 
462=>"Lord Chilled", 
463=>"Lord Chilled", 
464=>"Lord Chilled", 
465=>"Lord Chilled", 
466=>"Lord Chilled", 
467=>"Lord Chilled", 
468=>"Lord Chilled", 
469=>"Lord Chilled", 
470=>"Lord Chilled", 
471=>"Lord Chilled", 
472=>"Lord Chilled", 
473=>"Goku", 
474=>"Vegeta", 
475=>"Majin Boo", 
476=>"Tapion", 
477=>"Zaiko",
510=>"Hitto",
511=>"Hitto",
512=>"Hitto",
513=>"Hitto",
514=>"Hitto",
515=>"Hitto",
516=>"Hitto",
517=>"Hitto",
518=>"Hitto",
519=>"Hitto",
520=>"Hitto",
530=>"Goku Black",
531=>"Goku Black",
532=>"Goku Black",
533=>"Goku Black",
534=>"Goku Black",
535=>"Goku Black",
536=>"Goku Black",
537=>"Goku Black",
538=>"Goku Black",
539=>"Goku Black",
540=>"Goku Black",
541=>"Goku Black",
545=>"Kefla",
546=>"Kefla",
547=>"Kefla",
548=>"Kefla",
549=>"Kefla",
550=>"Kefla",
551=>"Kefla",
552=>"Kefla",
553=>"Kefla",
554=>"Kefla",
557=>"Broly Super",
558=>"Broly Super",
559=>"Broly Super",
560=>"Broly Super",
561=>"Broly Super",
562=>"Broly Super",
563=>"Broly Super",
564=>"Broly Super",
565=>"Broly Super",
567=>"Broly Super",
568=>"Broly Super",
569=>"Broly Super",
570=>"Whis",
571=>"Whis",
572=>"Whis",
573=>"Whis",
574=>"Whis",
575=>"Whis",
576=>"Whis",
577=>"Whis",
578=>"Whis",
579=>"Whis",
580=>"Whis",
581=>"Whis",
583=>"Paikuhan",
584=>"Paikuhan",
585=>"Paikuhan",
586=>"Paikuhan",
587=>"Paikuhan",
588=>"Paikuhan",
589=>"Paikuhan",
590=>"Paikuhan",
591=>"Paikuhan",
592=>"Paikuhan",
593=>"Paikuhan",
594=>"Paikuhan",
595=>"Bills",
596=>"Bills",
597=>"Bills",
598=>"Bills",
599=>"Bills",
600=>"Bills",
601=>"Bills",
602=>"Bills",
603=>"Bills",
604=>"Bills",
605=>"Bills",
606=>"Bills",
607=>"Goku Jr",
608=>"Goku Jr",
609=>"Goku Jr",
610=>"Goku Jr",
611=>"Goku Jr",
612=>"Goku Jr",
613=>"Goku Jr",
614=>"Goku Jr",
615=>"Goku Jr",
616=>"Goku Jr",
617=>"Goku Jr",
618=>"Goku Jr",
619=>"Jiren",
620=>"Jiren",
621=>"Jiren",
622=>"Jiren",
623=>"Jiren",
624=>"Jiren",
625=>"Jiren",
626=>"Jiren",
627=>"Jiren",
628=>"Jiren",
629=>"Jiren",
630=>"Jiren",
631=>"Zamasu",
632=>"Zamasu",
633=>"Zamasu",
634=>"Zamasu",
635=>"Zamasu",
636=>"Zamasu",
637=>"Zamasu",
638=>"Zamasu",
639=>"Zamasu",
640=>"Zamasu",
641=>"Zamasu",
642=>"Zamasu",
762=>"Putine",
763=>"Putine",
764=>"Putine",
765=>"Putine",
766=>"Putine",
767=>"Putine Reborn",
768=>"Putine Reborn",
769=>"Putine Reborn",
770=>"Putine Reborn",
771=>"Putine Reborn",
772=>"Putine Reborn",
773=>"Putine Reborn",
643=>"Yamcha",
644=>"Yamcha",
645=>"Yamcha",
646=>"Yamcha",
647=>"Yamcha",
648=>"Yamcha",
649=>"Yamcha",
650=>"Yamcha",
651=>"Yamcha",
652=>"Yamcha",
653=>"Yamcha",
654=>"Yamcha");


/*List of promotions, the key is vocation without promotion*/
$config['promotions'] = array(
1=>"Goku",
17=>"Vegeta",
32=>"Piccolo",
45=>"C17",
57=>"Gohan",
71=>"Trunks",
83=>"Cell", 
95=>"Freeza",
111=>"Majin Boo", 
127=>"Broly", 
140=>"C18", 
152=>"Uub", 
164=>"Goten",
178=>"Chibi Trunks", 
192=>"Cooler",
206=>"Dende", 
218=>"Tsuful",
230=>"Bardock", 
244=>"Kuririn", 
256=>"Pan", 
268=>"Kaio",
280=>"Videl",
292=>"Janemba",
304=>"Tenshinhan",
316=>"Jenk",
328=>"Raditz",
340=>"C16", 
352=>"Turles", 
364=>"Bulma",
643=>"Putine",
540=>"Bills",
560=>"Whis",
615=>"Mira",
678=>"Yamcha");

/*Resitricted names*/
$config['restricted_names'] = array("god", "gamemaster", "admin", "account manager");

/*Names with any of this value cannot be created*/
$config['invalidNameTags'] = array("god", "gm", "cm", "gamemaster", "hoster", "admin");


/*ID and names of worlds*/
$config['worlds'][0] = "Terra";

// Enable multiworld by uncommenting this
//$config['worlds'][1] = "Second World";

/* Addresses of each server */
$config['servers'][0] = array('address'=>'127.0.0.1', 'port'=>7171, 'vapusid'=>'<br />
<b>Notice</b>:  Undefined variable: vapusID in <b>C:\xampp\htdocs\modern\install\index.php</b> on line <b>143</b><br />
');

// Enable multiworld by uncommenting this
//$config['servers'][1] = array('address'=>'127.0.0.1', 'port'=>7173, 'vapusid' => 'XXX');

/*Groups that exists on server*/
$config['groups'] = array(0=>"Player", 1=>"Player", 2=>"Tutor", 3=>"Senior Tutor", 4=>"Gamemaster", 5=>"Community Manager", 6=>"God");

/*Names of vocations as in database as samples. First key is world id and second vocation id.*/
$config['newchar_vocations'][0][1] = "Goku Sample";
$config['newchar_vocations'][0][17] = "Vegeta Sample";
$config['newchar_vocations'][0][32] = "Piccolo Sample";
$config['newchar_vocations'][0][45] = "Dezessete Sample";
$config['newchar_vocations'][0][57] = "Gohan Sample";
$config['newchar_vocations'][0][71] = "Trunks Sample";
$config['newchar_vocations'][0][83] = "Cell Sample";
$config['newchar_vocations'][0][95] = "Freeza Sample";
$config['newchar_vocations'][0][111] = "Majin Boo Sample";
$config['newchar_vocations'][0][127] = "Broly Sample";
$config['newchar_vocations'][0][140] = "Dezoito Sample";
$config['newchar_vocations'][0][152] = "Uub Sample";
$config['newchar_vocations'][0][164] = "Goten Sample";
$config['newchar_vocations'][0][178] = "Chibi Trunks Sample";
$config['newchar_vocations'][0][192] = "Cooler Sample";
$config['newchar_vocations'][0][206] = "Dende Sample";
$config['newchar_vocations'][0][218] = "Tsuful Sample";
$config['newchar_vocations'][0][230] = "Bardock Sample";
$config['newchar_vocations'][0][244] = "Kuririn Sample";
$config['newchar_vocations'][0][256] = "Pan Sample";
$config['newchar_vocations'][0][268] = "Kaio Sample";
$config['newchar_vocations'][0][280] = "Videl Sample";
$config['newchar_vocations'][0][292] = "Janemba Sample";
$config['newchar_vocations'][0][304] = "Tenshinhan Sample";
$config['newchar_vocations'][0][316] = "Jenk Sample";
$config['newchar_vocations'][0][328] = "Raditz Sample";
$config['newchar_vocations'][0][340] = "Dezesseis Sample";
$config['newchar_vocations'][0][352] = "Turles Sample";
$config['newchar_vocations'][0][364] = "Bulma Sample";
$config['newchar_vocations'][0][678] = "Yamcha Sample";
$config['newchar_vocations'][0][762] = "Putine Sample";
$config['newchar_vocations'][0][540] = "Bills Sample";
$config['newchar_vocations'][0][560] = "Whis Sample";
$config['newchar_vocations'][0][615] = "Mira Sample";


/*Don't show chaarcters with group id higher than*/
$config['players_group_id_block'] = 3;


/*Mín. nível para criar guilda*/
$config['levelToCreateGuild'] = 400;


/*Limit of latest deaths*/
$config['latestdeathlimit'] = 20;

/*Limit news per page*/
$config['newsLimit'] = 10;

/*Limit comments per page*/
$config['commentLimit'] = 10;

/*Template that should be used on website*/
$config['layout'] = "DBo";

/*Title of a website*/
$config['title'] = ".::DBO War::.";


/*Premdays given when creating new account.*/
$config['premDays'] = 5;


/*Positions to start when creating character*/
$startPos['x'] = 656;
$startPos['y'] = 403;
$startPos['z'] = 7;


/*Trigger password for scaffolding system.*/
$config['scaffolding_trigger'] = "password";

/*Minimum page access for admin priviliges*/
$config['adminAccess'] = 5;

/*Max threads per page*/
$config['threadsLimit'] = 10;

/*Max posts per page in a thread*/
$config['postsLimit'] = 10;

/*Time between posts*/
$config['timeBetweenPosts'] = 30;

/*Limit of submissions per page in bug tracker*/
$config['bugtrackerPageLimit'] = 10;

/*Limit of houses on listing page*/
$config['housesLimit'] = 10;

/*Level to buy house*/
$config['houseLevel'] = 200;

/*Lenght of housing auction in seconds*/
$config['houseAuctionTime'] = 604800;

/*Default timezone*/
$config['timezone'] = "Europe/London";

/*Allowed IPs to use command prompt in admin panel*/
$config['allowedToUseCMD'] = array("127.0.0.1", "localhost");

/* Path to your UI theme */
$config['UItheme'] = "smoothness/jquery-ui-1.7.2.custom.css";

/*Destination to guilds logos folder, must be writable.*/
$config['uploads'] = "/public/guild_logos/";

/* Status timeout (recheck if server is online) */
$config['statusTimeout'] = 1 + (5 * 60); // Default to 5min

/* Wrap words longer than */
$config['wrap_words'] = 80;

/*Limit comments per page in videos view*/
$config['videoCommentsLimit'] = 10;

/*Limit of videos to show while searching*/
$config['videoSearchLimit'] = 10;

/*Maximum amount of characters per account*/
$config['maxCharacters'] = 15;

/*Limit of inbox/outbox messages per page*/
$config['messagesLimit'] = 10;

/*Amount of names to be saved when looking for characters*/
$config['characterSearchLimit'] = 10;

/*Switch on Admin Window*/
$config['adminWindow'] = false;

/*Integrate facebook to AAC? (TRUE/FALSE)*/
$config['facebook'] = true;

/*Max amount of saved actions*/
$config['actionsCount'] = 15;

/*Player per page in hishscore */
$config['highscore']['per_page'] = 20;

/*Total players to show in highscores*/
$config['highscore']['total'] = 10;


/* Guild board creation */
$config['guildboardTitle'] = "Guildboard for %NAME%";
$config['guildboardDescription'] = "This is the guildboard for the great %NAME% guild!";

/* VAPus Settings */
$config['VAPusGraphStep'] = 1; // step * update time = time steps on graph, etc 6 with an update time of 10min = one hour



//Enable delay between creating characters
$config['characterDelay'] = false;

//Time between creating characters in seconds
$config['characterDelayTime'] = 240;

//Enable delay between creating accounts
$config['accountDelay'] = false;

//Time between creating accounts in seconds
$config['accountDelayTime'] = 240;

//Account restrictions
$config['restrictedAccounts'] = array('1'); 

############EVENTS############

# Event fired just after main framework to gain access to all features
$config['onLoad'] = array();

# Event fired after all finished loading no headers should be sent
$config['onReady'] = array();


#############################

/*
######################################################################################################################
 * Do not touch any of the configs below if you are not 100% sure what you are doing!
 * These are config to the engine, usually the default ones works well so no change needed for unexperienced users.
######################################################################################################################
*/
// Tiny hack to figure if we use Windows or not.
if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') @define('USING_WINDOWS', 1);
else @define('USING_WINDOWS', 0);

if(USING_WINDOWS) $config['engine']['PHPversion'] = "5.3.0";
else $config['engine']['PHPversion'] = "5.3.0";
$config['engine']['indexPage'] = "index.php";
$config['engine']['uri_protocol'] = "AUTO";
$config['engine']['charSET'] = "UTF-8";
$config['engine']['enable_hooks'] = FALSE;
$config['engine']['permitted_uri_chars'] = "a-z 0-9~%.:_\-'+\\[\\]";
$config['engine']['enable_query_strings'] = FALSE;
$config['engine']['global_xss_filtering'] = TRUE;
$config['engine']['compress_output'] = FALSE;
$config['engine']['proxy_ip'] = "";
$config['engine']['autoload_libraries'] = array();
$config['engine']['autoload_helper'] = array();
$config['engine']['autoload_plugin'] = array();
$config['engine']['autoload_config'] = array();
$config['engine']['autoload_model'] = array();
$config['engine']['default_controller'] = "home";
$config['engine']['platforms'] = array('windows nt 6.0' => 'Windows Longhorn', 'windows nt 5.2' => 'Windows 2003', 'windows nt 5.0' => 'Windows 2000', 'windows nt 5.1' => 'Windows XP', 'windows nt 4.0' => 'Windows NT 4.0', 'winnt4.0' => 'Windows NT 4.0', 'winnt 4.0' => 'Windows NT', 'winnt' => 'Windows NT', 'windows 98' => 'Windows 98', 'win98' => 'Windows 98', 'windows 95' => 'Windows 95', 'win95' => 'Windows 95', 'windows' => 'Unknown Windows OS', 'os x' => 'Mac OS X', 'ppc mac' => 'Power PC Mac', 'freebsd' => 'FreeBSD', 'ppc' => 'Macintosh', 'linux' => 'Linux', 'debian' => 'Debian', 'sunos' => 'Sun Solaris', 'beos' => 'BeOS', 'apachebench' => 'ApacheBench', 'aix' => 'AIX', 'irix' => 'Irix', 'osf' => 'DEC OSF', 'hp-ux' => 'HP-UX', 'netbsd' => 'NetBSD', 'bsdi' => 'BSDi', 'openbsd' => 'OpenBSD', 'gnu' => 'GNU/Linux', 'unix' => 'Unknown Unix OS' );
$config['engine']['mobiles'] = array('mobileexplorer' => 'Mobile Explorer', 'palmsource' => 'Palm', 'palmscape' => 'Palmscape', 'motorola' => "Motorola", 'nokia' => "Nokia", 'palm' => "Palm", 'iphone' => "Apple iPhone", 'ipod' => "Apple iPod Touch", 'sony' => "Sony Ericsson", 'ericsson' => "Sony Ericsson", 'blackberry' => "BlackBerry", 'cocoon' => "O2 Cocoon", 'blazer' => "Treo", 'lg' => "LG", 'amoi' => "Amoi", 'xda' => "XDA", 'mda' => "MDA", 'vario' => "Vario", 'htc' => "HTC", 'samsung' => "Samsung", 'sharp' => "Sharp", 'sie-' => "Siemens", 'alcatel' => "Alcatel", 'benq' => "BenQ", 'ipaq' => "HP iPaq", 'mot-' => "Motorola", 'playstation portable' => "PlayStation Portable", 'hiptop' => "Danger Hiptop", 'nec-' => "NEC", 'panasonic' => "Panasonic", 'philips' => "Philips", 'sagem' => "Sagem", 'sanyo' => "Sanyo", 'spv' => "SPV", 'zte' => "ZTE", 'sendo' => "Sendo", 'symbian' => "Symbian", 'SymbianOS' => "SymbianOS", 'elaine' => "Palm", 'palm' => "Palm", 'series60' => "Symbian S60", 'windows ce' => "Windows CE", 'obigo' => "Obigo", 'netfront' => "Netfront Browser", 'openwave' => "Openwave Browser", 'mobilexplorer' => "Mobile Explorer", 'operamini' => "Opera Mini", 'opera mini' => "Opera Mini", 'digital paths' => "Digital Paths", 'avantgo' => "AvantGo", 'xiino' => "Xiino", 'novarra' => "Novarra Transcoder", 'vodafone' => "Vodafone", 'docomo' => "NTT DoCoMo", 'o2' => "O2", 'mobile' => "Generic Mobile", 'wireless' => "Generic Mobile", 'j2me' => "Generic Mobile", 'midp' => "Generic Mobile", 'cldc' => "Generic Mobile", 'up.link' => "Generic Mobile", 'up.browser' => "Generic Mobile", 'smartphone' => "Generic Mobile", 'cellphone' => "Generic Mobile" );
$config['engine']['robots'] = array('googlebot' => 'Googlebot', 'msnbot' => 'MSNBot', 'slurp' => 'Inktomi Slurp', 'yahoo' => 'Yahoo', 'askjeeves' => 'AskJeeves', 'fastcrawler' => 'FastCrawler', 'infoseek' => 'InfoSeek Robot 1.0', 'lycos' => 'Lycos' );
$config['engine']['browsers'] = array('Opera' => 'Opera', 'MSIE' => 'Internet Explorer', 'Internet Explorer' => 'Internet Explorer', 'Shiira' => 'Shiira', 'Firefox' => 'Firefox', 'Chimera' => 'Chimera', 'Phoenix' => 'Phoenix', 'Firebird' => 'Firebird', 'Camino' => 'Camino', 'Netscape' => 'Netscape', 'OmniWeb' => 'OmniWeb', 'Safari' => 'Safari', 'Mozilla' => 'Mozilla', 'Konqueror' => 'Konqueror', 'icab' => 'iCab', 'Lynx' => 'Lynx', 'Links' => 'Links', 'hotjava' => 'HotJava', 'amaya' => 'Amaya', 'IBrowse' => 'IBrowse' );
$config['engine']['mimes'] = array('hqx' => 'application/mac-binhex40', 'cpt' => 'application/mac-compactpro', 'csv' => array ('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel' ), 'bin' => 'application/macbinary', 'dms' => 'application/octet-stream', 'lha' => 'application/octet-stream', 'lzh' => 'application/octet-stream', 'exe' => 'application/octet-stream', 'class' => 'application/octet-stream', 'psd' => 'application/x-photoshop', 'so' => 'application/octet-stream', 'sea' => 'application/octet-stream', 'dll' => 'application/octet-stream', 'oda' => 'application/oda', 'pdf' => array ('application/pdf', 'application/x-download' ), 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'smi' => 'application/smil', 'smil' => 'application/smil', 'mif' => 'application/vnd.mif', 'xls' => array ('application/excel', 'application/vnd.ms-excel', 'application/msexcel' ), 'ppt' => array ('application/powerpoint', 'application/vnd.ms-powerpoint' ), 'wbxml' => 'application/wbxml', 'wmlc' => 'application/wmlc', 'dcr' => 'application/x-director', 'dir' => 'application/x-director', 'dxr' => 'application/x-director', 'dvi' => 'application/x-dvi', 'gtar' => 'application/x-gtar', 'gz' => 'application/x-gzip', 'php' => 'application/x-httpd-php', 'php4' => 'application/x-httpd-php', 'php3' => 'application/x-httpd-php', 'phtml' => 'application/x-httpd-php', 'phps' => 'application/x-httpd-php-source', 'js' => 'application/x-javascript', 'swf' => 'application/x-shockwave-flash', 'sit' => 'application/x-stuffit', 'tar' => 'application/x-tar', 'tgz' => 'application/x-tar', 'xhtml' => 'application/xhtml+xml', 'xht' => 'application/xhtml+xml', 'zip' => array ('application/x-zip', 'application/zip', 'application/x-zip-compressed' ), 'mid' => 'audio/midi', 'midi' => 'audio/midi', 'mpga' => 'audio/mpeg', 'mp2' => 'audio/mpeg', 'mp3' => array ('audio/mpeg', 'audio/mpg' ), 'aif' => 'audio/x-aiff', 'aiff' => 'audio/x-aiff', 'aifc' => 'audio/x-aiff', 'ram' => 'audio/x-pn-realaudio', 'rm' => 'audio/x-pn-realaudio', 'rpm' => 'audio/x-pn-realaudio-plugin', 'ra' => 'audio/x-realaudio', 'rv' => 'video/vnd.rn-realvideo', 'wav' => 'audio/x-wav', 'bmp' => 'image/bmp', 'gif' => 'image/gif', 'jpeg' => array ('image/jpeg', 'image/pjpeg' ), 'jpg' => array ('image/jpeg', 'image/pjpeg' ), 'jpe' => array ('image/jpeg', 'image/pjpeg' ), 'png' => array ('image/png', 'image/x-png' ), 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'css' => 'text/css', 'html' => 'text/html', 'htm' => 'text/html', 'shtml' => 'text/html', 'txt' => 'text/plain', 'text' => 'text/plain', 'log' => array ('text/plain', 'text/x-log' ), 'rtx' => 'text/richtext', 'rtf' => 'text/rtf', 'xml' => 'text/xml', 'xsl' => 'text/xml', 'mpeg' => 'video/mpeg', 'mpg' => 'video/mpeg', 'mpe' => 'video/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'avi' => 'video/x-msvideo', 'movie' => 'video/x-sgi-movie', 'doc' => 'application/msword', 'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'word' => array ('application/msword', 'application/octet-stream' ), 'xl' => 'application/excel', 'eml' => 'message/rfc822' );
$config['engine']['doctypes'] = array('xhtml11' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">', 'xhtml1-strict' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">', 'xhtml1-trans' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">', 'xhtml1-frame' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">', 'html5' => '<!DOCTYPE html>', 'html4-strict' => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">', 'html4-trans' => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">', 'html4-frame' => '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">' );
$config['engine']['url_suffix'] = ".ide";
$config['engine']['sess_cookie_name'] = 'ci_session';
$config['engine']['sess_expiration'] = 7200;
$config['engine']['sess_encrypt_cookie'] = FALSE;
$config['engine']['sess_use_database'] = FALSE;
$config['engine']['sess_table_name'] = 'ci_sessions';
$config['engine']['sess_match_ip'] = FALSE;
$config['engine']['sess_match_useragent'] = TRUE;
$config['engine']['sess_time_to_update'] = 300;
$config['engine']['rewrite_short_tags'] = false;
if(USING_WINDOWS == 1) {
//Load management is not available on Windows.
$config['engine']['loadManagement'] = false;
} else {
//Load management is a maximum ammount of processes website is using. If the website is flooded it will drop connection with users outside this amount.
$config['engine']['loadManagement'] = false;
$config['engine']['maxLoad'] = 60;
}

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to 
| determine what gets logged. Threshold options are:
| You can enable error logging by setting a threshold over zero. The
| threshold determines what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
*/
$config['engine']['log_threshold'] = 0;


#DON'T TOUCH! DECLARING CONSTANS!
@DEFINE('LEVELTOCREATEGUILD', $config['levelToCreateGuild']);
@DEFINE('PREMDAYS', $config['premDays']);
@DEFINE('HOSTNAME', $config['database']['host']);
@DEFINE('USERNAME', $config['database']['login']);
@DEFINE('PASSWORD', $config['database']['password']);
@DEFINE('DATABASE', $config['database']['database']);
@DEFINE('WEBSITE', $config['website']);
?>