<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleankieta.css" type="text/css">

    <title>Ankieta</title>
</head>
<body>

<h1> Ankieta - porównanie prywatnej i publicznej opieki zdrowotnej </h1>

<hr style="width: 30%;" color = #d4efed>

<div class = "text">
    Jesteśmy studentami kierunku Inżynieria Biomedyczna, na Akademii Górniczo-Hutniczej w Krakowie. 
    Poniższa ankieta nie zajmie więcej niż 5 minut. Celem ankiety jest zbadanie Państwa opinii związanej zarówno z jakością usług jak i ogólnymi odczuciami towarzyszącymi Państwu w czasie wizyt. 
    <br><br> Bardzo dziękujemy za poświęcony czas. 
</div>


 <div class="rb-box">

<form method="POST" action ="ankieta_wynik.php">

<div class = "question">

    1.	Płeć osoby ankietowanej: <br> </div>

<div class = "answer"> <br>

    <INPUT TYPE="radio" NAME="p1" VALUE="0" checked> Kobieta
    <INPUT TYPE="radio" NAME="p1" VALUE="1"> Mężczyzna
    <INPUT TYPE="radio" NAME="p1" VALUE="2"> Inna
    <br>

<br></div>

<div class = "question">

    2.	Wiek osoby ankietowanej: <br> </div>

<div class = "answer">

    <br>
    <INPUT TYPE="number" NAME="p2">
    <br><br>

</div>

<div class = "question">

    3.	Wykształcenie osoby ankietowanej: <br> </div>

<div class = "answer"><br>

    <INPUT TYPE="radio" NAME="p3" VALUE="1" checked> Podstawowe <br>
    <INPUT TYPE="radio" NAME="p3" VALUE="2"> Średnie <br> 
    <INPUT TYPE="radio" NAME="p3" VALUE="3"> Średnie zawodowe <br>
    <INPUT TYPE="radio" NAME="p3" VALUE="4"> Wyższe <br>
    <br><br>

</div>

<div class = "question">

4.	Proszę określić placówkę z której usług korzysta z pani/pan: <br> </div>

<div class = "answer"> <br>

    <INPUT TYPE="radio" NAME="p4" VALUE="1" checked> Placówki NFZ <br>
    <INPUT TYPE="radio" NAME="p4" VALUE="2"> LuxMed <br> 
    <INPUT TYPE="radio" NAME="p4" VALUE="3"> Medicover <br>
    <INPUT TYPE="radio" NAME="p4" VALUE="4"> Inna placówka medyczna <br>
    <br><br>

</div>

<div class = "question">

5.  Proszę ocenić obsługę rejestracji w placówce NFZ, w skali 1-5, gdzie 1 to bardzo nisko, a 5 bardzo dobrze: <br> </div>

<div class = "answer"> <br>

    <INPUT TYPE="radio" NAME="p5" VALUE="1" > 1
    <INPUT TYPE="radio" NAME="p5" VALUE="2">  2
    <INPUT TYPE="radio" NAME="p5" VALUE="3" checked> 3
    <INPUT TYPE="radio" NAME="p5" VALUE="4"> 4
    <INPUT TYPE="radio" NAME="p5" VALUE="4"> 5
    <br><br>

</div>

<div class = "question">

6.  Proszę ocenić obsługę rejestracji w placówce prywatnej, w skali 1-5, gdzie 1 to bardzo nisko a 5 bardzo dobrze: <br> </div>

<div class = "answer"> <br>
    <INPUT TYPE="radio" NAME="p6" VALUE="1" > 1
    <INPUT TYPE="radio" NAME="p6" VALUE="2">  2
    <INPUT TYPE="radio" NAME="p6" VALUE="3" checked> 3
    <INPUT TYPE="radio" NAME="p6" VALUE="4"> 4
    <INPUT TYPE="radio" NAME="p6" VALUE="5"> 5
    <br><br>
</div>

<div class = "question">

7.  Czy istnieje możliwość rejestracji w placówce za pomocą intenetu (aplikacja mobilna, strona www itp.)? <br> </div> <br>

<INPUT TYPE="radio" NAME="p7" VALUE="1" checked> Tak
<INPUT TYPE="radio" NAME="p7" VALUE="2">  Nie
<INPUT TYPE="radio" NAME="p7" VALUE="3"> Nie wiem
<br><br>

<div class = "question">

8.	Okres oczekiwania na termin NFZ: <br> </div> <br>

<INPUT TYPE="radio" NAME="p9" VALUE="1" checked > Kilka dni (1 – 10 dni) <br>
<INPUT TYPE="radio" NAME="p9" VALUE="2">  Kilka tygodni (2-4 tygodni)<br>
<INPUT TYPE="radio" NAME="p9" VALUE="3"> Kilka miesięcy( 2-5 miesięcy),  <br>
<INPUT TYPE="radio" NAME="p9" VALUE="4"> Pół roku i więcej
<br><br>

<div class = "question">

9.	Okres oczekiwania na termin prywatnie: <br> </div> <br>

