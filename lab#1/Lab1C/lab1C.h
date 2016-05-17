//---------------------------------------------------------------------------

#ifndef lab1CH
#define lab1CH
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
        TTimer *DateTimer;
        TTimer *DrawTimer;
        TButton *StartButton;
        TButton *StopButton;
        TButton *ExitButton;
        TEdit *DateEdit;
        TLabel *Label1;
        TLabel *Label2;
        TPanel *WhitePanel;
        TPaintBox *PaintBox;
        TPanel *BlackPanel;
        void __fastcall ExitButtonClick(TObject *Sender);
        void __fastcall StartButtonClick(TObject *Sender);
        void __fastcall StopButtonClick(TObject *Sender);
        void __fastcall DateTimerActive(TObject *Sender);
        void __fastcall DrawTimerActive(TObject *Sender);
private:
        struct date date_;
        struct time time_;

        void DrawBackGrid() const;
        void ChangePanels() const;
        void DrawStatusLines() const;
public:		// User declarations
        __fastcall TForm1(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TForm1 *Form1;
//---------------------------------------------------------------------------
#endif
