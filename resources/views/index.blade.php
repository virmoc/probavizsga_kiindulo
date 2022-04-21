<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../css/stilus.css" rel="stylesheet" type="text/css" />
    <script src="../js/ajax.js"></script>
    <script src="../js/szakdoga.js"></script>
    <script src="../js/script.js"></script>
    <title>Document</title>
</head>

<body>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai') }}
        </h2>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <article id="sablonhoz">
                <table>
                    <tr class="szakdoga">
                        <td class="szakdoga_nev"></td>
                        <td class="tagokneve"></td>
                        <td class="githublink"></td>
                        <td class="oldallink"></td>
                        <td class="torles"><button>x</button></td>
                        <td class="modositas"><button>ceruza</button></td>
                    </tr>
                </table>
            </article>
                <div class="p-6 bg-white border-b border-gray-200">
                    <section>
                    <table class="szakdolgozatoklistazasa">
                        Admin oldal
                        <thead class="listaadmin">
                            <tr class="fejlec">
                                <th class="szakdogacime">Szakdolgozat címe</th>
                                <th class="tagok">Készítők neve</th>
                                <th class="githublink">GitHub link</th>
                                <th class="oldallink">Szakdolgozat elérhetősége</th>

                            </tr>

                        </thead>
                        <tbody>
                            <tr class="tablazat_sorai">

                            </tr>
                        </tbody>
                    </table>
                    </section>
                    <div class="ujadat">
                        <form>
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor">
                                <label for="szakdoga_nev">Szakdolgozat címe</label>
                                <input type="text" id="szakdoga_nev"><br>
                            </div>
                            <div class="sor">
                                <label for="tagokneve">Készítők neve</label>
                                <input type="text" id="tagokneve"><br>
                            </div>
                            <div class="sor">
                                <label for="oldallink">Az oldal elérhetősége </label>
                                <input type="text" id="oldallink"><br>
                            </div>
                            <div class="sor">
                                <label for="githublink"> GitHub elérhetőség</label>
                                <input type="text" id="githublink"><br>
                            </div>
                            <div class="gomb">
                                <button id="uj">Új</button>
                                <button id="modosit">Módosít</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>