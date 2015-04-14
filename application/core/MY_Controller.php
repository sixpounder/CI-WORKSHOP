<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
  private $__layout = 'layout';
  public $_accepted_output_formats;
  
  public function __construct()
  {
    parent::__construct();
    $accept = $this->input->get_request_header('accept') !== '' ? $this->input->get_request_header('accept') : $this->input->get_request_header('Accept');
    $this->_accepted_output_formats = explode(';', $accept);

    $this->outputData = array();
  }

  protected function wantsJSON()
  {
    return in_array('application/json', $this->_accepted_output_formats) || $this->__formatSpecified() == 'json';
  }

  protected function wantsHTML()
  {
    return (!$this->wantsJSON) || $this->__formatSpecified() == 'html';
  }

  private function __formatSpecified()
  {
    return $this->input->get('format');
  }

  protected function setOutputData($k, $v)
  {
    $this->outputData[$k] = $v;
  }

  protected function setTitle($title)
  {
    $this->setOutputData('title', $title);
  }

  public function setLayout($layoutName)
  {
    $this->__layout = $layoutName;
  }

  protected function loadModel($modelName, $modelAlias = '', $autoload = TRUE)
  {
    $this->load->model($modelName, $modelAlias, $autoload);
  }
  
  protected function is_logged_in()
  {
    return ($this->session->userdata('logged_in') != null);
  }

  public function view($viewName)
  {
    $this->load->library('parser');
    $this->setOutputData('current_user', $this->session->userdata('logged_in'));
    $this->setOutputData('is_logged_in', $this->is_logged_in());
    $navbar = $this->load->view('navbar', $this->outputData, TRUE);
    $content = $this->load->view($viewName, $this->outputData, TRUE);
    $this->parser->parse($this->__layout, array(
      'navbar' => $navbar, 
      'content' => $content, 
      'title' => $this->outputData['title'] ? $this->outputData['title'] : 'Bookshelf', 
      'current_user' => $this->session->userdata('logged_in'))
    );
  }

  public function json($stuff = null, $status = 200)
  {
    $this->output->set_status_header($status);
    if ($stuff) {
      $this->output->set_content_type('application/json')->set_output(json_encode($stuff));
    } else {
      $this->output->set_content_type('application/json')->set_output(json_encode($this->outputData));
    }
    
  }
  
  public function not_found()
  {
    $this->output->set_status_header(404);
    if($this->wantsJSON()) {
      $this->json((object)array('status' => FALSE), 404); 
    } else {
      $this->view('404');  
    }
  }
  
  public function forbidden()
  {
    $this->output->set_status_header(403);
    if($this->wantsJSON()) {
      $this->json((object)array('status' => FALSE), 403);
    } else {
      $this->view('403');  
    }
    
  }
}

?>