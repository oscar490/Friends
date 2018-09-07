<?php

namespace app\models;

use yii\db\ActiveRecord;


class Usuarios extends ActiveRecord
{
	public function getPerfil()
	{
		return $this->hasOne(Perfiles::className(), ['usuario_id' => 'id']);
	}
}