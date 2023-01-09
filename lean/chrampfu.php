<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans&display=swap"/>
        <title>brentjong.space — a permaculture garden/space curated by Satellites of Love Association</title>
        <meta name="description" content="brentjong.space is a permaculture garden/space curated by Satellites of Love Association. We make organic alpine wines out of Pinot Noir grapes - Pétillant Naturel (Pet Nat), Blanc de Noir, Rosé, Piquette. No added sulfur dioxide, no additives at all and therefore vegan.">
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
        <meta property="og:site_name" content="brentjong.space — a permaculture garden/space curated by Satellites of Love Association">
        <meta property="og:title" content="brentjong.space — a permaculture garden/space curated by Satellites of Love Association" />
        <meta property="og:description" content="We make organic alpine wines out of Pinot Noir grapes - Pétillant Naturel (Pet Nat), Blanc de Noir, Rosé, Piquette. No added sulfur dioxide, no additives at all and therefore vegan." />
        <meta property="og:image" itemprop="image" content="https://brentjong.space/apple-touch-icon.png">
        <meta property="og:type" content="website" />
        <meta name="theme-color" content="#17ff2142"/>
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
                --brentjong-space--color--base: #17ff236d;
                --brentjong-space--color--highlighted: #ec0dad42;
                --brentjong-space--color--action: #ff002b;
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
        h1 {
                font-size: 4em;
                padding-block-end: 1em;
                font-weight: normal;
                line-height: 120%;
                hyphens: auto;
                -webkit-hyphens: auto;
        }
        p, ul {
                font-size: 2em;
                line-height: 130%;
                max-width: 50ch;
                word-wrap: break-word;
                padding-block-end: calc(0.5 * var(--brentjong-space--layout--padding));
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
        .hidden {
                display: none;
        }
        </style>
</head>
<body>
        <main class="content">
                <h1>Salut Chram&shy;pfär*in</h1>
                <p>Diz Jahr — yup, 2023 — heiwär folgundi Chrampfär*inne Sessions iigeplant:</p>
                <ul class="date-list">
                        <li><a title="Doodle form Chrampfärli Session Januar" rel="noreferrer" target="_blank" href="https://doodle.com/meeting/participate/id/b81j253d">Chrampfärli Januar</a>, <span class="dates">25.–28. Januar</span></li>
                        <li><a title="Doodle form Chrampfärli Session Februar" rel="noreferrer" target="_blank" href="https://doodle.com/meeting/participate/id/ejZzK8Be">Chrampfärli Februar</a>, <span class="dates">15.–18. Februar</span></li>
                        <li><a title="Doodle form Chrampfärli Session März" rel="noreferrer" target="_blank" href="https://doodle.com/meeting/participate/id/aMwLANGd">Chrampfärli März</a>, <span class="dates">15.–18. März</span></li>
                        <li><a title="Doodle form Chrampfärli Session Mai" rel="noreferrer" target="_blank" href="https://doodle.com/meeting/participate/id/e91kNjBe">Chrampfärli Mai</a>, <span class="dates">17.–20. Mai(Auffahrt)</span></li>
                        <li><a title="Doodle form Chrampfärli Session Juni" rel="noreferrer" target="_blank" href="https://doodle.com/meeting/participate/id/e0YW7n7a">Chrampfärli Juni</a>, <span class="dates">7.–10. Juni</span></li>
                        <li><a title="Doodle form Chrampfärli Session Juli" rel="noreferrer" target="_blank" href="https://doodle.com/meeting/participate/id/dL7Kzrpb">Chrampfärli Juli</a>, <span class="dates">6.–10. Juli</span></li>
                        <li>Wimdu 2023, <span class="dates dates--not-fix">August~September</span></li>



                </ul>
                <p>Bisch öi där bii? Du trags du ii und spread <span role="img" aria-label="kiss">😘</span> some <span role="img" aria-label="love">❤️‍🔥😍❤️</span> into space mit iisch. Wir freuwä iisch 🖤</p>
                <p>Sign up for the above dates to help out in the vineyard and spread some <a href="https://www.youtube.com/watch?v=qORYO0atB6g" rel="nofollow" title="Beastie Boys - Intergalactic">intergalactic</a> 👾 love <span role="img" aria-label="love">😍🥰</span> with us. Looking forward to seeing you 🤗</p>
                <p>
                        <a title="Brentjong dot Space" href="/">Brentjong.space</a> — a permaculture space curated by
                </p>
                <p class="universe">
                        <span role="presentation">🛸　　　 　🌎</span><a class="link" title="Satellites of Love. Visit us on Instagram." href="https://www.instagram.com/satellites.of.love" rel="nofollow"><span role="img" aria-label="Satellites">📡</span> of <span role="img" aria-label="Love">❤️</span><em class="link__satellite">🛰<em class="link__satellite">❤️<em class="link__satellite">🛰<em class="link__satellite">❤️</em></em></em></a><span role="presentation">　°　　🌓　•　　.°•　　　🚀 ✯
                        <br>
                        　　　★　*　　　　　°　　　　🛰 　°·　　                           🪐
                        <br>
                        .　　　•　° ★　•  ☄</span>
                </p>
                <p>
                        You give us your email — we give you information about our wine project 😘 <a href="https://forms.gle/xrE5mkSN6cuhj8DcA" title="Google Docs Newsletter subscription form" rel="nofollow">Subscribe to our newsletter</a> 🚀
                </p>
                <footer>
                        <p class="credits"><span>Made with ❤️‍🔥 &nbsp;by&nbsp;</span><a href="https://yokai.ch">Yokai</a></p>
                </footer>
        </main>
</body>
</html>