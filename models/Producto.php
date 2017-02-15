<?php

namespace app\models;

/**
 * modelo para la tabla producto
 */
class Producto extends \yii\db\ActiveRecord
{
  public static function tableName()
  {
    return "producto";
  }
# se empieza para hacer el proceso de la validacion
  public function rules()
  {
  # aqui se establece las reglas de la validacion
  return [
    [["name_product", "referencia"], "required"],
    [["name_product"], "string", "max" => 100],
    [["referencia"], "string", "max" => 50]
  ];
  }

  public function attributeLabels()
  {
    # se establece como se quiere mostrar los nombres de los campos de la tabla
    return [
      "id_product" => "Id",
      "name_product" => "Nombre del producto",
      "referencia" => "Referencia"
    ];
  }
}



?>
