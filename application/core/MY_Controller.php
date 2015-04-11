<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
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

  protected function loadModel($modelName, $modelAlias = '', $autoload = TRUE)
  {
    $this->load->model($modelName, $modelAlias, $autoload);
  }

  protected function __view($viewName)
  {
    $this->load->library('parser');
    $content = $this->parser->parse($viewName, $this->outputData, TRUE);
    $this->outputData['content'] = $content;
    $this->parser->parse('layout', $this->outputData);
  }

  protected function __json($stuff = null)
  {
    if ($stuff) {
      $this->output->set_content_type('application/json')->set_output(json_encode($stuff));
    } else {
      $this->output->set_content_type('application/json')->set_output(json_encode($this->outputData));
    }
    
  }
}

?>