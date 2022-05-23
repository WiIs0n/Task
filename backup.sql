USE [master]
GO

CREATE DATABASE [MyTechMantra]
CONTAINMENT = PARTIAL
ON PRIMARY 
( 
NAME = N'MyTechMantra', 
FILENAME = N'F:\MSSQL\DATA\MyTechMantra.mdf', 
SIZE = 5120KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB 
), 
( 
NAME = N'MyTechMantra_Data2', 
FILENAME = N'F:\MSSQL\DATA\MyTechMantra_Data2.ndf', 
SIZE = 5120KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB 
), 
FILEGROUP [ReadOnly] 
( 
NAME = N'MyTechMantra_ReadOnly', 
FILENAME = N'F:\MSSQL\DATA\MyTechMantra_ReadOnly.ndf',
SIZE = 5120KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB 
)
LOG ON 
( 
NAME = N'MyTechMantra_log', 
FILENAME = N'F:\MSSQL\DATA\MyTechMantra_log.ldf', 
SIZE = 2048KB , MAXSIZE = 2048GB , FILEGROWTH = 10%
)
GO

BACKUP DATABASE [MyTechMantra] 
FILE = N'MyTechMantra_Data2' 
TO DISK = N'C:\DBBackups\MyTechMantra_MyTechMantra_Data2.bck' 
WITH NOFORMAT, NOINIT, COMPRESSION, STATS = 25
GO

flag{sql_backup_flag_6z80j1xg9v} 
