<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>FIFA World Cup Qatar 2022™ | STANDINGS</title>
</head>
<body>
    <style>
        body{
            background-image: url('https://ese-edu.com/wp-content/uploads/2022/11/World-Cup-2022-Blog.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            width:100%;
            height:100%;
        }

        .main-table{
            opacity: 0.93;
        }
    </style>

<!--===PHP=CODE===-->
<?php 
    #PTS : POINTS
    #PAR : TIMES THE TEAM PLAYED
    #GAN : TIMES TEAM WON
    #EMP : TIMES TEAM WENT EQUALED
    #PER : TIMES TEAM LOST
    #G.F : GOALS TEAM MARKED
    #G.S : GOALS MARKED ON TEAM
    #+/- : ~~~~~~~~~~~~~~~~~~~~ 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $PTSM = $PTSCE = $PTSB = $PTSCA = 0;
    $GANM = $GANCE = $GANB = $GANCA = 0;
    $EMPM = $EMPCE = $EMPB = $EMPCA = 0;
    $PERM = $PERCE = $PERB = $PERCA = 0;
    $GFM = $GFCE = $GFB = $GFCA = 0;
    $GSM = $GSCE = $GSB = $GSCA = 0;
    $PMM = $PMCE = $PMB = $PMCA = 0;
    


    if($_POST['matchmorocco1'] == 0 && $_POST['matchcroatia1'] == 0 || $_POST['matchmorocco1'] < 0 || $_POST['matchcroatia1'] < 0 ){
        echo '<script>alert("Notes: \n  - Goals can not be less than 0!  \n  - You can not let two inputs empty!")</script>'; 
    }elseif($_POST['matchbelgium1'] == 0 && $_POST['matchcanada1'] == 0 || $_POST['matchbelgium1'] < 0 || $_POST['matchcanada1'] < 0 ){
        echo '<script>alert("Notes: \n  - Goals can not be less than 0!  \n  - You can not let two inputs empty!")</script>'; 
    }elseif($_POST['matchbelgium2'] == 0 && $_POST['matchmorocco2'] == 0 || $_POST['matchbelgium1'] < 0 || $_POST['matchmorocco2'] < 0 ){
        echo '<script>alert("Notes: \n  - Goals can not be less than 0!  \n  - You can not let two inputs empty!")</script>'; 
    }elseif($_POST['matchcroatia2'] == 0 && $_POST['matchcanada2'] == 0 || $_POST['matchcroatia2'] < 0 || $_POST['matchcanada2'] < 0 ){
        echo '<script>alert("Notes: \n  - Goals can not be less than 0!  \n  - You can not let two inputs empty!")</script>'; 
    }elseif($_POST['matchcroatia3'] == 0 && $_POST['matchbelgium3'] == 0 || $_POST['matchcroatia3'] < 0 || $_POST['matchbelgium3'] < 0 ){
        echo '<script>alert("Notes: \n  - Goals can not be less than 0!  \n  - You can not let two inputs empty!")</script>'; 
    }elseif($_POST['matchcanada3'] == 0 && $_POST['matchmorocco3'] == 0 || $_POST['matchcanada3'] < 0 || $_POST['matchmorocco3'] < 0 ){
        echo '<script>alert("Notes: \n  - Goals can not be less than 0!  \n  - You can not let two inputs empty!")</script>'; 
    }
    else{

     
        if($_REQUEST['matchmorocco1'] > $_REQUEST['matchcroatia1']){
            $PTSM += 3;
            $GANM += 1;
            $PERCE += 1;
            $GFM += $_POST['matchmorocco1'];
            $GFCE += $_POST['matchcroatia1'];
            $GSM += $_POST['matchcroatia1'];
            $GSCE += $_POST['matchmorocco1'];
        }elseif($_REQUEST['matchmorocco1'] == $_REQUEST['matchcroatia1']){
            $PTSM += 1;
            $PTSCE += 1;
            $EMPM += 1;
            $EMPCE += 1;
            $GFM += $_POST['matchmorocco1'];
            $GFCE += $_POST['matchcroatia1'];
            $GSM += $_POST['matchcroatia1'];
            $GSCE += $_POST['matchmorocco1'];
        }elseif($_REQUEST['matchmorocco1'] < $_REQUEST['matchcroatia1']){
            $PTSCE += 3;
            $GANCE += 1;
            $PERM += 1;
            $GFM += $_POST['matchmorocco1'];
            $GFCE += $_POST['matchcroatia1'];
            $GSM += $_POST['matchcroatia1'];
            $GSCE += $_POST['matchmorocco1'];
        }
        
        if($_REQUEST['matchbelgium1'] > $_REQUEST['matchcanada1']){
            $PTSB += 3;
            $GANB += 1;
            $PERCA += 1;
            $GFB += $_POST['matchbelgium1'];
            $GFCA += $_POST['matchcanada1'];
            $GSB += $_POST['matchcanada1'];
            $GSCA += $_POST['matchbelgium1'];
        }elseif($_REQUEST['matchbelgium1'] == $_REQUEST['matchcanada1']){
            $PTSB += 1;
            $PTSCA = 1;
            $EMPB += 1;
            $EMPCA += 1;
            $GFB += $_POST['matchbelgium1'];
            $GFCA += $_POST['matchcanada1'];
            $GSB += $_POST['matchcanada1'];
            $GSCA += $_POST['matchbelgium1'];
        }elseif($_REQUEST['matchbelgium1'] < $_REQUEST['matchcanada1']){
            $PTSCA = 3;
            $GANCA = 1;
            $PERB += 1;
            $GFB += $_POST['matchbelgium1'];
            $GFCA += $_POST['matchcanada1'];
            $GSB += $_POST['matchcanada1'];
            $GSCA += $_POST['matchbelgium1'];
        }

        if($_REQUEST['matchbelgium2'] > $_REQUEST['matchmorocco2']){
            $PTSB += 3;
            $GANB += 1;
            $PERM += 1;
            $GFB += $_POST['matchbelgium2'];
            $GFM += $_POST['matchmorocco2'];
            $GSB += $_POST['matchmorocco2'];
            $GSM += $_POST['matchbelgium2']; 
        }elseif($_REQUEST['matchbelgium2'] == $_REQUEST['matchmorocco2']){
            $PTSB += 1;
            $PTSM += 1;
            $EMPB += 1;
            $EMPM += 1;
            $GFB += $_POST['matchbelgium2'];
            $GFM += $_POST['matchmorocco2'];
            $GSB += $_POST['matchmorocco2'];
            $GSM += $_POST['matchbelgium2'];
        }elseif($_REQUEST['matchbelgium2'] < $_REQUEST['matchmorocco2']){
            $PTSM += 3;
            $GANM += 1;
            $PERB += 1;
            $GFB += $_POST['matchbelgium2'];
            $GFM += $_POST['matchmorocco2'];
            $GSB += $_POST['matchmorocco2'];
            $GSM += $_POST['matchbelgium2'];
        }

        if($_REQUEST['matchcroatia2'] > $_REQUEST['matchcanada2']){
            $PTSCE += 3;
            $GANCE += 1;
            $PERCA += 1;
            $GFCE += $_POST['matchcroatia2'];
            $GFCA += $_POST['matchcanada2'];
            $GSCE += $_POST['matchcanada2'];
            $GSCA += $_POST['matchcroatia2'];

        }elseif($_REQUEST['matchcroatia2'] == $_REQUEST['matchcanada2']){
            $PTSCE += 1;
            $PTSCA += 1;
            $EMPCE += 1;
            $EMPCA += 1;
            $GFCE += $_POST['matchcroatia2'];
            $GFCA += $_POST['matchcanada2'];
            $GSCE += $_POST['matchcanada2'];
            $GSCA += $_POST['matchcroatia2'];
        }elseif($_REQUEST['matchcroatia2'] < $_REQUEST['matchcanada2']){
            $PTSCA += 3;
            $GANCA += 1;
            $PERCE += 1;
            $GFCE += $_POST['matchcroatia2'];
            $GFCA += $_POST['matchcanada2'];
            $GSCE += $_POST['matchcanada2'];
            $GSCA += $_POST['matchcroatia2'];
        }

        if($_REQUEST['matchcroatia3'] > $_REQUEST['matchbelgium3']){
            $PTSCE += 3;
            $GANCE += 1;
            $PERB += 1;
            $GFCE += $_POST['matchcroatia3'];
            $GFB += $_POST['matchbelgium3'];
            $GSCE += $_POST['matchbelgium3'];
            $GSB += $_POST['matchcroatia3'];
        }elseif($_REQUEST['matchcroatia3'] == $_REQUEST['matchbelgium3']){
            $PTSCE += 1;
            $PTSB += 1;
            $EMPCE += 1;
            $EMPB += 1;
            $GFCE += $_POST['matchcroatia3'];
            $GFB += $_POST['matchbelgium3'];
            $GSCE += $_POST['matchbelgium3'];
            $GSB += $_POST['matchcroatia3'];
        }elseif($_REQUEST['matchcroatia3'] < $_REQUEST['matchbelgium3']){
            $PTSB += 3;
            $GANB += 1;
            $PERCE += 1;
            $GFCE += $_POST['matchcroatia3'];
            $GFB += $_POST['matchbelgium3'];
            $GSCE += $_POST['matchbelgium3'];
            $GSB += $_POST['matchcroatia3'];
            $GSCE += $_POST['matchbelgium3'];
            $GSB += $_POST['matchcroatia3'];
        }

        if($_REQUEST['matchcanada3'] > $_REQUEST['matchmorocco3']){
            $PTSCA += 3;
            $GANCA += 1;
            $PERM += 1;
            $GFCA += $_POST['matchcanada3'];
            $GFM += $_POST['matchmorocco3'];
            $GSCA += $_POST['matchmorocco3'];
            $GSM += $_POST['matchcanada3'];
        }elseif($_REQUEST['matchcanada3'] == $_REQUEST['matchmorocco3']){
            $PTSCA += 1;
            $PTSM += 1;
            $EMPCA += 1;
            $EMPM += 1;
            $GFCA += $_POST['matchcanada3'];
            $GFM += $_POST['matchmorocco3'];
            $GSCA += $_POST['matchmorocco3'];
            $GSM += $_POST['matchcanada3'];
        }elseif($_REQUEST['matchcanada3'] < $_REQUEST['matchmorocco3']){
            $PTSM += 3;
            $GANM += 1;
            $PERCA += 1;
            $GFCA += $_POST['matchcanada3'];
            $GFM += $_POST['matchmorocco3'];
            $GSCA += $_POST['matchmorocco3'];
            $GSM += $_POST['matchcanada3'];
        }

    }
/*
    #Calculating all played matches = 3 matches !

    #Sort Teams According to their values
    $sortteams = array('MOROCCO' => $PTSM , 'CROATIA' => $PTSCE, 'BELGIUM' => $PTSB, 'CANADA' => $PTSCA);
    arsort($sortteams);

    #Calculating MATCHES THAT TEAM ==WON== !
    $sortgoals = array('MOROCCO' => $GANM , 'CROATIA' => $GANCE, 'BELGIUM' => $GANB, 'CANADA' => $GANCA);
    arsort($sortgoals);

    #Calculating THE TIMES THAT TEAM WENT ==EQUALED== !
    $sortemp = array('MOROCCO' => $EMPM , 'CROATIA' => $EMPCE, 'BELGIUM' => $EMPB, 'CANADA' => $EMPCA);
    arsort($sortemp);

    #Calculating MATCHES THAT TEAM ==LOST== !
    $sortper = array('MOROCCO' => $PERM , 'CROATIA' => $PERCE, 'BELGIUM' => $PERB, 'CANADA' => $PERCA);
    asort($sortper);

    #Calculating GOALS THAT TEAM ==MARKED== !
    $sortgf = array('MOROCCO' => $GFM , 'CROATIA' => $GFCE, 'BELGIUM' => $GFB, 'CANADA' => $GFCA);
    arsort($sortgf);

    #Calculating GOALS MARKED ON THAT TEAM!
    $sortgs = array('MOROCCO' => $GSM , 'CROATIA' => $GSCE, 'BELGIUM' => $GSB, 'CANADA' => $GSCA);
    $arraylength = count(array_keys($sortteams));
*/
    $sortteamB = $PTSB;
    $sortteamM = $PTSM;
    $sortteamCE = $PTSCE;
    $sortteamCA = $PTSCA;

    $PMM = $GFM - $GFM;
    $PMB = $GFB - $GFB;
    $PMCE = $GFCE - $GFCE;
    $PMCA = $GFCA - $GFCE;

    

    $points = array($PTSM, $PTSCE , $PTSCA, $PTSB);

    $gf = array($GFM, $GFCE , $GFCA, $GFB);

    $pm = array($PMM, $PMCE , $PMCA, $PMB);

    $gan = array($GANM, $GANCE , $GANCA, $GANB);

    $sortit = array($sortteamM, $sortteamCE, $sortteamCA,$sortteamB);



    for($j=0; $j < 4; $j++){
        for($z=($j+1); $z<4;  $z++){
                if(($points)[$j] == ($points)[$z]){
                    $sortit[0] += $gan[0];
                    $sortit[1] += $gan[1];                    
                    $sortit[2] += $gan[2];
                    $sortit[3] += $gan[3];                    
                }
        }
    }

    for($y=0; $y < 4; $y++){
        for($k=($y+1); $k<4;  $k++){
                if(($gan)[$y] == ($gan)[$k]){
                    $sortit[0] += $gf[0];
                    $sortit[1] += $gf[1];                
                    $sortit[2] += $gf[2];
                    $sortit[3] += $gf[3];                
                }
        }
    }

    for($y=0; $y < 4; $y++){
        for($k=($y+1); $k<4;  $k++){
                if(($gan)[$y] == ($gan)[$k]){
                    $sortit[0] += $pm[0];
                    $sortit[1] += $pm[1];                
                    $sortit[2] += $pm[2];
                    $sortit[3] += $pm[3];                
                }
        }
    }

    




    $teams = array (
        $sortit[0] => array('MOROCCO', $PTSM, $GANM,$EMPM,$PERM,$GFM,$GSM,$PMM),
        $sortit[1] => array('CROATIA', $PTSCE, $GANCE,$EMPCE,$PERCE,$GFCE,$GSCE,$PMCE),
        $sortit[2] => array('CANADA', $PTSCA, $GANCA,$EMPCA,$PERCA,$GFCA,$GSCA,$PMCA),
        $sortit[3] => array('BELGIUM', $PTSB, $GANB,$EMPB,$PERB,$GFB,$GSB,$PMB),
    );    
    krsort($teams);


    
  /*  
    #Sort GOALS MARKED ON THAT TEAM without using Sort Function!
    for($i=0; $i<4;$i++){
        for($a=0; $a<4;$a++){
            if(array_keys($sortteams)[$i] == array_keys($sortgs)[$a]){
                array_values($sortgs)[$i] = array_values($sortgs)[$a];
                array_keys($sortgs)[$i] = array_keys($sortgs)[$a];
                #ECHO array_values($sortgs)[$a];

                    if($i == 0){
                        $GS1 = array_values($sortgs)[$a];
                    }elseif($i == 1){
                        $GS2 = array_values($sortgs)[$a];
                    }elseif($i == 2){
                        $GS3 = array_values($sortgs)[$a];
                    }elseif($i == 3){
                        $GS4 = array_values($sortgs)[$a];
                    }
            }
        }
    }

*/



}



