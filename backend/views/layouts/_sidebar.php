<?php

?>

<aside class="shadow">
    <?php echo \yii\bootstrap4\Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Event Registrations',
                'url' => ['/event-registration/index']
            ],
            [
                'label' => 'Data Filter',
                'url' => ['/event-registration/datafilter']
            ],
            [
                'label' => 'Event-Wise Count',
                'url' => ['/event-registration/eventwisecount']
            ]
        ]
    ])  ?>
</aside>
