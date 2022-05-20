
<x-app-layout>
    <x-slot name="header" class="invisible">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Le Téléscope Optique') }}

        </h2>
    </x-slot>


    <div
        id="carouselDarkVariant"
        class="carousel slide carousel-fade carousel-dark relative"
        data-bs-ride="carousel"
    >
        <!-- Indicators -->
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button
                data-bs-target="#carouselDarkVariant"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                data-bs-target="#carouselDarkVariant"
                data-bs-slide-to="1"
                aria-label="Slide 1"
            ></button>
            <button
                data-bs-target="#carouselDarkVariant"
                data-bs-slide-to="2"
                aria-label="Slide 1"
            ></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner relative w-full overflow-hidden">
            <!-- Single item -->
            <div class="carousel-item active relative float-left w-full">
                <img
                    src="https://images-ext-2.discordapp.net/external/ftVsYyHWp1wOWlpdvygvdWHZeuZkgh4PvJTUWhHG89I/https/www.stelvision.com/astro/wp-content/uploads/2018/04/cinq-exemples-lunettes-astronomiques-et-telescopes-1024.jpg"
                    class="block w-full"
                    alt="Motorbike Smoke"
                />
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl ">First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item relative float-left w-full">
                <img
                    src="https://images-ext-1.discordapp.net/external/37Q-LW58VxEqiu0jj1SOLxijBy0J_BK6rXb00rdwHWY/%3FVersionId%3DH.PIiDi8DNeFIx5kqDfUIGrip4d35MZO/https/resize-parismatch.lanmedia.fr/var/pm/public/media/image/2022/03/05/17/En-Chine-le-plus-grand-radiotelescope-au-monde.jpg?width=1008&height=671"
                    class="block w-full"
                    alt="Mountaintop"
                />
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl text-white" style="text-shadow: 2px 2px 2px black">Plus grand radio-Téléscope au monde</h5>
                    <p class="text-white" style="text-shadow: 2px 2px 2px black">?</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item relative float-left w-full">
                <img
                    src="https://images-ext-1.discordapp.net/external/Sr5QoSIzm70oGrubYPfMnZ_14a3vev3OrLrNelo2Rpk/https/cdn.futura-sciences.com/buildsv6/images/wide1920/4/b/0/4b0a6f5ba6_50184649_artist-s-impression-of-the-james-webb-space-telescope.jpg?width=1074&height=671"
                    class="block w-full"
                    alt="Woman Reading a Book"
                />
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl text-white" style="text-shadow: 2px 2px 2px black">Third slide label</h5>
                    <p class="text-white" style="text-shadow: 2px 2px 2px black">Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button"
            data-bs-target="#carouselDarkVariant"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button"
            data-bs-target="#carouselDarkVariant"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Le Téléscope Optique') }}
        </h2>
    </x-slot>

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    Page Planetarium--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <iframe src="{{route("gate")}}" height="300px" scrolling="no" frameborder="0"></iframe>--}}


    <div style="width: 100%; height: 1000px; float: none; clear: both; margin: 2px auto;">


    <script type="text/javascript">
        document.getElementsByClassName("ytp-title-text").class = display: none;
    </script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                <div class="p-6 bg-white border-b border-gray-200" style="display: flex;flex-direction: column;">
                   Le télescope est un instrument qui fait paraître les choses éloignées plus proches et lumineuses. L’histoire de son invention est un peu approximative. La plupart des gens attribuent la réalisation du prototype à Galileo Galilei (Galilée), en 1609, mais les connaissances requises pour en fabriquer avaient déjà été acquises avant cela. Toutefois, personne n’a encore trouvé de preuve de l’existence des télescopes avant 1608, année à laquelle des artisans opticiens des Pays-Bas en ont construit. Un de ces artisans, Hans Lippershey, a tant fait parler de sa création que des échos en sont parvenus à Galilée un an plus tard. Celui-ci a alors conçu une version considérablement améliorée de l’instrument du Néerlandais. Ses efforts d’autopromotion, de même que ses observations sur les plus grosses lunes de Jupiter, ont fait la renommée de Galilée en tant que pionnier de l’astronomie.
                    <br> <br>
                    <img class="flex justify-center"src="https://parlonssciences.ca/sites/default/files/styles/x_large/public/2020-02/bertini_fresco_of_galileo_galilei.jpg?itok=c0G8neQz" alt="">
                    <br>
                    En 1923, Edwin Hubble (en honneur duquel le fameux télescope spatial a été nommé) s’est servi du plus puissant télescope qui existait alors sur Terre pour observer la galaxie d’Andromède. Les astronomes savaient qu’elle était composée d’étoiles, mais c’est Hubble qui a réussi à déterminer à quelle distance elle se trouvait de nous. Les chercheurs avaient déjà établi les dimensions approximatives de la Voie lactée, et Hubble a calculé qu’Andromède était au moins dix fois plus éloignée que l’extrémité de cette dernière. Cette découverte a mené à de nouvelles observations qui, en confirmant l’existence d’autres galaxies, ont radicalement étendu notre notion de l’Univers.
                   <br> <br>
                   Les réfracteurs (ou lunettes astronomiques) sont ces longs instruments qu’on imagine toujours dans les mains des premiers astronomes, comme Galilée. Ils emploient des lentilles pour réfracter (faire changer de direction) la lumière entrante à travers un tube, jusqu’à un foyer (voir le chapitre sur la physique pour en savoir plus sur la réfraction). Les réfracteurs sont normalement dotés de deux lentilles : l’objectif (la lentille avant, par laquelle la lumière entre) et l‘oculaire (la lentille qui agrandit l’image).
                   <br> <br>
                   <img src="https://parlonssciences.ca/sites/default/files/styles/width_800px/public/2020-04/rayons_lumineux_lunette_astronomique.png?itok=9DJ5wcRC" alt="">
                   Les réflecteurs se servent de miroirs au lieu de lentilles pour refléter la lumière sur un foyer (voir le chapitre sur la physique pour en savoir plus sur la réflexion) : le miroir primaire à l’arrière, gros et incurvé, qui effectue la première focalisation, et le miroir secondaire à l’avant, plus petit, conçu pour rediriger la lumière vers l’œil. Les réflecteurs sont également dotés d’un oculaire.
                   <br> <br>
                   <img src="https://parlonssciences.ca/sites/default/files/styles/width_800px/public/2020-04/lumineux_%C3%A0_travers_le_tube_d%E2%80%99un_t%C3%A9lescope_0.png?itok=LIBl_0OQ" alt="">
                   On ne peut pas vraiment dire qu’un type de télescope est meilleur que l’autre. Ils ont chacun leurs avantages et leurs inconvénients, selon ce qu’on veut observer, qu’on veuille ou non photographier ce qu’on voit, qu’on souhaite transporter l’instrument ou non, etc. Aujourd’hui, la plupart des observatoires (établissements d’observation astronomique) ont recours à des réflecteurs. Les télescopes qu’on y trouve sont énormes! Leur taille permet le passage de la plus grande quantité de lumière possible. Pour fabriquer des réfracteurs de cette taille, les lentilles et les tubes seraient respectivement bien trop lourdes et bien trop longs, les rendant à la fois gênants et moins efficaces que les réflecteurs.
                   <br> <br>
                   <img src="https://parlonssciences.ca/sites/default/files/2020-02/hooker_telescope.gif" alt="">
                   <br>
                   Les télescopes ont deux importantes caractéristiques : leur ouverture et leur distance focale. L’ouverture d’un télescope équivaut à son diamètre avant. Plus ce diamètre est grand, plus la quantité de lumière entrante sera élevée. La pupille de nos yeux (leur « ouverture » à eux) ne mesure que quelques millimètres. Le diamètre des télescopes est rarement inférieur à 8 cm (les plus gros peuvent mesurer au-delà de 10 m). Certains objets astronomiques étant beaucoup moins lumineux que d’autres, il nous faut en effet des télescopes dotés de grandes ouvertures capables de faire entrer suffisamment de lumière pour les voir.

                   <br> <br>
                   <img src="https://parlonssciences.ca/sites/default/files/styles/x_large/public/2020-02/canada-france-hawaii_telescope.jpg?itok=AQdUGphq" alt="">
                   <br> <br>
                   La distance focale correspond à la longueur entre l’ouverture et le foyer d’un télescope. Plus cette distance est grande, plus le champ de vision de l’instrument est petit. Toutefois, les longues distances focales permettent d’agrandir davantage les images captées. Ici encore, les réflecteurs sont avantagés. En effet, étant donné que les réfracteurs changent la direction de la lumière qui passe dans leur tube, celui-ci doit être au moins aussi long que la distance focale. Les miroirs des réflecteurs réfléchissent cette lumière; ils peuvent donc être plus courts. Comme on le voit à la figure 3, la lumière parcourt ainsi la même distance dans un tube moins grand. L’oculaire est placé près du foyer du miroir primaire pour agrandir l’image.

                   Vous devez commencer à vous dire que les meilleurs télescopes devraient toujours avoir les plus grandes ouvertures et distances focales possible. Outre le prix et l’espace qu’ils prendraient, voici d’autres raisons pourquoi ce n’est pas toujours une bonne idée. Premièrement, l’ouverture n’a pas beaucoup d’importance pour ceux qui étudient le système solaire. En effet, la plupart des planètes sont visibles avec les plus petits télescopes. De plus, les objets comme la Lune sont si brillants qu’ils pourraient aveugler les utilisateurs d’instruments de plus gros diamètres. Deuxièmement, les télescopes ayant de plus petites ouvertures (20 cm p. ex.) sont quand même capables de voir des centaines de galaxies (vastes ensembles d’étoiles, de gaz et de poussière) et de nébuleuses (nuages interstellaires également composés de gaz [hydrogène] et de poussière). Dont certaines se trouvent à près d’une centaine de millions d’années-lumière de la Terre! En fait, un faible grossissement peut se révéler avantageux si on veut observer de manière globale des objets comme des amas stellaires, qui occupent déjà beaucoup de place dans l’oculaire. La galaxie d’Andromède (voir la figure 6) semble par exemple être plus grande que la pleine lune dans un ciel nocturne!
