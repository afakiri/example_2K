<?php
{
#[route('lucky/number', name: 'lucky')]

public funtion number(): Response

{
    $number = random_int(0 ,100);
    $dagen=["maandag", "dinsdag", "woensdag", "donderdag", "vrijdag"];
    return $this->render('bezoeker/number.html.twig',
            ['number'=>$number,
                'days'=$dagen]);
}
#[route('/goedemorgen', name: 'goede_morgen')]

    public function goedemorgenAction():Response
{
    return $this->render('bezoeker/goedemorgen.hmtl.twig');
}
}


?>