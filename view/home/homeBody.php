<?php 
function saudacaoHorario(){
    date_default_timezone_set('America/Sao_Paulo');
    $horario = date("H:i:s");
    if($horario >= "00:00:01" && $horario < "12:00:00"){
        $horario = "Bom dia!";
    }
    else if($horario >= "12:00:01" && $horario < "18:00:00"){
        $horario = "Boa tarde!";
    }
    else{
        $horario = "Boa noite!";
    }
    return $horario;
}



?>


<body>

    <div class="contLeft">
        <div class="contLogoPref"><img src="./assets/img/logopref.png" alt="logopref"></div>
        <div class="slide-container">


            <div style="max-width:100%!important;max-height:100%;" id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div style="position:relative;height:20em;" class="carousel-item active" data-bs-interval="10000">

                        <div class="contTitulos" style="position: absolute;display:flex; justify-content: center; top:0;left:0;width:100%;height:90%">


                            <div style="z-index:9; box-shadow: 5px 0 5px  rgba(51, 50, 50, 0.445); border-radius: 10px; background: rgba(51, 50, 50, 0.445);top:18%;left:15%;width:70%;height:50%" class="carousel-caption d-none d-md-block">
                                <?php echo "<h5>".saudacaoHorario()."</h5>";?>
                                <p style="margin-top:20px;font-size: 1.1em; text-decoration: underline; text-shadow: 1px 1px 3px  rgba(71, 71, 71, 0.555);">Quem olha para fora sonha, quem olha para dentro desperta.</p>
                            </div>

                        </div>
                    </div>
                    <div style="position:relative;height:20em;" class="carousel-item" data-bs-interval="2000">

                        <div class="contTitulos" style="position: absolute;display:flex; justify-content: center; top:0;left:0;width:100%;height:90%">


                            <div style="z-index:9; box-shadow: 5px 0 5px  rgba(51, 50, 50, 0.445); border-radius: 10px; background: rgba(51, 50, 50, 0.445);top:18%;left:15%;width:70%;height:50%" class="carousel-caption d-none d-md-block">
                               <?php echo "<h5>".saudacaoHorario()."</h5>";?>
                                <p style="margin-top:20px;font-size: 1.1em; text-decoration: underline; text-shadow: 1px 1px 3px  rgba(71, 71, 71, 0.555);">A inteligência é o único meio que possuímos para dominar os nossos instintos.</p>
                            </div>

                        </div>
                    </div>
                    <div style="position:relative;height:20em;" class="carousel-item" data-bs-interval="2000">

                        <div class="contTitulos" style="position: absolute;display:flex; justify-content: center; top:0;left:0;width:100%;height:90%">


                            <div style="z-index:9; box-shadow: 5px 0 5px  rgba(51, 50, 50, 0.445); border-radius: 10px; background: rgba(51, 50, 50, 0.445);top:18%;left:15%;width:70%;height:50%" class="carousel-caption d-none d-md-block">
                                <?php echo "<h5>".saudacaoHorario()."</h5>";?>
                                <p style="margin-top:20px;font-size: 1.1em; text-decoration: underline; text-shadow: 1px 1px 3px  rgba(71, 71, 71, 0.555);">O pensamento é o ensaio da ação.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </div>
    </div>
    <div class="contRight">
        <div class="shadow p-3 mb-5 bg-body rounded contFomulario">
            <div style="align-items: center; display:flex; justify-content: center; margin: 4% auto 8% auto;" class="alert alert-primary" role="alert">
                <svg style="margin-right: 25%;" version="1.0" xmlns="http://www.w3.org/2000/svg" width="30px" height="40px" viewBox="0 0 1280.000000 1280.000000" preserveAspectRatio="xMidYMid meet">
                    <metadata>
                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                    </metadata>
                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="#7db636" stroke="none">
                        <path d="M668 11315 c-5 -5 -8 -66 -8 -136 l0 -127 78 -7 c131 -11 204 -25
296 -56 255 -85 417 -265 493 -546 l27 -98 6 -825 c7 -771 9 -835 29 -979 127
-905 494 -1586 1131 -2098 690 -554 1690 -885 2813 -929 l177 -7 -1 -871 c-1
-479 -4 -1233 -8 -1676 l-7 -805 -31 -93 c-76 -226 -222 -385 -454 -496 -104
-50 -229 -89 -359 -112 -129 -22 -363 -36 -478 -29 l-103 7 3 -118 3 -118 105
2 c1490 25 2490 25 3980 0 l105 -2 3 118 3 118 -103 -7 c-116 -7 -349 7 -481
30 -132 24 -252 61 -356 111 -232 111 -374 265 -453 494 l-33 95 -6 840 c-4
462 -7 1216 -8 1676 l-1 836 178 7 c996 39 1904 306 2577 756 256 172 531 422
704 640 362 457 568 966 663 1635 19 139 21 210 28 975 l6 825 27 98 c83 307
269 493 572 571 50 13 232 36 281 36 12 0 14 23 12 133 l-3 132 -170 -1 c-614
-2 -1170 -217 -1550 -598 -218 -219 -361 -461 -470 -791 -84 -254 -121 -497
-135 -876 -5 -141 -17 -321 -25 -400 -76 -689 -287 -1278 -618 -1719 -84 -112
-261 -297 -367 -383 -306 -247 -688 -404 -1125 -462 -134 -18 -491 -32 -548
-21 l-37 7 0 1752 c1 1890 7 2247 39 2389 72 316 274 541 579 644 203 69 424
94 660 75 81 -6 157 -14 170 -17 22 -6 22 -6 22 125 l0 131 -2130 0 -2130 0 0
-131 c0 -131 0 -131 23 -125 12 3 88 11 169 17 236 19 457 -6 660 -75 290 -98
495 -315 567 -598 45 -174 44 -133 48 -2205 l5 -1982 -38 -7 c-58 -11 -414 3
-549 21 -437 58 -819 215 -1125 462 -106 86 -283 271 -367 383 -203 270 -365
606 -472 976 -105 362 -154 692 -171 1143 -14 386 -51 621 -140 891 -248 755
-829 1224 -1673 1351 -138 21 -496 37 -509 24z" />
                    </g>
                </svg>
                <h6 style="margin-right: 25%;color:#000;">Gerar Atestado </h6>
            </div>
            <form action="./view/atestadosModels/index.php" method="POST">

                <div class="form-floating mb-3">
                    <input name="paciente" type="text" class="form-control" id="floatingInput" placeholder="Nome do Paciente">
                    <label for="floatingInput">Nome do Paciente</label>
                </div>
                <select name="periodo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Período</option>
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                </select>
                <select name="tipo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Tipo de Acompanhamento</option>
                    <option value="Consulta">Consulta</option>
                    <option value="Acompanhamento Familiar">Acompanhamento Familiar</option>
                </select>
                <button style="height:3em;width:50%;margin:4% 25%;" type="submit" class="btn btn-outline-success">Gerar</button>
            </form>
        </div>
    </div>




    <a href="https://dudumuniz.tech" target="_blank"><img class="pingpong-ball" src="./assets/img/logo.png" alt="logo"></a>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>