<br><br>
                   <br> <img src="https://parlonssciences.ca/sites/default/files/styles/x_large/public/2020-02/andromeda_galaxy.jpg?itok=yCHqwi5W" alt="">
                <br> La galaxie d’Andromède
            </div>
            </div>
        </div>
    </div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="py-8">Le Téléscope Spatial</h2>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                <div class="p-6 bg-white border-b border-gray-200" style="display: flex;flex-direction: column;">
                    Les années 1960 ont vu la découverte de deux phénomènes astrophysiques qui ont rapidement accrédité la théorie du Big Bang de Georges Gamow et Georges Lemaître, rendant de plus en plus intenable le modèle cosmologique standard précédent où le cosmos observable n'était qu'une fraction d'un univers infini. Un univers en expansion éternelle sans début ni fin dans lequel des processus de création de matière faisaient naître de nouvelles galaxies pour maintenir une densité de matière constante malgré l'effet de dilution de l'expansion.                    <br> <br>
                    <br>
                    Ces phénomènes étaient les quasars, dont on sait maintenant qu'ils sont très probablement des trous noirs supermassifs de Kerr en rotation accrétant beaucoup de matière, et le rayonnement fossile.
                    <br> <br>
                    Les quasars ont de fortes raies d'émission Lyman-alpha, c'est-à-dire une émission de photons dans le domaine de l'ultraviolet bien décrite par le modèle de Bohr de l'atome d'hydrogène qui se désexcite d'une certaine manière. Ces raies d'émission sont aussi produites de la même manière par la matière chauffée par la naissance de jeunes étoiles dans les galaxies.
                    <br> <br>
                   Le décalage vers le rouge du spectre des quasars que l'on mesure avec une quantité notée « z » qui est d'autant plus élevée qu'un quasar est observé loin, donc tôt dans l'histoire du cosmos observable, nous indique selon la loi de Hubble-Lemaître qu'ils sont situés majoritairement à des milliards d'années-lumière de la Voie lactée. On observe également une série de raies d'absorption dans le spectre des quasars. Il s'agit de la même raie d'émission Lyman-alpha absorbée par de la matière entre un quasar et un instrument sur Terre. Mais comme les distances des quasars varient, on voit aussi des raies décalées selon la distance et qui forment au final ce que l'on appelle des forêts Lyman-alpha.
                   <br> <br>
                   C'est paradoxal, comme l'a mis en évidence la prise en compte à un moment donné d'un effet découvert par les astrophysiciens James Gunn et Bruce Peterson en 1965. En effet, l'hydrogène neutre que l'on sait exister entre les galaxies devrait assez rapidement bloquer le rayonnement Lyman-alpha mesurable en l'absorbant. À moins d'imaginer qu'une partie de l'hydrogène présent soit ionisée.
                   <br> <br>
                   <br>
                   Depuis 13,8 milliards d’années, l’Univers n’a cessé d’évoluer. Contrairement à ce que nous disent nos yeux lorsque l’on contemple le ciel, ce qui le compose est loin d’être statique. Les physiciens disposent des observations à différents âges de l’Univers et réalisent des simulations dans lesquelles ils rejouent sa formation et son évolution. Il semblerait que la matière noire ait joué un grand rôle depuis le début de l’Univers jusqu’à la formation des grandes structures observées aujourd’hui. © CEA Recherche

                   <br> <br>
                   <br> <br>
                   Une réionisation cosmique
                   Toutefois la découverte et l'interprétation de l'existence du rayonnement fossile dans le cadre de la théorie du Big Bang et son étude à partir des mesures faites par le satellite Planck, en particulier, nous indiquent qu'environ 380.000 ans après le Big Bang, l'émission du rayonnement fossile est précisément due à la formation d'atomes d'hydrogène et d'hélium neutre, la température du plasma formé d'ions et d'électrons les conduisant par sa chute due à l'expansion du cosmos à se combiner.

