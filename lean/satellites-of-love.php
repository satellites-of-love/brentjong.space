<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans&display=swap"/>
        <title>Satellites of Love Association — a collective which curates a permaculture garden/space in Brentjong, Valais</title>
        <meta name="description" content="Satellites of Love Association — a collective which curates a permaculture garden/space in Brentjong, Valais. We make organic alpine wines out of Pinot Noir grapes - Pétillant Naturel (Pet Nat), Blanc de Noir, Rosé, Piquette. No added sulfur dioxide, no additives at all and therefore vegan.">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width">
        <meta name="geo.region" content="CH-BE" />
        <meta name="geo.placename" content="Bern" />
        <meta name="geo.position" content="46.950256;7.443965" />
        <meta name="ICBM" content="46.950256, 7.443965" />
        <meta name="geo.region" content="CH-VS" />
        <meta name="geo.placename" content="Brentjong, Leuk/Loèche, Wallis/Valais" />
        <meta name="geo.position" content="46.317660;7.652257" />
        <meta name="ICBM" content="46.317660, 7.652257" />
        <meta property="og:site_name" content="Satellites of Love Association — a collective which curates a permaculture garden/space in Brentjong, Valais">
        <meta property="og:title" content="Satellites of Love Association — a collective which curates a permaculture garden/space in Brentjong, Valais" />
        <meta property="og:description" content="We make organic alpine wines out of Pinot Noir grapes - Pétillant Naturel (Pet Nat), Blanc de Noir, Rosé, Piquette. No added sulfur dioxide, no additives at all and therefore vegan." />
        <meta property="og:image" itemprop="image" content="https://brentjong.space/apple-touch-icon.png">
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en_GB" />
        <meta name="theme-color" content="#ffae98"/>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <style type="text/css">
        * {
                margin: 0;
                padding: 0;
        }
        body {
                --brentjong-space--color--base: #ffae98;
                --brentjong-space--color--highlighted: #ec0dad42;
                --brentjong-space--color--action: #ff4538;
                --brentjong-space--layout--padding: 2em;
                --brentjong-space--layout--breakpoint--s: 700px;

                font-family: 'Droid Sans', Helvetica, Arial, sans-serif;
                color: #000;
                font-size: 1em;
                line-height: 100%;
                line-break: normal;

                display: flex;
                align-items: center;
                justify-content: center;

                min-height: calc(100vh - var(--brentjong-space--layout--padding));
                border: calc(var(--brentjong-space--layout--padding)/2) var(--brentjong-space--color--base) solid;
                overflow-x: hidden;
                overflow-y: scroll;
        }
        @media (max-width: 700px) {
                body {
                        font-size: 0.75em;
                }
        }
        .content {
                padding: 4em 2em;
        }
        img {
                border-style: none;
        }
        p, ul, h2, h3 {
                font-size: 2em;
                line-height: 130%;
                max-width: 50ch;
                word-wrap: break-word;
                padding-block-end: calc(0.5 * var(--brentjong-space--layout--padding));
        }
        h1, h2, h3, h4 {
                padding-block-end: 0.5em;
                font-weight: normal;
                line-height: 120%;
                hyphens: auto;
                -webkit-hyphens: auto;
        }
        h1 {
                font-size: 4em;
        }
        .content:last-child {
                padding-block-end: 0;
        }
        p.universe {
                padding-block-end: var(--brentjong-space--layout--padding);
        }
        .date-list { margin-inline-start: 1.2em; }
        @media (max-width: 700px) {
                .date-list li {
                        padding-block-end: 0.5em;
                }
                .date-list .dates {
                        display: block;
                }
        }
        .date-list li::marker {
                content: '🚀 ';
        }
        .date-list--past li::marker {
                content: '❤️ ';
        }
        .date-list li:hover::marker, .date-list li:focus::marker {
                animation: rocket-launch 0.25s infinite 0.8s;
                position: absolute;
        }
        .dates--not-fix {
                text-decoration: wavy underline;
        }
        
        /* Link style v1 */
        /* a, a:visited, a:hover {
                text-decoration: underline;
                text-decoration-thickness: 0.2rem;
                color: inherit;
                text-shadow: 0 0 5px var(--brentjong-space--color--highlighted);
        }
        a:hover, a:focus {
                color: var(--brentjong-space--color--action);
        } */
        /* Link style v2 */
        a, a:focus, a:hover, a:visited {
                color: inherit;
                text-decoration: none;
                text-shadow: 0 0 5px var(--brentjong-space--color--highlighted);
        }
        a {
                display: inline;
                background-image: linear-gradient(#000,#000);
                background-repeat: no-repeat;
                background-position: 100% 100%;
                background-size: 100% 0.1em;
                transition: background 0.8s cubic-bezier(.77,0,.175,1), color 0.8s cubic-bezier(.77,0,.175,1);
        }

        a:focus, a:hover {
                color: var(--brentjong-space--color--action);
                background-size: 0 0.1em;
                transition: background 1s cubic-bezier(.645,.045,.355,1), color 1s cubic-bezier(.645,.045,.355,1);
        }

        .link .link__satellite {
                font-style: normal;
                position: absolute;
                transform: translate(-9999px, 0);
        }
        .link:hover .link__satellite {
                animation: spinning-edgy 1.9s infinite;
                /* animation: spinning-harmonious 1.3s infinite; */
        }
        .link .link__base-station {
                position: relative;
                display: inline-block;
        }
        .link:hover .link__base-station {
                animation: flip-horizontal 1.9s infinite;
        }
        .link:hover .link__rocket-launch {
                display: inline-block;
                animation: rocket-launch 0.25s infinite 0.8s;
        }
        .credits {
                padding-block-start: var(--brentjong-space--layout--padding);
        }
        .credits * {
                font-size: 0.5em;
        }

        @media (prefers-reduced-motion) {
                .link:hover .link__satellite {
                        animation: spinning-no 1s;
                }
        }
        @keyframes spinning-edgy {
                0% {
                        transform: translate(-1em, -1.9em) rotate(13deg);
                }

                23% {
                        transform: translate(3em, 0);
                }
                31% {
                        transform: translate(2.6em, 4em) rotate(7deg);
                }

                45% {
                        transform: translate(-2.6em, 2.5em);
                }

                66% {
                        transform: translate(-4em, 0.5em) rotate(7deg);
                }

                75% {
                        transform: translate(-3.5em, -3em) rotate(8deg);
                }

                100% {
                        transform: translate(-1em, -1.9em) rotate(3deg);
                }
        }
        @keyframes spinning-harmonious {
                0% {
                        transform: translate(-1em, -1.9em) rotate(30deg);
                }

                100% {
                        transform: translate(-1em, -1.9em) rotate(390deg);
                }
        }
        @keyframes spinning-none {
                0% {}

                100% {}
        }
        @keyframes flip-horizontal {
                0% { transform: translate(0, 0) rotate(0deg); }
                25% { transform: translate(-5px, 0) rotate(5deg); }
                49% { transform: scaleX(1) }
                50% { transform: translate(-10px, -3px) rotate(0eg); }
                51% { transform: scaleX(-1) }
                74% { transform: scaleX(-1) }
                75% { transform: translate(-5px, 0) rotate(-5deg); }
                100% { transform: translate(0, 0) rotate(0deg); }
        }
        @keyframes rocket-launch {
                0% { transform: translate(0, 0) rotate(0deg); }
                25% { transform: translate(-5px, 0) rotate(5deg); }
                50% { transform: translate(-10px, -3px) rotate(0eg); }
                75% { transform: translate(-5px, 0) rotate(-5deg); }
                100% { transform: translate(0, 0) rotate(0deg); }
        }
        .hidden {
                display: none;
        }
        </style>
</head>
<body>
        <main class="content">
                <h1><span class="link__base-station" role="img" aria-label="Satellite base station">📡</span> of <span role="img" aria-label="Love">❤️</span></h1>
                <p>We are Satellites of Love — a wine making collective which creates organic, natural wines <span class="hidden">in Bern, Leuk, Ayent, La Neuveville and Zürich</span> from Pinot Noir grapes of our vineyards in the Swiss Alps — Brentjong 📡 (950m), Leuk (Valais).</p>
                <p>
                        <a title="Brentjong dot Space" href="/">Brentjong.space</a> — a permaculture space curated by us
                </p>
                <p class="universe">
                        <span role="presentation">🛸　　　 　🌎</span><a class="link" title="Satellites of Love. Visit us on Instagram." href="https://www.instagram.com/satellites.of.love" rel="nofollow"><span class="link__base-station" role="img" aria-label="Satellite base station">📡</span> of <span role="img" aria-label="Love">❤️</span><em class="link__satellite">🛰<em class="link__satellite">❤️<em class="link__satellite">🛰<em class="link__satellite">❤️</em></em></em></a><span role="presentation">　°　　🌓　•　　.°•　　　🚀 ✯
                        <br>
                        　　　★　*　　　　　°　　　　🛰 　°·　　                           🪐
                        <br>
                        .　　　•　° ★　•  ☄</span>
                </p>
                <p>
                        You give us your email — we give you information about our wine project 😘 <a class="link" href="https://forms.gle/xrE5mkSN6cuhj8DcA" title="Google Docs Newsletter subscription form" rel="nofollow">Subscribe to our newsletter <span class="link__rocket-launch" role="img" aria-label="Rocket">🚀</span></a>
                </p>
                <footer>
                        <p class="credits"><span>Made with ❤️‍🔥 &nbsp;by&nbsp;</span><a href="https://yokai.ch">Yokai</a></p>
                </footer>
        </main>
</body>
</html>