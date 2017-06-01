<?php
/* @var $this PecesController */
/* @var $model Peces */

$this->breadcrumbs=array(
	'Peces'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Peces', 'url'=>array('index')),
	array('label'=>'Create Peces', 'url'=>array('create')),
	array('label'=>'Update Peces', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Peces', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Peces', 'url'=>array('admin')),
);
?>

<h1>View Peces #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre_comun',
		'nombre_ingles',
		'otros_nombres_comunes',
		'nombre_cientifico',
		'presente_golfo',
		'presente_caribe',
		'presente_pacifico',
		'grupo_cnp',
		'grupo_conabio',
		'nacional_importado',
		'nacional_importado_valor',
		'nacional_importado_peso',
		'objetivo',
		'incidental',
		'deportiva',
		'fomento',
		'cultivada',
		'talla_captura',
		'tipo_captura',
		'tipo_captura_valor',
		'tipo_captura_peso',
		'arte_pesca',
		'nom',
		'nom_valor',
		'nom_peso',
		'iucn',
		'iucn_valor',
		'iucn_peso',
		'cites',
		'cites_valor',
		'cites_peso',
		'tipo_veda',
		'tipo_veda_valor',
		'tipo_veda_peso',
		'tipo_veda_fecha',
		'generalidades',
		'distribucion',
		'cultivada_capturada',
		'comercio',
		'pais_importacion',
		'zona1',
		'zona1_valor',
		'zona1_peso',
		'zona2',
		'zona2_valor',
		'zona2_peso',
		'zona3',
		'zona3_valor',
		'zona3_peso',
		'zona4',
		'zona4_valor',
		'zona4_peso',
		'zona5',
		'zona5_valor',
		'zona5_peso',
		'zona6',
		'zona6_valor',
		'zona6_peso',
		'seafoodwatch',
		'imagen',
		'tipo_imagen',
		'cnp',
	),
)); ?>
