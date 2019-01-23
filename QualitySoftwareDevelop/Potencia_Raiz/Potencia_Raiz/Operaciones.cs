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
            double res = numero;
            try
            {
                for (int i = 1; i < potencia; i++)
                {
                    res *= numero;
                }
                Console.WriteLine(res);
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error: " + ex.ToString());
            }
            return res;
        }

        public static double Raiz(int numero, int expo)
        {
            double res = 0;
            try
            {
                res = (numero ^ (1 / expo));
                Console.WriteLine(res);
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error: " + ex.ToString());
            }
            return res;
        }
    }
}