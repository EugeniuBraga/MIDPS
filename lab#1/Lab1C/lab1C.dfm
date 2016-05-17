object Form1: TForm1
  Left = 100
  Top = 100
  Width = 545
  Height = 410
  Caption = 'Laboratorul 1 C'
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
    Left = 312
    Top = 16
    Width = 135
    Height = 20
    Caption = 'Data si ora curenta'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
  end
  object Label2: TLabel
    Left = 64
    Top = 88
    Width = 445
    Height = 20
    Caption = 'Lucrarea Nr. 3 Resurse grafice ale mediului C++ Builder'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'MS Sans Serif'
    Font.Style = [fsBold]
    ParentFont = False
  end
  object PaintBox: TPaintBox
    Left = 256
    Top = 128
    Width = 265
    Height = 217
  end
  object StartButton: TButton
    Left = 72
    Top = 184
    Width = 89
    Height = 25
    Caption = '&Start'
    TabOrder = 0
    OnClick = StartButtonClick
  end
  object StopButton: TButton
    Left = 72
    Top = 224
    Width = 89
    Height = 25
    Caption = '&Stop'
    TabOrder = 1
    OnClick = StopButtonClick
  end
  object ExitButton: TButton
    Left = 72
    Top = 264
    Width = 89
    Height = 25
    Caption = '&Exit'
    TabOrder = 2
    OnClick = ExitButtonClick
  end
  object DateEdit: TEdit
    Left = 312
    Top = 40
    Width = 161
    Height = 21
    TabOrder = 3
  end
  object WhitePanel: TPanel
    Left = 200
    Top = 128
    Width = 41
    Height = 217
    Color = clCream
    TabOrder = 4
  end
  object BlackPanel: TPanel
    Left = 200
    Top = 128
    Width = 41
    Height = 121
    Color = clBlack
    TabOrder = 5
  end
  object DateTimer: TTimer
    OnTimer = DateTimerActive
    Left = 32
    Top = 48
  end
  object DrawTimer: TTimer
    Interval = 500
    OnTimer = DrawTimerActive
    Left = 32
    Top = 88
  end
end
