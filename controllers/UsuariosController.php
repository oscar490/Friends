<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Usuarios;
use yii\web\NotFoundHttpException;

class UsuariosController extends Controller
{

	public function actionView($id)
	{
		$model = $this->searchModel($id);

		return $this->render('perfil', [
			'model' => $model,
		]);
	}

	/* 
	Buscar un modelo de la tabla Usuarios a partir de un id. Si el parámetro no es un número
	o no existe dicho modelo en la table, se produce una excepción de 'NotForundHttpException'.
	Devuelve el modelo encontrado.
	*/
	public function searchModel($id)
	{
		$es_numero = ctype_digit($id);

		if (!$es_numero || is_null(($model = Usuarios::findOne($id)))) {
			throw new NotFoundHttpException('Parámetro incorrecto');
		}

		return $model;
	}

}