<br>
                   Les cosmologistes sont donc arrivés à la conclusion dans les quelques centaines de millions d'années qui ont suivi l'émission du rayonnement fossile, que quelque chose s'est produit et a conduit à la réionisation de la matière ordinaire du cosmos observable.


                   <br><br>
                   <img src="https://images-ext-1.discordapp.net/external/voMjHdUpc2DYO5n1qPfqEq1Z8Fl87votoqDVqtMuhqE/%3F_nc_cat%3D104%26ccb%3D1-7%26_nc_sid%3D5cd70e%26_nc_ohc%3DUaDdTCQrHTAAX-ohTFP%26_nc_ht%3Dscontent-frt3-1.xx%26oh%3D00_AT9cse7NITyvx1p1V5OBoNfFpgJkGnwDttqgaLH7IIlhdA%26oe%3D628A6DF4/https/scontent-frt3-1.xx.fbcdn.net/v/t39.30808-6/281668662_10160432529444524_1830893851982706226_n.jpg?width=897&height=897" alt="">
                <br> <br>
                On pense que c'est tout simplement la formation des premières étoiles dans les premières galaxies et aussi l'accrétion de matière par les premiers trous noirs géants qui auraient produit le rayonnement non seulement conduisant à ce qu'on appelle la fin des âges sombres (au début desquels il n'existait pas encore d'étoiles) mais aussi, en même temps, à la réionisation (Epoch of Reionization  ou EoR en anglais), il y a plus de 13 milliards d'années.

