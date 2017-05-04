<h2>Cardinal Number and Noun Conjugator</h2>

<p>In English, the rules for plurals of nouns after numbers are easy. If there's only one of them, you use the singular. Otherwise, you use the plural. In Russian, it's far more complicated. <a href="#rulesExplanationTableHeading">The rules for declining Russian numerals are explained here</a> following a number and noun conjugator which allows you to see any non-negative Russian numeral between 1 and 99 digits written in words and declined in all 6 cases with an optional noun to follow it.
</p>


<h3 style="color: #080;">Enter any number to decline and select a noun from the dropdown list...</h3>
<p>
You can type in any non-negative whole number you wish and select a noun from the dropdown box. As far as I'm aware and from extensive research, the numbers decline correctly.
</p>

<form>
	<span class="input-group">Number <input id="numberInput" type="number" min="0" step="1" value="" maxlength="99" /><span id="numberCategoryDesc"></span></span>
	<br/>
	<br/>
	<span class="input-group">Select noun<select id="nounSelection"></select></span>
	<br/>
	<br/>
	<span id="nounDetails">
		<span class="nounLiteral" class=""></span>
		<span class="nounGenderM" class="noun-gender hidden">masculine</span>
		<span class="nounGenderF" class="noun-gender hidden">feminine</span>
		<span class="nounGenderN" class="noun-gender hidden">neuter</span>
		<span class="nounAnimateYes" class="noun-animate hidden">animate</span>
		<span class="nounAnimateNo" class="noun-animate hidden">inanimate</span>
		<span class="nounAnimateNoInd" class="noun-animate hidden">inanimate, indeclinable</span>
	</span>
	<br/>
	<table id="autoDeclensionTable" class="language-table color-scheme2" border="0" cellspacing="1px" cellpadding="0">
		<colgroup>
		</colgroup>
		<tbody>
			<tr><td>Case</td><td class="singular hidden">Singular</td><td class="plural hidden">Plural</td><td class="with-number">Declination</td></tr>
			<tr><td>Nom</td><td class="nom-case singular hidden"></td><td class="nom-case plural hidden"></td><td class="nom-case with-number"></td></tr>
			<tr><td>Acc</td><td class="acc-case singular hidden"></td><td class="acc-case plural hidden"></td><td class="acc-case with-number"></td></tr>
			<tr><td>Gen</td><td class="gen-case singular hidden"></td><td class="gen-case plural hidden"></td><td class="gen-case with-number"></td></tr>
			<tr><td>Dat</td><td class="dat-case singular hidden"></td><td class="dat-case plural hidden"></td><td class="dat-case with-number"></td></tr>
			<tr><td>Ins</td><td class="ins-case singular hidden"></td><td class="ins-case plural hidden"></td><td class="ins-case with-number"></td></tr>
			<tr><td>Pre</td><td class="pre-case singular hidden"></td><td class="pre-case plural hidden"></td><td class="pre-case with-number"></td></tr>
		</tbody>
	</table>
</form>


<br/><br/>
<h3 id="rulesExplanationTableHeading" style="color: #800;">Rules for declining Russian nouns with numbers</h3>

<form>
<table id="rulesExplanationTable" class="language-table color-scheme3" border="0" cellspacing="1px" cellpadding="0">
	<tbody>
		<tr><td>Number ends with</td><td>Declination rule for nouns</td></tr>
		<tr><td>Any multiple of 1000 (including 0)</td><td>Genitive plural for all cases</td></tr>
		<tr><td>1 but not 11</td><td>Same case as the number and always singular. If the noun is masculine and animate then the number + noun is declined in the genitive case.</td></tr>
		<tr><td>2 ,3 or 4 but not 12, 13 or 14</td><td>Genitive singular for the nominative and accusative* cases<br/>Same case as the number and plural for the other cases</td></tr>
		<tr><td>5-20 or 0</td><td>Genitive plural for the nominative and accusative* cases<br/>Same case as the number and plural for the other cases</td></tr>
	</tbody>
</table>
</form>
<br/>
<p>* For some numbers, the accusative case is always the same as the nominative while for others, it takes the nominative for inanimate nouns and the genitive for animate nouns. For animate nouns, if a number word directly before it has the accusative form matching the genitive case, that number will be treated as a genitive for declining that noun. This rule for animacy affects only the final 3 digits of a number. For numbers longer than 3-digits (see rule below), all digits further to the left of this always have the accusative matching the nominative case.</p>
<p>
All small numbers (1-19, all multiples of 10 from 20-90 and all multiples of 100 from 100-900) decline independently from one another but all have the same case. This means that for say 934, this number is broken down into three small numbers, 900, 30 and 4 with the accusative form of each only influenced by the noun.
</p>

<h3 id="rulesExplanationTableHeading" style="color: #800;">Declining numbers with more than 3 digits</h3>
<p>
When declining any number, whether with or without a noun, you decline each group of 3 digits separately and follow each group (except for the rightmost) with a big number. A big number is any one-word number that begins with a 1 and ends in three or more 0's. These numbers (and ноль) are true nouns complete with gender, animacy (these numbers are all inanimate) and a singular and plural form. As a result, they themselves decline in exactly in exactly the same way as other nouns after any number between 1 and 999.
</p>
<p>
This may seem really confusing to you and so I will present you with an example. Let's say we type in <b>4235001542</b> and select 'же́нщина' from the nouns list. Firstly, we split the number up into it's 3-digit chunks and insert the appropriate big number after it or an optional noun for the last chunk. When splitting into chunks, <b>4,235,001,542</b> in this case, only the left-most group is allowed to be less than 3 digits. Please see the table below which shows you each chunk followed by the correct big number or noun. Each chunk is declined separately and independently as if they know nothing about the other chunks. 
</p>
<form>
	<table class="language-table color-scheme2" border="0" cellspacing="1px" cellpadding="0">
		<colgroup>
		</colgroup>
		<tbody>
			<tr><td>Case</td><td>миллиа́рд</td><td>миллио́н</td><td>ты́сяча</td><td>же́нщина</td></tr>
			<tr><td>Nom</td><td>4 <b>миллиа́рда</b></td><td>235 <b>миллио́нов</b></td><td>001 <b>ты́сяча</b></td><td>542 же́нщины</td></tr>
			<tr><td>Acc</td><td>4 <b>миллиа́рда</b></td><td>235 <b>миллио́нов</b></td><td>001 <b>ты́сячу</b></td><td>542 же́нщин</td></tr>
			<tr><td>Gen</td><td>4 <b>миллиа́рдов</b></td><td>235 <b>миллио́нов</b></td><td>001 <b>ты́сячи</b></td><td>542 же́нщин</td></tr>
			<tr><td>Dat</td><td>4 <b>миллиа́рдам</b></td><td>235 <b>миллио́нам</b></td><td>001 <b>ты́сяче</b></td><td>542 же́нщинам</td></tr>
			<tr><td>Ins</td><td>4 <b>миллиа́рдами</b></td><td>235 <b>миллио́нами</b></td><td>001 <b>ты́сячей</b></td><td>542 же́нщинами</td></tr>
			<tr><td>Pre</td><td>4 <b>миллиа́рдах</b></td><td>235 <b>миллио́нах</b></td><td>001 <b>ты́сяче</b></td><td>542 же́нщинах</td></tr>
		</tbody>
	</table>
</form>
<br/>
<p>
After each group is declined, you simply join each group together to get.<br/>
</p>
<form>
	<table class="language-table color-scheme2" border="0" cellspacing="1px" cellpadding="0">
		<colgroup>
		</colgroup>
		<tbody>
			<tr><td>Case</td><td>Declination</td></tr>
			<tr><td>Nom</td><td>четы́ре <b>миллиа́рда</b> две́сти три́дцать пять <b>миллио́нов</b> <b>ты́сяча</b> пятьсо́т со́рок две <b>же́нщины</b></td></tr>
			<tr><td>Acc</td><td>четы́ре <b>миллиа́рда</b> две́сти три́дцать пять <b>миллио́нов</b> <b>ты́сячу</b> пятисо́т со́рок двух <b>же́нщин</b></td></tr>
			<tr><td>Gen</td><td>четырёх <b>миллиа́рдов</b> двухсо́т тридцати́ пяти́ <b>миллио́нов</b> <b>ты́сячи</b> пятисо́т сорока́ двух <b>же́нщин</b></td></tr>
			<tr><td>Dat</td><td>четырём <b>миллиа́рдам</b> двумста́м тридцати́ пяти́ <b>миллио́нам</b> <b>ты́сяче</b> пятиста́м сорока́ двум <b>же́нщинам</b></td></tr>
			<tr><td>Ins</td><td>четырьмя́ <b>миллиа́рдами</b> двумяста́ми тридцатью́ пятью́ <b>миллио́нами</b> <b>ты́сячей</b> пятьюста́ми сорока́ двумя́ <b>же́нщинами</b></td></tr>
			<tr><td>Pre</td><td>четырёх <b>миллиа́рдах</b> двухста́х тридцати́ пяти́ <b>миллио́нах</b> <b>ты́сяче</b> пятиста́х сорока́ двух <b>же́нщинах</b></td></tr>
		</tbody>
	</table>
