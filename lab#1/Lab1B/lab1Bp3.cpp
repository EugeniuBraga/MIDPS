//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "lab1Bp3.h"
#include <stdio.h>
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{
        //completam deodata Edit1 cu ora curenta, ca sa nu fie pauza
        char buff[20];
        getdate(&date_);
        gettime(&time_);
        sprintf(buff, "%02d-%02d-%04d  %02d:%02d:%02d",
                date_.da_day, date_.da_mon, date_.da_year,
                time_.ti_hour, time_.ti_min, time_.ti_sec);

        Edit1->Text = (AnsiString)buff;

        //setam timerul la 00:00:00
        timer_.ti_min = 0;
        timer_.ti_sec = 0;
        timer_.ti_hund = 0;

        //afisam in Edit2 00 min 00 sec 0 zec, din simpla dorinta
        printTimerToEdit2();

        //dezactivam timerul pentru inceput
        Timer2->Enabled = false;
}
//---------------------------------------------------------------------------
void __fastcall TForm1::StartBtnClick(TObject *Sender)
{
        Timer2->Enabled = true;
        Button1->Enabled = false; //butonul start
        Button3->Enabled = false; //butonul reset
}
//---------------------------------------------------------------------------
void __fastcall TForm1::StopBtnClick(TObject *Sender)
{
        Timer2->Enabled = false;
        Button1->Enabled = true;
        Button3->Enabled = true;
}
//---------------------------------------------------------------------------
void __fastcall TForm1::ResetBtnClick(TObject *Sender)
{
        //setam timerul la 00:00:00
        timer_.ti_min = 0;
        timer_.ti_sec = 0;
        timer_.ti_hund = 0;

        printTimerToEdit2();
}
//---------------------------------------------------------------------------
void __fastcall TForm1::ExitBtnClick(TObject *Sender)
{
        Close();
}
//---------------------------------------------------------------------------
void __fastcall TForm1::DateTimer1Timer(TObject *Sender)
{
        char buff[20];
        getdate(&date_);
        gettime(&time_);
        sprintf(buff, "%02d-%02d-%04d  %02d:%02d:%02d",
                date_.da_day, date_.da_mon, date_.da_year,
                time_.ti_hour, time_.ti_min, time_.ti_sec);

        Edit1->Text = (AnsiString)buff;
}
//---------------------------------------------------------------------------
void __fastcall TForm1::TimeTimer2Timer(TObject *Sender)
{
        if (++timer_.ti_hund == 10)
        {
                timer_.ti_hund = 0;
                if (++timer_.ti_sec == 60)
                {
                        timer_.ti_sec = 0;
                        if (++timer_.ti_min == 60)
                                timer_.ti_min = 0;
                }
        }
         printTimerToEdit2();
}
//---------------------------------------------------------------------------
void TForm1::printTimerToEdit2() const
{
        char buff[20];

        sprintf(buff, "%02d min %02d sec %d zec",
                timer_.ti_min, timer_.ti_sec, timer_.ti_hund);

        Edit2->Text = (AnsiString)buff;
}
//---------------------------------------------------------------------------



