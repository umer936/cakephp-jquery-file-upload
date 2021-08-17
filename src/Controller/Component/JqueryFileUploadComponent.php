<?php
namespace CakephpJqueryFileUpload\Controller\Component;

use Cake\Controller\Component;
use UploadHandler;

/**
 * JqueryFileUpload Component
 * 
 */
class JqueryFileUploadComponent extends Component
{

    public function upload($options = null)
    {
        if (!isset($options['print_response'])) {
            $options['print_response'] = false;
        }
        $upload = new UploadHandler($options);
        return $upload->get_response();
    }

}
