<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <h1 id="tah1">Turistička agencija - TravelAround</h1>

    <div>

        <div id="divforma">

            <div class="prviredforma">

                <div class="form">
                    <label class="form-label">Ime i prezime</label>
                    <input type="text" class="form-control" id="imeprezime">
                </div>

                <div class="form">
                    <label class="form-label">Broj telefona</label>
                    <input type="text" class="form-control" id="brojtelefona">
                </div>

                <div class="form">
                    <label class="form-label">Broj rezervacije</label>
                    <input type="text" class="form-control" id="brojrezervacije">
                </div>

            </div>

            <div class="drugiredforma">

                <div class="form">
                    <label class="form-label">Putovanje</label>
                    <select type="text" class="form-select" id="putovanje_id">
                    <?php
                        require 'models/putovanje.php';

                        $putovanje = new Putovanje();
                        $putovanja = $putovanje->vratiSvaPutovanja();

                        foreach ($putovanja as $p) {
                        ?>
                            <option value="<?php echo $p->id ?>"><?php echo $p->naziv ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form">
                    <label class="form-label">Autobus</label>
                    <select type="text" class="form-select" id="bus_id">
                    <?php
                        include 'models/bus.php';
                        $bus = new Bus();
                        $busevi = $bus->vratiSveBuseve();

                        foreach ($busevi as $b) {
                        ?>
                            <option value="<?php echo $b->id ?>"><?php echo $b->regtablice ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form">
                    <label class="form-label">Vodič</label>
                    <select type="text" class="form-select" id="vodic_id">
  			            <?php
                        include 'models/vodic.php';
                        $vodic = new Vodic();
                        $vodici = $vodic->vratiSveVodice();

                        foreach ($vodici as $v) {
                        ?>
                            <option value="<?php echo $v->id ?>"><?php echo $v->imeprezime ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

            </div>

        </div>

        <button class="btn btn-secondary" id="dodajbutton">DODAJ PUTNIKA</button>
        <br>
        <button class="btn btn-secondary" id="azurirajbutton">AŽURIRAJ PUTNIKA</button>

        
        <label id="putnikid"></label>

        <?php

                    include 'tabela.php';
        ?>  

    </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/index.js"></script>

</body>

</html>