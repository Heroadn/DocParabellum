<?php


class IndexController extends Controller
{
    public function index($id='',$name=''){
        $this->view('Index',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'INDEX';
        $this->view->render();
    }

    public function documentation($id='',$name=''){
        $this->view('documentation',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'Documentation';
        $this->view->render();
    }

    public function examples($id='',$name=''){
        $this->view('examples',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'Examples';
        $this->view->render();
    }

    public function downloads($id='',$name=''){
        $this->view('downloads',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'Downloads';
        $this->view->render();
    }

    public function introducao($id='',$name=''){
        $this->view('introducao',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'Introdução';
        $this->view->render();
    }

    public function funcionamento($id='',$name=''){
        $this->view('funcionamento',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'Funcionamento';
        $this->view->render();
    }

    public function tutorial($id='',$name=''){
        $this->view('tutorial',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'Tutorial';
        $this->view->render();
    }
}