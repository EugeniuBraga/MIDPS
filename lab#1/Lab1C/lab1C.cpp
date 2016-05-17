//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "lab1C.h"
#include <stdio.h>
#include <time.h>
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{
        DrawTimer->Enabled = false;
        BlackPanel->Height = WhitePanel->Height;
        StartButton->Enabled = true;
        StopButton->Enabled = false;
        srand(time(0));
}
//---------------------------------------------------------------------------

void __fastcall TForm1::ExitButtonClick(TObject *Sender)
{
        Close();        
}
//---------------------------------------------------------------------------

void __fastcall TForm1::StartButtonClick(TObject *Sender)
{
        DrawTimer->Enabled = true;
        StartButton->Enabled = false;
        StopButton->Enabled = true;
}
//---------------------------------------------------------------------------

void __fastcall TForm1::StopButtonClick(TObject *Sender)
{
        DrawTimer->Enabled = false;
        StartButton->Enabled = true;
        StopButton->Enabled = false;
}
//---------------------------------------------------------------------------

void __fastcall TForm1::DateTimerActive(TObject *Sender)
{
        char buff[20];
        getdate(&date_);
        gettime(&time_);
        sprintf(buff, "%02d-%02d-%04d  %02d:%02d:%02d",
                date_.da_day, date_.da_mon, date_.da_year,
                time_.ti_hour, time_.ti_min, time_.ti_sec);

        DateEdit->Text = (AnsiString)buff;
}
//---------------------------------------------------------------------------


void __fastcall TForm1::DrawTimerActive(TObject *Sender)
{
                PaintBox->Repaint();
                DrawBackGrid();
                ChangePanels();
                DrawStatusLines();
}
//---------------------------------------------------------------------------

void TForm1::DrawBackGrid() const
{
        PaintBox->Canvas->Pen->Color = clBlack;
        PaintBox->Canvas->Pen->Width = 1;
        PaintBox->Canvas->Pen->Style = psSolid;

        for (int x = 0; x < PaintBox->Width; x += 10)
        {
                PaintBox->Canvas->MoveTo(x, 0);
                PaintBox->Canvas->LineTo(x, PaintBox->Height);
        }

        for (int y = 0; y < PaintBox->Height; y += 10)
        {
                PaintBox->Canvas->MoveTo(0, y);
                PaintBox->Canvas->LineTo(PaintBox->Width, y);
        }
}
//---------------------------------------------------------------------------

void TForm1::ChangePanels() const
{
        BlackPanel->Height = rand()%WhitePanel->Height;
}
//---------------------------------------------------------------------------

void TForm1::DrawStatusLines() const
{
        PaintBox->Canvas->Pen->Color = clRed;
        PaintBox->Canvas->Pen->Width = 2;
        PaintBox->Canvas->Pen->Style = psSolid;

        PaintBox->Canvas->MoveTo(0, rand()%(PaintBox->Height)/2+30);
        for (int x = rand()%10+1; x < PaintBox->Width; x += rand()%10+1)
        {
                PaintBox->Canvas->LineTo(x, rand()%(PaintBox->Height)/2+30);
        }
}
//---------------------------------------------------------------------------