</form>
<br/>
<p>
Obviously, the numbers have been tidied up into the correct format. For each chunk with a big number, if there's only one of them, you use that big number without any number in front of it. If there are none, then that group is not written at all. For the noun at the end, you always write it regardless of the whole number and always write the number chunk except for ноль. ноль is only ever written when there are exactly zero of that noun.
</p>
<h3 id="rulesExplanationTableHeading" style="color: #800;">Conclusion</h3>
<p>The rules above have been simplified to make it easier to understand. I feel it's best to learn some known rules combined with seeing practical examples which display the results. Being able to see what you think is right is reassurance that you interpreted the rules correctly and therefore confidence boosting.
</p>

<script type="text/javascript">
	var smallNumbers = {
		'0mfn': { 'nom':'ноль','acc-in':'ноль','acc-an':'ноль','gen':'нуля́','dat':'нулю́','ins':'нулём','pre':'нуле́','literal':'0', }, 	'1m': { 'nom':'оди́н','acc-in':'оди́н','acc-an':'одного́','gen':'одного́','dat':'одному́','ins':'одни́м','pre':'одно́м','literal':'1', }, 	'1f': { 'nom':'одна́','acc-in':'одну́','acc-an':'одну́','gen':'одной','dat':'одно́й','ins':'одно́й','pre':'одно́й','literal':'1', }, 	'1n': { 'nom':'одно́','acc-in':'одно́','acc-an':'одно́','gen':'одного́','dat':'одному́','ins':'одни́м','pre':'одно́м','literal':'1', }, 	'2mn': { 'nom':'два','acc-in':'два','acc-an':'двух','gen':'двух','dat':'двум','ins':'двумя́','pre':'двух','literal':'2', }, 	'2f': { 'nom':'две','acc-in':'две','acc-an':'двух','gen':'двух','dat':'двум','ins':'двумя́','pre':'двух','literal':'2', }, 	'3mfn': { 'nom':'три','acc-in':'три','acc-an':'трёх','gen':'трёх','dat':'трём','ins':'тремя́','pre':'трёх','literal':'3', }, 	'4mfn': { 'nom':'четы́ре','acc-in':'четы́ре','acc-an':'четырёх','gen':'четырёх','dat':'четырём','ins':'четырьмя́','pre':'четырёх','literal':'4', }, 	'5mfn': { 'nom':'пять','acc-in':'пять','acc-an':'пять','gen':'пяти́','dat':'пяти́','ins':'пятью́','pre':'пяти́','literal':'5', }, 	'6mfn': { 'nom':'шесть','acc-in':'шесть','acc-an':'шесть','gen':'шести́','dat':'шести́','ins':'шестью́','pre':'шести́','literal':'6', }, 	'7mfn': { 'nom':'семь','acc-in':'семь','acc-an':'семь','gen':'семи́','dat':'семи́','ins':'семью́','pre':'семи́','literal':'7', }, 	'8mfn': { 'nom':'во́семь','acc-in':'во́семь','acc-an':'во́семь','gen':'восьми́','dat':'восьми́','ins':'восемью́','pre':'восьми́','literal':'8', }, 	'9mfn': { 'nom':'де́вять','acc-in':'де́вять','acc-an':'де́вять','gen':'девяти́','dat':'девяти́','ins':'девятью́','pre':'девяти́','literal':'9', }, 	'10mfn': { 'nom':'де́сять','acc-in':'де́сять','acc-an':'де́сять','gen':'десяти́','dat':'десяти́','ins':'десятью́','pre':'десяти́','literal':'10', }, 	'11mfn': { 'nom':'оди́ннадцать','acc-in':'оди́ннадцать','acc-an':'оди́ннадцать','gen':'оди́ннадцати','dat':'оди́ннадцати','ins':'оди́ннадцатью','pre':'оди́ннадцати','literal':'11', }, 	'12mfn': { 'nom':'двена́дцать','acc-in':'двена́дцать','acc-an':'двена́дцать','gen':'двена́дцати','dat':'двена́дцати','ins':'двена́дцатью','pre':'двена́дцати','literal':'12', }, 	'13mfn': { 'nom':'трина́дцать','acc-in':'трина́дцать','acc-an':'трина́дцать','gen':'трина́дцати','dat':'трина́дцати','ins':'трина́дцатью','pre':'трина́дцати','literal':'13', }, 	'14mfn': { 'nom':'четы́рнадцать','acc-in':'четы́рнадцать','acc-an':'четы́рнадцать','gen':'четы́рнадцати','dat':'четы́рнадцати','ins':'четы́рнадцатью','pre':'четы́рнадцати','literal':'14', }, 	'15mfn': { 'nom':'пятна́дцать','acc-in':'пятна́дцать','acc-an':'пятна́дцать','gen':'пятна́дцати','dat':'пятна́дцати','ins':'пятна́дцатью','pre':'пятна́дцати','literal':'15', }, 	'16mfn': { 'nom':'шестна́дцать','acc-in':'шестна́дцать','acc-an':'шестна́дцать','gen':'шестна́дцати','dat':'шестна́дцати','ins':'шестна́дцатью','pre':'шестна́дцати','literal':'16', }, 	'17mfn': { 'nom':'семна́дцать','acc-in':'семна́дцать','acc-an':'семна́дцать','gen':'семна́дцати','dat':'семна́дцати','ins':'семна́дцатью','pre':'семна́дцати','literal':'17', }, 	'18mfn': { 'nom':'восемна́дцать','acc-in':'восемна́дцать','acc-an':'восемна́дцать','gen':'восемна́дцати','dat':'восемна́дцати','ins':'восемна́дцатью','pre':'восемна́дцати','literal':'18', }, 	'19mfn': { 'nom':'девятна́дцать','acc-in':'девятна́дцать','acc-an':'девятна́дцать','gen':'девятна́дцати','dat':'девятна́дцати','ins':'девятна́дцатью','pre':'девятна́дцати','literal':'19', }, 	'20mfn': { 'nom':'два́дцать','acc-in':'два́дцать','acc-an':'два́дцать','gen':'двадцати́','dat':'двадцати́','ins':'двадцатью́','pre':'двадцати́','literal':'20', }, 	'30mfn': { 'nom':'три́дцать','acc-in':'три́дцать','acc-an':'три́дцать','gen':'тридцати́','dat':'тридцати́','ins':'тридцатью́','pre':'тридцати́','literal':'30', }, 	'40mfn': { 'nom':'со́рок','acc-in':'со́рок','acc-an':'со́рок','gen':'сорока́','dat':'сорока́','ins':'сорока́','pre':'сорока́','literal':'40', }, 	'50mfn': { 'nom':'пятьдеся́т','acc-in':'пятьдеся́т','acc-an':'пятьдеся́т','gen':'пяти́десяти','dat':'пяти́десяти','ins':'пятью́десятью','pre':'пяти́десяти','literal':'50', }, 	'60mfn': { 'nom':'шестьдеся́т','acc-in':'шестьдеся́т','acc-an':'шестьдеся́т','gen':'шести́десяти','dat':'шести́десяти','ins':'шестью́десятью','pre':'шести́десяти','literal':'60', }, 	'70mfn': { 'nom':'се́мьдесят','acc-in':'се́мьдесят','acc-an':'се́мьдесят','gen':'семи́десяти','dat':'семи́десяти','ins':'семью́десятью','pre':'семи́десяти','literal':'70', }, 	'80mfn': { 'nom':'во́семьдесят','acc-in':'во́семьдесят','acc-an':'во́семьдесят','gen':'восьми́десяти','dat':'восьми́десяти','ins':'восемью́десятью','pre':'восьми́десяти','literal':'80', }, 	'90mfn': { 'nom':'девяно́сто','acc-in':'девяно́сто','acc-an':'девяно́сто','gen':'девяно́ста','dat':'девяно́ста','ins':'девяно́ста','pre':'девяно́ста','literal':'90', }, 	'100mfn': { 'nom':'сто','acc-in':'сто','acc-an':'ста','gen':'ста','dat':'ста','ins':'ста','pre':'ста','literal':'100', }, 	'200mfn': { 'nom':'две́сти','acc-in':'две́сти','acc-an':'двухсо́т','gen':'двухсо́т','dat':'двумста́м','ins':'двумяста́ми','pre':'двухста́х','literal':'200', }, 	'300mfn': { 'nom':'три́ста','acc-in':'три́ста','acc-an':'трёхсо́т','gen':'трёхсо́т','dat':'трёмста́м','ins':'тремяста́ми','pre':'трёхста́х','literal':'300', }, 	'400mfn': { 'nom':'четы́реста','acc-in':'четы́реста','acc-an':'четырёхсо́т','gen':'четырёхсо́т','dat':'четырёмста́м','ins':'четырьмя́ста́ми','pre':'четырёхста́х','literal':'400', }, 	'500mfn': { 'nom':'пятьсо́т','acc-in':'пятьсо́т','acc-an':'пятисо́т','gen':'пятисо́т','dat':'пятиста́м','ins':'пятьюста́ми','pre':'пятиста́х','literal':'500', }, 	'600mfn': { 'nom':'шестьсо́т','acc-in':'шестьсо́т','acc-an':'шести́со́т','gen':'шести́со́т','dat':'шести́ста́м','ins':'шестью́ста́ми','pre':'шести́ста́х','literal':'600', }, 	'700mfn': { 'nom':'семьсо́т','acc-in':'семьсо́т','acc-an':'семи́со́т','gen':'семи́со́т','dat':'семи́ста́м','ins':'семью́ста́ми','pre':'семи́ста́х','literal':'700', }, 	'800mfn': { 'nom':'восемьсо́т','acc-in':'восемьсо́т','acc-an':'восьми́со́т','gen':'восьми́со́т','dat':'восьми́ста́м','ins':'восемью́ста́ми','pre':'восьми́ста́х','literal':'800', }, 	'900mfn': { 'nom':'девятьсо́т','acc-in':'девятьсо́т','acc-an':'девяти́со́т','gen':'девяти́со́т','dat':'девяти́ста́м','ins':'девятью́ста́ми','pre':'девяти́ста́х','literal':'900', },
	};

	var bigNumbers = {
		'10^3': { 'nom-s':'ты́сяча','acc-s':'ты́сячу','gen-s':'ты́сячи','dat-s':'ты́сяче','ins-s':'ты́сячей','pre-s':'ты́сяче','nom-p':'ты́сячи','acc-p':'ты́сячи','gen-p':'ты́сяч','dat-p':'ты́сячам','ins-p':'ты́сячами','pre-p':'ты́сячах','gender':'f','animate':'in', }, 	'10^6': { 'nom-s':'миллио́н','acc-s':'миллио́н','gen-s':'миллио́на','dat-s':'миллио́ну','ins-s':'миллио́ном','pre-s':'миллио́не','nom-p':'миллио́ны','acc-p':'миллио́ны','gen-p':'миллио́нов','dat-p':'миллио́нам','ins-p':'миллио́нами','pre-p':'миллио́нах','gender':'m','animate':'in', }, 	'10^9': { 'nom-s':'миллиа́рд','acc-s':'миллиа́рд','gen-s':'миллиа́рда','dat-s':'миллиа́рду','ins-s':'миллиа́рдом','pre-s':'миллиа́рде','nom-p':'миллиа́рды','acc-p':'миллиа́рды','gen-p':'миллиа́рдов','dat-p':'миллиа́рдам','ins-p':'миллиа́рдами','pre-p':'миллиа́рдах','gender':'m','animate':'in', }, 	'10^12': { 'nom-s':'триллио́н','acc-s':'триллио́н','gen-s':'триллио́на','dat-s':'триллио́ну','ins-s':'триллио́ном','pre-s':'триллио́не','nom-p':'триллио́ны','acc-p':'триллио́ны','gen-p':'триллио́нов','dat-p':'триллио́нам','ins-p':'триллио́нами','pre-p':'триллио́нах','gender':'m','animate':'in', }, 	'10^15': { 'nom-s':'квадриллио́н','acc-s':'квадриллио́н','gen-s':'квадриллио́на','dat-s':'квадриллио́ну','ins-s':'квадриллио́ном','pre-s':'квадриллио́не','nom-p':'квадриллио́ны','acc-p':'квадриллио́ны','gen-p':'квадриллио́нов','dat-p':'квадриллио́нам','ins-p':'квадриллио́нами','pre-p':'квадриллио́нах','gender':'m','animate':'in', }, 	'10^18': { 'nom-s':'квинтиллио́н','acc-s':'квинтиллио́н','gen-s':'квинтиллио́на','dat-s':'квинтиллио́ну','ins-s':'квинтиллио́ном','pre-s':'квинтиллио́не','nom-p':'квинтиллио́ны','acc-p':'квинтиллио́ны','gen-p':'квинтиллио́нов','dat-p':'квинтиллио́нам','ins-p':'квинтиллио́нами','pre-p':'квинтиллио́нах','gender':'m','animate':'in', }, 	'10^21': { 'nom-s':'секстиллио́н','acc-s':'секстиллио́н','gen-s':'секстиллио́на','dat-s':'секстиллио́ну','ins-s':'секстиллио́ном','pre-s':'секстиллио́не','nom-p':'секстиллио́ны','acc-p':'секстиллио́ны','gen-p':'секстиллио́нов','dat-p':'секстиллио́нам','ins-p':'секстиллио́нами','pre-p':'секстиллио́нах','gender':'m','animate':'in', }, 	'10^24': { 'nom-s':'септиллио́н','acc-s':'септиллио́н','gen-s':'септиллио́на','dat-s':'септиллио́ну','ins-s':'септиллио́ном','pre-s':'септиллио́не','nom-p':'септиллио́ны','acc-p':'септиллио́ны','gen-p':'септиллио́нов','dat-p':'септиллио́нам','ins-p':'септиллио́нами','pre-p':'септиллио́нах','gender':'m','animate':'in', }, 	'10^27': { 'nom-s':'октиллио́н','acc-s':'октиллио́н','gen-s':'октиллио́на','dat-s':'октиллио́ну','ins-s':'октиллио́ном','pre-s':'октиллио́не','nom-p':'октиллио́ны','acc-p':'октиллио́ны','gen-p':'октиллио́нов','dat-p':'октиллио́нам','ins-p':'октиллио́нами','pre-p':'октиллио́нах','gender':'m','animate':'in', }, 	'10^30': { 'nom-s':'нониллио́н','acc-s':'нониллио́н','gen-s':'нониллио́на','dat-s':'нониллио́ну','ins-s':'нониллио́ном','pre-s':'нониллио́не','nom-p':'нониллио́ны','acc-p':'нониллио́ны','gen-p':'нониллио́нов','dat-p':'нониллио́нам','ins-p':'нониллио́нами','pre-p':'нониллио́нах','gender':'m','animate':'in', }, 	'10^33': { 'nom-s':'дециллио́н','acc-s':'дециллио́н','gen-s':'дециллио́на','dat-s':'дециллио́ну','ins-s':'дециллио́ном','pre-s':'дециллио́не','nom-p':'дециллио́ны','acc-p':'дециллио́ны','gen-p':'дециллио́нов','dat-p':'дециллио́нам','ins-p':'дециллио́нами','pre-p':'дециллио́нах','gender':'m','animate':'in', }, 	'10^36': { 'nom-s':'ундециллио́н','acc-s':'ундециллио́н','gen-s':'ундециллио́на','dat-s':'ундециллио́ну','ins-s':'ундециллио́ном','pre-s':'ундециллио́не','nom-p':'ундециллио́ны','acc-p':'ундециллио́ны','gen-p':'ундециллио́нов','dat-p':'ундециллио́нам','ins-p':'ундециллио́нами','pre-p':'ундециллио́нах','gender':'m','animate':'in', }, 	'10^39': { 'nom-s':'додециллио́н','acc-s':'додециллио́н','gen-s':'додециллио́на','dat-s':'додециллио́ну','ins-s':'додециллио́ном','pre-s':'додециллио́не','nom-p':'додециллио́ны','acc-p':'додециллио́ны','gen-p':'додециллио́нов','dat-p':'додециллио́нам','ins-p':'додециллио́нами','pre-p':'додециллио́нах','gender':'m','animate':'in', }, 	'10^42': { 'nom-s':'тредециллио́н','acc-s':'тредециллио́н','gen-s':'тредециллио́на','dat-s':'тредециллио́ну','ins-s':'тредециллио́ном','pre-s':'тредециллио́не','nom-p':'тредециллио́ны','acc-p':'тредециллио́ны','gen-p':'тредециллио́нов','dat-p':'тредециллио́нам','ins-p':'тредециллио́нами','pre-p':'тредециллио́нах','gender':'m','animate':'in', }, 	'10^45': { 'nom-s':'кваттуордециллио́н','acc-s':'кваттуордециллио́н','gen-s':'кваттуордециллио́на','dat-s':'кваттуордециллио́ну','ins-s':'кваттуордециллио́ном','pre-s':'кваттуордециллио́не','nom-p':'кваттуордециллио́ны','acc-p':'кваттуордециллио́ны','gen-p':'кваттуордециллио́нов','dat-p':'кваттуордециллио́нам','ins-p':'кваттуордециллио́нами','pre-p':'кваттуордециллио́нах','gender':'m','animate':'in', }, 	'10^48': { 'nom-s':'квиндециллио́н','acc-s':'квиндециллио́н','gen-s':'квиндециллио́на','dat-s':'квиндециллио́ну','ins-s':'квиндециллио́ном','pre-s':'квиндециллио́не','nom-p':'квиндециллио́ны','acc-p':'квиндециллио́ны','gen-p':'квиндециллио́нов','dat-p':'квиндециллио́нам','ins-p':'квиндециллио́нами','pre-p':'квиндециллио́нах','gender':'m','animate':'in', }, 	'10^51': { 'nom-s':'cедециллио́н','acc-s':'cедециллио́н','gen-s':'cедециллио́на','dat-s':'cедециллио́ну','ins-s':'cедециллио́ном','pre-s':'cедециллио́не','nom-p':'cедециллио́ны','acc-p':'cедециллио́ны','gen-p':'cедециллио́нов','dat-p':'cедециллио́нам','ins-p':'cедециллио́нами','pre-p':'cедециллио́нах','gender':'m','animate':'in', }, 	'10^54': { 'nom-s':'септдециллио́н','acc-s':'септдециллио́н','gen-s':'септдециллио́на','dat-s':'септдециллио́ну','ins-s':'септдециллио́ном','pre-s':'септдециллио́не','nom-p':'септдециллио́ны','acc-p':'септдециллио́ны','gen-p':'септдециллио́нов','dat-p':'септдециллио́нам','ins-p':'септдециллио́нами','pre-p':'септдециллио́нах','gender':'m','animate':'in', }, 	'10^57': { 'nom-s':'дуодевигинтиллио́н','acc-s':'дуодевигинтиллио́н','gen-s':'дуодевигинтиллио́на','dat-s':'дуодевигинтиллио́ну','ins-s':'дуодевигинтиллио́ном','pre-s':'дуодевигинтиллио́не','nom-p':'дуодевигинтиллио́ны','acc-p':'дуодевигинтиллио́ны','gen-p':'дуодевигинтиллио́нов','dat-p':'дуодевигинтиллио́нам','ins-p':'дуодевигинтиллио́нами','pre-p':'дуодевигинтиллио́нах','gender':'m','animate':'in', }, 	'10^60': { 'nom-s':'ундевигинтиллио́н','acc-s':'ундевигинтиллио́н','gen-s':'ундевигинтиллио́на','dat-s':'ундевигинтиллио́ну','ins-s':'ундевигинтиллио́ном','pre-s':'ундевигинтиллио́не','nom-p':'ундевигинтиллио́ны','acc-p':'ундевигинтиллио́ны','gen-p':'ундевигинтиллио́нов','dat-p':'ундевигинтиллио́нам','ins-p':'ундевигинтиллио́нами','pre-p':'ундевигинтиллио́нах','gender':'m','animate':'in', }, 	'10^63': { 'nom-s':'вигинтиллио́н','acc-s':'вигинтиллио́н','gen-s':'вигинтиллио́на','dat-s':'вигинтиллио́ну','ins-s':'вигинтиллио́ном','pre-s':'вигинтиллио́не','nom-p':'вигинтиллио́ны','acc-p':'вигинтиллио́ны','gen-p':'вигинтиллио́нов','dat-p':'вигинтиллио́нам','ins-p':'вигинтиллио́нами','pre-p':'вигинтиллио́нах','gender':'m','animate':'in', }, 	'10^66': { 'nom-s':'анвигинтиллио́н','acc-s':'анвигинтиллио́н','gen-s':'анвигинтиллио́на','dat-s':'анвигинтиллио́ну','ins-s':'анвигинтиллио́ном','pre-s':'анвигинтиллио́не','nom-p':'анвигинтиллио́ны','acc-p':'анвигинтиллио́ны','gen-p':'анвигинтиллио́нов','dat-p':'анвигинтиллио́нам','ins-p':'анвигинтиллио́нами','pre-p':'анвигинтиллио́нах','gender':'m','animate':'in', }, 	'10^69': { 'nom-s':'дуовигинтиллио́н','acc-s':'дуовигинтиллио́н','gen-s':'дуовигинтиллио́на','dat-s':'дуовигинтиллио́ну','ins-s':'дуовигинтиллио́ном','pre-s':'дуовигинтиллио́не','nom-p':'дуовигинтиллио́ны','acc-p':'дуовигинтиллио́ны','gen-p':'дуовигинтиллио́нов','dat-p':'дуовигинтиллио́нам','ins-p':'дуовигинтиллио́нами','pre-p':'дуовигинтиллио́нах','gender':'m','animate':'in', }, 	'10^72': { 'nom-s':'тревигинтиллио́н','acc-s':'тревигинтиллио́н','gen-s':'тревигинтиллио́на','dat-s':'тревигинтиллио́ну','ins-s':'тревигинтиллио́ном','pre-s':'тревигинтиллио́не','nom-p':'тревигинтиллио́ны','acc-p':'тревигинтиллио́ны','gen-p':'тревигинтиллио́нов','dat-p':'тревигинтиллио́нам','ins-p':'тревигинтиллио́нами','pre-p':'тревигинтиллио́нах','gender':'m','animate':'in', }, 	'10^75': { 'nom-s':'кватторвигинтиллио́н','acc-s':'кватторвигинтиллио́н','gen-s':'кватторвигинтиллио́на','dat-s':'кватторвигинтиллио́ну','ins-s':'кватторвигинтиллио́ном','pre-s':'кватторвигинтиллио́не','nom-p':'кватторвигинтиллио́ны','acc-p':'кватторвигинтиллио́ны','gen-p':'кватторвигинтиллио́нов','dat-p':'кватторвигинтиллио́нам','ins-p':'кватторвигинтиллио́нами','pre-p':'кватторвигинтиллио́нах','gender':'m','animate':'in', }, 	'10^78': { 'nom-s':'квинвигинтиллио́н','acc-s':'квинвигинтиллио́н','gen-s':'квинвигинтиллио́на','dat-s':'квинвигинтиллио́ну','ins-s':'квинвигинтиллио́ном','pre-s':'квинвигинтиллио́не','nom-p':'квинвигинтиллио́ны','acc-p':'квинвигинтиллио́ны','gen-p':'квинвигинтиллио́нов','dat-p':'квинвигинтиллио́нам','ins-p':'квинвигинтиллио́нами','pre-p':'квинвигинтиллио́нах','gender':'m','animate':'in', }, 	'10^81': { 'nom-s':'сексвигинтиллио́н','acc-s':'сексвигинтиллио́н','gen-s':'сексвигинтиллио́на','dat-s':'сексвигинтиллио́ну','ins-s':'сексвигинтиллио́ном','pre-s':'сексвигинтиллио́не','nom-p':'сексвигинтиллио́ны','acc-p':'сексвигинтиллио́ны','gen-p':'сексвигинтиллио́нов','dat-p':'сексвигинтиллио́нам','ins-p':'сексвигинтиллио́нами','pre-p':'сексвигинтиллио́нах','gender':'m','animate':'in', }, 	'10^84': { 'nom-s':'септемвигинтиллио́н','acc-s':'септемвигинтиллио́н','gen-s':'септемвигинтиллио́на','dat-s':'септемвигинтиллио́ну','ins-s':'септемвигинтиллио́ном','pre-s':'септемвигинтиллио́не','nom-p':'септемвигинтиллио́ны','acc-p':'септемвигинтиллио́ны','gen-p':'септемвигинтиллио́нов','dat-p':'септемвигинтиллио́нам','ins-p':'септемвигинтиллио́нами','pre-p':'септемвигинтиллио́нах','gender':'m','animate':'in', }, 	'10^87': { 'nom-s':'октовигинтиллио́н','acc-s':'октовигинтиллио́н','gen-s':'октовигинтиллио́на','dat-s':'октовигинтиллио́ну','ins-s':'октовигинтиллио́ном','pre-s':'октовигинтиллио́не','nom-p':'октовигинтиллио́ны','acc-p':'октовигинтиллио́ны','gen-p':'октовигинтиллио́нов','dat-p':'октовигинтиллио́нам','ins-p':'октовигинтиллио́нами','pre-p':'октовигинтиллио́нах','gender':'m','animate':'in', }, 	'10^90': { 'nom-s':'новемвигинтиллио́н','acc-s':'новемвигинтиллио́н','gen-s':'новемвигинтиллио́на','dat-s':'новемвигинтиллио́ну','ins-s':'новемвигинтиллио́ном','pre-s':'новемвигинтиллио́не','nom-p':'новемвигинтиллио́ны','acc-p':'новемвигинтиллио́ны','gen-p':'новемвигинтиллио́нов','dat-p':'новемвигинтиллио́нам','ins-p':'новемвигинтиллио́нами','pre-p':'новемвигинтиллио́нах','gender':'m','animate':'in', }, 	'10^93': { 'nom-s':'тригинтиллио́н','acc-s':'тригинтиллио́н','gen-s':'тригинтиллио́на','dat-s':'тригинтиллио́ну','ins-s':'тригинтиллио́ном','pre-s':'тригинтиллио́не','nom-p':'тригинтиллио́ны','acc-p':'тригинтиллио́ны','gen-p':'тригинтиллио́нов','dat-p':'тригинтиллио́нам','ins-p':'тригинтиллио́нами','pre-p':'тригинтиллио́нах','gender':'m','animate':'in', }, 	'10^96': { 'nom-s':'антригинтиллио́н','acc-s':'антригинтиллио́н','gen-s':'антригинтиллио́на','dat-s':'антригинтиллио́ну','ins-s':'антригинтиллио́ном','pre-s':'антригинтиллио́не','nom-p':'антригинтиллио́ны','acc-p':'антригинтиллио́ны','gen-p':'антригинтиллио́нов','dat-p':'антригинтиллио́нам','ins-p':'антригинтиллио́нами','pre-p':'антригинтиллио́нах','gender':'m','animate':'in', }, 

	};

	var exampleNouns = {
		0: { 'nom-s':'же́нщина','acc-s':'же́нщину','gen-s':'же́нщины','dat-s':'же́нщине','ins-s':'же́нщиной','pre-s':'же́нщине','nom-p':'же́нщины','acc-p':'же́нщин','gen-p':'же́нщин','dat-p':'же́нщинам','ins-p':'же́нщинами','pre-p':'же́нщинах','gender':'f','animate':'an','english':'lady', }, 	1: { 'nom-s':'мужчи́на','acc-s':'мужчи́ну','gen-s':'мужчи́ны','dat-s':'мужчи́не','ins-s':'мужчи́ной','pre-s':'мужчи́не','nom-p':'мужчи́ны','acc-p':'мужчи́н','gen-p':'мужчи́н','dat-p':'мужчи́нам','ins-p':'мужчи́нами','pre-p':'мужчи́нах','gender':'m','animate':'an','english':'man', }, 	2: { 'nom-s':'де́вочка','acc-s':'де́вочку','gen-s':'де́вочки','dat-s':'де́вочке','ins-s':'де́вочкой','pre-s':'де́вочке','nom-p':'де́вочки','acc-p':'де́вочек','gen-p':'де́вочек','dat-p':'де́вочкам','ins-p':'де́вочками','pre-p':'де́вочках','gender':'f','animate':'an','english':'girl', }, 	3: { 'nom-s':'ма́льчик','acc-s':'ма́льчика','gen-s':'ма́льчика','dat-s':'ма́льчику','ins-s':'ма́льчиком','pre-s':'ма́льчике','nom-p':'ма́льчики','acc-p':'ма́льчиков','gen-p':'ма́льчиков','dat-p':'ма́льчикам','ins-p':'ма́льчиками','pre-p':'ма́льчиках','gender':'m','animate':'an','english':'boy', }, 	4: { 'nom-s':'праде́душка','acc-s':'праде́душку','gen-s':'праде́душки','dat-s':'праде́душке','ins-s':'праде́душкой','pre-s':'праде́душке','nom-p':'праде́душки','acc-p':'праде́душек','gen-p':'праде́душек','dat-p':'праде́душкам','ins-p':'праде́душками','pre-p':'праде́душках','gender':'m','animate':'an','english':'great-grandfather', }, 	5: { 'nom-s':'почита́тель','acc-s':'почита́теля','gen-s':'почита́теля','dat-s':'почита́телю','ins-s':'почита́телем','pre-s':'почита́теле','nom-p':'почита́тели','acc-p':'почита́телей','gen-p':'почита́телей','dat-p':'почита́телям','ins-p':'почита́телями','pre-p':'почита́телях','gender':'m','animate':'an','english':'admirer', }, 	6: { 'nom-s':'снеги́рь','acc-s':'снегиря́','gen-s':'снегиря́','dat-s':'снегирю́','ins-s':'снегирём','pre-s':'снегире́','nom-p':'снегири́','acc-p':'снегире́й','gen-p':'снегире́й','dat-p':'снегиря́м','ins-p':'снегиря́ми','pre-p':'снегиря́х','gender':'m','animate':'an','english':'bullfinch', }, 	7: { 'nom-s':'мали́новка','acc-s':'мали́новку','gen-s':'мали́новки','dat-s':'мали́новке','ins-s':'мали́новкой','pre-s':'мали́новке','nom-p':'мали́новки','acc-p':'мали́новок','gen-p':'мали́новок','dat-p':'мали́новкам','ins-p':'мали́новками','pre-p':'мали́новках','gender':'f','animate':'an','english':'robin', }, 	8: { 'nom-s':'бана́н','acc-s':'бана́н','gen-s':'бана́на','dat-s':'бана́ну','ins-s':'бана́ном','pre-s':'бана́не','nom-p':'бана́ны','acc-p':'бана́ны','gen-p':'бана́нов','dat-p':'бана́нам','ins-p':'бана́нами','pre-p':'бана́нах','gender':'m','animate':'in','english':'banana', }, 	9: { 'nom-s':'я́блоко','acc-s':'я́блоко','gen-s':'я́блока','dat-s':'я́блоку','ins-s':'я́блоком','pre-s':'я́блоке','nom-p':'я́блоки','acc-p':'я́блоки','gen-p':'я́блок','dat-p':'я́блокам','ins-p':'я́блоками','pre-p':'я́блоках','gender':'n','animate':'in','english':'apple', }, 	10: { 'nom-s':'гру́ша','acc-s':'гру́шу','gen-s':'гру́ши','dat-s':'гру́ше','ins-s':'гру́шей','pre-s':'гру́ше','nom-p':'гру́ши','acc-p':'гру́ши','gen-p':'груш','dat-p':'гру́шам','ins-p':'гру́шами','pre-p':'гру́шах','gender':'f','animate':'in','english':'pear', }, 	11: { 'nom-s':'меню́','acc-s':'меню́','gen-s':'меню́','dat-s':'меню́','ins-s':'меню́','pre-s':'меню́','nom-p':'меню́','acc-p':'меню́','gen-p':'меню́','dat-p':'меню́','ins-p':'меню́','pre-p':'меню́','gender':'n','animate':'in-i','english':'menu', }, 	12: { 'nom-s':'сло́во','acc-s':'сло́во','gen-s':'сло́ва','dat-s':'сло́ву','ins-s':'сло́вом','pre-s':'сло́ве','nom-p':'слова́','acc-p':'слова́','gen-p':'слов','dat-p':'слова́м','ins-p':'слова́ми','pre-p':'слова́х','gender':'n','animate':'in','english':'word', }, 	13: { 'nom-s':'бу́ква','acc-s':'бу́кву','gen-s':'бу́квы','dat-s':'бу́кве','ins-s':'бу́квой','pre-s':'бу́кве','nom-p':'бу́квы','acc-p':'бу́квы','gen-p':'букв','dat-p':'бу́квам','ins-p':'бу́квами','pre-p':'бу́квах','gender':'f','animate':'in','english':'letter', }, 	14: { 'nom-s':'сто́л','acc-s':'сто́л','gen-s':'стола́','dat-s':'столу́','ins-s':'столо́м','pre-s':'столе́','nom-p':'столы́','acc-p':'столы́','gen-p':'столо́в','dat-p':'стола́м','ins-p':'стола́ми','pre-p':'стола́х','gender':'m','animate':'in','english':'table', }, 	15: { 'nom-s':'потоло́к','acc-s':'потоло́к','gen-s':'потолка́','dat-s':'потолку́','ins-s':'потолко́м','pre-s':'потолке́','nom-p':'потолки́','acc-p':'потолки́','gen-p':'потолко́в','dat-p':'потолка́м','ins-p':'потолка́ми','pre-p':'потолка́х','gender':'m','animate':'in','english':'ceiling', }, 	16: { 'nom-s':'две́рь','acc-s':'две́рь','gen-s':'две́ри','dat-s':'две́ри','ins-s':'две́рью','pre-s':'две́ри','nom-p':'две́ри','acc-p':'две́ри','gen-p':'двере́й','dat-p':'дверя́м','ins-p':'дверя́ми|дверьми́','pre-p':'дверя́х','gender':'f','animate':'in','english':'door', }, 	17: { 'nom-s':'такси́','acc-s':'такси́','gen-s':'такси́','dat-s':'такси́','ins-s':'такси́','pre-s':'такси́','nom-p':'такси́','acc-p':'такси́','gen-p':'такси́','dat-p':'такси́','ins-p':'такси́','pre-p':'такси́','gender':'n','animate':'in-i','english':'taxi', }, 	18: { 'nom-s':'поцелу́й','acc-s':'поцелу́й','gen-s':'поцелу́я','dat-s':'поцелу́ю','ins-s':'поцелу́ем','pre-s':'поцелу́е','nom-p':'поцелу́и','acc-p':'поцелу́и','gen-p':'поцелу́ев','dat-p':'поцелу́ям','ins-p':'поцелу́ями','pre-p':'поцелу́ях','gender':'m','animate':'in','english':'kiss', }, 	19: { 'nom-s':'цига́рка','acc-s':'цига́рку','gen-s':'цига́рки','dat-s':'цига́рке','ins-s':'цига́ркой','pre-s':'цига́рке','nom-p':'цига́рки','acc-p':'цига́рки','gen-p':'цига́рок','dat-p':'цига́ркам','ins-p':'цига́рками','pre-p':'цига́рках','gender':'f','animate':'in','english':'cigarette', }, 	20: { 'nom-s':'ро́г','acc-s':'ро́г','gen-s':'ро́га','dat-s':'ро́гу','ins-s':'ро́гом','pre-s':'ро́ге','nom-p':'рога́','acc-p':'рога́','gen-p':'рого́в','dat-p':'рога́м','ins-p':'рога́ми','pre-p':'рога́х','gender':'m','animate':'in','english':'horn', }, 	21: { 'nom-s':'электро́н','acc-s':'электро́н','gen-s':'электро́на','dat-s':'электро́ну','ins-s':'электро́ном','pre-s':'электро́не','nom-p':'электро́ны','acc-p':'электро́ны','gen-p':'электро́нов','dat-p':'электро́нам','ins-p':'электро́нами','pre-p':'электро́нах','gender':'m','animate':'in','english':'electron', }, 	22: { 'nom-s':'волокно́','acc-s':'волокно́','gen-s':'волокна́','dat-s':'волокну́','ins-s':'волокно́м','pre-s':'волокне́','nom-p':'воло́кна','acc-p':'воло́кна','gen-p':'воло́кон','dat-p':'воло́кнам','ins-p':'воло́кнами','pre-p':'воло́кнах','gender':'n','animate':'in','english':'fibre', }, 

	};
	
	function splitNumberInto3DigitGroups(numberStr) {
		var numberSplit = numberStr.split('');

		var numberOfGroups = (numberSplit.length+2 - ((numberSplit.length+2)%3)) / 3;

		var groups = new Array(numberOfGroups);

		var groupIndex = numberOfGroups - 1;

		for (var i=numberSplit.length-1; i>=0; i-=3) {

			var currentGroup = "";

			// For 1 remaining digit on the left
			if (i==0) {
				currentGroup = numberSplit[0];
			}
			// For 2 remaining digits on the left
			else if (i==1) {
				currentGroup = numberSplit[0] + numberSplit[1];
			}
			// Otherwise for a group of 3 digits with the ith place on the right.
			else {
				currentGroup = numberSplit[i-2] + numberSplit[i-1] + numberSplit[i];
			}

			groups[groupIndex] = currentGroup;

			groupIndex--;
		}

		return groups;
	}

	/**
		Returns the digits that 
	*/
	function getNumberEnding(threeDigitNumberStr) {
	
		// If a number is less than 3 digits then 0's are inserted on the left to fill it up
		if (threeDigitNumberStr.length == 1) {
			threeDigitNumberStr = "00" + threeDigitNumberStr;
		}
		else if (threeDigitNumberStr.length == 2) {
			threeDigitNumberStr = "0" + threeDigitNumberStr;
		}

		var numberSplit = threeDigitNumberStr.split('');
		
		var numberEnding;

		// If number is a is three 0s then return a single 0.
		if (threeDigitNumberStr == "000") {
			numberEnding = "0";
		}
		// If number is a teen.
		else if (numberSplit[1] == "1") {
			numberEnding = "1" + numberSplit[2];
		}
		// Otherwise if last digit isn't a 0.
		else if (numberSplit[2] != "0") {
			numberEnding = numberSplit[2];
		}
		// Otherwise, if a multiple of 10 but not 100
		else if (numberSplit[1] != "0") {
			numberEnding = numberSplit[1] + "0";
		}
		// Otherwise if a multiple of 100.
		else {
			numberEnding = numberSplit[0] + "00";
		}

		return numberEnding;
	}


	function getRussianNumberDeclensions(numberStr, gender) {
	
		var numberKey;
	
		if (numberStr == "1") {
			if (gender == "m") numberKey = "1m";
			else if (gender == "f") numberKey = "1f";
			else if (gender == "n") numberKey = "1n";
		}
		else if (numberStr == "2") {
			if (gender == "m") numberKey = "2mn";
			else if (gender == "f") numberKey = "2f";
			else if (gender == "n") numberKey = "2mn";
		}
		else {
			numberKey = numberStr + "mfn";
		}
		
		return smallNumbers[numberKey];
	}


	function getRussianNumberWithNounInWords(wholeNumberBrokenDown, mainWord) {
	
		var thousandToPowerOf = wholeNumberBrokenDown.length - 1;
	
		var allWordGroups = new Array();
	
		for (var i=0; i<wholeNumberBrokenDown.length; i++) {
			var nextChunk = wholeNumberBrokenDown[i];
			
			var declinedWord = null;
			var gender = "m";
			
			if (thousandToPowerOf == 0) {
				declinedWord = mainWord;
			}
			else {
				var bigNumbersKey = "10^" + (thousandToPowerOf*3);
			
				if (bigNumbers[bigNumbersKey]) {
					declinedWord = bigNumbers[bigNumbersKey];
				}
			}
			
			if (declinedWord) {
				gender = declinedWord["gender"];
			}
			
			
			var nextWordGroup = {
				"hundreds": getRussianNumberDeclensions(nextChunk["hundreds"], gender),
				"tens": getRussianNumberDeclensions(nextChunk["tens"], gender),
				"numberEnding": getRussianNumberDeclensions(nextChunk["numberEnding"], gender),
				"declinedWord": declinedWord,
			};
			
			allWordGroups.push(nextWordGroup);
			
			thousandToPowerOf--;
		}
		
		/*
		for (var i=0; i<allWordGroups.length; i++) {
			console.log(allWordGroups[i]["hundreds"]["nom"]);
			console.log(allWordGroups[i]["tens"]["nom"]);
			console.log(allWordGroups[i]["numberEnding"]["nom"]);
			if (allWordGroups[i]["declinedWord"]) {
				console.log(allWordGroups[i]["declinedWord"]["nom-s"]);
			}
		}
		*/
		
		return allWordGroups;
	}
	
	

	function removeLeadingZeros(numberStr) {
		var numberStrSplit = numberStr.split("");
		
		var isLeadingZero = true;

		var numberStrNew = "";

		for (var i=0; i<numberStrSplit.length; i++) {

			if (isLeadingZero == true) {
				if (numberStrSplit[i] != "0") {
					isLeadingZero = false;
				}
			}

			if (isLeadingZero == false) {
				numberStrNew = numberStrNew + numberStrSplit[i];
			}
		}

		if (numberStrNew == "") numberStrNew = "0";

		return numberStrNew;
	}

	function declineNumber(numberStr) {
	
		var languageTableId = "autoDeclensionTable";

		var threeDigitGroups = splitNumberInto3DigitGroups(numberStr);

		var nounOptionsBox = $("#nounSelection");
		var selectedOption = nounOptionsBox.find(":selected");
		
		var nounToUse = null;
		var gender = null;
		var nounGenderClass = null;
		
		var numberNomCase = null;
		
		var endBlockCaseNom = null;
		var endBlockCaseAcc = null;
		
		if (selectedOption.val() != "no noun") {
			nounToUse = exampleNouns[selectedOption.val()];
			
			gender = nounToUse["gender"];
			
			if (gender == "m") nounGenderClass = "nounGenderM";
			else if (gender == "f") nounGenderClass = "nounGenderF";
			else if (gender == "n") nounGenderClass = "nounGenderN";
			
			var cases = new Array("nom","acc","gen","dat","ins","pre");
		
			for (var key in cases) {
				var nextCase = cases[key];
				$("#" + languageTableId + " td." + nextCase + "-case.singular").html(nounToUse[nextCase + "-s"]);
				$("#" + languageTableId + " td." + nextCase + "-case.plural").html(nounToUse[nextCase + "-p"]);
			}
		}
		
		
		
		$("#" + languageTableId + " td.with-number").addClass("hidden");
		$("#" + languageTableId + " td.singular").addClass("hidden");
		$("#" + languageTableId + " td.plural").addClass("hidden");
		$("#" + languageTableId + " *").removeClass("matching-cases-for-rules")
			.removeClass("nounGenderM").removeClass("nounGenderF").removeClass("nounGenderN");
		
		if (numberStr == "") {
			$("#" + languageTableId + " td.singular").removeClass("hidden");
			$("#" + languageTableId + " td.plural").removeClass("hidden");
		}
		else {
			var number = parseInt(numberStr);
			var numberSplit = numberStr.split('');
		
			var twoDigitending = number % 100;
			var oneDigitending = number % 10;

			console.clear();

			var wholeNumberBrokenDown = new Array();

			for (var i=0; i<threeDigitGroups.length; i++) {
				var numberEnding = getNumberEnding(threeDigitGroups[i]);

				var threeDigitGroupsSplit = threeDigitGroups[i].split("");

				var tensEnding;
				var hundredsEnding;

				if (threeDigitGroupsSplit.length == 1) {
					hundredsEnding = "0"; tensEnding = "0";
				}
				else if (threeDigitGroupsSplit.length == 2) {
					hundredsEnding = "0";
					tensEnding = threeDigitGroupsSplit[0] + "0";
				}
				else if (threeDigitGroupsSplit.length == 3) {
					hundredsEnding = threeDigitGroupsSplit[0] + "00";
					tensEnding = threeDigitGroupsSplit[1] + "0";
				}
			

				if (numberEnding.length == 3) {
					hundredsEnding = "0";
					tensEnding = "0";
				}
				else if (numberEnding.length == 2) {
					tensEnding = "0";
				}

				hundredsEnding = removeLeadingZeros(hundredsEnding);
				tensEnding = removeLeadingZeros(tensEnding);

				var numberSegmentBrownDown = {
					"hundreds" : hundredsEnding,
					"tens" : tensEnding,
					"numberEnding" : numberEnding,
				};

				wholeNumberBrokenDown.push(numberSegmentBrownDown);
				
				
			}
			
			
			var russianNumberAndNounInWords = getRussianNumberWithNounInWords(wholeNumberBrokenDown, nounToUse);
			
			var nomCase = declineRussianNumberAndNoun(russianNumberAndNounInWords, "nom");
			numberNomCase = nomCase;
			var accInCase = declineRussianNumberAndNoun(russianNumberAndNounInWords, "acc-in");
			var accAnCase = declineRussianNumberAndNoun(russianNumberAndNounInWords, "acc-an");
			var accCase = declineRussianNumberAndNoun(russianNumberAndNounInWords, "acc");
			var genCase = declineRussianNumberAndNoun(russianNumberAndNounInWords, "gen");
			var datCase = declineRussianNumberAndNoun(russianNumberAndNounInWords, "dat");
			var insCase = declineRussianNumberAndNoun(russianNumberAndNounInWords, "ins");
			var preCase = declineRussianNumberAndNoun(russianNumberAndNounInWords, "pre");
		
			var endBlockIndex = wholeNumberBrokenDown.length-1;
			var endBlock = new Array();
			endBlock.push({
					"hundreds" : "0",
					"tens" : "0",
					"numberEnding" : wholeNumberBrokenDown[endBlockIndex]["numberEnding"],
			});
		
			var endBlockInWords = getRussianNumberWithNounInWords(endBlock, nounToUse);
		
			endBlockCaseNom = declineRussianNumberAndNoun(endBlockInWords, "nom");
			endBlockCaseAcc = declineRussianNumberAndNoun(endBlockInWords, "acc");
			
			$("#" + languageTableId + " td.nom-case.with-number").html(nomCase["wordstr"]);
			
			if (nounToUse == null) {
				
				if (accAnCase["wordstr"] != accInCase["wordstr"]) {
					$("#" + languageTableId + " td.acc-case.with-number").html(accInCase["wordstr"] + " (inanimate) / " + accAnCase["wordstr"] + " (animate)");
				}
				else {
					$("#" + languageTableId + " td.acc-case.with-number").html(accInCase["wordstr"]);
				}
			}
			else {
				$("#" + languageTableId + " td.acc-case.with-number").html(accCase["wordstr"]);
			}
			$("#" + languageTableId + " td.gen-case.with-number").html(genCase["wordstr"]);
			$("#" + languageTableId + " td.dat-case.with-number").html(datCase["wordstr"]);
			$("#" + languageTableId + " td.ins-case.with-number").html(insCase["wordstr"]);
			$("#" + languageTableId + " td.pre-case.with-number").html(preCase["wordstr"]);
			
			if (nounToUse != null && nomCase["wordCount"] <= 4) {
				$("#" + languageTableId + " td.singular").removeClass("hidden");
				$("#" + languageTableId + " td.plural").removeClass("hidden");
			}
			$("#" + languageTableId + " td.with-number").removeClass("hidden");
		}
		
		if (numberEnding) {
			var numberEndingDesc = getNumberEndingDesc(numberEnding);
			$("#numberCategoryDesc").html(numberEndingDesc);
		}
		else {
			$("#numberCategoryDesc").html("");
		}
		
		/* Where the case of a noun differs to its normal case when it follows number, these
			words are highlighted, as well as the case it references
		*/
		if (nounToUse != null && numberEnding) {
			if (numberEnding == "0") {
				$("#" + languageTableId + " td.gen-case.plural").addClass("matching-cases-for-rules ").addClass(nounGenderClass);
				$("#" + languageTableId + " td.with-number .noun-part").addClass("matching-cases-for-rules").addClass(nounGenderClass);
			}
			// The number ends in the word один.
			else if (numberEnding == "1" || numberEnding == "") {
				// Do nothing
			}
			// The number ends in the word два/две, три or четыре.
			else if (numberEnding == "2" || numberEnding == "3" || numberEnding == "4") {
				$("#" + languageTableId + " td.gen-case.singular").addClass("matching-cases-for-rules").addClass(nounGenderClass);
				if (endBlockCaseNom["wordstr"] == endBlockCaseAcc["wordstr"]) {
					$("#" + languageTableId + " td.acc-case.with-number .noun-part").addClass("matching-cases-for-rules").addClass(nounGenderClass);
				}
				$("#" + languageTableId + " td.nom-case.with-number .noun-part").addClass("matching-cases-for-rules").addClass(nounGenderClass);
			}
			// The number ends in anything else
			else {
				$("#" + languageTableId + " td.gen-case.plural").addClass("matching-cases-for-rules").addClass(nounGenderClass);
				if (endBlockCaseNom["wordstr"] == endBlockCaseAcc["wordstr"]) {
					$("#" + languageTableId + " td.acc-case.with-number .noun-part").addClass("matching-cases-for-rules").addClass(nounGenderClass);
				}
				$("#" + languageTableId + " td.nom-case.with-number .noun-part").addClass("matching-cases-for-rules").addClass(nounGenderClass);
			}
		}

		
		$("#nounDetails *").addClass("hidden");
			
		if (nounToUse == null) {
			if (numberNomCase != null) {
				$("#nounDetails .nounLiteral").removeClass("hidden");
				$("#nounDetails .nounLiteral").html(numberNomCase)
			}
			else {
				$("#nounDetails .nounLiteral").addClass("hidden");
			}
		}
		else {
		
			$("#nounDetails .nounLiteral").removeClass("hidden");
			$("#nounDetails .nounLiteral").html(nounToUse["nom-s"]);
		
			if (gender == "m") $("#nounDetails .nounGenderM").removeClass("hidden");
			else if (gender == "f") $("#nounDetails .nounGenderF").removeClass("hidden");
			else if (gender == "n") $("#nounDetails .nounGenderN").removeClass("hidden");
		
		
			var animate = nounToUse["animate"];
			if (animate == "an") $("#nounDetails .nounAnimateYes").removeClass("hidden");
			else if (animate == "in") $("#nounDetails .nounAnimateNo").removeClass("hidden");
			else if (animate == "in-i") $("#nounDetails .nounAnimateNoInd").removeClass("hidden");
		}
	}
	
	
	
	function getNumberEndingDesc(numberEnding) {
		if (numberEnding == "0") return " is a multiple of 1000";
		else if (numberEnding == "1") return " ends with 1";
		else if (numberEnding == "2" || numberEnding == "3" || numberEnding == "4") return " ends with 2, 3 or 4";
		else return " ends with 5-20 or 0";
		
		return "";
	}


	function getCorrectCaseForNumber(declinedWord, numberEnding, russianCase) {
		
	}
	function getCorrectCaseForDeclinedWord(declinedWord, numberEnding, russianCase) {
	
		// The number is a multiple of 1000
		if (numberEnding["literal"] == "0") {
			return declinedWord["gen-p"];
		}
		// The number ends in the word один.
		else if (numberEnding["literal"] == "1") {
			if (russianCase == "nom") return declinedWord["nom-s"];
			else if (russianCase == "acc") {
				if (declinedWord["gender"] == "m" && declinedWord["animate"] == "an") return declinedWord["gen-s"];
				else return declinedWord["acc-s"];
			}
			else if (russianCase == "gen") return declinedWord["gen-s"];
			else if (russianCase == "dat") return declinedWord["dat-s"];
			else if (russianCase == "ins") return declinedWord["ins-s"];
			else if (russianCase == "pre") return declinedWord["pre-s"];
		}
		// The number ends in the word два/две, три or четыре.
		else if (numberEnding["literal"] == "2" || numberEnding["literal"] == "3" || numberEnding["literal"] == "4") {
			if (russianCase == "nom") return declinedWord["gen-s"];
			else if (russianCase == "acc") {
				if (declinedWord["animate"] == "an") return declinedWord["gen-p"];
				else return declinedWord["gen-s"];
			}
			else if (russianCase == "gen") return declinedWord["gen-p"];
			else if (russianCase == "dat") return declinedWord["dat-p"];
			else if (russianCase == "ins") return declinedWord["ins-p"];
			else if (russianCase == "pre") return declinedWord["pre-p"];
		}
		// The number ends in anything else
		else {
			if (russianCase == "nom") return declinedWord["gen-p"];
			else if (russianCase == "acc") return declinedWord["gen-p"];
			else if (russianCase == "gen") return declinedWord["gen-p"];
			else if (russianCase == "dat") return declinedWord["dat-p"];
			else if (russianCase == "ins") return declinedWord["ins-p"];
			else if (russianCase == "pre") return declinedWord["pre-p"];
		}
		
		return declinedWord[russianCase + "-s"];
	}

	function declineRussianNumberAndNoun(russianNumberAndNounInWords, russianCase) {
	
		var wordToReturn = "";
		var wordCount = 0;
	
		for (var i=0; i<russianNumberAndNounInWords.length; i++) {
		
			var isEndBlock = i == russianNumberAndNounInWords.length - 1;
		
			var nextWordBlock = russianNumberAndNounInWords[i];
			
			var hundreds = nextWordBlock["hundreds"];
			var tens = nextWordBlock["tens"];
			var numberEnding = nextWordBlock["numberEnding"];
			var declinedWord = nextWordBlock["declinedWord"];
			
			var hundredsEmpty = hundreds["literal"] == 0;
			var tensEmpty = tens["literal"] == 0;
			var numberEndingEmpty = numberEnding["literal"] == 0;
			
			
			var russianCaseForNumbers = russianCase;
			
			if (russianCase == "acc-an" || (russianCase == "acc" && declinedWord && declinedWord["animate"] == "an")) {
				if (isEndBlock) {
					russianCaseForNumbers = "acc-an";
				}
				else {
					russianCaseForNumbers = "acc-in";
				}
			}
			else if (russianCase == "acc-in" || russianCase == "acc") {
				russianCaseForNumbers = "acc-in";
			}
			
			if (hundredsEmpty && tensEmpty && numberEnding["literal"] == "1" && !isEndBlock) {
				// Do nothing
			}
			else {
				if (!hundredsEmpty) {
					wordToReturn += " " + hundreds[russianCaseForNumbers];
					wordCount++;
				}
				if (!tensEmpty) {
					wordToReturn += " " + tens[russianCaseForNumbers];
					wordCount++;
				}
				if (!numberEndingEmpty || (russianNumberAndNounInWords.length == 1 && numberEndingEmpty)) {
					wordToReturn += " " + numberEnding[russianCaseForNumbers];
					wordCount++;
				}
			}
			
			if (isEndBlock && declinedWord == null) {
				// Do nothing
			}
			else if (!numberEndingEmpty || isEndBlock) {
				if (!isEndBlock) {
					var russianCaseToUse = russianCase.startsWith("acc") ? "acc" : russianCase;
					wordToReturn += " <b>" + getCorrectCaseForDeclinedWord(declinedWord, numberEnding, russianCaseToUse) + "</b>";
					wordCount++;
				}
				else {
					var russianCaseToUse = russianCase.startsWith("acc") ? "acc" : russianCase;
					wordToReturn += " <span class='noun-part'>" + getCorrectCaseForDeclinedWord(declinedWord, numberEnding, russianCaseToUse) + "</span>";
					wordCount++;
				}
			}
		}
		return {"wordstr": wordToReturn, "wordCount": wordCount};
	}


	$("#numberInput").on('input', function(){
	      declineNumber($("#numberInput").val());
	});
	
	$("#nounSelection").change(function() {
		declineNumber($("#numberInput").val());
	});
	
	$( document ).ready(function() {
		var tmpOptions = [];
	
		var option = document.createElement("option");
		option.value = "no noun";
		option.text = "(no noun)";
		tmpOptions.push(option);
	
		for (var key in exampleNouns) {
			var option = document.createElement("option");
			option.value = "" + key;
			option.text = exampleNouns[key]["nom-s"] + " (" + exampleNouns[key]["english"] + ")";
			
			tmpOptions.push(option);
		}
		
		$("#nounSelection").append(tmpOptions);
		
		declineNumber($("#numberInput").val());
	});
</script>