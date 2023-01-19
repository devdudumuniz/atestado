<body>
    <div class="header">
        <div class="contLogo"><img src="../../assets/img/logopref.png" alt=""></div>
        <img style="transform:rotate(180deg);" src="../../assets/img/bg.svg" alt="">
    </div>

    <div class="subHeader">
        <div class="contLeft">
            <h3>Dr. Sílvio Tanajura Filho</h3>
            <span>Psicólogo Organizacional do Trabalho</span><br />
            <span>Psicólogo Clínico</span>
            <p>CRP: 03/006120</p>
        </div>
        <div class="contRight">
        </div>
    </div>
    <h2>Declaração de Comparecimento</h2>
    <div class="body">
        <div class="backgroudPsi"></div>
        <div class="contPreen">
            <p>Declaro que o(a) Sr.(a) : <span id="paciente"><?php echo $paciente;?></span>.</p>
            <p>Esteve em meu consultório no período: <span class="periodo"><?php echo $periodo;?></span>.</p>
            <p>Data: <span class="periodo"><?php echo date('d/m/Y') ?></span>.</p>
            <div style="margin-top: 4%;" class="contMark">
                <div class="mark">
                    <?php echo $iconeMark1;?>
                </div> Consulta
            </div>
            <div class="contMark">
                <div class="mark">
                <?php echo $iconeMark2;?>    
                </div> 
                Acompanhamento Familiar
            </div>
        </div>
        <div class="contAssina">
            <div class="assinatura">
                <p>Assinatura / Carimbo</p>
            </div>
        </div>
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>