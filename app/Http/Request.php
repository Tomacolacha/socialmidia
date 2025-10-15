<?php
    #=========================================================
    #Arquivo que lida com requisicoes
    #====================================================

        namespace App\Http;

        class Request{
            // declaracao das variaveis
            private $httpMethod;
            Private $uri;
            Private $queryParams=[];
            private $postVars=[];
            private $headers=[];
            private $router;
            private $file;

            //preparar o construtor
            public function__construct($router){
                $this->router         = $router;
                $this->httpMethod     =$_SERVER["REQUEST_METHOD"]??'';
                $this->setUri();
                $this-> queryParams   = $_GET??[];
                $this->setPostVars();
                $this->headers        = getallheaders();

            }

            // funcao que prepafra a URI
            private function setUri(){
                $this->uri =  $_SERVER["REQUEST_URI"]??'';
                $xURI = explode('?',$this->uri);
                $this -> = $xURI[0];
            }

            private function setPostVar(){
                //condicao para receber imagens
                if(isset($_FILES['imagem'])){
                    //logica para armazemar imagens na BD
                }else{
                    //logica para receber os camposrestantes
                    $this->$_postVar    = $_POST ??[];

                }

            }

            // criacao dos getter and setters
            public function gethttpMethod(){
                return $this-> httpMethod;
            }

            public function getUri(){
                return $this-> uri;
            }

            public function getQueryParams(){
                return $this-> queryParams;
            }

            public function getPostVars(){
                return $this-> PostVars;
            }

            public function getRouter(){
                return $this-> router;
            }

            public function getHeaders(){
                return $this-> headers;
            }


        }
       

?>