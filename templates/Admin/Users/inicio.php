<!Doctype>
<html>
    <head>
        <link rel="stylesheet" href="../../webroot/css/index_admin.css" />
    </head>
    <body>
        <div class="content">
            <div class="head">
           
            </div>
        
                <div class="nav-bar">
                    <ul>
                        <li>
                            <a href=<?= $this->Url->build(['controller' => 'users', 'action' => 'index']); ?>>Usuarios</a>
                        </li>
                        <li>
                            <a href=<?= $this->Url->build(['controller' => 'proveedor', 'action' => 'index']); ?>>Proveedores</a>
                        </li>
                        <li>
                            <a href=<?= $this->Url->build(['controller' => 'producto', 'action' => 'index']); ?>>Productos</a>
                        </li>
                        <li>
                            <a href=<?= $this->Url->build(['controller' => 'articles', 'action' => 'index']); ?>>Noticias</a>
                        </li>
                    </ul>
                </div>
            
            <div id="contenido">
                
            </div>
            <div id="foot">
                <p>© BikeStore 2021</p>
            </div>
        </div>
    </body>
</hmtl>

