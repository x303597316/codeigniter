<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-7-27
 * Time: 下午4:56
 * To change this template use File | Settings | File Templates.
 * http://net.tutsplus.com/tutorials/php/working-with-restful-services-in-codeigniter-2/
 */
require(APPPATH.'/libraries/REST_Controller.php');

class Topic extends REST_Controller{

    public function index_get(){

    }

    public function index_post(){

    }

    public function index_update(){

    }

    public function index_delete(){

    }

    public function add_post() {
        if (!$this->post('title')) {
            $this->response(array('error' => 'Title is required'), 404);
        }

        $output = $this->lib_topic->insert($data);

        if ($output) {
            $this->response($output, 200);
        } else {
            $this->response(array('error' => 'Insert error'), 404);
        }
    }

    public function update_update() {
        if (!$this->update('id')) {
            $this->response(array('error' => 'ID is required'), 404);
        }

        $output = $this->lib_topic->update($this->update('id'), $data);

        if ($output) {
            $this->response($output, 200);
        } else {
            $this->response(array('error' => 'Insert error'), 404);
        }
    }

    public function delete_delete() {
        if (!$this->delete('id')) {
            $this->response(array('error' => 'ID is required'), 404);
        }

        $output = $this->lib_topic->delete($this->delete('id'));

        if ($output) {
            $this->response($output, 200);
        } else {
            $this->response(array('error' => 'Insert error'), 404);
        }
    }

    public function List_get()
    {
        if (!$this->get('id') or ) {
            $this->response(array('error' => 'ID is required'), 404);
        }

        $output = $this->lib_topic->list($this->get('id'), $this->get('type'));

        if ($output) {
            $this->response($output, 200);
        } else {
            $this->response(array('error' => 'Insert error'), 404);
        }
    }
}





