Les cosmologistes aimeraient bien comprendre en détail la chronologie de la réionisation, car elle est porteuse d'informations sur la naissance des étoiles et des galaxies. Jusqu'à présent, on avait qu'un début d'accès timide et restreint de la fin de la réionisation avec des télescopes comme Hubble, mais tout devrait changer une fois que le télescope James-Webb sera pleinement opérationnel dans quelques mois.

Il existe un autre rayonnement qui peut nous donner des renseignements non seulement sur ce qui s'est passé pendant les âges sombres, mais aussi pendant le réionisation. Les nuages d'hydrogène neutre pouvaient en effet émettre un rayonnement radio via la fameuse raie à 21 cm. On devrait pouvoir observer, cartographier et étudier une sorte d'équivalent du rayonnement de fond diffus fossile mais produit cette fois-ci par les nuages d'hydrogène neutre de ces deux périodes. On attend beaucoup à ce sujet de la mise en service du réseau de radiotélescopes Square Kilometre Array (SKA).


Un extrait de la simulation Thesan avec un carottage dans le passé qui débute avec des observations à un décalage spectral mesuré avec z qui est élevé et qui diminue avec le temps qui passe. On voit aussi bien la réionisation qui progresse dans le contenu en hydrogène neutre que l'effondrement de cet hydrogène en galaxies et filaments d'amas de galaxies provoqué par l'effondrement de la matière noire et dont la simulation tient compte également. © Thesan simulations

Des simulations pour reproduire l'histoire de l'Univers primitif
Toutefois, dans tous les cas, il faut un modèle pour interpréter les observations, observations qui en retour servent à tester les hypothèses derrière un modèle. Or, il se trouve que si l'on peut comprendre jusqu'à un certain point ce qui s'est passé pendant les quelques dizaines de millions d'années après le Big Bang par des calculs analytiques simples avec des approximations linéaires des équations utilisées, cela n'est plus possible par la suite car il faut affronter le régime non linéaire de ces équations et des simulations numériques sont alors indispensables.

Depuis des décennies, on effectue ces simulations pour comprendre la naissance des galaxies et leur rassemblement avec le temps en grandes structures filamenteuses. Au départ, il s'agissait de décrire l'effet de la gravitation sur des distributions de matière noire seule, car elle représente l'essentiel de la masse sous forme de matière. Mais avec le temps, on s'est rendu compte - comme en plus la montée en puissance des ordinateurs a fini par permettre de le faire - qu'il fallait aussi prendre en compte des effets fins du comportement de la matière baryonique. Ainsi, une flambée de formation d'étoiles dans une jeune galaxie conduit à une flambée de supernovae dont le souffle des explosions peut expulser d'une galaxie le gaz baryonique, modifiant les distributions de matière normale et donc par contrecoup sous l'effet de la gravité la distribution de la matière noire et la façon aussi dont des nuages de matière vont s'accréter sur des galaxies et les faire croître.