?>



















<div class="main-table text-center rounded bg-white p-5 m-lg-5" >
    <div class="d-lg-flex">
        <form action='' method='Post'>
            <!--==Morocco== VS ==Croatia==-->
            <div class="col rounded-top bg-danger p-4 text-white text-center mt-1">
                <div class="container d-flex">
                    <div class="image1 float-start">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/I3gt2Ew39ux3GGdZ-4JE3g_96x96.png' class="img-thumbnail w-50">
                    </div>
                    <div class="goal text-center">
                        <input type='number' value='<?php echo $_POST['matchmorocco1'] ?>' name='matchmorocco1' class='w-25 m-1 p-1 text-center'>
                        <b>-</b>
                        <input type='number' value='<?php echo $_POST['matchcroatia1'] ?>' name='matchcroatia1' class='w-25 m-1 p-1 text-center'>
                    </div>
                    <div class="image2 float-end">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/9toerdOg8xW4CRhDaZxsyw_96x96.png' class="img-thumbnail w-50">
                    </div>
                </div>
            </div>
            <!--==Belgique== VS ==Canada==-->
            <div class="col bg-secondary p-4 text-white text-center mt-1">
                <div class="container d-flex" >
                    <div class="image1 float-start">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/6SF7yEoB60bU5knw-M7R5Q_96x96.png' class="img-thumbnail w-50">
                    </div>
                    <div class="goal text-center">
                        <input type='number' value='<?php echo $_POST['matchbelgium1'] ?>' name='matchbelgium1' class='w-25 m-1 p-1 text-center'>
                        <b>-</b>
                        <input type='number' value='<?php echo $_POST['matchcanada1'] ?>' name='matchcanada1' class='w-25 m-1 p-1 text-center'>
                    </div>
                    <div class="image2 float-end">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/H23oIEP6qK-zNc3O8abnIA_96x96.png' class="img-thumbnail w-50">
                    </div>
                </div>
            </div>
            <!--==Belgique== VS ==Morocco==-->
            <div class="col bg-danger p-4 text-white text-center mt-1">
                <div class="container d-flex" >
                    <div class="image1 float-start">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/6SF7yEoB60bU5knw-M7R5Q_96x96.png' class="img-thumbnail w-50">
                    </div>
                    <div class="goal text-center">
                        <input type='number' value='<?php echo $_POST['matchbelgium2'] ?>' name='matchbelgium2' class='w-25 m-1 p-1 text-center'>
                        <b>-</b>
                        <input type='number' value='<?php echo $_POST['matchmorocco2'] ?>' name='matchmorocco2' class='w-25 m-1 p-1 text-center'>
                    </div>
                    <div class="image2 float-end">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/I3gt2Ew39ux3GGdZ-4JE3g_96x96.png' class="img-thumbnail w-50">
                    </div>
                </div>
            </div>
            <!--==Croatia== VS ==Canada==-->
            <div class="col bg-secondary p-4 text-white text-center mt-1">
                <div class="container d-flex" >
                    <div class="image1 float-start">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/9toerdOg8xW4CRhDaZxsyw_96x96.png' class="img-thumbnail w-50">
                    </div>
                    <div class="goal text-center">
                        <input type='number' value='<?php echo $_POST['matchcroatia2'] ?>' name='matchcroatia2' class='w-25 m-1 p-1 text-center'>
                        <b>-</b>
                        <input type='number' value='<?php echo $_POST['matchcanada2'] ?>' name='matchcanada2' class='w-25 m-1 p-1 text-center'>
                    </div>
                    <div class="image2 float-end">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/H23oIEP6qK-zNc3O8abnIA_96x96.png' class="img-thumbnail w-50">
                    </div>
                </div>
            </div>
            <!--==Croatia== VS ==Belgique==-->
            <div class="col bg-danger p-4 text-white text-center mt-1">
                <div class="container d-flex" >
                    <div class="image1 float-start">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/9toerdOg8xW4CRhDaZxsyw_96x96.png' class="img-thumbnail w-50">
                    </div>
                    <div class="goal text-center">
                        <input type='number' value='<?php echo $_POST['matchcroatia3'] ?>' name='matchcroatia3' class='w-25 m-1 p-1 text-center'>
                        <b>-</b>
                        <input type='number' value='<?php echo $_POST['matchbelgium3'] ?>' name='matchbelgium3' class='w-25 m-1 p-1 text-center'>
                    </div>
                    <div class="image2 float-end">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/6SF7yEoB60bU5knw-M7R5Q_96x96.png' class="img-thumbnail w-50">
                    </div>
                </div>
            </div>
            <!--==Canada== VS ==Morocco==-->
            <div class="col bg-secondary p-4 text-white text-center mt-1">
                <div class="container d-flex" >
                    <div class="image1 float-start">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/H23oIEP6qK-zNc3O8abnIA_96x96.png' class="img-thumbnail w-50">
                    </div>
                    <div class="goal text-center">
                        <input type='number' value='<?php echo $_POST['matchcanada3'] ?>' name='matchcanada3' class='w-25 m-1 p-1 text-center'>
                        <b>-</b>
                        <input type='number' value='<?php echo $_POST['matchmorocco3'] ?>' name='matchmorocco3' class='w-25 m-1 p-1 text-center'>
                    </div>
                    <div class="image2 float-end">   
                        <img src='https://ssl.gstatic.com/onebox/media/sports/logos/I3gt2Ew39ux3GGdZ-4JE3g_96x96.png' class="img-thumbnail w-50">
                    </div>
                </div>
            </div>
            <!--==Button 'Simuler'==-->
            <div class="col rounded-bottom bg-danger pt-2 pb-2 text-white text-center mt-1">
                <Button type='sumite' class='btn btn-secondary'>Simuler</Button>
            </div>
        </form>


        <!-- ==STANDINDS==TABLE==-->
        <div class="main-table ps-5">
        <div class='table m-2'>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">TEAMS</th>
                        <th scope="col">PTS.</th>
                        <th scope="col">PAR.</th>
                        <th scope="col">GAN.</th>
                        <th scope="col">EMP.</th>
                        <th scope="col">PER.</th>
                        <th scope="col">G.F.</th>
                        <th scope="col">G.S.</th>
                        <th scope="col">+/-</th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <th class='bg-danger text-light' scope="row">1</th>
                        <td><?=array_values(array_values($teams)[0])[0]?></td>
                        <td><?=array_values(array_values($teams)[0])[1]?></td>
                        <td>3</td>
                        <td><?=array_values(array_values($teams)[0])[2]?></td>
                        <td><?=array_values(array_values($teams)[0])[3]?></td>
                        <td><?=array_values(array_values($teams)[0])[4]?></td>
                        <td><?=array_values(array_values($teams)[0])[5]?></td>
                        <td><?=array_values(array_values($teams)[0])[6]?></td>
                        <td><?=array_values(array_values($teams)[0])[7]?></td>
                    </tr>
                    <tr>
                        <th class='bg-danger text-light' scope="row">2</th>
                        <td><?=array_values(array_values($teams)[1])[0]?></td>
                        <td><?=array_values(array_values($teams)[1])[1]?></td>
                        <td>3</td>
                        <td><?=array_values(array_values($teams)[1])[2]?></td>
                        <td><?=array_values(array_values($teams)[1])[3]?></td>
                        <td><?=array_values(array_values($teams)[1])[4]?></td>
                        <td><?=array_values(array_values($teams)[1])[5]?></td>
                        <td><?=array_values(array_values($teams)[1])[6]?></td>
                        <td><?=array_values(array_values($teams)[1])[7]?></td>
                    </tr>
                    <tr>
                    <th class='bg-danger text-light' scope="row">3</th>
                        <td><?=array_values(array_values($teams)[2])[0]?></td>
                        <td><?=array_values(array_values($teams)[2])[1]?></td>
                        <td>3</td>
                        <td><?=array_values(array_values($teams)[2])[2]?></td>
                        <td><?=array_values(array_values($teams)[2])[3]?></td>
                        <td><?=array_values(array_values($teams)[2])[4]?></td>
                        <td><?=array_values(array_values($teams)[2])[5]?></td>
                        <td><?=array_values(array_values($teams)[2])[6]?></td>
                        <td><?=array_values(array_values($teams)[2])[7]?></td>
                    </tr>
                    <tr>
                    <th class='bg-danger text-light' scope="row">4</th>
                        <td><?=array_values(array_values($teams)[3])[0]?></td>
                        <td><?=array_values(array_values($teams)[3])[1]?></td>
                        <td>3</td>
                        <td><?=array_values(array_values($teams)[3])[2]?></td>
                        <td><?=array_values(array_values($teams)[3])[3]?></td>
                        <td><?=array_values(array_values($teams)[3])[4]?></td>
                        <td><?=array_values(array_values($teams)[3])[5]?></td>
                        <td><?=array_values(array_values($teams)[3])[6]?></td>
                        <td><?=array_values(array_values($teams)[3])[7]?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class='table'>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">symbole</th>
                        <th scope="col">meaning</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th class='bg-danger text-light' scope="row">PTS.</th>
                        <td>Points that team got after playing 3 matches.</td>
                    </tr>
                    <tr>
                    <th class='bg-danger text-light' scope="row">PAR.</th>
                        <td>Played matches for each team.</td>
                    </tr>
                    <tr>
                    <th class='bg-danger text-light' scope="row">GAN.</th>
                        <td>The matches which a team has won.</td>
                    </tr>
                    <tr>
                    <th class='bg-danger text-light' scope="row">EMP.</th>
                        <td>The matches which a team has went equaled.</td>
                    </tr>
                    <tr>
                    <th class='bg-danger text-light' scope="row">PER.</th>
                        <td>The matches which a team has lost.</td>
                    </tr>
                    <tr>
                    <th class='bg-danger text-light' scope="row">G.F.</th>
                        <td>The goals which a team has scored.</td>
                    </tr>
                    <tr>
                    <th class='bg-danger text-light' scope="row">G.S.</th>
                        <td>The goals scored against this team.</td>
                    </tr>
                    <tr>
                    <th class='bg-danger text-light' scope="row">+/-</th>
                        <td>The difference between the goals scored and the goals scored on this team.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>




</body>
</html>

