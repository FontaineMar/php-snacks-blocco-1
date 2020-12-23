<?php
$matchs = [
  [
    'home' => 'Hawks',
    'guests' => 'Magic',
    'point-home' => '112',
    'point-guest' => '116'
  ],
  [
    'home' => 'Bulls',
    'guests' => 'Rockets',
    'point-home' => '104',
    'point-guest' => '125'
  ],
  [
    'home' => 'Lakers',
    'guests' => 'Clippers',
    'point-home' => '87',
    'point-guest' => '81'
  ],
  [
    'home' => 'Pistons',
    'guests' => 'Knicks',
    'point-home' => '84',
    'point-guest' => '90'
  ],
  [
    'home' => 'Trail Blazers',
    'guests' => 'Kings',
    'point-home' => '127',
    'point-guest' => '102'
  ],
  [
    'home' => 'Spurs',
    'guests' => 'Thunder',
    'point-home' => '108',
    'point-guest' => '121'
  ],
  [
    'home' => 'Cavaliers',
    'guests' => 'Pacers',
    'point-home' => '107',
    'point-guest' => '104'
  ],
  [
    'home' => 'Hornets',
    'guests' => 'Raptor',
    'point-home' => '100',
    'point-guest' => '111'
  ],
  [
    'home' => 'Heat',
    'guests' => 'Pellicans',
    'point-home' => '92',
    'point-guest' => '114'
  ],
  [
    'home' => 'Bucks',
    'guests' => 'Mavericks',
    'point-home' => '112',
    'point-guest' => '128'
  ]
];

?>

<h1>Risultati Pre-Campionato NBA</h1>
<p>
  <?php
    for ($i = 0; $i < count($matchs); $i++){
      echo $matchs["$i"]["home"] . '-' .$matchs["$i"]["guests"] .' | '. $matchs["$i"]["point-home"] . '-' .$matchs["$i"]["point-guest"] . '<br>';
    }
  ?>
</p>
