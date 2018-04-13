Hastighet
===============================

Här är redovisningen för uppgiften i kmom05 om laddningshastighet och användbarhet.

Då det inte handlade om att analysera utseende så använde jag mig bara av sidor jag tycker om.

Först skapade jag ett kalkylark i Google Kalkylark där jag skulle föra in all data. För varje sida gjorde jag en analys av sidan på PageSpeed. Sedan gick jag in på varje sida med Firefox Developer Edition och, med nätverksaktivitetslisten på granskningsverktyget uppe så gjorde jag en hård omladdning (ctrl + shift + r) och läste av värdena som jag fick. All data som jag fick från dessa moment förde jag in under rätt kolumn i arket.

**[Excelarket](https://docs.google.com/spreadsheets/d/1Z0EWPopQGXJ7plldsgRRW-_UaR_VHR1A-aTJUTZEWgw/edit?usp=sharing)**

##Webbplats 1, The Onion ##
[theonion.com](https://www.theonion.com/)

[theonion.com/about](https://www.theonion.com/about/)

[theonion.comc/video](https://www.theonion.com/c/video)

Mycket av det som läses in på sidan är skript, några väldigt stora. Förslagen som jag får för att förbättra sidan som jag själv anser vore bra för sidan är att ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten och att prioritera synligt innehåll. Sidan har väldigt hög höjd (12240px) och skulle därmed, tror jag, tjäna mycket på att ladda in det som kommer att visas högst upp i synliga fönstret först, eller kanske endast. 

De läser också in många resurser från annan webbplats (fonts, skript, bilder) och de hade kunnat lägga det på sin domän och möjligtvis se över om det finns skript som inte behövs eller ifall de läser in stora skriptfiler för att använda en liten del av de funktioner som finns. 

[FIGURE src="image/onion.jpg?cf&a=0,0,75,0"]

##Webbplats 2, Nedroid ##
[nedroid.com](http://nedroid.com/)

[nedroid.com/feed](http://nedroid.com/feed/)

[nedroid.com/about-2](http://nedroid.com/about-2/)

Sidan läser inte in varken många eller stora bilder men ligger i snitt över 6 sekunder laddningstid. Optimera bilder skulle hjälpa denna sida kan jag utröna från analysen samt att lägga js-kod längst ner på sidan för att inte förhindra bilder och innehåll från att läsas in. 

[FIGURE src="image/nedroid.png?cf&a=0,0,15,0"]

##Webbplats 3, Saturday Morning Breakfast Cereal ##
[smbc-comics.com](http://www.smbc-comics.com/)

[smbc-comics.com/comic/archive](http://www.smbc-comics.com/comic/archive)

[smbc-comics.com/smbcforum/](http://www.smbc-comics.com/smbcforum/)

Denna sidan laddar in väldigt många objekt (122) och således stor total filstorlek (2,23 MB). Sidan är väldigt bildtung och läser in många delar från andra sidor så jag tror att det hade varit en bra åtgärd att komprimera bilder och utnyttja cachelagring för att göra sidan snabbare.

[FIGURE src="image/smbc.png?cf&a=0,0,40,0"]

##Sammanfattning ##

Ingen av dessa sidor upplever jag som särskilt snabba sidor. De gemensamma förbättringsåtgärderna som oftast återkom var att optimera bilder och att placera js-skript under allt innehåll. Två enkla åtgärder som jag anser att webbutvecklare och webbdesigners borde göra av vana. 


1. [nedroid.com](http://nedroid.com/)
2. [theonion.com](https://www.theonion.com/)
3. [smbc-comics.com](http://www.smbc-comics.com/)

Nedroid har den kortaste laddningstiden varför den hamnade på förstaplats. Den har betydligt mindre innehåll än The Onion men nästan samma mängd som SMBC, som kom sist.

Min egen gräns för snabb laddningstid går nog vid 3 sekunder. Ingen av de webbplatser som jag analyserade kommer under tre sekunder på laddningstid. Däremot läser sidorna in majoriteten av innehållet så det går att läsa sidan men vissa iframes eller resurser utifrån står fortfarande och laddar efter tre sekunder. Så sidorna kan vara fullt läsbara, men inte helt färdigladdad.
