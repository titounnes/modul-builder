<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if( ! $this->input->is_cli_request())
        {
            show_404();
        }
    }

    //build controller
    public function class_object($object = '', $dir = '')
    {
        if (empty($object))
        {
            echo 'Please enter object name!';
        }
        else
        {
            $object=ucfirst(strtolower($object));

            $data=array('c_name'=>$object . 'Controller','m_name'=>$object,'o_name'=>strtolower($object));

            $mvc=array('c_name'=>'controller','m_name'=>'model');

            foreach($mvc as $key=>$val)
            {
                $fullpath = APPPATH . $mvc[$key] . 's/' . $data[$key] . '.php';

                //if($key==='c_name')

                if (file_exists($fullpath))
                {
                    echo $fullpath. $mvc[$key] . ' exists'. PHP_EOL;
                }
                else
                {
                    
                    $template = $this->load->view('templates/' . $mvc[$key], $data, true);

                    echo $fullpath . $template . PHP_EOL;

                    $file = fopen($fullpath, "w") or die("Unable to create a file!");

                    fwrite($file, html_entity_decode($template));

                    echo $fullpath . ' created'. PHP_EOL;
                }
            }

            $view=array('page','form');

            foreach($view as $val)
            {
                $fullpath = APPPATH . 'views' .  '/' . strtolower($object) .'/' . $val . '.php';
    	
                if (file_exists($fullpath))
                {
                    echo $fullpath . ' exists.'. PHP_EOL;
                }
                
                else
                
                {
                    if ( ! is_dir(dirname($fullpath)) )
                    {
                        mkdir(dirname($fullpath), 0775, true) or die("Unable to create a directory!");
                    }   
          
                    $template = $this->load->view('templates/' . $val, $data, true);

                    $file = fopen($fullpath, "w") or die("Unable to create a file!");

                    fwrite($file, html_entity_decode($template));

                    echo $fullpath . ' created'. PHP_EOL;

                }

            }

        }

    }

}
