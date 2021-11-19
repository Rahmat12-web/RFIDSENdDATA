<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use Psr\Log\LoggerInterface;
use App\Models\postModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class GetDataPost extends Controller
{
    use ResponseTrait;
    public function getDataRequest($uid){
        // $uid = $this->request->getVar();
        $model = new postModel();
        $data = array(
            'uid' => $uid
        );
        $model->insert($data);
        return $this->respond($uid);
    }
}