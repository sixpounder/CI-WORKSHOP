<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
  private $__layout = 'layout';

  public function __construct()
  {
    parent::__construct();

    $this->outputData = array();
  }

  protected function wantsJSON()
  {
    return $this->__formatSpecified() == 'json';
  }

  protected function wantsHTML()
  {
    return $this->__formatSpecified() == 'html';
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

  public function view($viewName)
  {
    $this->load->library('parser');
    $navbar = $this->load->view('navbar', $this->outputData, TRUE);
    $content = $this->load->view($viewName, $this->outputData, TRUE);
    $this->parser->parse($this->__layout, array('navbar' => $navbar, 'content' => $content, 'title' => $this->outputData['title'] ? $this->outputData['title'] : 'Bookshelf'));
  }

  public function json($stuff = null)
  {
    if ($stuff) {
      $this->output->set_content_type('application/json')->set_output(json_encode($stuff));
    } else {
      $this->output->set_content_type('application/json')->set_output(json_encode($this->outputData));
    }
    
  }
  
  public function notFound()
  {
    $this->view('404');
  }
}

?>