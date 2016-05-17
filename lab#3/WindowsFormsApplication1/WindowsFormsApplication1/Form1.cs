using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;


namespace WindowsFormsApplication1
{
    public partial class Form1 : Form
    {
        Double rezultValue = 0;
        String operationPerformed = "";
        bool isOperationPerformed = false;
        bool s = true;
        public Form1()
        {
            InitializeComponent();
        }

        float num, ans;
        int count;
        public void disable()  // Creaza metoda de stingere a calculatorului
        {

            textBox1.Enabled = false;
            button1.Show();     //Arat display
            button2.Hide();     //Ascund display
            button3.Enabled = false;
            button4.Enabled = false;
            button5.Enabled = false;
            button6.Enabled = false;
            button7.Enabled = false;
            button8.Enabled = false;
            button9.Enabled = false;
            button10.Enabled = false;
            button11.Enabled = false;
            button12.Enabled = false;
            button13.Enabled = false;
            button14.Enabled = false;
            button15.Enabled = false;
            button16.Enabled = false;
            button17.Enabled = false;
            button18.Enabled = false;
            

        }

        public void enable() // Cream activarea calculatorului
        {
            textBox1.Enabled = true;
            button1.Show();     //Arat display
            button2.Hide();     //Ascund display
            button3.Enabled = true;
            button4.Enabled = true;
            button5.Enabled = true;
            button6.Enabled = true;
            button7.Enabled = true;
            button8.Enabled = true;
            button9.Enabled = true;
            button10.Enabled = true;
            button11.Enabled = true;
            button12.Enabled = true;
            button13.Enabled = true;
            button14.Enabled = true;
            button15.Enabled = true;
            button16.Enabled = true;
            button17.Enabled = true;
            button18.Enabled = true;
            
        }

        private void button13_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 7;
            textBox1.ForeColor = Color.Black;
        }

        private void button5_Click(object sender, EventArgs e)
        {
            // in text box caracterele vor fi negre
            textBox1.Text = textBox1.Text + 0;
            textBox1.ForeColor = Color.Black;
        }

        private void button8_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 1;
            textBox1.ForeColor = Color.Black;
        }

        private void button12_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 9;
            textBox1.ForeColor = Color.Black;
        }

        private void button4_Click(object sender, EventArgs e)
        {
            //In text box caracterele vor fi de culoarea neagra
            textBox1.Text = textBox1.Text + ".";
            textBox1.ForeColor = Color.Black;
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void button7_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 2;
            textBox1.ForeColor = Color.Black;
        }

        private void button6_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 3;
            textBox1.ForeColor = Color.Black;
        }

        private void button11_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 4;
            textBox1.ForeColor = Color.Black;
        }

        private void button10_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 5;
            textBox1.ForeColor = Color.Black;
        }

        private void button9_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 6;
            textBox1.ForeColor = Color.Black;
        }

        private void button14_Click(object sender, EventArgs e)
        {
            textBox1.Text = textBox1.Text + 8;
            textBox1.ForeColor = Color.Black;
        }

        private void button18_Click(object sender, EventArgs e) //OFF button
        {
            disable(); //apeleaza Disable,dizactiveaza claculatorul
        }

        private void button3_Click(object sender, EventArgs e)
        {
            num = float.Parse(textBox1.Text);
            textBox1.Clear(); //Curata Textbox
            textBox1.Focus(); //Se focuseaza in TextBox dupa ce asta a fost curatit
            count = 1;
            label1.Text = num.ToString() + "+"; // afiseaza textul pe label
        }

        private void button19_Click(object sender, EventArgs e)
        {
            enable(); //apeleaza enable() functia de activare
        }

        private void button2_Click(object sender, EventArgs e)
        {
            computer(); //apeleaza la functia compute pentru a performa unele operatii
            label1.Text = ""; // curata textul in label
        }

        private void button1_Click(object sender, EventArgs e) //Scaderea
        {
            num = float.Parse(textBox1.Text);
            textBox1.Clear();
            textBox1.Focus();
            count = 2;
            label1.Text = num.ToString() + "-";
        }

        private void button15_Click(object sender, EventArgs e) // Inmultirea
        {
            num = float.Parse(textBox1.Text);
            textBox1.Clear();
            textBox1.Focus();
            count = 3;
            label1.Text = num.ToString() + "*";
        }

        private void button16_Click(object sender, EventArgs e) //Impartirea
        {
            num = float.Parse(textBox1.Text);
            textBox1.Clear();
            textBox1.Focus();
            count = 4;
            label1.Text = num.ToString() + "/";
        }

        private void button17_Click(object sender, EventArgs e) //stergere
        {
            textBox1.Text = ""; //curata cu totul TextBox
        }

        private void button20_Click(object sender, EventArgs e)
        {
               num = float.Parse(textBox1.Text);
               textBox1.Clear();
               textBox1.Focus();
               count = 5;
               label1.Text = num.ToString() + "^";

          }

        private void button21_Click(object sender, EventArgs e)
        {

        }

        private void button21_Click_1(object sender, EventArgs e)
        {

        }

          private void button22_Click(object sender, EventArgs e)//button22_Click
          {
               num = float.Parse(textBox1.Text);
               textBox1.Clear();
               textBox1.Focus();
               count = 6;
               label1.Text = num.ToString() + "sqrt";
          }

          private void button23_Click(object sender, EventArgs e)
          {
               num = float.Parse(textBox1.Text);
               textBox1.Clear();
               textBox1.Focus();
               count = 7;
               label1.Text = num.ToString() + "+/-";
          }

          public void computer()
        {
            switch(count)
            {
                case 1:
                    ans = num + float.Parse(textBox1.Text);
                    textBox1.Text = ans.ToString();
                    break;

                case 2:
                    ans = num- float.Parse(textBox1.Text);
                    textBox1.Text = ans.ToString();
                    break;

                case 3:
                    ans = num * float.Parse(textBox1.Text);
                    textBox1.Text = ans.ToString();
                    break;

                case 4:
                    ans = num / float.Parse(textBox1.Text);
                    textBox1.Text = ans.ToString();
                    break;
                case 5:
                         //ans = float.Parse(textBox1.Text) math.powfloat.Parse(textBox1.Text);//ridicarea la putere
                         ans = (float)Math.Pow(num, 2);
                         textBox1.Text = ans.ToString();
                         break;

                    case 6:
                         //ans = float.Parse(textBox1.Text) / float.Parse(textBox1.Text);//radical
                         ans = (float)Math.Sqrt(num);
                         textBox1.Text = ans.ToString();
                         break;

                    case 7:
                         //ans = float.Parse(textBox1.Text) / float.Parse(textBox1.Text);//radical
                         if (num < 0)
                         {
                              ans = Math.Abs(num);
                         } 
                         else
                         {
                              ans = -num;
                         }
                         textBox1.Text = ans.ToString();
                         break;

               }
        }
    }
}
