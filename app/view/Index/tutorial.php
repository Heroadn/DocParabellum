<h1>Criar controller</h1>
Criar um controle é relativamente facil, como se pode ver abaixo
<figure class="highlight">
<pre>
    <code class="language-html" data-lang="html">
//O nome dado ao <span class="blue">controller</span> é importante pois ele que vai ser chamado na url "localhost/<span class="blue">nome/</span><span class="red">action</span>"
class <span class="blue">nome</span>Controller extends </span><span class="blue">Controller</span>
{
    public function <span class="red">action</span>($id='',$name=''){
        <span class="blue">//Aqui é criado a view, respectivamente deve ter um arquivo na pasta view com o nome da function</span>
        $this->view(['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'INDEX';
        $this->view->render();
    }

        <span class="blue">//Essa function aponta para a view  view/nome/contato</span>
    public function <span class="red">contato</span>($id='',$name=''){
        $this->view(['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'INDEX';
        $this->view->render();
    }
}
</code></pre>
</figure>

<div class="row">
    <div class="col-md-6 col-sm-12">
        <img src="<?php echo IMG . 'criar_controller.png'?>">
    </div>
    <div class="col-md-6 col-sm-12">
        Automaticamente é adicionado <span class="blue">controller</span> ao  chamar ele pela url, nao precisando que o usuario tenha que digitar <span class="red">nomeController.</span>
        <br><br>
        Todos os <span class="blue">controllers</span> devem ser colocados na pasta <span class="red">/app/controller</span>, sendo <span class="blue">o primeiro o nome que vai ser chamado na url</span> e a <span class="red">segunda palavra obrigatoriamente controller.</span>
        <p>Ex. loginController, cadastroController</p>
    </div>
</div>

<br><br><br><br>
<h1>Criar view</h1>
<div class="row">
<div class="col-md-6 col-sm-12"
A view é um <span class="blue">arquivo</span> php, em que deve estar na pasta com nome inicial do <span class="red">controller</span>, ela pode ser chamada atraves de um <span class="red">action no controller</span>
<p>Ex: UsuarioController view/<span class="red">Usuario</span>/<span class="blue">Listar.php</span></p>
Para ela ser chamada pela url deve ser criado um action que é a url depois do controller localhost/Controller/Action
<figure class="highlight">
<pre>
<code class="language-html" data-lang="html">
class <span class="blue">nome</span>Controller extends </span><span class="blue">Controller</span>
{
    public function <span class="red">action</span>($id='',$name=''){
        $this->view('Index',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'INDEX';
        $this->view->render();
    }

    public function <span class="red">contato</span>($id='',$name=''){
        $this->view('Index',['id' =>$id, 'name' =>$name]);
        $this->view->page_title = 'INDEX';
        $this->view->render();
    }
}</code></pre></figure>
</div>

<div class="col-md-6 col-sm-12">
    <img style="height: 60%;" src="<?php echo IMG . 'criar_view.png'?>">
</div>
</div>

<br><br>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <h1>Adicionar informações a view</h1>
        Adicionar informaçoes a view como Usuarios Cadastrados ou Numero de clientes registrados pode ser feito a partir do comando (<span class="red">set</span>)
        <figure style="width: 80%" class="highlight">
            <pre>
            <code class="language-html" data-lang="html">
            class <span class="blue">nome</span>Controller extends </span><span class="blue">Controller</span>
            {
                public function listar($id='')
                {
                //Os atribuos em azul serão passados para a view como variaveis
                <span class="blue">$this-></span>view('Listar',<span class="blue">['id' =>$id, 'name' =>$name,'Usuarios'=>$this->daoUsuarios->findAll()]</span>);
                    <span class="blue">$this-></span>view->page_title = 'Listar';
                    <span class="blue">$this-></span>view->render();
                }
            }
            </code></pre></figure>
        Onde a variavel é adicionada a view em forma de variavel <span class="blue">$Usuarios</span>
    </div>
    <div class="col-md-12 col-sm-12">
        <img style="width: 80%;height: 80%;" src="<?php echo IMG . 'ad_view.png'?>">
        <br>e o Resultado.
    </div>
    <div class="col-md-12 col-sm-12">
        <img style="width: 80%;height: 80%;" src="<?php echo IMG . 'out_view.png'?>">
    </div>
</div>