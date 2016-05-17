//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "lab1A.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;  
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
        : TForm(Owner)
{                       
        Edit1->Text = 1;
}

void __fastcall TForm1::Button3Click(TObject *Sender)
{
          Close();
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button1Click(TObject *Sender)
{
        //Transformam textul din Edit1 in integer, iar daca
        //acesta nu-i numar, atunci va fi returnat 0
        int i = Edit1->Text.ToIntDef(0);
        Edit1->Text = ++i;
        Label2->Caption = "i a fost incrementat";
}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button2Click(TObject *Sender)
{
        int i = Edit1->Text.ToIntDef(0);
        Edit1->Text = --i;
        Label2->Caption = "i a fost decrementat";
}
//---------------------------------------------------------------------------
