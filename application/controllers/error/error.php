<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Error extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function error_404(){
        $encode_pass=$this->encrypt->encode('jorgeluis');
        $decode_pass=$this->encrypt->decode('hXsGQSqRo5Vly66Gu97YB65otc1Olr11qI6DX91Hk3WADCQpduYtNFqSJGF5hgD1CMpgeFAtFqO/B1K1fyFsSA==');
        $datos['encode']=$encode_pass;
        $datos['decode']=$decode_pass;
        $this->load->view('error/error_404',$datos);
    }
}
?>