<INPUT TYPE="radio" NAME="p8" VALUE="1" checked > Kilka dni (1 – 10 dni) <br>
<INPUT TYPE="radio" NAME="p8" VALUE="2">  Kilka tygodni (2-4 tygodni)<br>
<INPUT TYPE="radio" NAME="p8" VALUE="3"> Kilka miesięcy( 2-5 miesięcy),  <br>
<INPUT TYPE="radio" NAME="p8" VALUE="4"> Pół roku i więcej
<br><br>

<div class = "question">

10.	Proszę ocenić wygląd placówki NFZ w skali 1-5, gdzie 1 to bardzo nisko, a 5 bardzo dobrze: <br> </div> <br>

<INPUT TYPE="radio" NAME="p10" VALUE="1" > 1
<INPUT TYPE="radio" NAME="p10" VALUE="2">  2
<INPUT TYPE="radio" NAME="p10" VALUE="3" checked> 3
<INPUT TYPE="radio" NAME="p10" VALUE="4"> 4
<INPUT TYPE="radio" NAME="p10" VALUE="5"> 5
<br><br>

<div class = "question">

11.	Proszę ocenić wygląd placówki prywatnej w skali 1-5, gdzie 1 to bardzo nisko, a 5 bardzo dobrze: <br> </div> <br>

<INPUT TYPE="radio" NAME="p11" VALUE="1" > 1
<INPUT TYPE="radio" NAME="p11" VALUE="2">  2
<INPUT TYPE="radio" NAME="p11" VALUE="3" checked> 3
<INPUT TYPE="radio" NAME="p11" VALUE="4"> 4
<INPUT TYPE="radio" NAME="p11" VALUE="5"> 5
<br><br>

<div class = "question">

12.	Proszę ocenić przebieg badania lub zabiegu w NFZ w skali 1-5, gdzie 1 to bardzo nisko, a 5 bardzo dobrze: <br> </div> <br>

<INPUT TYPE="radio" NAME="p12" VALUE="1" > 1
<INPUT TYPE="radio" NAME="p12" VALUE="2">  2
<INPUT TYPE="radio" NAME="p12" VALUE="3" checked> 3
<INPUT TYPE="radio" NAME="p12" VALUE="4"> 4
<INPUT TYPE="radio" NAME="p12" VALUE="5"> 5
<br><br>

<div class = "question">

13.	Proszę ocenić przebieg badania lub zabiegu w prywatnej klinice w skali 1-5, gdzie 1 to bardzo nisko, a 5 bardzo dobrze: <br> </div> <br>

<INPUT TYPE="radio" NAME="p13" VALUE="1" > 1
<INPUT TYPE="radio" NAME="p13" VALUE="2">  2
<INPUT TYPE="radio" NAME="p13" VALUE="3" checked> 3
<INPUT TYPE="radio" NAME="p13" VALUE="4"> 4
<INPUT TYPE="radio" NAME="p13" VALUE="5"> 5
<br><br>

<div class = "question">

14.	Czy w sposób zrozumiały konsultowano z panią/panem wyniki badań i stan zdrowotny w placówce NFZ? <br> </div> <br>

<INPUT TYPE="radio" NAME="p14" VALUE="1" > Tak <br>
<INPUT TYPE="radio" NAME="p14" VALUE="2">  Raczej tak <br>
<INPUT TYPE="radio" NAME="p14" VALUE="3" checked> Trudno powiedzieć <br>
<INPUT TYPE="radio" NAME="p14" VALUE="4"> Raczej nie <br>
<INPUT TYPE="radio" NAME="p14" VALUE="5"> Nie <br>
<br><br>

<div class = "question">

15.	Czy w sposób zrozumiały konsultowano z panią/panem wyniki badań i stan zdrowotny w placówce prywatnej? <br> </div> <br>

<INPUT TYPE="radio" NAME="p15" VALUE="1" > Tak <br>
<INPUT TYPE="radio" NAME="p15" VALUE="2">  Raczej tak <br>
<INPUT TYPE="radio" NAME="p15" VALUE="3" checked> Trudno powiedzieć <br>
<INPUT TYPE="radio" NAME="p15" VALUE="4"> Raczej nie <br>
<INPUT TYPE="radio" NAME="p15" VALUE="5"> Nie <br>
<br><br>

<div class = "question">

16.	Z jakiego powodu najczęściej wybiera pan/pani swoją placówkę medyczną? <br> </div> <br>

<INPUT TYPE="radio" NAME="p16" VALUE="1" > Koszt usługi<br>
<INPUT TYPE="radio" NAME="p16" VALUE="2">  Profesjonalizm <br>
<INPUT TYPE="radio" NAME="p16" VALUE="3" checked> Szybkość świadzczenia usługi <br>
<INPUT TYPE="radio" NAME="p16" VALUE="4"> Przyzwyczajenie <br>
<br><br>

<div class = "question">

17.	Co sprawiłoby żeby Pan/Pani wybrał placówke NFZ? <br> </div> <br>

<textarea  name="p17" rows="5" cols="53">

</textarea>
<br><br>

<div class = "question">

18.	Co sprawiłoby żeby Pan/Pani wybrał placówkę prywatną? <br> </div> <br>

<textarea  name="p18" rows="5" cols="53">

</textarea>

<br><br>

<div class="button-box">
    <button class="button trigger">Zapisz odpowiedzi</button>
</div>



</form>

</div>

</body>
</html>