USE [GeComCI]
GO
/****** Object:  User [sigecom_log]    Script Date: 06/07/2013 17:39:00 ******/
CREATE USER [sigecom_log] FOR LOGIN [sigecom_log] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  Table [dbo].[GC_Usuario]    Script Date: 06/07/2013 17:39:00 ******/
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
/****** Object:  Table [dbo].[GC_Persona]    Script Date: 06/07/2013 17:39:00 ******/
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
/****** Object:  Table [dbo].[GC_OpcionDetalle]    Script Date: 06/07/2013 17:39:00 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[GC_OpcionDetalle](
	[nidopcdetalle] [int] IDENTITY(1,1) NOT NULL,
	[nidopcion] [int] NULL,
	[nidusuario] [int] NULL,
	[nidempofic] [int] NULL,
	[nestado] [int] NULL,
 CONSTRAINT [PK_GC_OpcionDetalle] PRIMARY KEY CLUSTERED 
(
	[nidopcdetalle] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[GC_OpcionDetalle] ON
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempofic], [nestado]) VALUES (1, 1, 1, 1, 1)
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempofic], [nestado]) VALUES (2, 1, 1, 2, 1)
SET IDENTITY_INSERT [dbo].[GC_OpcionDetalle] OFF
/****** Object:  Table [dbo].[GC_Opcion]    Script Date: 06/07/2013 17:39:00 ******/
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
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (1, N'Inicio', 0, N'#', N'', 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (2, N'Mantenedores', 0, N'#', N'', 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (3, N'Sucursal', 2, N'intranet/mant/sucursal', N'', 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (4, N'Empresa', 2, N'intranet/mant/empresa', N'', 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (5, N'Conf. del Sistema', 0, N'#', N'', 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (6, N'Persona', 5, N'intranet/conf/persona', N'', 1)
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (7, N'Usuario', 5, N'intranet/conf/usuario', N'', 1)
SET IDENTITY_INSERT [dbo].[GC_Opcion] OFF
/****** Object:  Table [dbo].[GC_Oficina]    Script Date: 06/07/2013 17:39:00 ******/
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
/****** Object:  Table [dbo].[GC_Empresas]    Script Date: 06/07/2013 17:39:00 ******/
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
/****** Object:  Table [dbo].[GC_Empresa_Oficina]    Script Date: 06/07/2013 17:39:00 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[GC_Empresa_Oficina](
	[nidempofic] [int] IDENTITY(1,1) NOT NULL,
	[nidempresa] [int] NULL,
	[nidoficina] [int] NULL,
	[nestado] [int] NULL,
 CONSTRAINT [PK_GC_Empresa_Oficina] PRIMARY KEY CLUSTERED 
(
	[nidempofic] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[GC_Empresa_Oficina] ON
INSERT [dbo].[GC_Empresa_Oficina] ([nidempofic], [nidempresa], [nidoficina], [nestado]) VALUES (1, 1, 1, 1)
INSERT [dbo].[GC_Empresa_Oficina] ([nidempofic], [nidempresa], [nidoficina], [nestado]) VALUES (2, 2, 1, 1)
SET IDENTITY_INSERT [dbo].[GC_Empresa_Oficina] OFF
/****** Object:  StoredProcedure [dbo].[SP_SGC_S_Validarusuario]    Script Date: 06/07/2013 17:38:59 ******/
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
