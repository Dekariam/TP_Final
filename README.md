Trabajo práctico integrador 

Metodologia de Sistemas I, Laboratorio IV, y Programación III, año 2018 
Técnico Superior en Programación

Sistema de venta de tickets para eventos (GoToEvent)

1) Requisitos funcionales:

Una empresa que se dedica a organizar y vender eventos nos solicita el desarrollo de un software que les permita a sus clientes comprar tickets para los mismos a través de un sitio web.

Los clientes se deben registrar con su email y una clave. También debe existir la posibilidad de registrarse via su cuenta de Facebook.

El cliente podrá realizar las siguientes actividades:
a) Consultar eventos por fecha y/o categoría de evento.
b) Seleccionar eventos para su compra detallando cantidad de plazas y tipo; estas se irán agrupando en un carrito. Al confirmarse el mismo se almacena la compra y se generan los tickets, enviando una copia al email. El ticket tendrá un numero y un codigo QR que permitirá ingresar al evento (entrada individual)
c) Consultar los tickets adquiridos ordenados por fecha de evento.
d) Consultar eventos por determinado artista

El administrador  podrá realizar las siguientes actividades:
a) Administrar los eventos y artistas. 
Esos eventos transcurren en una fecha, tienen una categoria determinada (obra teatral, concierto, exposición, festival de música), cantidad de plazas disponibles que pueden estar agrupadas por tipo (general, platea lateral, platea central, palco, etc) indicando su precio respectivo y disponibilidad.
Algunos eventos tienen a la venta una única ubicación general y al ser festivales de varios dias de duración, cada dia debe tener en cuenta los artistas participantes y el precio por dia ó el total respectivo al comprar el festival en todos los dias (a un valor menor). Ejemplo: Lollapalooza festival 3 dias 5500, por dia de acreditación $2000.

b) Administrar categorías de eventos y tipos de plazas.
c) Consultar cantidades vendidas y remanentes de eventos
d) Consultar totales vendidos en pesos (por fecha y/o categoría de evento)

** No se ha planteado el escenario de cancelación de un evento

2) Requisitos no funcionales: 

Programación en capas de la aplicación respetando la arquitectura de 3 capas lógicas vista durante la cursada. Esto implica el desarrollo de las clases que representen las entidades del modelo, controladoras de los casos de uso, las vistas y la capa de acceso a datos.

