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

    public function eventOpen()
    {
        return $this->andWhere(['status' => EventRegistration::STATUS_OPEN]);
    }
}
