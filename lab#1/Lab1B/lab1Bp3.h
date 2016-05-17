//---------------------------------------------------------------------------

#ifndef lab1Bp3H
#define lab1Bp3H
//---------------------------------------------------------------------------
#include <Classes.hpp>
#include <Controls.hpp>
#include <StdCtrls.hpp>
#include <Forms.hpp>
#include <ExtCtrls.hpp>
#include "dos.h"
//---------------------------------------------------------------------------
class TForm1 : public TForm
{
__published:	// IDE-managed Components
        TLabel *Label1;
        TTimer *Timer1;
        TTimer *Timer2;
        TEdit *Edit1;
        TEdit *Edit2;
        TLabel *Label2;
        TButton *Button1;
        TButton *Button2;
        TButton *Button3;
        TButton *Button4;
        void __fastcall StartBtnClick(TObject *Sender);
        void __fastcall StopBtnClick(TObject *Sender);
        void __fastcall ResetBtnClick(TObject *Sender);
        void __fastcall ExitBtnClick(TObject *Sender);
        void __fastcall DateTimer1Timer(TObject *Sender);
        void __fastcall TimeTimer2Timer(TObject *Sender);
private:	// User declarations
        struct date date_;
        struct time time_;
        struct time timer_;

        void printTimerToEdit2() const;
public:		// User declarations
        __fastcall TForm1(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TForm1 *Form1;
//---------------------------------------------------------------------------
#endif
