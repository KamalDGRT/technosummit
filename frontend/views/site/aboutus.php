<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AboutusAsset;
use yii\helpers\Url;

AboutusAsset::register($this);
$this->title = 'About Us';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div id="particles-js">
    </div>
    <div class="about-section">
        <div class="inner-container animated slideInDown">
            <h1 class="animated slideInRight">ABOUT SATHYABAMA:</h1>
            <p class="text animated slideInRight">
                A prestigious institution which outshines in all fields for more than three successful decades is our Sathyabama
                Institute of Science and Technology. With the blessings of our Founder Chancellor, Col. Dr. Jeppiaar, and
                under the dynamic leadership of Dr. Mariazeena Johnson, Chancellor and Dr. Marie Johnson, President, this
                esteemed institution has secured 39<sup>th</sup> rank in the NIRF RANKING 2020 and it is ranked among the top 50
                universities in the country for the 5<sup>th</sup> consecutive year.
                <br><br>
                Sathyabama Institute of Science and Technology is offering multi-disciplinary academic programmes in various
                fields of Engineering, Science, Technology, Law, Nursing, Dental and Management. It is established under Sec.3
                of UGC Act, 1956 and is been Accredited with ‘A’ Grade by the National Accreditation and Assessment council.
                Sathyabama has emerged as a leading institution and achieved excellence in higher education to the international
                standards through 23 Undergraduate Programmes, 37 Post graduation programmes, Research, Technology Incubation,
                Product innovation in Science and Technology.
            </p>
            <br>
            <br>
            <h1 class="animated slideInLeft">ABOUT TECHNOSUMMIT:</h1>
            <p class="text animated slideInLeft">
                As the motto of our institution “TOGETHER FOR BETTER TOMORROW”, a national level intercollegiate meet takes
                place every year in the name of TECHNOSUMMIT. In this intercollegiate meet, students from the entire nation are
                invited to participate. The Technosummit usually contains many events for the students to showcase their
                talents. Last year we had 15 events with more than 2000 participants and the TECHNOSUMMIT 2019 met with a grand
                success.<br><br>
                Being Sathyabamites, we work on this quote "DONT LET ANYTHING STOP YOU". And yes, this year, even during this
                quarantine; Sathyabama gives an opportunity to prove your talents and conducts the national level TECHNOSUMMIT
                2020 on the 7<sup>th</sup> and 8<sup>th</sup> August 2020, completely online. TECHNOSUMMIT 2020 contains 21 events by various clubs of
                Sathyabama. This year, we are back in the form of a best virtual platform to exhibit your inherent talents. So
                visit, register, participate and join in this techno-extravangza.
            </p>
            <a href="<?php echo Url::to(['/site/nav']) ?>" class="btn btn-first">Go Back</a>
        </div>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>