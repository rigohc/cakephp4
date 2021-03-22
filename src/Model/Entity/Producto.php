<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $precio
 * @property string $tipo_bicicleta
 * @property string $marca
 * @property string $rodada
 * @property string $material_cuadro
 * @property string $tipo_suspencion
 * @property string $tipo_frenos
 * @property string $transmision
 * @property string $image
 * @property int $proveedor
 */
class Producto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'precio' => true,
        'tipo_bicicleta' => true,
        'marca' => true,
        'rodada' => true,
        'material_cuadro' => true,
        'tipo_suspencion' => true,
        'tipo_frenos' => true,
        'transmision' => true,
        'image' => true,
        'proveedor' => true,
    ];
}
