<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wheel of chores</title>

        <style>

            main {
                max-width: 800px;
                width: 100%;
                margin: 0 auto;
            }

            .wheel-of-fortune {
                clip-path: inset(0 0 0 0 round 50%);
            }

            :where(.wheel-of-fortune) {
                --_items: {{ count($db['chores']) }};
                all: unset;
                aspect-ratio: 1 / 1;
                background: crimson;
                container-type: inline-size;
                direction: ltr;
                display: grid;
                place-content: center start;
            }

            li {
                align-content: center;
                display: grid;
                font-size: 3cqi;
                grid-area: 1 / -1;
                list-style: none;
                padding-left: 1ch;
                transform-origin: center right;
                width: 50cqi;
                rotate: calc(360deg / var(--_items) * calc(var(--_idx) - 1));
                background : hsl(calc(360deg / var(--_items) * calc(var(--_idx))), 100%, 75%);
                height: calc((2.5 * pi * 50cqi) / var(--_items));
                clip-path: polygon(0% -2%, 100% 50%, 0% 102%);
            }

            li p {
                margin-left: 15px;
            }

        </style>

    </head>
    <body style="background-color:#070D0D">

        <header>

            <h1 style="text-align:center;color:#fbfbfb;">Polaroid City</h1>
            <h2 style="text-align:center;color:#fbfbfb;">Wheel of chores.</h2>

        </header>

        <main>

            <ul class="wheel-of-fortune">

                @foreach ($db['chores'] as $chore)

                <li style="--_idx: {{ $loop->index }}"><p>{{ $chore->name  }}</p></li>

                @endforeach

            </ul>


        </main>

    </body>
</html>
