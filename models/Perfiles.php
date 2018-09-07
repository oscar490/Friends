<?php

namespace app\models;

use yii\db\ActiveRecord;

class Perfiles extends ActiveRecord
{
	public function getUsuario()
	{
		return $this->hasOne(Usuarios::className(), ['id' => 'usuario_id']);
	}
}