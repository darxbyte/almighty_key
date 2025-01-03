
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://pub-34ec9d321a014657abceb9ef14dfb53e.r2.dev/LIB-LOADER.png" type="image/png">
    <title>DARXBYTE</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #2c2c2c;
            flex-direction: column;
        }
        img {
            width: 400px;
            height: 400px;
        }
        .quote {
            color: white;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <img src="https://pub-34ec9d321a014657abceb9ef14dfb53e.r2.dev/LIB-2-RECODE.png" alt="Waiting">
    <div class="quote" id="randomQuote"></div>

    <script>
        const quotes = [
    "\"Ad astra per aspera, sed fortitudo vincit semper.\"",
    "\"Vita est pugna, et victoris est qui non cedit.\"",
    "\"Dum vita est, spes est et labor manet.\"",
    "\"Flectere si nequeo superos, Acheronta movebo.\"",
    "\"Mors certa, hora incerta, sed vita est pugna.\"",
    "\"Amor fati, vivere ex labore et spe.\"",
    "\"Non est ad astra mollis e terris via.\"",
    "\"Omnia vincit labor, sed non sine dolore.\"",
    "\"Fortuna audaces adiuvat, sed patientia victoriam parit.\"",
    "\"Vita est brevis, sed virtus laboriosa gloriam gignit.\"",
    "\"In vita, nullus labor inanis, nisi cessat animus.\"",
    "\"Memento vivere, sed etiam memento mori semper.\"",
    "\"Laborare est orare, et vita victoriae per laborem.\"",
    "\"Nihil sine magno labore vita dedit mortalibus.\"",
    "\"Qui audet vincit, sed qui patitur plus discit.\"",
    "\"In medio adversitatum, virtus laboriosa fulget.\"",
    "\"Spes et labor simul iter ad gloriam ducunt.\"",
    "\"Ad mortem festinamus, sed opus vitae non finitur.\"",
    "\"Labor est vita, et mors laboris finem non timet.\"",
    "\"Dum vivimus, pugnamus contra fatum et mori non timemus.\"",
    "\"Qui vincit, non sine labore aut dolore vivit.\"",
    "\"Vivere est bellum, et mors est finis non victoria.\"",
    "\"Non solum vivere, sed bene vivere opus est.\"",
    "\"Labor longus est, et gloria brevis, sed mors aeterna.\"",
    "\"Fortes in adversis, quia vita plena est certaminum.\"",
    "\"In labore veritas, et in morte pax sempiterna.\"",
    "\"Nemo sine labore magnae virtutis titulos adipiscitur.\"",
    "\"Fatum vincere non est facile, sed necessarium.\"",
    "\"Pericula non fugiamus, sed cum virtute vincamus.\"",
    "\"Post mortem nihil est, sed ante mortem omnia possibile.\"",
    "\"Dulce et decorum est pro labore vincere et vivere.\"",
    "\"Tempus fugit, sed labor manet et gloria cum eo.\"",
    "\"Dum animus laborat, mors non habet potestatem.\"",
    "\"Labor improbus omnia vincit, et mors ei non est finis.\"",
    "\"In morte pax, sed in vita labor et pugna perpetua.\"",
    "\"Vivere militare est, sed in morte requies invenitur.\"",
    "\"Nulla victoria sine periculo, et nulla vita sine labore.\"",
    "\"Audentes fortuna iuvat, sed mortem nemo vitare potest.\"",
    "\"In labore spei, et in morte speramus pacem aeternam.\"",
    "\"Labor et virtus semper vincunt, et mors est finis quietus.\"",
    "\"Qui vivit, pugnat, et qui pugnat, victoriam invenit.\"",
    "\"Fortitudo et patientia sunt claves vitae et victoriae.\"",
    "\"Omnes homines morimur, sed labor nostri manet in aeternum.\"",
    "\"Laborare est vivere, et vivere est perpetua pugna.\"",
    "\"Gloria in labore invenitur, et mors non est timenda.\"",
    "\"Per ardua ad alta, et mors est via naturae.\"",
    "\"Labor improbus omnia vincit, et gloria laboranti semper adest.\"",
    "\"Vita brevis, sed labor et virtus perpetuam gloriam gignunt.\"",
    "\"Non omnis moriar, dum labor meus vivit in posteris.\"",
    "\"In vita certamus, sed in morte requiem invenimus.\""
];


        // Randomize and display one quote
        document.getElementById("randomQuote").textContent = quotes[Math.floor(Math.random() * quotes.length)];
    </script>
</body>
</html>
