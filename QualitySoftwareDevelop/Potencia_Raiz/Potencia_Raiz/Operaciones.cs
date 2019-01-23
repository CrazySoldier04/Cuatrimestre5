using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Potencia_Raiz
{
    class Operaciones
    {
        public static double Potencia(double numero, int potencia)
        {
            double res = 0;
            try
            {
                for (int i = 1; i <= potencia; i++)
                {
                    res *= numero;
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error: " + ex.ToString());
            }
            return res;
        }
    }
}