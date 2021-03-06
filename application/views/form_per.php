<title>
Seleccione Tipo Persona
</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<!-- CSS -->
<link href="../css/structure.css" rel="stylesheet">
<link href="../css/form.css" rel="stylesheet">

<!-- JavaScript -->
<script src="../scripts/wufoo.js"></script>
<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<!-- Scrip para redirigir con botones -->

</head>

<body id="public">

<div id="container" class="ltr">

<?php
$opciones = array(
		1  => 'DOCENTE',
		2  => 'ESTUDIANTE',

);

$atributos = array('id'=> 'form_enviar', 'class' => 'enviar_form','href' => 'persona/recuperar_persona');


?>

<div class="container_12">
<?php if($tipo==1){?>
  <h2>LISTA DE DOCENTES</h2>
 <?php } else {?>
 <h2>LISTA DE ESTUDIANTES</h2>
 <?php }?>
        <div class="grid_12">
            <div class="grid_12" id="head">
                <div class="grid_2" id="head_nombre">Nombres</div>
                <div class="grid_2" id="head_apellido">Apellidos</div>
                <div class="grid_2" id="head_nick">Direccion</div>
            </div>
            <?php
            foreach($users as $fila):
            ?>
            <div class="grid_12" id="body">
                <div class="grid_2" id="nombre<?=$fila->carnet?>"><?=$fila->nombres_p?></div>
                <div class="grid_2" id="email<?=$fila->carnet?>"><?=$fila->apellidos_p?></div>
                <div class="grid_2" id="registro<?=$fila->carnet?>"><?=$fila->direccion_p?></div>
                <div class="grid_2" id="editar"><?php echo form_open("persona/modificar_per",$atributos);?><input type="submit" value="Modificar" id="<?=$fila->carnet?>" class="editar"><?php echo form_hidden('id', $fila->carnet); echo form_hidden('tipo',$tipo);?> <?php echo form_close();?></div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    

</div><!--container-->