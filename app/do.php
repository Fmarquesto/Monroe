<?php
require_once 'src/Autorizacion.php';
require_once 'src/CustomSoap.php';
require_once 'src/Producto.php';

require_once 'src/ConsultaRespuestaPedido/ConsultaRespuestaPedido.php';
require_once 'src/ConsultaRespuestaPedido/DatosTransaccion.php';
require_once 'src/ConsultaRespuestaPedido/ConsultaRespuestaPedidoWS.php';

require_once 'src/SolicitudPedido/DatosTransaccion.php';
require_once 'src/SolicitudPedido/Items.php';
require_once 'src/SolicitudPedido/Item.php';
require_once 'src/SolicitudPedido/SolicitudPedidoWS.php';
require_once 'src/SolicitudPedido/SolicitudPedido.php';

require_once 'src/ConsultaDisponibilidadProducto/DatosTransaccion.php';
require_once 'src/ConsultaDisponibilidadProducto/Items.php';
require_once 'src/ConsultaDisponibilidadProducto/Item.php';
require_once 'src/ConsultaDisponibilidadProducto/ConsultaDisponibilidadProducto.php';
require_once 'src/ConsultaDisponibilidadProducto/ConsultaDisponibilidadProductoWS.php';

$auth = new \App\Autorizacion();
$auth->setClave('Clave')->setUsuario('Usuario')->setCodigoClienteDomicilio('Codigo');


/*$datosTransaccion = new \App\ConsultaRespuestaPedido\DatosTransaccion();
$datosTransaccion->setNroPedidoCliente('123');

$consultaRespuestaPedido =
    (new \App\ConsultaRespuestaPedido\ConsultaRespuestaPedido())
        ->setAutorizacion($auth)
        ->setDatosTransaccion($datosTransaccion);

$consultaRespuestaPedidoWS = new \App\ConsultaRespuestaPedido\ConsultaRespuestaPedidoWS();

$res = $consultaRespuestaPedidoWS->ConsultaRespuestaPedido($consultaRespuestaPedido);
var_dump($res);

$datosTransaccion = new \App\SolicitudPedido\DatosTransaccion();

$producto = new \App\Producto();
$producto->setNombre('Aspirina')->setTroquelPami(1)->setCodigoBarras('123')->clean();

$item = new \App\SolicitudPedido\Item();
$item->setCantidadRequerida(2)->setProducto($producto);
$items = new \App\SolicitudPedido\Items();
$items->setItem($item);

$datosTransaccion->setNroPedidoCliente(123)->setItems($items)->setDeposito('12')->setRetiraEnDrogueria('SI');

$solicitud = new \App\SolicitudPedido\SolicitudPedido();
$solicitud->setAutorizacion($auth)->setDatosTransaccion($datosTransaccion);

$solicitudWS =  new \App\SolicitudPedido\SolicitudPedidoWS();
$res = $solicitudWS->SolicitudPedido($solicitud);
var_dump($res);*/

$datosTransaccion = new \App\ConsultaDisponibilidadProducto\DatosTransaccion();

$producto = (new \App\Producto())
    ->setCodigoBarras('123')
    ->setItemIdDrogueria('123')
    ->setNombre('asda')
    ->setCodigoInternoManualFarmaceutico('123')
    ->setTroquelPami('123')
    ->clean();
$item = (new \App\ConsultaDisponibilidadProducto\Item())
    ->setProducto($producto)
    ->setCantidad(2);
$items = (new \App\ConsultaDisponibilidadProducto\Items())->setItem($item);
$datosTransaccion->setDeposito('bas')->setItems($items);
/*
$producto2 = (new \App\Producto())
    ->setCodigoBarras('1233')
    ->setItemIdDrogueria('1223')
    ->setNombre('asdsa')
    ->clean();


$item2 = (new \App\ConsultaDisponibilidadProducto\Item())
    ->setProducto($producto2)
    ->setCantidad(11);

$items2 = (new \App\ConsultaDisponibilidadProducto\Items())->setItem($item2);
$datosTransaccion->setDeposito('bas')->setItems($items2);*/

$consultaDisponibilidadProducto = (new \App\ConsultaDisponibilidadProducto\ConsultaDisponibilidadProducto())->setAutorizacion($auth)->setDatosTransaccion($datosTransaccion);
$consultaDisponibilidadProductoWS = new \App\ConsultaDisponibilidadProducto\ConsultaDisponibilidadProductoWS();
$res = $consultaDisponibilidadProductoWS->ConsultaDisponibilidadProducto($consultaDisponibilidadProducto);

var_dump($res);