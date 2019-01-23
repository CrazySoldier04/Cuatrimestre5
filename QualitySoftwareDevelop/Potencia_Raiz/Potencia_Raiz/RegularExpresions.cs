using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Text.RegularExpressions;

namespace Potencia_Raiz
{
    public class RegularExpresions
    {
        static Regex regex;

        public static bool numeros(string Num)
        {
            Regex regEx = new Regex(@"^[0-9]$");
            return regEx.IsMatch(Num);
        }
    }
}