L'une des dernières simulations en date de ce genre s'appelle Thesan et elle a été développée par des scientifiques du MIT, de l'Université de Harvard et de l'Institut Max-Planck d'astrophysique. Elle a été nommée d'après la déesse étrusque de l'aube, Thesan, car elle est conçue pour simuler plus particulièrement la réionisation cosmique. Comme on peut s'en convaincre en lisant un article à ce sujet publié dans Monthly Notices of the Royal Astronomical Society, et dont une version en accès libre se trouve sur arXiv, elle bat des records de complexité à cet égard en modélisant finement la production de rayonnement par les étoiles, les explosions de supernovae et le rayonnement des trous noirs supermassifs ainsi que les effets de ce rayonnement sur les galaxies et le milieu intergalactique qui conditionne aussi par ses apports de matière, par exemple sous forme de filaments de matière noire froide, l'évolution des galaxies.

La simulation Thesan a été implémentée sur SuperMUC-NG - l'un des plus grands supercalculateurs au monde - qui exploitait simultanément 60.000 cœurs de calcul pour effectuer les calculs de Thesan sur un équivalent de 30 millions de CPU. Basée sur une précédente simulation appelée Illustris-TNG qu'elle étend, elle bat un record non seulement en ce qui concerne la prise en compte poussée de divers phénomènes astrophysiques survenus depuis l'émission du rayonnement fossile mais aussi en ce qui concerne le volume d'espace-temps, où l'on décrit finement l'époque de la réionisation (c'est-à-dire entre 380.000 ans et un milliard d'années après le Big Bang environ), à savoir un volume cubique de l'Univers observable s'étendant sur 300 millions d'années-lumière et dans lequel on suit l'apparition et l'évolution de centaines de milliers de galaxies.
            </div>
            </div>
        </div>
    </div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="py-8">Radiotélescope</h2>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                <div class="p-6 bg-white border-b border-gray-200" style="display: flex;flex-direction: column;">
                    Jean-Jacques Maintoux F1EHN
                    <br> <br>

                    Parfois, les circonstances nous permettent d’effectuer des tâches qui nous ne ferions pas en temps normal par manque de temps, impatience ou manque de motivation.
                    <br> <br>

                    En ce Printemps 2020, étant confiné, j’ai donc décidé d’approfondir la bande de ciel observée par le radiotélescope (RT) F4KLO de La Villette. Actuellement son antenne est bloquée au zénith mais cela n’empêche pas, tout au contraire, d’utiliser une méthode d’observation très (peut être la plus) utilisée en radioastronomie, le transit.
                    <br> <br>

                    En effet, si l’antenne est en position fixe au zénith, la mécanique céleste est toujours active. Et le faisceau du RT balaye chaque jour la bande de ciel correspondant à la déclinaison, 48° 53’ 38’’ correspondant à la latitude du radio-club (point particulier lié à l’observation au zénith).
                    <br> <br>

                    Voici ce que va voir, le RT durant 24 h, selon une vue « coordonnées équatoriales » Déclinaison / Ascension droite en 24h (cercles de couleur). Si l’on observe chaque jour, nous ne verrons que l’heure se décale de jour en jour d’environ 4 minutes du fait de l’orbite terrestre autour du soleil (écart entre le temps sidéral et le temps solaire). A suivre ici dans Actualités et Observation quotidienne du RT http://www.f4klo.ampr.org/
                    <br> <br>


                    Ci-dessous, la même vue en coordonnées galactiques Latitude en fonction de la Longitude

                    <br> <br>

                    On peut noter que le faisceau du RT traverse le plan galactique à 2 reprises chaque jour.
                    <br> <br>

                    Dans cette note, vous trouverez successivement 5 chapitres
                    <br> <br>

                    La vérification du pointage de l’antenne à partir d’une image brute
                    La mise en évidence que quelques défauts du récepteur et des améliorations potentielles à tester
                    L’analyse du transit du plan galactique et la mise en évidence de la déformation du plan galactique
                    La mesure de la distance d’un bras galactique observé lors de ce transit
                    Le calcul de la vitesse de rotation de notre galaxie sur cette ligne de visée.
                    Bonne lecture.
                    <br> <br>

                    Vous pouvez joindre l’équipe pour poser vos questions si des points sont trop obscurs. Mais prenez le temps de parcourir les références et en ce moment, du temps, on en a !
                    <br> <br>

                    Vérification du pointage de l’antenne
                    Pour connaitre la position réelle de l’antenne après 35 ans d’immobilité, l’idée est de comparer le signal 21cm reçu a un instant donné au signal issu d’une base de données (Surveillance effectuée par des RT scientifiques).
                    <br> <br>

                    La précision angulaire de cette mesure est de l’ordre de 0.5 degré, liée à l’ouverture de 1° du RT et également à la résolution de 0.6° de la base de données (LAB).
                    <br> <br>

                    Cette analyse est effectuée à partir de données brutes enregistrées le 10 Avril 2020.
                    <br> <br>

                    1er point proche du plan galactique vers 7h20 UTC
                    Les signaux reçus sont montrés ci-dessous. Le transit se situe autour de la droite en tirets noirs vers 7h20. La vue du transit est donnée dans la figure suivante.
                    <br> <br>

                    Image brute des données SDR3 du 10/04/2020

                    <br> <br>

                    Prédiction du transit : à 7.4 UTC soit 7h24, l’antenne (Elev=90°) pointe LonGal=88° et LatGal=3.2°

                    <br> <br>

                    L’observation correspond à la position du cercle de l’image ci-dessous
                    <br> <br>

                    carte radio astronomique de la Galaxie
                    Le point choisi est légèrement en dehors de la latitude 0 (celle du plan galactique). Voir plus bas la justification au paragraphe 3.
                    <br> <br>

                    Des données 24h, on effectue une coupe spectrale à 072311 (au plus proche de 072400) – Erreur env 0.1°
                    <br> <br>


                    Simulation du LAB pour LonGal=88° et LatGal=3.2° et ouverture 1°

                    Décalage en vitesse lié au LSR non corrigé

                    <br> <br>

                    2ème point vers 15h00 UTC
                    A 15h00 UTC, la position de l’antenne fixe au zénith pointe alors vers LongGal (l) 155° et LatGal(b) 0°.

                    <br> <br>

                    La coupe spectrale à 15h00 (après correction de la ligne de base pour plus de précision)
                    <br> <br>


                    Remarque : On peut constater que la compensation par le ½ spectre (vitesse positive) utilisé en double pesée est loin de bien compenser les ondulations du SDR. Voir chapitre suivant.
                    <br> <br>

                    Simulation du LAB pour LonGal (l) =155° et LatGal (b) =0° et ouverture 1°

                    <br> <br>

                    Les 2 spectres sont également très proches.
                    <br> <br>

                    Conclusion concernant le pointage
                    <br> <br>

                    Spectres très proches de l’attendu => Pointage correct de l’antenne du RT-LV à mieux que 0.5°. Les spectres à +/-0.5° divergent de manière significative. On ne peut être plus précis car le LAB a une résolution de 0.6°. Ou il faudrait tracer tous les spectres et faire une corrélation pour trouver le meilleur spectre/pointage par interpolation.
                    <br> <br>

                    Défauts image brute et améliorations potentielles
                    L’image brute observée sur 24h sans correction comporte de nombreux parasites et ondulations.

                    <br> <br>

                    Les ondulations sont fréquentes sur les SDR « low-cost ». L’origine des raies parasites est à trouver.
                    <br> <br>

                    Toutefois, on peut limiter la présence de ces raies en effectuant un filtrage médian mobile ou glissant sur données de l’axe fréquence/vitesse pour chaque mesure. Il faut utiliser une fenêtre réduite à un faible nombre de cases FFT pour ne pas perdre d’information du signal HI observé. Il faut être vigilent et ne pas abuser de cette technique.
                    <br> <br>


                    La figure ci-dessus montre le spectre brut en bleu et celui après filtrage « médian » en rouge. On peut noter l’amélioration et la conservation de l’information.
                    <br> <br>

                    Actuellement, les images présentées sur l’information quotidienne sont corrigées en utilisant le spectre à vitesse positive (au-delà d’environ 45 km/s) pour corriger la ligne de base de la partie négative.
                    <br> <br>

                    Il semble que cette correction ait dérivée et le résultat n’est pas correct.
                    <br> <br>

                    La figure ci-dessous montre la fluctuation de la ligne de base en traçant une coupe spectrale toutes les 2 heures.
                    <br> <br>


                    Si l’on regarde la vue sur 24h après filtrage médian, on constate que les raies parasites sont quasiment inexistantes mais les fluctuations de -7 à + de 10K d’erreur sont trop importantes. Ça nuit fortement à la sensibilité et à la qualité des mesures.

                    <br> <br>

                    Ici aussi la cuvette sombre est bien visible (comme sur les coupes spectrales) entre 9h et 18h.
                    <br> <br>

                    Cette technique de demi-spectre n’est pas adaptée pour la suite car l’observation des vitesses positives est nécessaire quand la rotation de l’antenne sera possible.
                    <br> <br>

                    J’ai profité de ces traitements pour passer les cartes et spectres en température d’antenne (en K) en considérant la température système du RT (Tsys) à 220 K. Les résultats sont assez proches des valeurs de la base du LAB.
                    <br> <br>

                    Réflexion sur une évolution du traitement et des possibilités d’amélioration et d’observations
                    <br> <br>

                    Plutôt que de replier des ½ spectres, il serait probablement plus efficace d’enregistrer un second canal de référence (hors signal HI) et plus opérationnel car :
                    <br> <br>

                    On aurait 2 canaux similaires (méthode classique) qui auront peut-être un comportement plus similaire que des ½ canaux
                    Ça laisserait plus de bande pour relever H1 car actuellement on ne peut pas traiter les vitesses positives ce qui sera nécessaire pour plus tard
                    L’autre intérêt du canal de référence, ce serait de pouvoir faire un vrai relevé du continuum (spectre large) à 21cm ce qu’on n’a toujours pas fait/montré. On pourrait observer le fond cosmique et des radio sources.
                    Le 2ème intérêt est de pouvoir créer une vraie ligne de base de référence à l’aide d’un polynôme numérique afin de corriger les ondulations du spectre H1 sans réintroduire de parasite ni de bruit => Gain en sensibilité.
                    A partir de ces 2 mesures à H1 (relevé H1 + continuum) et Référence (relevé continuum) on peut ressortir une carte complète de H1 pour toute la gamme de vitesse (en effectuant le ratio des 2 mesures).
                    Il va falloir trouver le bon écart de fréquence (au moins 2 MHz) pour d’une part trouver un comportement similaire** du RSP mais aussi un canal « clair / sans RFI ».
                    ** si une légère différence existe, ce n’est pas grave si l’écart est stable, on peut ajouter une 2ème correction (souvent il faut une correction monotone pour corriger la réponse des filtres analogiques et/ou FE numérique). C’est une pratique courante en optique en effectuant Dark, Flat et Offset.
                    Autre remarque, 2 minutes pour un lobe à 1° n’est pas négligeable. 2 minutes => 15°/30 soit 0.5° (un ½ lobe). C’est aussi la limite pour vérifier le pointage. C’est bien adapté à une image 24h mais pas à des observations classiques (il faudra au moins 2 modes).
                    <br> <br>
                    <img src="https://static.lexpress.fr/medias_10140/w_1034,h_450,c_crop,x_0,y_79/w_1000,h_563,c_fill,g_north/v1421859915/sursaut-radio-rapide-fast-radio-burst_5191991.jpg" alt="">
                    Il faudrait également passer les FFT à 2048 points au lieu de 4096, ainsi on doublerait la bande de mesure tout en gardant une résolution d’enviton 0.25 km/s. De plus ça compense la réduction du temps d’intégration (Produit B*T constant par exemple).
                    <br> <br>

                    En passant à 1024 bin, on doublerait encore la bande et on améliorerait la sensibilité avec une résolution de 0.5 km/s (il ne faut pas aller au-delà pour pouvoir corriger en Doppler (« shift » spectral) avec une bonne résolution).

                    A réfléchir…
                    <br> <br>

                    Analyse du transit du plan galactique – déformation du plan galactique
                    Ce chapitre a pour but d’analyser le transit du plan galactique. A partir de ces mesures on pourra déterminer des valeurs importantes de distance des nuages H1 et vitesse de rotation dans notre Galaxie comme montré aux chapitres 4 et 5. On va pouvoir également observer la déformation du plan galactique appelé WARP.
                    <br> <br>


                    Vue d’artiste issue du site donné en référence (**WARP).
                    Après avoir validé la position de l’antenne, il est donc possible de profiter pleinement des mesures effectuées.
                    <br> <br>

                    A partir de l’heure, de la position d’antenne et de la position du RT, les signaux mesurés sont recalés selon les coordonnées galactiques (conversion coordonnées horizontales en coordonnées galactiques).
                    <br> <br>

                    A partir de ces coordonnées galactiques, il est alors possible de calculer la correction Vitesse pour aboutir à la VLSR (vitesse corrigée dans le référentiel local).
                    <br> <br>

                    Les données corrigées sont alors filtrées autour du plan galactique, c’est-à-dire latitude galactique +/-7° dans notre exemple.
                    <br> <br>

                    Le 1er transit pour latitudes comprises entre +/-7° est env. entre 06:55 et 08:55 UTC. Ci-dessous, la figure montre les 2 vues Vitesses selon latitude galactique et selon le temps (corrigées VLSR). Longitude moyenne* de 88°.
                    <br> <br>


                    Velocité LSR km/s
                    Autour de 0 km/s on peut voir un plan galactique plus « épais » et des signaux plus puissants. Cette zone correspond à notre bras local. L’ouverture d’antenne de 1° recueille ainsi un maximum de signal H1.
                    <br> <br>

                    On peut noter que pour le bras plus lointain à -80 km/s (voir chapitre suivant), le bras est bien au-dessus du plan galactique ce qui révèle la déformation de notre Galaxie (WARP). Le plan galactique, dans cette région (longitude galactique de 88°) est centrée aux environs de 2°.
                    <br> <br>

                    * A NOTER : Cette mesure est légèrement faussée car elle ne se fait pas à longitude galactique constante du fait de l’antenne bloquée. On coupe donc le plan légèrement en biais comme le montre la simulation ci-dessous.
                    <br> <br>

                    La correction VLSR utilisée est d’environ -22 km/s – La longitude moyenne est de l’ordre de 88°.
                    <br> <br>


                    Le 2ème transit pour latitude comprise entre +/-7° est env. entre 13:55 et 15:55 UTC. Ci-dessous, la figure montre les 2 vues Vitesses selon latitude galactique et selon le temps (corrigées VLSR). Longitude moyenne de 155°.
                    <br> <br>


                    Autour de 0 km/s on peut voir un plan galactique plus « épais ». Les signaux puissants correspondent à des zones moins éloignées. L’ouverture d’antenne de 1° recueille un maximum de signal H1. L’inversion des deux images (haut/bas) est due au fait que le transit ne s’effectue pas dans le même sens que dans le 1er cas.
                    <br> <br>

                    A cette longitude, le plan galactique est globalement centré autour de la latitude 0°. Pas de déformation ici.
                    <br> <br>

                    Conclusion concernant la déformation (WARP) de notre Galaxie
                    <br> <br>

                    Selon les scientifiques, cette déformation serait due à une collision avec une galaxie plus petite et on assisterait à une sorte d’onde qui se propage dans notre Galaxie.
                    <br> <br>

                    Autre commentaire en plus de celui sur le signal de référence (Chapitre 2) : Actuellement l’antenne est fixe mais pour plus tard, ce serait bien d’enregistrer la position d’antenne dans le fichier de mesures.
                    <br> <br>

                    Mesure de la distance d’un bras galactique observé lors du 1er transit
                    Au chapitre précédent, un bras relativement lointain a été mis en évidence lors de l’observation du 1er transit.
                    <br> <br>

                    La figure ci-dessous représente notre Galaxie et la direction pointée à cet instant en rouge pointillée.

                    <br> <br>

                    La flèche noir indique notre position dans la Galaxie

                    Les mesures effectuées à ce point sont : VLSR = -78 km/s, Longitude galactique (l) = 88°
                    <br> <br>

                    En ce reportant au document de référence (21cm_2012b), en référence, on peut trouver la distance projetée r sur l’axe de visée. Cette distance r est une solution de l’équation du second degré relative au triangle CPS, C étant le centre galactique, P notre point d’intérêt et S notre position autour du soleil. La distance calculée r de S à P est donc d’environ 10 kpc soit env 32 000 année lumière ( AL ou kLy) correspondant au cercle rouge sur la figure de la Galaxie.

                    Cette position correspond au bras Scuttum-Centaurus selon la carte ci-dessus.
                    <br> <br>

                    Pour info, le point à 47 km/s correspond au bord du bras Norma.
                    <br> <br>

                    Le fait d’avoir une antenne fixe limite fortement cet exercice. Il est important d’avoir plusieurs mesures juxtaposées sur plusieurs lignes de visée pour pouvoir établir et observer la carte de cette zone visée.
                    <br> <br>

                    Calcul de la vitesse de rotation de notre galaxie cette ligne de visée
                    Il faut rappeler que l’effet de rotation de notre Galaxie, sa vitesse de rotation, se traduit en radioastronomie 21 cm par des décalages de fréquence des raies 21cm liés à l’effet Doppler. De ces décalages relevés en radio, on peut ainsi calculer les vitesses observées sur la ligne de visée.

                    <br> <br>

                    Dans le cas de la ligne de visée à l=88°, Nous allons observer des vitesses maximales proche de 0 (cercle jaune). Nous sommes ainsi proche de la distance galacto-centrique maximale pour laquelle cette mesure est réalisable.
                    <br> <br>

                    Avec cette seule mesure, nous allons donc obtenir un point de la courbe de la vitesse de rotation en appliquant la formule suivante :

                    <br> <br>

                    En traçant la coupe spectrale à longitude galactique = 88°, on obtient la courbe ci-dessous.

                    <br> <br>

                    On peut noter que la Vrmax pour cette ligne de visée est de l’ordre de 14.5 km/s.
                    <br> <br>

                    On peut donc calculer Vr = 14.5 + [220 * sin (88°)] soit Vr = 234 km/s
                    <br> <br>

                    La distance galacto-centrique est donnée par R = R0*sin(l) soit R = 8.5 kpc.
                    <br> <br>

                    Ce résultat est proche du résultat attendu comme le montre un bilan des mesures scientifiques ci-dessous.
                    <br> <br>

                    Conclusions
                    J’espère que cette courte visite de notre Galaxie en 21cm, même limitée à une direction de visée, vous aura donné envie d’aller plus loin dans cette découverte.
                    <br> <br>


                A partir de mesures relativement simples mais bien calibrées, il est possible de révéler certaines caractéristiques physiques de notre Galaxie. </div>
            </div>
        </div>
    </div>
</x-app-layout>
