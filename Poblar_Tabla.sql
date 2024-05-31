-- Poblar la tabla Tienda
INSERT INTO `sYd`.`Tienda` (`cod_postal`, `nombre`, `dirección`, `ubicacion`, `correo`, `teléfono`, `creaded_by`, `creaded_at`, `updated_by`, `updated_at`)
VALUES 
('199115', 'Tienda Central', 'Calle Falsa 123', 'Centro', 'central@tienda.com', 1234567890, 'admin', '2023-01-01', 'admin', '2023-01-01');

-- Poblar la tabla Area
INSERT INTO `sYd`.`Area` (`nombre`, `created_by`, `creaded_at`, `updated_by`, `updated_at`)
VALUES 
('Recursos Humanos', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00'),
('Contador', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00'),
('Ventas', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00'),
('Logística', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00'),
('T.I', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00');

-- Poblar la tabla Cliente
INSERT INTO `sYd`.`Cliente` (`cedula`, `nombre`, `apellido`, `correo`, `contrasena`, `created_by`, `creaded_at`, `updated_by`, `updated_at`, `Area_id_area`, `telefono`)
VALUES 
(54997632, 'Juan', 'Pérez', 'juan.perez@example.com', '54997632', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 1, 1234567890),
(1005469824, 'María', 'Gómez', 'maria.gomez@example.com', '1005469824', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 2, 3288846987),
(108745412, 'María', 'Gutierrez', 'maria.gutierrez@example.com', '108745412', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 3, 3135468795);

-- Poblar la tabla Cargo
INSERT INTO `sYd`.`Cargo` (`nombre`, `created_by`, `creaded_at`, `updated_by`, `updated_at`)
VALUES 
('admin', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00'),
('Administrador Tienda', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00'),
('Vendedor', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00');

-- Poblar la tabla Empleado
INSERT INTO `sYd`.`Empleado` (`Cedula`, `nombre`, `apellido`, `contraseña`, `correo`, `teléfono`, `created_by`, `created_at`, `updated_by`, `updated_at`, `Cargo_id_cargo`)
VALUES 
(12345, 'admin', 'admin', 'password123', 'ana.lopez@example.com', 3135489654, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 1);

INSERT INTO `sYd`.`Empleado` (`Cedula`, `nombre`, `apellido`, `contraseña`, `correo`, `teléfono`, `created_by`, `created_at`, `updated_by`, `updated_at`, `Cargo_id_cargo`, `Tienda_cod_postal`)
VALUES 
(1554786423, 'Ana', 'López', 'password123', 'ana.lopez@example.com', 3135489654, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 2, 199115),
(52448302, 'Carlos', 'Martínez', 'password123', 'carlos.martinez@example.com', 3759842157, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 3, 199115);


-- Poblar la tabla Proveedor
INSERT INTO `sYd`.`Proveedor` (`Nit`, `nombre_empresa`, `direccion`, `correo`, `teléfono`, `created_by`, `creaded_at`, `updated_by`, `updated_at`)
VALUES 
(111222333, 'SUDESPENSA', 'Corabastos, Bodega 8 Local 2 Bogotá D.C.', 'contacto@proveedor1.com', 1231231231, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00'),
(444555666, 'TIENDAS ARA', 'Calle 100 No 7-33, Piso 11 Torre Capital Tower, Bogotá.', 'contacto@proveedor2.com', 3213213210, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00');

-- Poblar la tabla Inventario
INSERT INTO `sYd`.`Inventario` (`cantidad`, `lote`, `fecha_caducidad`, `created_by`, `created _at`, `updated_at`, `updated_by`)
VALUES 
(100, 'Lote1', '2024-12-31', 'admin', '2023-01-01 00:00:00', '2023-01-01 00:00:00', 'admin'),
(200, 'Lote2', '2024-12-31', 'admin', '2023-01-01 00:00:00', '2023-01-01 00:00:00', 'admin');

-- Poblar la tabla Producto
INSERT INTO `sYd`.`Producto` (`nombre`, `precio`, `imagen`, `unidad_medida`, `estado`, `created_by`, `created_at`, `updated_by`, `updated_at`, `Inventario_id_inventario`)
VALUES 
('Pasabocas doritos flamin hot', 7560, 'imagen1.jpg', '175 g', 1, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 1),
('Manzana Red Delicious Importada', 7845, 'imagen2.jpg', '500 gr', 1, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 2),
('Soda Schweppes', 7845, 'imagen3.jpg', '1.5 ml', 1, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 2),
('Gaseosa COLOMBIANA Sin Azúcar Botella', 4340, 'imagen4.jpg', '2.5 ml', 1, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 2);

-- Poblar la tabla Pedido
INSERT INTO `sYd`.`Pedido` (`created_by`, `creaded_at`, `updated_by`, `updated_at`, `fecha`, `Estado`, `Cliente_id_cliente`)
VALUES 
('admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', '2023-05-23 10:00:00', 1, 1005469824),
('admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', '2023-05-23 11:00:00', 1, 1005469824);

-- Poblar la tabla Venta
INSERT INTO `sYd`.`Venta` (`created_by`, `creaded_at`, `updated_by`, `updated_at`, `Pedido_id_pedido`)
VALUES 
('admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 1),
('admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 2);

-- Poblar la tabla Pedido_proveedor
INSERT INTO `sYd`.`Pedido_proveedor` (`created_by`, `creaded_at`, `updated_by`, `updated_at`, `Empleado_Cedula`, `Proveedor_Nit`, `Producto_id_producto`)
VALUES 
('admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 1554786423, 111222333, 1),
('admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 1554786423, 444555666, 2);

-- Poblar la tabla Refrigerio
INSERT INTO `sYd`.`Refrigerio` (`cantidad`, `fecha_y_hora_entrega`, `created_by`, `created_at`, `updated_by`, `updated_at`)
VALUES 
(10, '2023-05-23 12:00:00', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00'),
(20, '2023-05-23 13:00:00', 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00');

-- Poblar la tabla Refrigerio_has_Producto
INSERT INTO `sYd`.`Refrigerio_has_Producto` (`Refrigerio_idRefrigerio`, `Producto_id_producto`)
VALUES 
(1, 1),
(1, 3),
(2, 1),
(2, 2),
(2, 4);

-- Poblar la tabla DetallePedido
INSERT INTO `sYd`.`DetallePedido` (`Estado`, `created_by`, `creaded_at`, `updated_by`, `updated_at`, `Pedido_id_pedido`, `Refrigerio_has_Producto_Refrigerio_idRefrigerio1`, `Refrigerio_has_Producto_Producto_id_producto1`)
VALUES 
(1, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 1, 1, 1),
(1, 'admin', '2023-01-01 00:00:00', 'admin', '2023-01-01 00:00:00', 2, 2, 2);