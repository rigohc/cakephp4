<!Doctype>
<html>
    <head>
        <link rel="stylesheet" href="../../webroot/css/index_admin.css" />
    </head>
    <body>
        <div class="contenedor">
            <div id="head">
                <h1>Bienvenido</h2>
            </div>
        
                
                    <ul>
                        <li>
                            <a href=<?= $this->Url->build(['controller' => 'users', 'action' => 'index']); ?>>Usuarios</a>
                        </li>
                        <li>
                            <a href=<?= $this->Url->build(['controller' => 'proveedor', 'action' => 'index']); ?>>Proveedores</a>
                        </li>
                        <li>
                            <a href=<?= $this->Url->build(['controller' => 'users', 'action' => '']); ?>>Productos</a>
                        </li>
                        <li>
                            <a href=<?= $this->Url->build(['controller' => 'articles', 'action' => 'index']); ?>>Noticias</a>
                        </li>
                    </ul>
        
            
            <div id="contenido">
                
            </div>
            <div id="foot">
                <p>© BikeStore 2021</p>
            </div>
        </div>
    </body>
</hmtl>

