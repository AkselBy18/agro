CREATE TABLE tipo_persona(
    pk_tipo_persona int PRIMARY KEY NOT null AUTO_INCREMENT,
    tipo_persona varchar(50) not null
);

CREATE TABLE persona(
    pk_persona int PRIMARY KEY NOT null AUTO_INCREMENT,
    nombre varchar(50) not null,
    apellido_paterno varchar(50) not null,
    apeelido_materno varchar(50) not null,
    direccion varchar(50) not null,
    telefono int not null,
    correo varchar(75) not null,
    contrasena varchar(50) not null,
    fecha_nacimiento date not null,
    ciudad varchar(50) not null,
    fk_tipo_persona int NOT null,
    FOREIGN KEY(fk_tipo_persona) REFERENCES tipo_persona(pk_tipo_persona)
);

CREATE TABLE comentario(
    pk_comentario int PRIMARY KEY NOT null AUTO_INCREMENT,
    contenido varchar(50) not null
);

CREATE TABLE publicacion(
    pk_publicacion int PRIMARY KEY NOT null AUTO_INCREMENT,
    titulo varchar(50) not null,
    descripcion varchar(50) NOT null,
    ruta_archivo varchar(50) NOT null,
    fk_persona int NOT null,
    fk_comentario int NOT null,
    FOREIGN key(fk_persona) REFERENCES persona(pk_persona),
    FOREIGN key(fk_comentario) REFERENCES comentario(pk_comentario)
);

CREATE TABLE producto(
    pk_producto int PRIMARY KEY NOT null AUTO_INCREMENT,
    nombre_producto varchar(50) not null,
    descripcion varchar(50) not null,
    cantidad int not null,
    precio int not null
);

CREATE TABLE comentario_publicacion(
    pk_comentario_publicacion int PRIMARY KEY NOT null AUTO_INCREMENT,
    fk_publicacion int NOT null,
    fk_persona int NOT null,
    FOREIGN key(fk_persona) REFERENCES persona(pk_persona),
    FOREIGN key(fk_publicacion) REFERENCES publicacion(pk_publicacion)
);

CREATE TABLE venta(
    pk_venta int PRIMARY KEY NOT null AUTO_INCREMENT,
    fk_producto int NOT null,
    fecha_compra date not null,
    fk_persona_compra int NOT null,
    fk_persona_vende int NOT NULL,
    FOREIGN key(fk_persona_compra) REFERENCES persona(pk_persona),
    FOREIGN key(fk_producto) REFERENCES producto(pk_producto),
    FOREIGN key(fk_persona_vende) REFERENCES producto(pk_producto) 
);

CREATE TABLE venta_persona
(   
    pk_venta_persona int PRIMARY KEY NOT null AUTO_INCREMENT,
    fk_persona int NOT null,
    fk_venta INT NOT NULL,
    FOREIGN key (fk_persona) REFERENCES persona(pk_persona),
    FOREIGN key (fk_venta) REFERENCES venta(pk_venta)
);

CREATE TABLE ciudad(
    pk_ciudad int PRIMARY KEY NOT null AUTO_INCREMENT,
    nombre varchar(50) not null,
    estado varchar(50) NOT null,
    municipio varchar(50) NOT null,
    codigo_postal varchar(50) not null
);

CREATE TABLE factura(
    pk_factura int PRIMARY KEY NOT null AUTO_INCREMENT,
    fecha_factura date not null,
    fk_producto int NOT null,
    fk_ciudad int NOT null,
    FOREIGN key(fk_ciudad) REFERENCES ciudad(pk_ciudad),
    FOREIGN key(fk_producto) REFERENCES producto(pk_producto) 
);

CREATE TABLE factura_persona(
    pk_factura_persona int PRIMARY KEY NOT null AUTO_INCREMENT,
    fk_persona int NOT null,
    fk_factura int NOT null,
    FOREIGN key(fk_persona) REFERENCES persona(pk_persona),
    FOREIGN key(fk_factura) REFERENCES factura(pk_factura) 
);