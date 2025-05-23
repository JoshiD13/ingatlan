<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <img src="logo.png" alt="Logó" class="header-logo">
    <div class="header-text">
        <h1>Helio Estates</h1>
        <p>Üdvözöljük a legjobb ingatlanok világában!</p>
    </div>
</header>

<body>

<nav>
    <a href="#home">Főoldal</a>
    <a href="#offer">Kínálat</a>
    <a href="#refs">Referenciák</a>
    <a href="#uzenet">Írjon nekünk!</a>
    <a href="#contact">Kapcsolat</a>
    <button id="gomb" onclick="darkmod()">Sötét mód</button>
</nav>

<section id="home">
    <h2>Üdvözöljük!</h2>
    <p>Cégünk azt a célt követi, hogy az az idő, amit ön velünk eltölt, ne legyen hiábavaló vagy problémákkal teli. Bakancslistánk legfőbb célja az ügyfeleinkkel való nyílt kommunikáció és rugalmasság.</p>
    <h3>Történetünk és Filozófiánk</h3>
    <p>A vállalkozásunk egy családi történetből indult, ezért is fontos számunkra, hogy minden egyes ügyfelünket úgy kezeljünk, mintha saját testvéreink volnának, ezzel egy családias hangulatú, mégis barátságos környezetet biztosítunk mindenkit, aki minket választ.</p>
</section>

<section id="offer">
    <h2>Kínálatunk</h2>
    <div class="property-list">
        <div class="property-item">
            <img src="plchldr600x400.png" alt="Ingatlan 1">
            <h4>Ingatlan 1</h4>
            <p>Ár: 50.000.000 Ft</p>
            <p>Részletes leírás...</p>
        </div>
        <div class="property-item">
            <img src="plchldr600x400.png" alt="Ingatlan 2">
            <h4>Ingatlan 2</h4>
            <p>Ár: 40.000.000 Ft</p>
            <p>Részletes leírás...</p>
        </div>
        <div class="property-item">
            <img src="plchldr600x400.png" alt="Ingatlan 3">
            <h4>Ingatlan 3</h4>
            <p>Ár: 60.000.000 Ft</p>
            <p>Részletes leírás...</p>
        </div>
    </div>
</section>

<section id="refs">
    <h2>Vélemények</h2>
    <p>Ha nekünk nem hisz, olvassa el mások véleményét:</p>
    <div class="velemenyek">
        <div class="velemeny">
            <div class="velemeny-szoveg">
                <p><strong>Major Anna:</strong> "Kiváló szolgáltatás, gyors és segítőkész ügyfélszolgálat! Nagyon elégedett vagyok."</p>
            </div>
            <p>Beköltözés utáni képek:</p>
            <div class="velemeny-kepek" id="csuszka">
                <div class="keptar"><img src="plchldr400x600.png" alt="Szabó Anna ingatlan"></div>
                <div class="keptar"><img src="plchldr600x400.png" alt="Szabó Anna Ingatlan"></div>
                <div class="keptar"><img src="plchldr400x600.png" alt="Szabó Anna Ingatlan"></div>
                <div class="keptar"><img src="plchldr400x600.png" alt="Szabó Anna Ingatlan"></div>
            </div>
        </div>
    </div>
</section>

<section id="uzenet">
    <h2>Kérdése van?</h2>
    <div class="uzenet">
        <form action="submit_form.php" method="POST">
            <label for="name">Név:</label>
            <input type="text" id="name" name="name" placeholder="Adja meg a nevét" required>

            <label for="email">Email cím:</label>
            <input type="email" id="email" name="email" placeholder="Adja meg az email címét" required>

            <label for="subject">Tárgy:</label>
            <input type="text" id="subject" name="subject" placeholder="Adja meg az üzenet tárgyát" required>

            <label for="message">Üzenet:</label>
            <textarea id="message" name="message" placeholder="Írja meg üzenetét" rows="6" required></textarea>

            <button type="submit">Üzenet küldése</button>
        </form>
    </div>
</section>

<section id="contact">
    <h2>Kapcsolat</h2>
    <p>Elérhetőségeink:</p>
    <ul>
        <li>Telefon: +36 1 234 5678</li>
        <li>Email: info@ingatlan.hu</li>
        <li>Nyitvatartás: H-P: 9:00 - 18:00, Szo: 10:00 - 14:00</li>
    </ul>

    <h3>Itt talál meg minket:</h3>

    <div id="map1" class="mapdiv"><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692.14238146847!2d18.99851087681668!3d47.56501809084742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741d8fec9f4bbaf%3A0xee84eeb19502d7c2!2sBudapest%2C%20Kocsis%20S%C3%A1ndor%20%C3%9At%2093%2C%201037!5e0!3m2!1shu!2shu!4v1732623862653!5m2!1shu!2shu" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</section>

<script src="script.js"></script>
</body>
</html>
