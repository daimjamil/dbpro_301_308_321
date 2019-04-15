USE [DB61]
GO
/****** Object:  Table [dbo].[Admin_Login]    Script Date: 4/15/2019 1:04:37 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Admin_Login](
	[UserName] [varchar](50) NOT NULL,
	[Password] [varchar](50) NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[App_Approvement]    Script Date: 4/15/2019 1:04:38 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[App_Approvement](
	[App_ID] [int] IDENTITY(1,1) NOT NULL,
	[Loan_Type] [varchar](50) NOT NULL,
	[Approvement] [varchar](50) NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Loan_Approvement]    Script Date: 4/15/2019 1:04:38 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Loan_Approvement](
	[Loan_No] [int] IDENTITY(1,1) NOT NULL,
	[Loan_type] [varchar](50) NOT NULL,
	[Duration] [varchar](50) NOT NULL,
	[Rate] [varchar](50) NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Loan_Policy]    Script Date: 4/15/2019 1:04:38 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Loan_Policy](
	[Loan_ID] [int] IDENTITY(1,1) NOT NULL,
	[Cust_ID] [int] NOT NULL,
	[Loan_type] [varchar](50) NOT NULL,
	[Loan_Tenure] [int] NOT NULL,
	[Loan_Amount] [int] NOT NULL,
	[Interest_Type] [varchar](50) NOT NULL,
	[Interest_Rate] [float] NOT NULL,
	[IssueDate] [varchar](50) NOT NULL,
	[Guarantor_Name] [varchar](50) NOT NULL,
	[Address] [varchar](50) NOT NULL,
	[ContactNo] [varchar](50) NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[LoanApplication]    Script Date: 4/15/2019 1:04:38 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[LoanApplication](
	[App_ID] [int] IDENTITY(1,1) NOT NULL,
	[Loan_Type] [varchar](50) NOT NULL,
	[Loan_Account] [int] NOT NULL,
	[Cust_Name] [varchar](50) NOT NULL,
	[Monthly_Income] [int] NOT NULL,
	[Gender] [varchar](50) NOT NULL,
	[Age] [int] NOT NULL,
	[Address] [varchar](50) NOT NULL,
	[MobileNo] [numeric](18, 0) NOT NULL,
	[WorkPhone] [numeric](18, 0) NOT NULL,
	[Email] [varchar](50) NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Registration]    Script Date: 4/15/2019 1:04:38 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Registration](
	[Regis_ID] [int] IDENTITY(1,1) NOT NULL,
	[FullName] [varchar](50) NOT NULL,
	[UserName] [varchar](50) NOT NULL,
	[Password] [varchar](50) NOT NULL,
	[MobileNo] [numeric](18, 0) NOT NULL,
	[Email] [varchar](50) NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[User_Login]    Script Date: 4/15/2019 1:04:38 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[User_Login](
	[UserName] [varchar](50) NOT NULL,
	[Password] [varchar](50) NOT NULL
) ON [PRIMARY]
GO
