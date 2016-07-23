<?php
namespace frontend\controllers;

use stratoss\paypal_ipn\PayPal_Ipn;
use Yii;
use yii\web\Controller;

class PaypalController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function beforeAction($action)
	{
		if ($action->id == 'ipn') {
			$this->enableCsrfValidation = false;
		}

		return parent::beforeAction($action);
	}

    public function actionIpn()
    {
        if (isset($_POST)) {
            $ipn = new PayPal_Ipn(TRUE);
            if ($ipn->init()) {
                /* Get any key/value */
                $custom = $ipn->getKeyValue('custom');

                /*
                Add your code here
                */

            }
        }
    }

}

