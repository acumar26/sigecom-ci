USE [GeComCI]
GO
/****** Object:  User [sigecom_log]    Script Date: 06/08/2013 12:57:42 ******/
CREATE USER [sigecom_log] FOR LOGIN [sigecom_log] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  Table [dbo].[GC_Usuario]    Script Date: 06/08/2013 12:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[GC_Usuario](
	[nidusuario] [int] IDENTITY(1,1) NOT NULL,
	[cusuario] [varchar](20) NULL,
	[ccontrasena] [varchar](50) NULL,
	[nestado] [int] NULL,
	[nactivar] [int] NULL,
	[nidpersona] [int] NULL,
 CONSTRAINT [PK_GC_Usuario] PRIMARY KEY CLUSTERED 
(
	[nidusuario] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[GC_Usuario] ON
INSERT [dbo].[GC_Usuario] ([nidusuario], [cusuario], [ccontrasena], [nestado], [nactivar], [nidpersona]) VALUES (1, N'mgarcia', N'e10adc3949ba59abbe56e057f20f883e', 1, 1, 1)
SET IDENTITY_INSERT [dbo].[GC_Usuario] OFF
/****** Object:  Table [dbo].[GC_Persona]    Script Date: 06/08/2013 12:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[GC_Persona](
	[nidpersona] [int] IDENTITY(1,1) NOT NULL,
	[capellidos] [varchar](80) NULL,
	[cnombres] [varchar](60) NULL,
	[cdni] [varchar](8) NULL,
	[nidsexo] [int] NULL,
	[dfechnac] [date] NULL,
	[ctelefono] [varchar](9) NULL,
	[ccorreo] [varchar](50) NULL,
	[nidestado] [int] NULL,
 CONSTRAINT [PK_GC_Persona] PRIMARY KEY CLUSTERED 
(
	[nidpersona] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[GC_Persona] ON
INSERT [dbo].[GC_Persona] ([nidpersona], [capellidos], [cnombres], [cdni], [nidsexo], [dfechnac], [ctelefono], [ccorreo], [nidestado]) VALUES (1, N'Garcia Zarate', N'Marlon', N'43501923', 2, CAST(0x27100B00 AS Date), N'943060589', N'acuario262@hotmail.com', 1)
SET IDENTITY_INSERT [dbo].[GC_Persona] OFF
/****** Object:  Table [dbo].[GC_OpcionDetalle]    Script Date: 06/08/2013 12:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[GC_OpcionDetalle](
	[nidopcdetalle] [int] IDENTITY(1,1) NOT NULL,
	[nidopcion] [int] NULL,
	[nidusuario] [int] NULL,
	[nidempdetalle] [int] NULL,
	[nestado] [int] NULL,
 CONSTRAINT [PK_GC_OpcionDetalle] PRIMARY KEY CLUSTERED 
(
	[nidopcdetalle] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[GC_OpcionDetalle] ON
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (1, 1, 1, 0, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (2, 2, 1, 0, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (3, 3, 1, 0, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (4, 4, 1, 0, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (5, 5, 1, 0, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (6, 6, 1, 0, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (7, 7, 1, 0, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (8, 8, 1, 0, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (9, 9, 1, 0, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (10, 10, 1, 0, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempdetalle], [nestado]) VALUES (11, 11, 1, 0, 1)
SET IDENTITY_INSERT [dbo].[GC_OpcionDetalle] OFF
/****** Object:  Table [dbo].[GC_Opcion]    Script Date: 06/08/2013 12:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[GC_Opcion](
	[nidopcion] [int] IDENTITY(1,1) NOT NULL,
	[copcion] [varchar](30) NULL,
	[cvalor] [int] NULL,
	[cruta] [varchar](80) NULL,
	[cvineta] [varchar](10) NULL,
	[nidtipopcion] [int] NULL,
	[nestado] [int] NULL,
 CONSTRAINT [PK_GC_Opcion] PRIMARY KEY CLUSTERED 
(
	[nidopcion] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[GC_Opcion] ON
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (1, N'Inicio', 0, N'#', N'', 7, 0)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (2, N'Mantenedores', 0, N'#', N'', 5, 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (3, N'Empresas', 2, N'manten/empresas', N'', 5, 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (4, N'Oficinas', 2, N'manten/oficinas', N'', 5, 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (5, N'Conf. del Sistema', 0, N'#', N'', 5, 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (6, N'Persona', 5, N'config/persona', N'', 5, 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (7, N'Usuario', 5, N'config/usuario', N'', 5, 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (8, N'Panel de Usuario', 0, N'#', N'', 7, 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (9, N'Ver mis datos', 8, N'panel/vermisdatos', N'', 7, 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (10, N'Cambiar clave', 8, N'panel/cambiarclave', N'', 7, 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nidtipopcion], [nestado]) VALUES (11, N'Cerrar sesión', 8, N'panel/cerrarsesion', N'', 7, 1)
SET IDENTITY_INSERT [dbo].[GC_Opcion] OFF
/****** Object:  Table [dbo].[GC_Oficina]    Script Date: 06/08/2013 12:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[GC_Oficina](
	[nidoficina] [int] IDENTITY(1,1) NOT NULL,
	[coficina] [varchar](50) NULL,
	[calias] [varchar](10) NULL,
	[nestado] [int] NULL,
 CONSTRAINT [PK_GC_Oficina] PRIMARY KEY CLUSTERED 
(
	[nidoficina] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[GC_Oficina] ON
INSERT [dbo].[GC_Oficina] ([nidoficina], [coficina], [calias], [nestado]) VALUES (1, N'Trujillo', N'TRU', 1)
INSERT [dbo].[GC_Oficina] ([nidoficina], [coficina], [calias], [nestado]) VALUES (2, N'Chiclayo', N'CHY', 1)
INSERT [dbo].[GC_Oficina] ([nidoficina], [coficina], [calias], [nestado]) VALUES (3, N'Chimbote', N'CHI', 1)
INSERT [dbo].[GC_Oficina] ([nidoficina], [coficina], [calias], [nestado]) VALUES (4, N'Piura', N'PIU', 1)
SET IDENTITY_INSERT [dbo].[GC_Oficina] OFF
/****** Object:  Table [dbo].[GC_Master]    Script Date: 06/08/2013 12:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[GC_Master](
	[nidmaster] [int] IDENTITY(1,1) NOT NULL,
	[cmaster] [varchar](50) NULL,
	[calias] [varchar](10) NULL,
	[cvalor] [int] NULL,
	[nestado] [int] NULL,
 CONSTRAINT [PK_GC_Master] PRIMARY KEY CLUSTERED 
(
	[nidmaster] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[GC_Master] ON
INSERT [dbo].[GC_Master] ([nidmaster], [cmaster], [calias], [cvalor], [nestado]) VALUES (1, N'Sexo', N'', 0, 1)
INSERT [dbo].[GC_Master] ([nidmaster], [cmaster], [calias], [cvalor], [nestado]) VALUES (2, N'Masculino', N'', 1, 1)
INSERT [dbo].[GC_Master] ([nidmaster], [cmaster], [calias], [cvalor], [nestado]) VALUES (3, N'Femenino', N'', 1, 1)
INSERT [dbo].[GC_Master] ([nidmaster], [cmaster], [calias], [cvalor], [nestado]) VALUES (4, N'Tipo Opcion', N'', 0, 1)
INSERT [dbo].[GC_Master] ([nidmaster], [cmaster], [calias], [cvalor], [nestado]) VALUES (5, N'Básica', N'', 4, 1)
INSERT [dbo].[GC_Master] ([nidmaster], [cmaster], [calias], [cvalor], [nestado]) VALUES (6, N'Avanzada', N'', 4, 1)
INSERT [dbo].[GC_Master] ([nidmaster], [cmaster], [calias], [cvalor], [nestado]) VALUES (7, N'Usuario', N'', 4, 1)
SET IDENTITY_INSERT [dbo].[GC_Master] OFF
/****** Object:  Table [dbo].[GC_EmpresasDetalle]    Script Date: 06/08/2013 12:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[GC_EmpresasDetalle](
	[nidempdetalle] [int] IDENTITY(1,1) NOT NULL,
	[nidempresa] [int] NULL,
	[nidoficina] [int] NULL,
	[nestado] [int] NULL,
 CONSTRAINT [PK_GC_Empresa_Oficina] PRIMARY KEY CLUSTERED 
(
	[nidempdetalle] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[GC_EmpresasDetalle] ON
INSERT [dbo].[GC_EmpresasDetalle] ([nidempdetalle], [nidempresa], [nidoficina], [nestado]) VALUES (1, 1, 1, 1)
INSERT [dbo].[GC_EmpresasDetalle] ([nidempdetalle], [nidempresa], [nidoficina], [nestado]) VALUES (2, 2, 1, 1)
SET IDENTITY_INSERT [dbo].[GC_EmpresasDetalle] OFF
/****** Object:  Table [dbo].[GC_Empresas]    Script Date: 06/08/2013 12:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[GC_Empresas](
	[nidempresa] [int] IDENTITY(1,1) NOT NULL,
	[cempresa] [varchar](30) NULL,
	[calias] [varchar](10) NULL,
	[nestado] [int] NULL,
 CONSTRAINT [PK_GC_Empresa] PRIMARY KEY CLUSTERED 
(
	[nidempresa] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[GC_Empresas] ON
INSERT [dbo].[GC_Empresas] ([nidempresa], [cempresa], [calias], [nestado]) VALUES (1, N'YugoCorp', N'YC', 1)
INSERT [dbo].[GC_Empresas] ([nidempresa], [cempresa], [calias], [nestado]) VALUES (2, N'YugoFrio', N'YF', 1)
INSERT [dbo].[GC_Empresas] ([nidempresa], [cempresa], [calias], [nestado]) VALUES (3, N'Grupo DN', N'GDN', 1)
SET IDENTITY_INSERT [dbo].[GC_Empresas] OFF
/****** Object:  StoredProcedure [dbo].[SP_SGC_S_Validarusuario]    Script Date: 06/08/2013 12:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[SP_SGC_S_Validarusuario]  
@accion varchar(20),  
@cusuario varchar(20),  
@contrasena varchar(50)  
as  
if (@accion='login')  
begin  
select top 1  
usu.nidusuario,usu.cusuario,per.nidpersona,per.capellidos,per.cnombres  
from GC_Usuario usu   
inner join GC_Persona per on usu.nidpersona=per.nidpersona  
where usu.cusuario=@cusuario   
and usu.ccontrasena=@contrasena   
and usu.nestado='1'  
end
GO
/****** Object:  StoredProcedure [dbo].[SP_SGC_S_Opciones]    Script Date: 06/08/2013 12:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[SP_SGC_S_Opciones]
@accion varchar(20),
@nidempdetalle int,
@nidusuario int,
@cvalor varchar(3),
@nidtipopcion int
as
if (@accion='opcpadre')
begin
select  op.nidopcion,op.copcion,op.cvalor,op.cruta,op.cvineta 
from GC_Opcion op inner join GC_OpcionDetalle opd on op.nidopcion=opd.nidopcion
where op.nestado='1' and opd.nidempdetalle=@nidempdetalle 
and opd.nidusuario=@nidusuario and op.cvalor=@cvalor and op.nidtipopcion=@nidtipopcion
end
if (@accion='opchijo')
begin
select  op.nidopcion,op.copcion,op.cvalor,op.cruta,op.cvineta 
from GC_Opcion op inner join GC_OpcionDetalle opd on op.nidopcion=opd.nidopcion
where op.nestado='1' and opd.nidempdetalle=@nidempdetalle 
and opd.nidusuario=@nidusuario and op.cvalor=@cvalor and op.nidtipopcion=@nidtipopcion
end
GO
