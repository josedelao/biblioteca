/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     29/6/2021 03:14:21                           */
/*==============================================================*/


alter table libro_prestamo 
   drop foreign key FK_LIBRO_PR_REFERENCE_USUARIO;

alter table libro_prestamo 
   drop foreign key FK_LIBRO_PR_REFERENCE_LIBRO;

alter table permisoRol 
   drop foreign key FK_PERMISOR_REFERENCE_PERMISO;

alter table permisoRol 
   drop foreign key FK_PERMISOR_REFERENCE_ROL;

alter table usuarioRol 
   drop foreign key FK_USUARIOR_REFERENCE_ROL;

alter table usuarioRol 
   drop foreign key FK_USUARIOR_REFERENCE_USUARIO;

drop index UNIQUE_libro_isbn on libro;

alter table libro
   drop primary key;

drop table if exists libro;

alter table libro_prestamo
   drop primary key;


alter table libro_prestamo 
   drop foreign key FK_LIBRO_PR_REFERENCE_USUARIO;

alter table libro_prestamo 
   drop foreign key FK_LIBRO_PR_REFERENCE_LIBRO;

drop table if exists libro_prestamo;

alter table permiso
   drop primary key;

drop table if exists permiso;

alter table permisoRol
   drop primary key;


alter table permisoRol 
   drop foreign key FK_PERMISOR_REFERENCE_PERMISO;

alter table permisoRol 
   drop foreign key FK_PERMISOR_REFERENCE_ROL;

drop table if exists permisoRol;

drop index uniqueRolNombre on rol;

alter table rol
   drop primary key;

drop table if exists rol;

alter table usuario
   drop primary key;

drop table if exists usuario;

alter table usuarioRol
   drop primary key;


alter table usuarioRol 
   drop foreign key FK_USUARIOR_REFERENCE_ROL;

alter table usuarioRol 
   drop foreign key FK_USUARIOR_REFERENCE_USUARIO;

drop table if exists usuarioRol;

/*==============================================================*/
/* Table: libro                                                 */
/*==============================================================*/
create table libro
(
   idLibro              int not null  comment '',
   titulo               varchar(100)  comment '',
   isbn                 varchar(30) default NULL  comment '',
   autor                varchar(100)  comment '',
   cantidad             int  comment '',
   editorial            varchar(50) not null  comment '',
   foto                 varchar(100)  comment '',
   fecha                datetime  comment ''
);

alter table libro
   add primary key (idLibro);

/*==============================================================*/
/* Index: UNIQUE_libro_isbn                                     */
/*==============================================================*/
create unique index UNIQUE_libro_isbn on libro
(
   isbn
);

/*==============================================================*/
/* Table: libro_prestamo                                        */
/*==============================================================*/
create table libro_prestamo
(
   idLibroPrestamo      int not null auto_increment  comment '',
   idUsuario            int  comment '',
   idLibro              int  comment '',
   fecha_prestamo       datetime  comment '',
   prestamo_a           varchar(100)  comment '',
   fecha_devolucion     datetime  comment ''
);

alter table libro_prestamo
   add primary key (idLibroPrestamo);

/*==============================================================*/
/* Table: permiso                                               */
/*==============================================================*/
create table permiso
(
   idPermiso            int not null auto_increment  comment '',
   nombre               varchar(50)  comment '',
   slug                 varchar(50)  comment ''
);

alter table permiso
   add primary key (idPermiso);

/*==============================================================*/
/* Table: permisoRol                                            */
/*==============================================================*/
create table permisoRol
(
   idPermisoRol         int not null  comment '',
   idPermiso            int  comment '',
   idRol                int  comment ''
);

alter table permisoRol
   add primary key (idPermisoRol);

/*==============================================================*/
/* Table: rol                                                   */
/*==============================================================*/
create table rol
(
   idRol                int not null auto_increment  comment '',
   nombre               varchar(50)  comment '',
   fecha                datetime  comment ''
);

alter table rol
   add primary key (idRol);

/*==============================================================*/
/* Index: uniqueRolNombre                                       */
/*==============================================================*/
create unique index uniqueRolNombre on rol
(
   nombre
);

/*==============================================================*/
/* Table: usuario                                               */
/*==============================================================*/
create table usuario
(
   idUsuario            int not null auto_increment  comment '',
   usuario              varchar(50)  comment '',
   password             varchar(100)  comment '',
   nombre               varchar(50)  comment '',
   email                varchar(100)  comment '',
   fecha                datetime  comment ''
);

alter table usuario
   add primary key (idUsuario);

/*==============================================================*/
/* Table: usuarioRol                                            */
/*==============================================================*/
create table usuarioRol
(
   idUsuarioRol         int not null auto_increment  comment '',
   idRol                int  comment '',
   idUsuario            int  comment '',
   estado               int  comment ''
);

alter table usuarioRol
   add primary key (idUsuarioRol);

alter table libro_prestamo add constraint FK_LIBRO_PR_REFERENCE_USUARIO foreign key (idUsuario)
      references usuario (idUsuario) on delete restrict on update restrict;

alter table libro_prestamo add constraint FK_LIBRO_PR_REFERENCE_LIBRO foreign key (idLibro)
      references libro (idLibro) on delete restrict on update restrict;

alter table permisoRol add constraint FK_PERMISOR_REFERENCE_PERMISO foreign key (idPermiso)
      references permiso (idPermiso) on delete restrict on update restrict;

alter table permisoRol add constraint FK_PERMISOR_REFERENCE_ROL foreign key (idRol)
      references rol (idRol) on delete restrict on update restrict;

alter table usuarioRol add constraint FK_USUARIOR_REFERENCE_ROL foreign key (idRol)
      references rol (idRol) on delete restrict on update restrict;

alter table usuarioRol add constraint FK_USUARIOR_REFERENCE_USUARIO foreign key (idUsuario)
      references usuario (idUsuario) on delete restrict on update restrict;

