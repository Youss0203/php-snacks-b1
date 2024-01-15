


<?php

$partite=[
    [
        'squadra1' => 'Olimpia Milano',
        'squadra2'  =>'Baskonia',
        'punti1' => 78,
        'punti2' => 75,
    ],
    [
        'squadra1' => 'Fenerbache',
        'squadra2'  => 'Real Madrid',
        'punti1' => 94,
        'punti2' => 108,
    ],
    [
        'squadra1' => 'Olympiacos',
        'squadra2'  => 'Stella Rossa',
        'punti1' => 104,
        'punti2' => 112,
    ],
];
?>

<ul>
    <?php foreach ( $partite as $partita ) { ?>
        <li>
                <?php echo $partita['squadra1'] . ' - ' . $partita['squadra2']. ': ' . $partita['punti1'] . ' - ' . $partita['punti2']; ?>
        </li>
    <?php } ?>
</ul>