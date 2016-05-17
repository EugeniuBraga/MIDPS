object Form1: TForm1
  Left = 638
  Top = 349
  Width = 366
  Height = 232
  Caption = 'Laboratorul 1 B'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Label1: TLabel
    Left = 48
    Top = 8
    Width = 202
    Height = 15
    Caption = 'Realizarea unui cronometru in C++ Builder.'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clRed
    Font.Height = -13
    Font.Name = 'Monotype Corsiva'
    Font.Style = []
    ParentFont = False
  end
  object Label2: TLabel
    Left = 128
    Top = 96
    Width = 201
    Height = 20
    Caption = 'C++ Builder CRONOMETRU'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clRed
    Font.Height = -16
    Font.Name = 'Microsoft Sans Serif'
    Font.Style = []
    ParentFont = False
  end
  object Edit1: TEdit
    Left = 176
    Top = 40
    Width = 153
    Height = 21
    TabOrder = 0
    Text = 'Edit1'
  end
  object Edit2: TEdit
    Left = 128
    Top = 128
    Width = 209
    Height = 28
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
    TabOrder = 1
    Text = 'Edit2'
  end
  object Button1: TButton
    Left = 24
    Top = 96
    Width = 75
    Height = 25
    Caption = 'Start'
    TabOrder = 2
    OnClick = StartBtnClick
  end
  object Button2: TButton
    Left = 24
    Top = 128
    Width = 75
    Height = 25
    Caption = 'Stop'
    TabOrder = 3
    OnClick = StopBtnClick
  end
  object Button3: TButton
    Left = 24
    Top = 160
    Width = 75
    Height = 25
    Caption = 'Reset'
    TabOrder = 4
    OnClick = ResetBtnClick
  end
  object Button4: TButton
    Left = 264
    Top = 168
    Width = 75
    Height = 25
    Caption = 'Exit'
    TabOrder = 5
    OnClick = ExitBtnClick
  end
  object Timer1: TTimer
    OnTimer = DateTimer1Timer
    Left = 16
    Top = 32
  end
  object Timer2: TTimer
    Interval = 100
    OnTimer = TimeTimer2Timer
    Left = 16
    Top = 64
  end
end
