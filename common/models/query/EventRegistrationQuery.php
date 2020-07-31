<?php

namespace common\models\query;

use common\models\EventRegistration;

/**
 * This is the ActiveQuery class for [[\common\models\EventRegistration]].
 *
 * @see \common\models\EventRegistration
 */
class EventRegistrationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\EventRegistration[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\EventRegistration|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function eventConfirmed()
    {
        return $this->andWhere(['status' => EventRegistration::STATUS_CONFIRMED]);
    }

    public function eventNotConfirmed()
    {
        return $this->andWhere(['status' => EventRegistration::STATUS_NOT_CONFIRMED]);
    }

    public function isABoy()
    {
        return $this->andWhere(['r_salutation' => 1]);
    }

    public function isAGirl()
    {
        return $this->andWhere(['r_salutation' => 2]);
    }

    public function isAccountTransfer()
    {
        return $this->andWhere(['r_payment' => 1]);
    }

    public function isUPI()
    {
        return $this->andWhere(['r_payment' => 2]);
    }
}
